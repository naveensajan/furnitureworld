<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;
use App\Models\AdminModel;
use App\Models\productmodel;
use Illuminate\Support\Facades\Hash;
use Validator;
/*use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;*/

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /* $user=userModel::all();

         return view('userview',compact('user')); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usersignup');
        
    }
  
    public function usrlogin()
    {
      
        return view('userlogin');
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
            'uname' => 'unique:App\Models\userModel,uname',
            'usname' => 'unique:App\Models\userModel,usname',
            'uemail' => 'unique:App\Models\userModel,uemail',
            'usmob' => 'digits:10|unique:App\Models\userModel,usmob',
            'upass' => 'min:5',
            'ucpass' => 'same:upass'
        ]);

        $getuname=request('uname');
        $getusname=request('usname');
        $getuadd=request('uadd');
        $getuemail=request('uemail');
        $getusmob=request('usmob');
        $getugend=request('ugend');
        $getupass=request('upass');
        $getucpass=request('ucpass');

        
        echo "<br>";
        echo $getuname;
        echo "<br>";
        echo  $getusname;
        echo "<br>";
        echo $getuemail;
        echo "<br>";
        echo $getusmob;
        echo "<br>";
        echo $getugend;
        echo "<br>";
        echo $getupass;
        echo "<br>";
        echo  $getucpass;
        echo "<br>";

        $user=new userModel();
        $user->uname=$getuname;
        $user->usname=$getusname;
        $user->uadd=$getuadd;
        $user->uemail= $getuemail;
        $user->usmob=$getusmob;
        $user->ugend= $getugend;
        $user->upass=Hash::make($request->upass);
        $user->ucpass=$getucpass;

        $user->save();
    
    if($user)
        {
            return back()->with('success','You have registered successfully.');
        }
        else
        {
            return back()->with('fail','Something wrong,try again later');
        }


    }
    public function check(Request $request)
{
        /* $getusname=$request -> input('usname');
        $getupass=$request -> input('upass');
        $data = DB::select('select id from user_models where usname=? and upass=?',[$getusname,$getupass]);

        if(count($data))
        {
            echo "You logged in successfully";
        }
        else
        {
    
            return back()->with('fail','Error: Invalid Login');
            return view('userlogin');
            
        }*/
        $userInfo =userModel::where('usname','=',$request->usname)->first(); 

        if(!$userInfo)
        {
            return back()->with('fail','Error: Invalid Login');
        }
        else
        {
            if(Hash::check($request->upass , $userInfo->upass))
            {
                $request-> session()->put('loggeduser', $userInfo->id);
           
                return redirect('userhome');
        
            }
        else
        {
            return back()->with('fail','Error: Invalid Login');
        } 
    }
}

public function lgout()
{
    if(session()->has('loggeduser'))
    {
        session()->pull('loggeduser');
        return redirect('/userlogin');
    }

}

public function usrhome()
{
    $data=['LoggedUserinfo'=>userModel::where('id','=',session('loggeduser'))->first()];
    return view('userhome',$data);
}
public function allprod()
{
    $prod=productmodel::all();
    $data=['LoggedUserinfo'=>userModel::where('id','=',session('loggeduser'))->first()];
    return view('allproducts',compact('prod'),$data);
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
    
    
     public function deleteview($id)
    {
        $users=userModel::find($id);
        $data=['LoggedUserinfo'=>AdminModel::where('id','=',session('loggeduser'))->first()];
        return view('deleteview',compact('users'),$data);


    }
    public function destroy($id)
    {
        $user=userModel::find($id);

        $user->delete();

        return redirect('/userview');

    }
}
