<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vieworders</title>
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
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2 ">
 </div>
 <div class="col col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8 col-xxl-8 ">
 
 <table class="table  table-success table-striped">
<tr><th>Order Id</th>
    <th >Product Id</th>
    <th >user Id</th>
    <th >Address</th>
    <th >Status</th>
    <th >Payment Method</th>
    <th></th> <th></th>
    </tr>
    
@foreach($prod as $prods)

<tr >
   
    <td>{{$prods->id}}</td>
    <td>{{$prods->FurnitureId}}</td>
    <td>{{$prods->userid}}</td>
    <td>{{$prods->address}}</td>
    <td>{{$prods->status}}</td>
    <td>{{$prods->paymentmethod}}</td>
    <td><a class="btn btn-warning"  href="/order/{{$prods->id}}/edit" >UPDATE</a></td>
    <td><a class="btn btn-danger"   href="/orderdelete/{{$prods->id}}/deleteview">DELETE</a></td>
</tr>

@endforeach
</table>
</div>
 <div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
</div>
</div>
</div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       
</body>
</html>