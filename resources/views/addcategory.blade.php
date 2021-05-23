<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>

body {
        background-image: url(images/img2.jpg);
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
      }
</style>   
    <title>add category</title>
</head>

<body > 

@extends("themeadmin")
@section("content")

<div class="container">
<div class="row">
<div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
<br>
<br>
<br>
<table class="table table table-dark">
<tr><th scope="row">Category Id</th>
    <th scope="row">Category Name</th>
    <th></th>
   </tr>
    
@foreach($cat as $categorys)

<tr class="table-secondary">
   
    <td>{{$categorys->CategoryId}}</td>
  
    <td>{{$categorys->CategoryName}}</td>

    <td><a class="btn btn-sm btn-outline-danger"   href="/category/{{$categorys->id}}/delete">DELETE</a></td>
                                    
   
</tr>

@endforeach
</table>
</div>
<div class="col col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
</div>
<div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5">
<form action="/categoryread" method="post">
{{csrf_field()}}
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
<table class="table table-borderless">
<tr>
<br>
<br>
<br>

<center><h1 > <b>   <span class="badge bg-secondary">ADD CATEGORY</span> </b></h1></center>
<br>
    <td style="font-size:24px;color:white;"><b>CATEGORY ID</b></td>
    <td><input type="text" value="{{old('CategoryId')}}" class="form-control" name="CategoryId" required>
    <h6 > <b>   <span class="text-light">@error('CategoryId'){{$message}} @enderror  </span> </b></h6></td>
</tr>
<tr>
    <td style="font-size:24px;color:white;"><b>CATEGORY NAME</b></td>
    <td><input type="text" value="{{old('CategoryName')}}" class="form-control" name="CategoryName" required> 
    <h6 > <b>  <span class="text-light">@error('CategoryName'){{$message}} @enderror  </span></b></h6></td>
</tr>
<tr>
<tr>
    <td></td>
</tr>
<tr>
    <td></td>
    <td> <button class="btn btn-primary" >Add</button></td>
</tr>
</table>

</form>
</div>


</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>  
@endsection
</body>
</html>