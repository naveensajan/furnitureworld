<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
 #ip3{
    border-radius: 25px;
    border: 1px solid #3B43AD;
    width: 430px;
    height: 600px;    
}


   #ip2 {
    border-radius: 25px;
    border: 2px solid #0608CE;
    padding: 20px; 
    width: 200px;
    height: 15px;    
}
#password {
    border-radius: 25px;
    border: 2px solid #0608CE;
    padding: 20px; 
    width: 200px;
    height: 15px;    
}
body {
        background-image: url(images/img13.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }

      .intro-content-wrapper .signup-link-btn {
    padding: 13px 30px;
    color: #e0ffee;
    border: 1px solid #fff;
    border-radius: 22.5px;
    line-height: 19px;
    font-size: 16px;
    font-weight: bold; }
    .intro-content-wrapper .signup-link-btn:hover {
      background-color:  #4c67b8;
      color: #000; }
    @media (max-width: 767px) {
      .intro-content-wrapper .signup-link-btn {
        margin-bottom: 35px; } } 
</style>   
    <title>register</title>
</head>

<body > 
<nav class="navbar navbar-primary" style="background-color:#0b0909;">
    <div class="container-fluid">
    
 
        <img src="images/logo8.png" alt="" width="195" height="40" class="d-inline-block align-top">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <i class="fa fa-home" aria-hidden="true" style="font-size:25px;color:red"></i>
        </ul>
   
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active" href="/">HOME</a>
        </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <i class="fa fa-phone" aria-hidden="true" style="font-size:25px;color:red"></i>
        </ul>
 
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item ">
          <a class="nav-link active" href="/contactus">CONTACT US</a>
        </li>
        </ul> 
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
     
        <a class="nav-link  active" >  <i class="fa fa-sign-in" style="font-size:25px;color:red"></i>
         </a>
        </li>
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
     
        <li class="nav-item ">
          <a class="nav-link active" href="/userlogin">LOGIN</a>
        </li>
        </ul>
    </div>
  </nav>
@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif
    @if(Session::get('fail'))
            <div class="alert alert-danger">
            {{Session::get('fail')}}
            </div>
    @endif
<div class="container">
<div class="row">
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 ">
 </div>
 <div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 ">
 <form action="/userview" method="post">
{{ csrf_field() }}

 <table class="table table-dark table-borderless "  id="ip3" >


<tr><td></td><td> <h4 style="color: #4c67b8;"><i>Sign Up</i></h4> </td></tr>
 <tr >
     <td><center>Name</center></td>
     <td><input name="uname" value="{{old('uname')}}" id="ip2" type="text" class="form-control" placeholder="Name" required>
     
     <span class="text-danger">@error('uname'){{$message}} @enderror  </span>
     </td>
     
 </tr>
 <tr>
     <td><center>Username</center></td>
     <td><input name="usname" value="{{old('usname')}}" id="ip2" type="text" class="form-control"  placeholder="Username" required>
     <span class="text-danger">@error('usname'){{$message}} @enderror  </span></td>
 </tr>
 <tr>
                <td><center>Address</center></td>
                    <td> 
                    <input name="uadd" value="{{old('uadd')}}" id="ip2" type="text" class="form-control"  placeholder="Address" required>
                    </td>
 </tr>

 <tr>
     <td><center>Email</center></td>
     <td><input name="uemail" value="{{old('uemail')}}" id="ip2" type="email" class="form-control" placeholder="name@example.com" required>
     <span class="text-danger">@error('uemail'){{$message}} @enderror  </span>
     </td>
 </tr>
 <tr>
     <td><center>Mobile No</center></td>
     <td><input name="usmob" value="{{old('usmob')}}" id="ip2" type="text" class="form-control"  placeholder="Mobile No" required>
     <span class="text-danger">@error('usmob'){{$message}} @enderror  </span>
     </td>
 </tr>
 <tr>
                <td><center>Gender</center></td>
                <td>
                     <input class="form-check-input" type="radio" name="ugend" id="flexRadioDefault1" value="male" required>
                
                     <label class="form-check-label" for="flexRadioDefault1">
                     Male
                     </label> &nbsp &nbsp &nbsp &nbsp
                     <input class="form-check-input" type="radio" name="ugend" id="flexRadioDefault2" value="female" required>
                     <label class="form-check-label" for="flexRadioDefault2">
                     Female
                    </label><br>
                </td>

                </tr>

 <tr>
     <td><center>Password</center></td>
     <td><input  name="upass" value="{{old('upass')}}"  type="password" id="password"  class="form-control"   placeholder="Password" required>
     <span class="text-danger">@error('upass'){{$message}} @enderror  </span></td>
 </tr>
 <tr>
     <td><center>Confirm Password</center></td>
     <td><input name="ucpass" value="{{old('ucpass')}}" id="ip2" type="password" id="confirm_password" onkeyup="check(this)" class="form-control"  placeholder="Confirm Password" required>
     <span class="text-danger">@error('ucpass'){{$message}} @enderror  </span>
     </td>
 </tr>
  <tr><td></td> <td> <span class="text-danger" id="alert"> </span></td> </tr>
 <tr>
 <td></td>
     <td> <div class="intro-content-wrapper"><button class="btn signup-link-btn" >Submit</button>   </div></td>
 </tr>
 </table>

 </form>
 </div>

 <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 ">
</div>
</div>
</div>

  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">


</script>   

<script type="text/javascript">
var password = document.getElementById('password');
function check(elem)
{
    if(elem.value.length > 0 )
    {
        if(elem.value!=password.value)
        {
            document.getElementById('alert').innerText = "Password doesn't match";
        }
        else
        {
            document.getElementById('alert').innerText = "";
        }
    }
}
</script>  
</body>
</html>