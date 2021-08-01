<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
use App\Models\CartItem;
use Auth;

class HomeController extends Controller
{
    private $perpage = 50;
    public function index(){
        return view('home');
    }
    public function product_list(Request $request){
        $records   = new Products;
        $records            = $records->paginate($this->perpage);
        $records->appends($request->all())->links();
        $links = $records->links();
        $records = $records->toArray();
        $records['pagination'] = $links;
        $data['list']   =   $records;
        $data['categories'] = Categories::all()->toArray();
        return view('shop',$data);
    }
    public function product_details($id){
        $data['row'] = Products::where('id',$id)->get()->first()->toArray();
        return view('product_details', $data);
    }
}
