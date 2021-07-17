<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorymodel;
use App\Models\productmodel;
use App\Models\AdminModel;
use App\Models\userModel;
use App\Models\cartmodel;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Session;
use Validator;


class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function card()
    {
        return view('card');
        
    }

    public function cartadd($FurnitureId)
    {
        $row=DB::table('productmodels')->where('FurnitureId',$FurnitureId)->first();
        $items=['info'=>$row];
        return view('cartview',compact('items'));
    }

    public function search(Request $request)
    {
        $getpname=request('FurnitureCategory');
        $prod=productmodel::query()
        ->where('FurnitureCategory','LIKE',"%{$getpname}%")
        ->get();
        $data=['LoggedUserinfo'=>userModel::where('id','=',session('loggeduser'))->first()];
        return view('allproducts',compact('prod'), $data);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'CategoryId' => 'unique:App\Models\categorymodel,CategoryId',
            'CategoryName' => 'unique:App\Models\categorymodel,CategoryName',
        ]); 

        $getcid=request('CategoryId');
        $getcname=request('CategoryName');

        $cat=new categorymodel();
        $cat->CategoryId = $getcid;
        $cat->CategoryName=$getcname;

        $cat->save();

        if($cat)
        {
            return back()->with('success','New Category has been successfuly added');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }
    }
    public function productview(Request $request)
    {
        $this->validate($request,[
            'FurnitureId' => 'unique:App\Models\productmodel,FurnitureId',
            'FurniturePrice' => 'required|integer'
        ]); 

        $getFurnitureCategory=request('FurnitureCategory');
        $getFurnitureId=request('FurnitureId');
        $getFurnitureName=request('FurnitureName');
        $getFurniturePrice=request('FurniturePrice');
        $getFurnitureDescription=request('FurnitureDescription');
        
        $getpimage=$request->file('pimage');
        $name=$getpimage->getClientOriginalName();
        $getpimage->move(public_path('assets/project_img'),$name);

        $prod=new productmodel();
        $prod->FurnitureCategory = $getFurnitureCategory;
        $prod->FurnitureId=$getFurnitureId;
        $prod->FurnitureName=$getFurnitureName;
        $prod->FurniturePrice=$getFurniturePrice;
        $prod->FurnitureDescription=$getFurnitureDescription;
        $prod->pimage=$name;

        $prod->save();

        if($prod)
        {
            return back()->with('success','New Furniture has been successfuly added');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }
    }
    
    public function catview()
    {
        $cat=categorymodel::all();
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('addcategory',compact('cat'), $data);
    }
    public function prodview()
    { 
        $prod=productmodel::all();
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('productview',compact('prod'), $data);
        
    }
    public function vieworders()
    { 
        $prod=order::all();
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('vieworders',compact('prod'), $data);
        
    }
    public function create()
    { 
        $cat=categorymodel::all();
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('addproduct',compact('cat'), $data);
        
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function addtocart(Request $request)
    {

         $cartmodels=new cartmodel();
            $cartmodels->usname=session('loggeduser');//$request->session()->get('newmodel')['id'];
            $cartmodels->FurnitureId=$request->FurnitureId;
            $cartmodels->save();
            if($cartmodels)
            {
                
                return redirect('/allproducts')->with('success','Successfuly added to cart');
            }
        else
        {
            return redirect('/allproducts')->with('fail','Something wrong,try again later');
        }
}
    public function cartview()
{
    $cats=cartmodel::all();
    return view('cartview',compact('cats'));
}


public function cartlist()
{
    $products=productmodel::all();
    $userId=Session::get('loggeduser');
    $products= DB::table('cartmodels')
    ->join('productmodels', 'cartmodels.FurnitureId', '=', 'productmodels.id')
    ->where('cartmodels.usname', $userId)
    ->select('productmodels.*','cartmodels.id as cart_id')
    ->get();
    $data=['LoggedUserinfo'=>userModel::where('id','=',session('loggeduser'))->first()];
     return view('cartlist', compact('products'), $data);
}
public function removecart($id)
{
    cartmodel::destroy($id);

    return redirect('/cartlist');
}

public function ordernow()
{
    $products=productmodel::all();
    $userId=Session::get('loggeduser');
    $total= $products= DB::table('cartmodels')
    ->join('productmodels', 'cartmodels.FurnitureId', '=', 'productmodels.id')
    ->where('cartmodels.usname', $userId)
    ->sum('productmodels.FurniturePrice');
     return view('ordernow', ['total'=>$total]);
}
    function orderplace(Request $req)
{
    $userId= Session::get('loggeduser');
    $allCart=cartmodel::where('usname', $userId)->get();
    foreach($allCart as $cart)
  {
    $order= new order;
    $order->FurnitureId=$cart['FurnitureId'];
    $order->userid=$cart['usname']; 
    $order->address=$req->address;
    $order->status="pending";
    $order->paymentmethod=$req->payment; 
    $order->paymentstatus="pending";
    $order->save();
  } 
      cartmodel::where('usname', $userId)->delete();
      if($req->payment=='cod')
      {
        return redirect('/userhome')->with('success','Thank you for your order');
      }
      else 
      { 
         return redirect('/card');

      }
     
}

public function myorder()
{
    //$products=productmodel::all();
    $userId=Session::get('loggeduser');
    $orders= DB::table('orders')
    
    ->join('productmodels', 'orders.FurnitureId', '=', 'productmodels.id')
    ->where('orders.userid', $userId)
  
    ->get();
  
    $data=['LoggedUserinfo'=>userModel::where('id','=',session('loggeduser'))->first()];
     return view('myorders',$data, ['orders'=>$orders]);
}
   public function cancelorder($id,$uid)
    {
        DB::table('orders')
        ->where('FurnitureId',$id)
        ->where('userid',$uid)
        ->delete();
        return redirect('/myorders');
    }

       public function edit($id)
    {
        $prod=productmodel::find($id);
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('editproduct',compact('prod'), $data);
    }

    public function update(Request $request, $id)
    {
        $prod=productmodel::find($id);

        $getFurnitureCategory=request('FurnitureCategory');
        $getFurnitureId=request('FurnitureId');
        $getFurnitureName=request('FurnitureName');
        $getFurniturePrice=request('FurniturePrice');
        $getFurnitureDescription=request('FurnitureDescription');
       
        if($request->hasfile('pimage'))
        {
            $file = $request->file('pimage');
            $extension = $file->getClientOriginalextension();
            $file->move(public_path('assets/project_img'),$extension);
            $prod->pimage=$extension;
        }

        $prod->FurnitureCategory = $getFurnitureCategory;
        $prod->FurnitureId=$getFurnitureId;
        $prod->FurnitureName=$getFurnitureName;
        $prod->FurniturePrice=$getFurniturePrice;
        $prod->FurnitureDescription=$getFurnitureDescription;
        

        $prod->save();


        return redirect('/productview');
        
    }


    public function  catdelete($id)
    {
        $catdel=categorymodel::find($id);
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('deletecatview',compact('catdel'), $data);
    }
    public function destroycat($id)
    {
        $cat=categorymodel::find($id);

        $cat->delete();

        return redirect('/addcategory');
    }
    public function orderdelete($id)
    {
        $orderdel=order::find($id);
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('orderdelete',compact('orderdel'), $data);

    }

    public function destroyorder($id)
    {
        $prod=order::find($id);

        $prod->delete();

        return redirect('/vieworders');
    }
    public function orderedit($id)
    {
        $prod=order::find($id);
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('editorder',compact('prod'), $data);
    }
    public function updateorder(Request $request, $id)
    {
        $prod=order::find($id);

     
        $getstatus=request('status');

        $prod->status = $getstatus;
        

        $prod->save();


        return redirect('/vieworders');
        
    }

    public function proddelete($id)
    {
        $proddel=productmodel::find($id);
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('productdelete',compact('proddel'), $data);

    }
    public function destroy($id)
    {
        $prod=productmodel::find($id);

        $prod->delete();

        return redirect('/productview');
    }
}
