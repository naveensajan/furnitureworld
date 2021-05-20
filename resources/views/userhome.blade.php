
@extends("themeuser")
@section("content")

@if(Session::get('success'))
            <div class="alert alert-success">
            {{Session::get('success')}}
            </div>
     @endif

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3500">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="3500">
      <img src="images/2.jpg" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item" data-bs-interval="3500">
      <img src="images/3.jpg" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item" data-bs-interval="3500">
      <img src="images/4.jpg" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item" data-bs-interval="3500">
      <img src="images/5.jpg" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item" data-bs-interval="3500">
      <img src="images/6.png" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item" data-bs-interval="3500">
      <img src="images/7.jpg" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item" data-bs-interval="3500">
      <img src="images/8.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>       
@endsection 

