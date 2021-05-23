<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userview</title>
</head>
<style>
    body {
        background-image: url(images/img5.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
</style> 
<body>
@extends("themeadmin")

@section("content")
<br>
<div class="container">
<div class="row">
<div class="col col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1 ">
 </div>
 <div class="col col-12 col-sm-11 col-md-11 col-lg-11 col-xl-11 col-xxl-11 ">
 <br><br>
 <table class="table  table-success table-striped">
 <tr>
     <th>User Id</th>
     <th>Name</th>
     <th>Username</th>
     <th>Address</th>
     <th>Email</th>
     <th>Mobile No</th>
     <th>Gender</th>
     <th></th>
   
     
 </tr>

  @foreach($user as $userf)
 <tr>
      <td>{{$userf->id}}</td>
     <td>{{$userf->uname}}</td>
     <td>{{$userf->usname}}</td>
     <td>{{$userf->uadd}}</td>
     <td>{{$userf->uemail}}</td>
     <td>{{$userf->usmob}}</td>
     <td>{{$userf->ugend}}</td>
    
     <td>  <a class="btn btn-outline-danger" href="/user/{{$userf->id}}/delete"  > Delete  </a>  </td>
    
 </tr>
 
 @endforeach
 </table>
 </div>
</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       
</body>
</html>