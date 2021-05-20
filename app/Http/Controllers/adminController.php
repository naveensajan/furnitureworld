<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\userModel;
/*use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;*/
use Illuminate\Support\Facades\Hash;
use Validator;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlogin');
    }
    public function  indexhome()
    {
        return view(' indexhome');
    }
 
    public function contactus()
    {
        return view('contactus');
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usearch(Request $request)
    {
        $getpname=request('uname');
        $user=userModel::query()
        ->where('uname','LIKE',"%{$getpname}%")
        ->get();
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('userview',compact('user'), $data);
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
            'username' => 'unique:App\Models\AdminModel,username',
            'password' => 'min:5',
            'confirmpass' => 'same:password'
        ]);
        $getusername=request('username');
        $getpassword=request('password');
        $confirmpass=request('confirmpass');

        $user=new AdminModel();
        $user->username=$getusername;
        $user->password=Hash::make($request->password);
        $user->confirmpass=$confirmpass;

        $user->save();

        if($user)
        {
            return back()->with('success','New admin has been successfuly added to database');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }

    }
    public function check(Request $request)
    {
        $userInfo =AdminModel::where('username','=',$request->usname)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->password , $userInfo->password))
            {
                $request-> session()->put('loggeduser', $userInfo->id);
           
                return redirect('adminhome');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
   }
 }

 public function logout()
    {
        if(session()->has('loggeduser'))
        {
            session()->pull('loggeduser');
            return redirect('/adminlogin');
        }

    }
 public function create()
 {
     /*$user=AdminModel::all();

     return view('adminhome',compact('user'));*/
  
     $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
     return view('adminhome',$data);
     
 }
 public function usrview()
 {
     $user=userModel::all();
     $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
     return view('userview',compact('user'), $data);
 }
 public function addadn()
    {
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('addadmin', $data);
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
