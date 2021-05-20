<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <style>

      .card-columns {
     box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 1);
  text-align: center;
  background-color: #f1f1f1;
    column-count: 2;
    width: 65rem;

}

</style>
</head>
<body>




@extends("themeuser")
@section("content")

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
<div class="row ">
<div  class="col col-12 col-sm-1 col-md-1 col-lg-1 col-xl-1 col-xxl-1">
</div>
<div  class="col col-12 col-sm-11 col-md-11 col-lg-11 col-xl-11 col-xxl-11">

 @foreach($prod as $prods)

 <form action="/add_to_cart" method="post">
      {{csrf_field()}}
      <input type="hidden" name="FurnitureId" value= "{{ $prods->id }}">

      <br>
         <div class="card-columns">
<img  height="250" width="150" src="{{ URL ::asset('assets/project_img/'.$prods->pimage) }}" class="card-img-top" alt="...">
<p class="card-text"><small class="text-muted"><h6>{{$prods->FurnitureCategory}} </h6></small></p>
    <h5 class="card-title">{{$prods->FurnitureName}}</h5>
    <p class="card-text">{{$prods->FurnitureDescription}} </p>
    <p class="card-text"><small class="text-muted"> <h5>₹ {{$prods->FurniturePrice}} </h5></small></p>
    <button class="btn btn-primary" type="submit">Add to Cart</button>
	
    </div> 
	</form>
            @endforeach

			
            <br>
         
         </div> 
       </div>
</div>

<br> <br>	<br>
<section style="background-color: #F9F7F8;">
		<div class="container">
			<div class="row">
				<div class="revealIn col-md-12 col-xs-12">
					<h2 class="text-center" style="margin-bottom: 30px; font-weight: bold; color: #da2128;"><i>Furniture World Expertise</i></h2>
					
					<div class="row">
						<div class="col-lg-3 col-sm-6">
						
                            <img src="images/sofa.png" width="260" height="200" class="img-responsive" /><br/>
							<br>
							<p class="text-center"><i>Sofas</i></p>
                          
						</div>
						
						<div class="col-lg-3 col-sm-6">
							
                            <img src="images/kitchen.png" width="260" height="200" class="img-responsive" /><br/>
							<br>
							<p class="text-center"><i>Customized Kitchen</i></p>
                         
						</div>
						
						<div class="col-lg-3 col-sm-6">
						
                            <img src="images/bedroom-sets.png" width="260" height="200" class="img-responsive" /><br/>
							<br>
							<p class="text-center"><i>Beds</i></p>
                          
						</div>
						
						<div class="col-lg-3 col-sm-6">
						
                            <img src="images/dining-tables.png" width="260" height="200" class="img-responsive" /><br/>
							<br>
							<p class="text-center"><i>Dining Tables</i></p>
                      
						</div>
                    </div>
			</div>
		</div>
		</div>
	</section>
<br><br><br>
<footer>
		<div class="container">
			<div class="row">
			
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h4 style="color: #da2128;"><i>Furniture World - VIZAG</i></h4>
					<table class="table table-responsive">
							<tr>
								<td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
								<td>Waltair Main Road, <br/>Opp. to Green Park Hotel,<br/>Visakhapatnam, <br/>Andhra Pradesh - 734502<br/></td>
							</tr>
							<tr>
								<td><i class="fa fa-phone" aria-hidden="true"></i></td>
								<td>0891-2714369</td>

							</tr>
                            <tr>
								<td><i class="fa fa-mobile" aria-hidden="true"></i></td>
								<td>+91 9701362950</td>
							</tr>
							<tr>
								<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
								<td>vizag@furnitureworldindia.com</td>
							</tr>
						</table>

				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h4 style="color: #da2128;"><i>Furniture World - KOCHI</i></h4>
					<table class="table table-responsive">
							<tr>
								<td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
								<td>Paradise Circle,<br/> M.G Road, <br/>Kochi,<br/> Kerala - 657584</td>
							</tr>
							<tr>
								<td><i class="fa fa-phone" aria-hidden="true"></i></td>
								<td>04822-278979</td>
							</tr>
							<tr>
								<td><i class="fa fa-mobile" aria-hidden="true"></i></td>
								<td>+91 7674063222</td>
							</tr>
                            <tr>
								<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
								<td>kochi@furnitureworldindia.com</td>
							</tr>
						</table>
				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h4 style="color: #da2128;"><i>Furniture World - CHENNAI</i></h4>
					<table class="table table-responsive">
							<tr>
								<td><i class="fa fa-map-marker" aria-hidden="true"></i></td>
								<td>Plot no: 1 Journalist colony, <br/>Road Number 3, Banjarahills, <br/>Chennai, <br/>Tamil Nadu - 887584</td>
							</tr>
							<tr>
								<td><i class="fa fa-phone" aria-hidden="true"></i></td>
								<td>04099-233512</td>
							</tr>
							<tr>
								<td><i class="fa fa-mobile" aria-hidden="true"></i></td>
								<td>+91 9701362951</td>
							</tr>
                            <tr>
								<td><i class="fa fa-envelope" aria-hidden="true"></i></td>
								<td>chennai@furnitureworldindia.com</td>
							</tr>
						</table>

				</div>
				
			</div>
		</div>
	</footer>

@endsection 





</body>
</html>