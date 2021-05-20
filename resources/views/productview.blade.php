<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>productview</title>
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
 <div class="col col-12 col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9 ">
 
 <table class="table  table-success table-striped">
<tr>
    <th>Product Id</th>
    <th>Furniture Category</th>
    <th >Furniture Id</th>
    <th >Furniture Name</th>
    <th >Furniture Price</th>
    <th >Furniture Description</th>
    <th ><center>image</center></th>
    <th></th> <th></th>
    </tr>
    
@foreach($prod as $prods)

<tr >
    <td>{{$prods->id}}</td>
    <td>{{$prods->FurnitureCategory}}</td>
    <td>{{$prods->FurnitureId}}</td>
    <td>{{$prods->FurnitureName}}</td>
    <td>{{$prods->FurniturePrice}}</td>
    <td>{{$prods->FurnitureDescription}}</td>
    <td><img width="150" height="100" src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}"></td>
    <td><a class="btn btn-warning"  href="/product/{{$prods->id}}/edit" >EDIT</a></td>
    <td><a class="btn btn-danger"   href="/productdelete/{{$prods->id}}/deleteview">DELETE</a></td>
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