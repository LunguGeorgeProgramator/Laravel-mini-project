<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\VisitationAudit;
use App\Products;
use App\Category;

class WelcomeController extends Controller
{
	function __construct(Request $req){
		(new VisitationAuditController())->trackRequests($req->ip(), $req->fullUrl(), "welcome");
	} 
	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('welcome', [
			'userdata' => (Auth::check()? Auth::user() : null)
		]);
	}

	public function search(Request $req){
		$query = $req->input('query');
		$type = $req->input('type');
		if($type == 'categories')
			$results = Category::select(DB::raw('cat_id as id, name, description, image, "category.listShow" as route_link'))
								->where('name', 'like', '%'.$query.'%')
								->paginate(2);
		if($type == 'products')
			$results = Products::select(DB::raw('prod_id as id, name, description, image, "products.show" as route_link'))
								->where('name', 'like', '%'.$query.'%')
								->paginate(2);
		$results->withPath('?query='.$query.'&type='.$type);
		return view('search', [
			'active' => ($type == 'products'? $type : 'categories'),
			'results' => $results
		]);
	}
}
