<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

use App\Helpers\Helper;
use App\Products;
use App\Category;
use App\VisitationAudit;

class ProductsController extends Controller
{
    function __construct(Request $req){
        (new VisitationAuditController())->trackRequests($req->ip(), $req->fullUrl(), "products"); // track clients history, accecing pages
    }
    
    public function index($cat_id)
    {
        $resultsCategory = Category::find($cat_id);
        return view('category.listShow', [
            'products' => $resultsCategory->products()->paginate(2),
            'category' => $resultsCategory
        ]);
    }

    public function details($prod_id, Request $req){
        // dd($req);
        return view('products.show', [
            'product' => Products::find($prod_id),
        ]);
    }

    public function create($cat_id){
        return view('products.create', [
            'category' => Category::find($cat_id)
        ]);
    }

    public function store(Request $request, Storage $storage)
    {
        $cat_id = $request->input('category_id');
        $post_data = $request->validate([
            'name' => ['required', 
            Rule::unique('products')->where(function ($query) use ($cat_id) { // igore products that do not have the same category 
                $query->where('category_id', $cat_id);
            }),
            'max:191'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'description' => 'max:191'
        ]);
        $post_data['image'] = ($request->hasFile('image')? Helper::ImagePathStorage('products', 'image', $storage, $request, null): '');
        $post_data['update_by'] = (Auth::check()? Auth::user()->name : 'System');  
        Products::create($post_data); 
        return redirect(route('category.listShow', ['cat_id' => $request->input('category_id')]))->send(); // nota trebuie sa ai definit ->name('products.index'); in web.php
    }

    public function destroy($prod_id)
    {
        $product = Products::find($prod_id);
        $product->update(['update_by' => (Auth::check()? Auth::user()->name : 'Guest')]);
        $product->delete();
        return redirect(route('category.listShow', [
            'cat_id' => $product['category_id']
        ]))->send();
    }

    public function edit($cat_id, $prod_id){
        return view('products.edit', [
            'category' => Category::find($cat_id),
            'product' => Products::find($prod_id)
        ]);
    }

    public function update(Request $request, Products $prod, Storage $storage){
        $prod_id = $request->input('prod_id');
        $cat_id = $request->input('category_id');
        $post_data = $request->validate([
            'name' => [
                'required', 
                'max:191', 
                 Rule::unique('products')->ignore($prod_id, 'prod_id')->where(function ($query) use ($cat_id) { // igore products that do not have the same category also ignore this product id
                    $query->where('category_id', $cat_id);
                })
            ],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category_id' => 'required',
            'description' => 'max:191'
        ]);
        $post_data['image'] = ($request->hasFile('image')? Helper::ImagePathStorage('products', 'image', $storage, $request, null): '');
        $post_data['update_by'] = (Auth::check()? Auth::user()->name : 'System'); 
        $prod->where('prod_id', $prod_id)->update($post_data); 
        return redirect()->action('CategoryController@listShow', [
            'category_id' => ($request->input('category_id') ? $request->input('category_id') : $request->input('cat_id'))
            
        ]);
    }

}
