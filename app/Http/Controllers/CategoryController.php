<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

use App\Category;
use App\Products;
use App\VisitationAudit;
use App\Helpers\Helper;
use App\Http\Controllers\VisitationAuditController;


class CategoryController extends Controller
{

    function __construct(Request $req){
        (new VisitationAuditController())->trackRequests($req->ip(), $req->fullUrl(), "category");
    }

    public function index(Request $request)
    {  
        // $items = Category::all();
        $items = Category::paginate(5);
        // $items = DB::select(DB::raw('SELECT * FROM category;'));
        foreach($items as $item){
            $product_count = Products::select('prod_id')
                ->where('products.category_id', $item->cat_id)
                ->get()
                ->count();
            // dd($product_count);
            $item->count_products = $product_count;
            // dd($item);
            // $items->put('products', 'new');
        }

        // $products = Category::select('*')
        //             ->join('products', 'products.cat_id', '=', 'category.cat_id');
        //             // ->where('countries.country_name', $country) // daca am nevoie de "" where clause ""

                    
        // chart demo

        // // $dates = [];
        // $cats = Category::all()->map(function ($category) {
        //     // return $category->created_at;
        //     return date('Y-m-d',strtotime($category->created_at));
        // })->toArray(); // map is a form of foreach

        // foreach ($items as $date) {
        //     $dates.push();
        // }
        $date_interval = [];
        $cat_intries = [];
        $cats = DB::select(DB::raw("SELECT DATE(created_at) date_entry, COUNT(DISTINCT cat_id) totalCOunt FROM category GROUP BY DATE(created_at)"));
        foreach($cats as $cat){
            array_push($date_interval, $cat->date_entry);
            array_push($cat_intries, $cat->totalCOunt);
        }
        // dd($date_interval, $cat_intries);

        $chart1 = \Chart::title([
            'text' => 'The category creation chart.',
        ])
        ->chart([
            'type'     => 'line', // pie , columnt ect
            'renderTo' => 'chart1', // render the chart into your div with id
        ])
        // ->subtitle([
        //     'text' => 'This Subtitle',
        // ])
        ->colors([
            '#0c2959'
        ])
        ->xaxis([
            'categories' => $date_interval,
            'labels'     => [
                'rotation'  => 15,
                'align'     => 'top',
                // 'formatter' => 'startJs:function(){return this.value + " (Footbal Player)"}:endJs', 
                // use 'startJs:yourjavasscripthere:endJs'
            ],
        ])
        ->yaxis([
            'text' => 'This Y Axis',
        ])
        // ->legend([
        //     'layout'        => 'vertikal',
        //     'align'         => 'right',
        //     'verticalAlign' => 'middle',
        // ])
        ->legend(['enabled'=>false]) 
        ->series(
            [
                [
                    'name'  => 'Nr. of categories added',
                    // 'data'  => [43934, 52503, 57177, 69658],
                    'data'  =>  $cat_intries,
                    'color' => '#0c2959',
                ],
            ]
        )
        ->exporting_js(false)
        ->display();
        // chart demo finish
        // $time = strtotime('10/16/2003');

        // $newformat = date('Y-m-d H:m:s',strtotime('10/16/2003'));
        
        // dd($newformat);
        // dd($leagues->toSql()); // trebuie sa fie fara get() sa mearge asta
        // dd($products->get()); // returneaza o colectie de rezultate
        return view('category.index', [
            // 'categories' => Category::paginate(5), // asa se returneaza toate resultatele din db pt tabela categories
            'categories' => $items,
            'chart' => $chart1
        ]);  
    } 

    public function listShow($cat_id)
    {
        $date_interval = [];
        $cats = VisitationAudit::where('page_type', 'products')->whereNotNull('page_id')->where('link_page', 'not like', '%category%')->get();

        foreach($cats as $cat){
            array_push($date_interval, ['name' => 'Prod name: '.Products::find($cat->page_id)->name, 'y' => $cat->count]);
        }

        $chart1 = \Chart::title([
            'text' => 'Most visitated products chart.',
        ])
        ->chart([
            'type'     => 'pie', // pie , columnt ect
            'renderTo' => 'chart1', // render the chart into your div with id
        ])
        ->plotOptions(
            ['pie' => [
                'allowPointSelect'=> true,
                'cursor'=> 'pointer',
                'dataLabels' => [
                    'enabled' => true,
                    'format' => '<b>{point.name}</b>: {point.percentage:.1f} %'
                ]
            ]
        ])
        ->legend(['enabled'=>false]) 
        ->series(
            [
                [
                    'name'  => 'Nr. of visitation per page',
                    'colorByPoint' => true,
                    'data'  =>  $date_interval,
                ],
            ]
        )
        ->exporting_js(false)
        ->display();

        $resultsCategory = Category::find($cat_id);
        return view('category.listShow', [
            'products' => $resultsCategory->products()->paginate(6),
            'category' => $resultsCategory,
            'chart'    => $chart1
        ]);
    }


    public function create(Auth $user_loging)
    {
        // $check_login = $this->checkLogin($user_loging);
        // if ($check_login)
        // {
        //    return $check_login;
        // }
        return view('category.create');
    }

    public function store(Request $request, Storage $storage)
    { 
        $post_data = request()->validate([
            // 'name' => 'required|unique:posts', // se poate scrie si asa
            'name' => ['required', 'unique:category', 'max:191'],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'max:191',
        ]);
        $post_data['image'] = ($request->hasFile('image')? Helper::ImagePathStorage('categories', 'image', $storage, $request, null): '');
        // v1
        // nu trimit cu submit un field si il adaug in controller direct, cele 2 lini de jos sunt pt-ca nu am reusit o legatura cu user model
        $post_data['update_by'] = (Auth::check()? Auth::user()->name : 'System');
        
        // metoda de insert in baza de date
        Category::create($post_data); 

        // o alta versiune de insert in DB
        
        // v2
        // Category::create([
        //     'name' => $post_data['name'],
        //     'description' => $post_data['description'],
        //     'update_by' => ($user_data? $user_data->name : 'System')
        // ]);
        
        // redirectul catre un view/pagina pe care o doresc eu
        // return redirect()->action('CategoryController@index');
        return redirect(route('category.index'))->send();
        // return view('category.index', [
        //     // 'categories' => Category::all(),
        //     'categories' => Category::paginate(5),
        // ]);
    }

    public function edit($id_cat, Auth $user_loging)
    {
        // $cat = Category::find($id_cat);
        // dd($cat);
        // return view('category.edit', compact(Category::find($id_cat)));
        $check_login = $this->checkLogin($user_loging);
        if ($check_login)
        {
           return $check_login;
        }
        return view('category.edit', [
            'category'=>Category::find($id_cat)
        ]);
    }

   // public function update() // si asa merge 
    public function update(Request $request, Category $cat, Storage $storage)
    {
        $cat_id = $request->input('cat_id');
        //$post_data = request()->validate( // merge si asa
        $post_data = $request->validate([
            // 'name' => 'required|unique:posts', // se poate scrie si asa
            /// Rule::unique('products')->ignore($product->prod_id, 'cat_id') /// seteaza unique value dar nu pentru acesta categorie pt restul
            'name' => ['required', 'max:191', Rule::unique('category')->ignore($cat_id, 'cat_id')],
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'max:191'
        ]);
        // dd($cat);
        $category = $cat->where('cat_id', $cat_id);
        $dbName = $category->get()[0]->image;
        $post_data['image'] = ($request->hasFile('image')? Helper::ImagePathStorage('categories', 'image', $storage, $request, $dbName): '');
        $post_data['update_by'] = (Auth::check()? Auth::user()->name : 'System'); 
        $category->update($post_data);

        return redirect()->action('CategoryController@index');

        // return view('category.index', [
        //     // 'categories' => Category::all(),
        //     'categories' => Category::paginate(5),
        // ]);
    }

    public function destroy($cat_id, Auth $user_loging, Category $category)
    {
        $check_login = $this->checkLogin($user_loging);
        if ($check_login)
        {
           return $check_login;
        }

        $category = Category::find($cat_id);
        foreach($category->products as $product){
            $product->delete(); // remove linked products to the category
        }
        $category->update(['update_by' => (Auth::check()? Auth::user()->name : 'Guest')]);
        $category->delete();
        // $category->products()->delete();
        // Category::where('cat_id', $cat_id)->delete();

        // return redirect()->action('CategoryController@index');
        return redirect(route('category.index'))->send();
        // return view('category.index', [
        //     // 'categories' => Category::all(),
        //     'categories' => Category::paginate(5),
        // ]);
    }

    private function checkLogin($user_loging)
    {
        // if (!$user_loging::check())
        // {
        //     return Redirect::back()->withErrors("Please login/register in order to make to access this page.");
        // } 
        return null;
    }
}
