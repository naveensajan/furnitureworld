<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
 #ip3{
    border-radius: 25px;
    border: 1px solid #3B43AD;
    width: 546px;
    height: 400px;    
}


   #ip2 {
    border-radius: 25px;
    border: 2px solid #0608CE;
    padding: 20px; 
    width: 240px;
    height: 15px;    
}
#password {
    border-radius: 25px;
    border: 2px solid #0608CE;
    padding: 20px; 
    width: 240px;
    height: 15px;    
}
body {
        background-image: url(images/img12.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
</style>   
    <title>addadmin</title>
</head>

<body > 


<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
 </div>
 <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ">
 <br><br>
<form action="/add" method="post">
{{ csrf_field() }}
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
   
 <table class="table table-dark table-borderless "  id="ip3" >

<tr><td></td><td><h2> <b> ADD  <span class="badge bg-secondary">ADMIN</span> </b></h2></td></tr>

 <tr>
     <td><center>Username</center></td>
     <td><input name="username" value="{{old('usname')}}" id="ip2" type="text" class="form-control"  placeholder="Username" required>
     <span class="text-danger">@error('usname'){{$message}} @enderror  </span></td>
 </tr>
 <tr>
     <td><center>Password</center></td>
     <td><input name="password" value="{{old('password')}}"  type="password" id="password" class="form-control"  placeholder="Password" required>
     <span class="text-danger">@error('password'){{$message}} @enderror  </span></td>
 </tr>
 <tr>
     <td><center>Confirm Password</center></td>
     <td><input name="confirmpass" value="{{old('confirmpass')}}" id="ip2" type="password" id="confirm_password" onkeyup="check(this)" class="form-control"  placeholder="Confirm Password" required>
     <span class="text-danger">@error('confirmpass'){{$message}} @enderror  </span>
     </td>
 </tr>
  <tr><td></td> <td> <span class="text-danger" id="alert"> </span></td> </tr>
 <tr>
 <td></td>
     <td><button class="btn btn-primary btn-md" >Submit</button></td>
 </tr>
 </table>

 </form>

 </div>

 <div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4 ">

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