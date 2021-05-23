<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href=" /userhome">Home</a>
        </li>
        <a class="navbar-brand" href=""></a>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="/allproducts">All Products</a>
        </li>
        <a class="navbar-brand" href=""></a>
        <li class="nav-item">
          <a class="nav-link" href="/myorders">My Bookings</a>
        </li>
        <a class="navbar-brand" href=""></a>
        <li class="nav-item">
       <a class="nav-link" href="/cartlist">Cart<i class="fa fa-shopping-cart" style="font-size:20px;color:grey"></i></a>
        </li>
       </ul>
       
      <form method="post" action="/psearch" class="d-flex">
      {{ csrf_field() }}
        <input name="pc" class="form-control me-2" type="search" placeholder="Search" aria-label="Search"  name="FurnitureCategory">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>

    </div>
  </div>
</nav> 


<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
    
 
        <img src="images/logo8.png" alt="" width="155" height="33"  class="d-inline-block align-top">
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
        <img src="images/propic2.png" alt="" width="30" height="30" class="d-inline-block align-top">
        &nbsp;
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
    
        <a class="nav-link  active" > {{ $LoggedUserinfo['usname']}}</a>
        </li>
        </ul>
     
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link " id="hide" href="/lgout">Log Out</a>
        </li>
        </ul>
    </div>
  </nav>
  <style type="text/css">
@media print {
    #hide {
        display :  none;
    }
}
</style>
<br>
<center><h4 style="margin-bottom: 30px; font-weight: bold; color: #da2128;">My Bookings</h4></center>
<div class="container">
<div class="row ">
<div style="text-align:right"><button id="hide" class="btn btn-outline-primary" onclick="window.print()">Print</button></div>
@foreach($orders as $item) 

<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
<br>
<img width="212" height="150" src="{{ URL ::asset('assets/project_img/'.$item->pimage) }}">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-outline-danger btn-sm" id="hide" href="/cancelorder/{{$item->id}}/{{$item->userid}}">Cancel Order</a>
</div>
<br>
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3">
<br>
<p class="card-text"><small class="text-muted"><h4>{{$item->FurnitureName}} </h4></small></p>
<h6>{{$item->FurnitureDescription}}</h6> 
</div>

<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
<br><br>
<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;₹ {{$item->FurniturePrice}}</h5>
</div>

<div class="col col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
<br><br>
<h6>Delivery Status : {{$item->status}}</h6>
</div>



@endforeach

</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       


</body>