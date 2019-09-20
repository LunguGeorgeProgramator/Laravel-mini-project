<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use Spatie\Regex\Regex;
use App\VisitationAudit;
use Illuminate\Support\ServiceProvider;

class VisitationAuditController extends Controller
{
    public function trackRequests($req_ip, $urlPage, $pageType)
    {
        if(strlen($urlPage) > 191)
            return;
        // dd(Auth::check());
        // dd((Auth::check()? Auth::user()->email : 'Guest'));
        $idFound = "";
        $matchUrl = Regex::match('%(?:'.$pageType.')/(\w+)(?:/|$)%i', $urlPage);
        if ($matchUrl->hasMatch()){
            $idFound = $matchUrl->group(1);
        }
        $visitations = VisitationAudit::where('page_id', '=', $idFound)->Where('link_page', '=', $urlPage)->first();
        // $req_ip =(string) "dasd1 1 ";

        $db_ip = (string) $visitations['ip_address'];
        $match_ip = Regex::match('/'.(string) $req_ip.'/', $db_ip)->hasMatch();
        if($match_ip == false){
            $db_ip = (string) $db_ip.", ".(string) $req_ip;
        }
        if($visitations){
            $visitations->update([
                'count' => $visitations['count']+1, 
                'user_email' => (Auth::check()? Auth::user()->email : 'Guest'),
                'ip_address'=> $db_ip
                ]);
        }else{
            VisitationAudit::create([
                'page_type' => $pageType,
                'page_id' => $idFound,
                'link_page' => $urlPage,
                'count' => 1,
                'user_email' => (Auth::check()? Auth::user()->email : 'Guest'),
                'ip_address' => $req_ip
            ]);
        }
    }    
}
