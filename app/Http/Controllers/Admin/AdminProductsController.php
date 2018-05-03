<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use DB;
class AdminProductsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at','desc')->get();

        return view('admin.products.index_product')->with('products',$products)->paginate(10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all('name');
        return view('admin.products.add_new_product')->with('categories',$category);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'name' => 'required',
            
            'details' => 'required',
            
            //'description' => 'required',
            'product_image' => 'image|nullable|max:1999',
            'price' => 'required'
            

        ]);

        if($request->hasFile('product_image')){
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();

            $fileName = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('product_image')->storeAs('public/product_images',$fileNameToStore);
        }
        else {
            $fileNameToStore = 'defimage.jpg';
        }

        $categoryID = Category::where('name','=',$request->input('category_name'))->first();
        
        $product = new Product;
        $product->name = $request->input('name');
        $product->details = $request->input('details');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->products_picture = $fileNameToStore;
        $product->category_id = $categoryID->id;  
        $product->save();

        return redirect('/admin')->with('success','New product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('admin.products.view_single_product')->with('product',$product);
    }


    /**
     * Display all resources.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
        $products = Product::orderBy('created_at','desc')->simplePaginate(6);
        return view('admin.products.view_product')->with('products',$products);//->paginate(6);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all('name');
        return view('admin.products.edit_product')->with('product',$product)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            
            'details' => 'required',
            
            //'description' => 'required',
            'product_image' => 'image|nullable|max:1999',
            'price' => 'required'
        ]);


         $product = Product::find($id);

        if($request->hasFile('product_image')){
            $filenameWithExt = $request->file('product_image')->getClientOriginalName();

            $fileName = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            $extension = $request->file('product_image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            $path = $request->file('product_image')->storeAs('public/product_images',$fileNameToStore);
        }
        else {
            $fileNameToStore = $product->products_picture;
        }

       
        $categoryID = Category::where('name','=',$request->input('category_name'))->first();

        $product->name = $request->input('name');
        $product->details = $request->input('details');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->products_picture = $fileNameToStore;
        $product->category_id = $categoryID->id;  
        $product->save();
        return redirect('/admin/all_products')->with('success','Product updated');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/admin/all_products');
    }
}
