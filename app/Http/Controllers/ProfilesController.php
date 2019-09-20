<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Products;
use App\VisitationAudit;

// use App\User;
use Freshbitsweb\Laratables\Laratables;

class ProfilesController extends Controller
{
    function __construct(Request $req){ 
        // if(strpos($req->fullUrl(),'profiles') == false)
            (new VisitationAuditController())->trackRequests($req->ip(), $req->fullUrl(), "profile");
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        // versiunea lunga 
        // return view('profiles.index', [
        //     'user'=> User::find($user),	
        // ]);
        // versiunea scurta
        return view('profiles.index', compact('user')); // metoda asata creaza o variabila in view file numita user ca si mai sus
    }

    /**
     * return data of the simple datatables.
     *
     * @return Json
     */
    public function showDataRecords()
    {
        return Laratables::recordsOf(User::class);
    }
}
