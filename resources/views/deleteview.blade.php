<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletecategory</title>
</head>


<body style="background-color:grey;">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin Panel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/adminhome">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/userview">View Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/addadmin">Add Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/addcategory">Add Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/addproduct">Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/productview">Product View</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/vieworders">View Orders</a>
        </li>
       </ul>
      <form method="post" action="/prodesearch" class="d-flex">
      {{ csrf_field() }}
        <input  name="uname" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 



<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
    
 
      
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
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul> 
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
       
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
    
        <a class="nav-link  active" > {{ $LoggedUserinfo['username'] }}</a>
        </li>
        </ul>
     
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link " href="/logout">Log Out</a>
        </li>
        </ul>
    </div>
  </nav>




<div class="container">
<div class="row">

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
<div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
<br><br>

<form action="/userdeleteprocess/{{$users->id}}" method="post">

{{ csrf_field() }}

<table class="table table-borderless  table-secondary">
<tr>
    <td></td><td></td>
</tr>
<tr>
    <td></td><td></td>
</tr>
 <tr>
     <td> Name </td>
     <td>
      <input value="{{   $users->uname}}" name="uname" type="text" class="form-control">
     </td>
 </tr>
 <tr>
     <td>Username</td>
     <td>       <input value="{{   $users->usname}}" name="usname" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Address</td>
     <td>      <input value="{{   $users->uadd }}" name="uadd" type="text" class="form-control">
</td>
 </tr>
 <tr>
     <td>Email </td>
     <td>      <input value="{{   $users->uemail}}" name="uemail" type="text" class="form-control">
</td>
 </tr>

 <tr>
     <td>Mobile No </td>
     <td>      <input value="{{   $users->usmob }}" name="usmob" type="text" class="form-control">
</td>
 </tr>

 <tr>
     <td>Gender </td>
     <td>      <input value="{{   $users->ugend }}" name="ugend" type="text" class="form-control">
</td>
 </tr>

</tr>
 <tr>
 
     <td></td>
     <td> <center><button onclick="return confirm('Are you sure want to delete ?')" class="btn btn-outline-danger" >   DELETE  </button></center></td>
 </tr>
</table>
</form>

</div>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3"></div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       
</body>
</html>