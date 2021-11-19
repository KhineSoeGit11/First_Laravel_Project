<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="img/samurai-logo.jpg">
	<title>SAMURAI-CyberSecurity</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<link rel="stylesheet" type="text/css" href="">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    	<a class="hx navbar-brand" href="index.html"><strong>SAMURAI</strong></a>
    	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
	    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  	<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active">
		        <a class="hna nav-link" href="#">Home <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="hna nav-link" href="#aboutus">About <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="hna nav-link" href="#teamates">Team <span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item dropdown active">
		        <a class="hna nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Services
		        </a>
		        <div class="dropdown-menu ml-3" aria-labelledby="navbarDropdown">
		          <a class="hna dropdown-item" href="#" style="color:#FD3614">Penetration Testing</a>
		          <a class="hna dropdown-item" href="#" style="color:#FD3614">Web Design & Development</a>
		          <a class="hna dropdown-item" href="#" style="color:#FD3614">IOT Solution</a>
		          <a class="hna dropdown-item" href="#" style="color:#FD3614">Andriod & IOS Development</a>
		      </li>
		      <li class="nav-item dropdown active">
		        <a class="hna nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Contact
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          
		          
		          
		        	<a class="hna dropdown-item" href="#" style="color:#FD3614">0997564853</a>
		        	<a class="hna dropdown-item" href="#" style="color:#FD3614">samurai@gmail.com</a>
		        
		      </li>
		      	<a href="/login" class="btn btn-outline-primary " style="border-radius: 25px;"> <i class="fas fa-sign-in-alt"></i> Login</a>
		    </ul>
		</div>

    </nav><br><br>
<!-- body 1-->
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<img id="a8" src="img/a5.png">
    		</div>
    		<div class="col-md-6">
				
    			<h1 id="b1h1">SAMURAI</h1>
          		<h4 id="b1h4">We are a team of talented SOC Engineers, Designers, Developers, and other professional IT engineers who are creating a new world.</h4>
				@if (Auth::Check())
				<h3 style="text-align: center" class="text-primary">Welcome, {{ Auth::user()->name}}!</h3>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<a href="#contactus" class="btn btn-outline-success btn-block" style="border-radius: 20px;"><i class="fas fa-phone-square-alt"></i> Contact Us</a href="#aboutus">
					</div>
					<div class="col-md-4">
						<form action="{{route('logout')}}" method="POST">
							@csrf
							<button type="submit" onclick="return confirm('Are you sure to logout?')" class="btn btn-outline-danger btn-block" style="border-radius: 20px;"><i class="fas fa-sign-out-alt"></i> Logout </button><br>
						</form>
						
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
					<div class="col-md-8"><a href="/user" style="border-radius: 20px;" class="btn btn-outline-info btn-block">User Info & Report</a></div>
					<div class="col-md-2"></div>
				</div>
				@else
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<a href="#contactus" class="btn btn-outline-success btn-block" style="border-radius: 20px;"><i class="fas fa-phone-square-alt"></i> Contact Us</a href="#aboutus">
					</div>
					<div class="col-md-4">
						<a href="/register" class="btn btn-outline-primary btn-block" style="border-radius: 20px;"><i class="fas fa-user-plus"></i> Register </a>
					</div>
					<div class="col-md-2"></div>
				</div>
				@endif
				
				
    		</div>
			
    	</div>

    </div>

    <section id="cliens" class="cliens section-bg" style="background-color: lightblue;">
    	<div class="container">

	        <div class="row" data-aos="zoom-in">

	          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
	            <img src="img/clients/client-1.png" class="img-fluid" alt="">
	          </div>

	          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
	            <img src="img/clients/client-2.png" class="img-fluid" alt="">
	          </div>

	          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
	            <img src="img/clients/client-3.png" class="img-fluid" alt="">
	          </div>

	          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
	            <img src="img/clients/client-4.png" class="img-fluid" alt="">
	          </div>

	          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
	            <img src="img/clients/client-5.png" class="img-fluid" alt="">
	          </div>

	          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
	            <img src="img/clients/client-6.png" class="img-fluid" alt="">
	          </div>

	        </div>

	     </div>
    </section>
<!-- About Us -->
	<section id="aboutus">
		<div class="container">
	    	<div class="row">
	    		<div class="col-md-12">
	    			<h2 id="abh2">About Us</h2>

	    			<div class="row">
	    				<div class="col-md-6">
	    					<h5 style="margin-bottom: 20px;">We are a team of talented SOC Engineers, Designers, Developers, and other professional IT engineers who are creating a new world.</h5>
	    					
	    					<ul id="abul">
				              <li>We develop various kinds of website templates. Our websites are beautiful and have good security.</li><br>
				              <li>We are service penetration testing.</li><br>
				              <li>We develop Andriod & IOS applications.</li><br>
				              <li>We can help your company with IoT solutions.</li><br>
				              <li>We have our own server.</li>
				            </ul>
				            <p><strong>Our company started at November,2021.We are a team of talented SOC Engineers, Designers, Developers, and other professional IT engineers who are creating a new world.We have 24/7 services.</strong></p>
	    				</div>
	    				<div class="col-md-6">
	    					<img id="our" src="img/a4.png">
	    				</div>
	    			</div>
	    			<hr color='#011A86' align="left">
	    		</div>
	    	</div>
	    </div>
	</section>
    
    <!-- Team -->
    <section id="#teamates">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="teh2">TEAM</h2>
    				<p id="tep1">We are a team of talented SOC Engineers, Designers, Developers, and other professional IT engineers who are creating a new world.If you are talented in CyberSecurity, Web and Software Development, you can join us.</p>
    			</div>
    		</div>
    	</div>

    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
    				<div class="card">
    					<img id="teimg" src="img/team/team-7.jpg">
    					<div class="card-body">
    						<h4 class="card-title">Saul Goodman</h4>
    						<p class="card-text">Ceo &amp; Founder</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="card">
    					<img id="teimg" src="img/team/team-1.jpg">
    					<div class="card-body">
    						<h4 class="card-title">Walter White</h4>
    						<p class="card-text">Chief Executive Officer</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="card">
    					<img id="teimg" src="img/team/team-2.jpg">
    					<div class="card-body">
    						<h4 class="card-title">Sarah Jhonson</h4>
    						<p class="card-text">Product Manager</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="card">
    					<img id="teimg" src="img/team/team-8.jpg">
    					<div class="card-body">
    						<h4 class="card-title">Jena Karlis</h4>
    						<p class="card-text">Accounted Team Leader</p>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div> <br>

    	<div class="container">
    		<div class="row">
    			<div class="col-md-3">
    				<div class="card">
    					<img id="teimg" src="img/team/team-3.jpg">
    					<div class="card-body">
    						<h4 class="card-title">William Anderson</h4>
    						<p class="card-text">Pentration Testers Team Leader</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="card">
    					<img id="teimg" src="img/team/team-5.jpg">
    					<div class="card-body">
    						<h4 class="card-title">MAtt Barandon</h4>
    						<p class="card-text">Web Developers & Security Team Leader</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="card">
    					<img id="teimg" src="img/team/team-6.jpg">
    					<div class="card-body">
    						<h4 class="card-title">John Larson</h4>
    						<p class="card-text">IOS Developers Team Leader</p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-3">
    				<div class="card">
    					<img id="teimg" src="img/team/team-4.jpg">
    					<div class="card-body">
    						<h4 class="card-title">Amanda Jepson</h4>
    						<p class="card-text">Andriod Developers Team Leader</p>
    					</div>
    				</div>
    			</div>
    			
    		</div>
    		<hr color='#011A86' align="left">
    	</div>
    	
    </section> 

		<!-- Services -->

    <div class="container" >
    	<div class="row">
    		<div class="col-md-12">
    			<h2 id="seh2">Our Services</h2>
    			<p id="sep">We are service penetration testing, web development, Andriod & IOS application development, and other IoT Solutions.We have 24/7 services.</p>
    		</div>
    		<div class="container">
	    		<div class="row">
	    			<div class="col-md-3">
	    				<div class="card">
	    				
	    					<div class="card-body">
	    						<h5 class="card-title" style="text-align: center;">Penetration Testing</h5>
	    						<ul id="seul">
					              <li class="fa fa-check" style="color: lightgreen;"></li> Web Pentest<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Mobile Pentest<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> System Pentest<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Network Pentest<br>					            
					          	</ul>

					          	<button class="btn btn-outline-primary btn-block">Get Start</button>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-3">
	    				<div class="card">
	    					
	    					
	    					
	    					<div class="card-body">
	    						<h5 class="card-title" style="text-align: center;">Web Developement</h5>
	    						<ul id="seul">
					              <li class="fa fa-check" style="color: lightgreen;"></li> E-commerce<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Social Media<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Business<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Others<br>					            
					          	</ul>

					          	<button class="btn btn-outline-primary btn-block">Get Start</button>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-3">
	    				<div class="card">
	    				
	    					<div class="card-body">
	    						<h5 class="card-title" style="text-align: center;">Andriod & IOS</h5>
	    						<ul id="seul">
					              <li class="fa fa-check" style="color: lightgreen;"></li> Games<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Bussiness<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Social Media<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Others<br>					            
					          	</ul>

					          	<button class="btn btn-outline-primary btn-block">Get Start</button>
	    					</div>
	    				</div>
	    			</div>
	    			<div class="col-md-3">
	    				<div class="card">
	    					
	    					<div class="card-body">
	    						<h5 class="card-title" style="text-align: center;">IoT Solutions</h5>
	    						<ul id="seul">
					              <li class="fa fa-check" style="color: lightgreen;"></li> Connectivity<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Devices<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Cloud<br><br>
					              <li class="fa fa-check" style="color: lightgreen;"></li> Application <br>					            
					          	</ul>

					          	<button class="btn btn-outline-primary btn-block">Get Start</button>
	    					</div>
	    				</div>
	    			</div>
	    			
	    		</div>
	    		<hr color='#011A86' align="left">
	    	</div>
    	</div>
    </div>

<!-- Contact Us -->
    <section id="contactus">
        <div class="row" style="background-color:#E5E5E5">
            <div class="col-md-12">
                <h2 id="coh2">Contact Us</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <h4 class="coh4">SAMURAI</h4>
                            <p>
                              A108 Adam Street <br>
                              New York, NY 535022<br>
                              United States <br>
                              <strong>Phone:</strong> 0997564853<br>
                              <strong>Email:</strong> samurai@example.com<br>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="coh4" style="text-align: center">Our services</h4>
                            <ul>
                                <li >Pentration Testing</li>
                                <li >Web Design</li>
                                <li >Web Development</li>
                                <li >Andriod & IOS Development</li>
                                <li >IoT Solution</li> 				            
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h4 class="coh4" style="text-align: center">Our Social Networks</h4>
                            <p>We have social networks. You can contact us any time. We have 24/7 services.</p>
                            <button id="cobut" class="fab fa-facebook btn btn-secondary btn-lg"></button>
                            <button id="cobut" class="fab fa-instagram btn btn-secondary btn-lg"></button>
                            <button id="cobut" class="fab fa-twitter btn btn-secondary btn-lg"></button>
                            <button id="cobut" class="fab fa-google-plus-g btn btn-secondary btn-lg"></button>
                            <button id="cobut" class="fab fa-skype btn btn-secondary btn-lg"></button>
                        </div>
                        
                    </div>
                </div>
                <hr color='#011A86' align="left">
            </div>
    
            <div class="container footer-bottom clearfix">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            &copy; Copyright <strong><span>samurai</span></strong>. All Rights Reserved
                            <p style="float: right;">Designed By <font color="red">Khine Soe Linn</font></p>
                        </div>
    
                    </div>
                </div>
              
            </div>
        </div>
    </section>
	
</body>
</html>

