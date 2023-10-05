<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Str;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function add_product(){
        $cate_product = Category::orderBy('id','desc')->get();
        $brand_product = Brand::orderBy('id','desc')->get();
        return view("backend.dashboard.product.add_product")->with('cate_product',$cate_product)->with('brand_product',$brand_product);
    }

    public function save_product(Request $request){
        $data = array();
        $data['name'] = $request->product_name; // brand_name là tên cột, còn brand_product_name là tên trong form
        $data['price'] = $request->product_price;
        $data['detail'] = $request->product_detail;
        $data['description'] = $request->product_desc;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['status'] = $request->product_status;
        $data['slug'] = Str::slug($request->product_name);
        $data['created_by'] = 1;
        $data['update_by'] = null;
        $get_image = $request->file('product_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product',$new_image);
            $data['image'] = $new_image;
            Product::create($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('admin/add-product');
        }
        $data['image'] = '';

        Product::create($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('admin/add-product');
    }
}
