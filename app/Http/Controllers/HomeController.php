<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\VisitationAudit;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      (new VisitationAuditController())->trackRequests($req->ip(), $req->fullUrl(), "home");
      // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('home', [
	      'userdata'=> null,		
		  ]);
    }
}
