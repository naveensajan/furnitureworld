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
    width: 540px;
    height: 600px;    
}


#ip4 {
    padding: 13px 30px;
    color: #fff;
    border: 1px solid #fff;
    border-radius: 22.5px;
    line-height: 19px;
    font-size: 16px;
    font-weight: bold; 
    width: 200px;  
}
body {
        background-image: url(images/img12.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
</style>   
    <title>add product</title>
</head>

<body > 
@extends("themeadmin")
@section("content")
<div class="container">
<div class="row">
<div class="col col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 ">
 </div>
 <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5 ">

 <form action="/productview" method="post" enctype="multipart/form-data">
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

<tr><TD></TD><td><h2> <b> ADD  <span class="badge bg-secondary">PRODUCT</span> </b></h2></td></tr>
<tr>
    <td><center>Furniture Category</center></td>
    <td> 
    <select name="FurnitureCategory" class="form-control" >
    @foreach($cat as $cats)
              <option>{{$cats->CategoryName }}</option>
              @endforeach
              </select>
    </td>
 </tr>
 <tr >
     <td><center>Furniture Id</center></td>
     <td><input name="FurnitureId"   value="{{old('FurnitureId')}}" type="text" class="form-control" placeholder="Furniture Id" required>
     <span class="text-danger">@error('FurnitureId'){{$message}} @enderror  </span>
     </td>
     
 </tr>
 <tr>
     <td><center>Furniture Name</center></td>
     <td><input name="FurnitureName"   type="text" class="form-control"  placeholder="Furniture Name" required>
  </td>
 </tr>
 <tr>
     <td><center>Furniture Price</center></td>
     <td><input name="FurniturePrice" value="{{old('FurniturePrice')}}"  type="text" class="form-control" placeholder="Furniture Price" required>
     <span class="text-danger">@error('FurniturePrice'){{$message}} @enderror  </span>
     </td>
 </tr>
 <tr>
     <td><center>Furniture Description</center></td>
     <td><input name="FurnitureDescription"   type="text" class="form-control"  placeholder="Furniture Description" required>
     </td>
 </tr>

 <tr>
    <td><center>Image :</center></td>
    <td><input type="file" name="pimage"class="form-control" required></td>
</tr>
<tr>
    <td></td>
    <td> <button class="btn btn-outline-secondary" id="ip4">Add</button></td>
    
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
@endsection  
</body>
</html>