<?php
include_once 'header1.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>Online Food Donation System</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- <style>label.error{color:red;}
        </style> -->
        <script type="text/javascript">
        function validate()
        {
            //window.alert("please fill the form");
            //return false;
            var name = $("#ngo_name").val();
            var email = $("#ngo_email").val();
            var contact =$("#ngo_phone").val();
            var password=$("#ngo_password").val();
            var address = $("#ngo_address").val();
            
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var re1 = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/;
            var tmp = 0;
            if(name == "")                       
            {

                $("#nameerror").html("Please enter your full name.");
                tmp++;
            }
            else
            {
               if(!/^[a-zA-z\s]*$/g.test(name))
               {
                  $('#nameerror').html("Only character allowed.");
                  tmp++;
               }
               else
               {
                   $("#nameerror").html("");
               }
            }
            if(contact == 0 || contact == null) 
            {
                $("#contacterror").html("Please enter your mobile no.");
                tmp++;
            }
            else
            {
                if(re1.test(contact))
                {
                    $("#contacterror").html(""); 
                }
                else
                {
                    $("#contacterror").html("Please enter valid contact number");
                    tmp++;
                }
                 
            }                
            if(email == "")
            {
               $('#emailerror').html("Please enter your email.");
               tmp++;
            }
            else
            {
                if(re.test(email))
                {
                    $("#emailerror").html("");
                }
                else
                {
                    $('#emailerror').html("Email is invalid");
                    tmp++;
                }
            }
            if(password == "")
            {
                $("#passworderror").html("Please enter your password.");
                tmp++;
            }
            else
            {  
              $("#passworderror").html("");
            }

          

            if(address == "")                       
            {

                $("#addresserror").html("Please enter your address.");
                tmp++;
            }
            else
            {
                   $("#addresserror").html("");               
            }
            /*else
            {
               if(!/^[a-zA-z\s]*$/g.test(address))
               {
                  $('#addresserror').html("Only character allowed.");
                  tmp++;
               }
               else
               {
                   $("#addresserror").html("");
               }
            }*/
           
            //return false;
            if(tmp != 0)
                  {
                     return false;
                  }
              }
           </script>
    </head>
<body>
        
	<!--================ Start Header Menu Area =================-->
	
	
	<!--================ End Header Menu Area =================-->
	
	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="banner_content">
					<p style="font-size: 50px;margin-left: 340px;"><u>REGISTRATION FORM</u></p>
				<form  method="post" action="signupdb1.php" onsubmit="return validate()">
			<table style="margin-left:475px;background-color: #000000;border: 1px solid black;opacity: 0.5;width: 400px;height: 370px;font-style: Georgia;" align="text-center">
			 <tr>
            <td style="text-align:right;vertical-align:middle;">Name:</td><td align="left">
<span style="color:#00c0ef; display: inline-block; position: relative;left: 25px"></span>
            	<input type="text" style="width: 295px;margin-left:20px;margin-bottom:5px" class="" name="ngo_name" id="ngo_name" placeholder="Enter Name">
<span id="nameerror" style="color: red; font-size: 15px"></span>
            </td></tr>
        
         <tr>
           <td style="text-align:right;vertical-align:middle;"> Mobile No:</td><td align="left">
<span style="color:#00c0ef; display: inline-block; position: relative;left: 25px"></span>
            <input type="text" style="width:295px;margin-left:20px;margin-bottom:5px" class="" name="ngo_phone" id="ngo_phone" placeholder="Enter Mobile No">
<span id="contacterror" style="color: red; font-size: 15px"></span>
        </td></tr>

        
        <tr><td style="text-align:right;vertical-align:middle;">
            Address:</td><td align="left">
<span style="color:#00c0ef; display: inline-block; position: relative;left: 25px"></span>
            	<textarea class="" style="width:295px;margin-left:20px;" rows="2" name="ngo_addr" id="ngo_addr" placeholder="Enter Address"  rows="1" cols="18"></textarea>
<span id="addresserror" style="color: red; font-size: 15px"></span>
            </td></tr>

        

         <tr><td style="text-align:right;vertical-align:middle;">
            Email:</td><td align="left">
<span style="color:#00c0ef; display: inline-block; position: relative;left: 25px"></span>
             <input type="email" style="width: 295px;margin-left:20px;margin-bottom:5px" class="" name="ngo_email" id="ngo_email" placeholder="Enter Email" >
<span id="emailerror" style="color: red; font-size: 15px"></span>
         </td></tr>

        <tr><td style="text-align:right;vertical-align:middle;">
           Password:</td><td align="left">
<span style="color:#00c0ef; display: inline-block; position: relative;left: 25px"></span>
           	<input type="password" style="width:295px;margin-left:20px;margin-bottom:5px" class="" name="ngo_password" id="ngo_password" placeholder="Enter password">
<span id="passworderror" style="color: red; font-size: 15px"></span>
           </td></tr>

        <tr><td colspan="2" align="left">
        <button type="submit" style="width: 175px;margin-left: 20px;" class="btn btn-primary" id="submit" name="submit">Submit</button>
        <button type="reset" class="btn btn-primary" style="width: 175px;" value="Reset">Reset</button></td></tr>
      
  </table>
    </form>
    </div>
</div></div></div></div>
</div></div></div>

				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->
	
	<!--================ Start Causes Area =================-->
	
	<!--================ Start Recent Event Area =================-->
	<!-- <section class="event_area section_gap_custom">
		<div class="container">
			<div class="main_title">
				<h2>Upcoming events</h2>
				<p>Creepeth called face upon face yielding midst is after moveth </p>
			</div>
		
			<div class="row">
				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e1.jpg" alt="">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Working syrian childreen</a>
									</h3>
									<p>
										Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
									</p>
									<div class="d-flex count_time" id="clockdiv1">
										<div class="mr-25">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="mr-25">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="mr-25">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
										<div>
											<h4 class="seconds">30</h4>
											<p>Seconds</p>
										</div>
									</div>
									<a href="#" class="primary_btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e2.jpg" alt="">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Help and homelesness</a>
									</h3>
									<p>
										Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
									</p>
									<div class="d-flex count_time" id="clockdiv2">
										<div class="mr-25">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="mr-25">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="mr-25">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
										<div>
											<h4 class="seconds">30</h4>
											<p>Seconds</p>
										</div>
									</div>
									<a href="#" class="primary_btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e3.jpg" alt="">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Save the clean water</a>
									</h3>
									<p>
										Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
									</p>
									<div class="d-flex count_time" id="clockdiv3">
										<div class="mr-25">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="mr-25">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="mr-25">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
										<div>
											<h4 class="seconds">30</h4>
											<p>Seconds</p>
										</div>
									</div>
									<a href="#" class="primary_btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e4.jpg" alt="">
									<div class="img-overlay"></div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Foods for poor childreen</a>
									</h3>
									<p>
										Be tree their face won't appear day to waters moved fourth in they're divide don't a you're were man.
									</p>
									<div class="d-flex count_time" id="clockdiv4">
										<div class="mr-25">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="mr-25">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="mr-25">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
										<div>
											<h4 class="seconds">30</h4>
											<p>Seconds</p>
										</div>
									</div>
									<a href="#" class="primary_btn">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================ End Recent Event Area =================-->

	<!--================Team Area =================-->
	<!-- <section class="team_area section_gap">
		<div class="container">
			<div class="main_title">
				<h2>Meet our voluteer</h2>
				<p>Creepeth called face upon face yielding midst is after moveth </p>
			</div>
			<div class="row team_inner">
				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/v1.jpg" alt="">
						</div>
						<div class="team_name">
							<h4>Alea Mirslava</h4>
							<p>Party Manager</p>
							<p class="mt-20">
								So seed seed green that winged cattle in kath  moved us land years living.
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/v2.jpg" alt="">
						</div>
						<div class="team_name">
							<h4>Adam Virland</h4>
							<p>Party Manager</p>
							<p class="mt-20">
								So seed seed green that winged cattle in kath  moved us land years living.
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/v3.jpg" alt="">
						</div>
						<div class="team_name">
							<h4>Adam Virland</h4>
							<p>Party Manager</p>
							<p class="mt-20">
								So seed seed green that winged cattle in kath  moved us land years living.
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="team_item">
						<div class="team_img">
							<img class="img-fluid" src="img/voluteer/v4.jpg" alt="">
						</div>
						<div class="team_name">
							<h4>Adam Virland</h4>
							<p>Party Manager</p>
							<p class="mt-20">
								So seed seed green that winged cattle in kath  moved us land years living.
							</p>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#" class="active"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-instagram"></i></a>
								<a href="#"><i class="fa fa-envelope-o"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--================End Team Area =================-->

	<!--================ Start CTA Area =================-->
	<!-- <div class="cta-area section_gap overlay">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<h1>Become a volunteer</h1>
					<p>
						So seed seed green that winged cattle in. Gathering thing made fly you're 
						divided deep leave on the medicene moved us land years living.
					</p>
					<a href="#" class="primary_btn yellow_btn rounded">join with us</a>
				</div>
			</div>
		</div>
	</div> -->
	<!--================ End CTA Area =================-->

	<!--================ Start Story Area =================-->
	<!-- <section class="section_gap story_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<div class="main_title">
						<h2>Our latest Story</h2>
						<p>
							Open lesser winged midst wherein may morning
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				 single-story 
				<div class="col-lg-4 col-md-6">
					<div class="single-story">
						<div class="story-thumb">
							<img class="img-fluid" src="img/story/s1.jpg" alt="">
						</div>
						<div class="story-details">
							<div class="story-meta">
								<a href="#">
									<span class="lnr lnr-calendar-full"></span>
									20th Sep, 2018
								</a>
								<a href="#">
									<span class="lnr lnr-book"></span>
									Company
								</a>
							</div>
							<h5>
								<a href="#">
									Lime recalls electric scooters over 
									battery fire.
								</a>
							</h5>
						</div>
					</div>
				</div>
 -->
				<!-- single-story -->
				<!-- <div class="col-lg-4 col-md-6">
					<div class="single-story">
						<div class="story-thumb">
							<img class="img-fluid" src="img/story/s2.jpg" alt="">
						</div>
						<div class="story-details">
							<div class="story-meta">
								<a href="#">
									<span class="lnr lnr-calendar-full"></span>
									20th Sep, 2018
								</a>
								<a href="#">
									<span class="lnr lnr-book"></span>
									Company
								</a>
							</div>
							<h5>
								<a href="#">
									Apple resorts to promo deals 
									trade to boost 
								</a>
							</h5>
						</div>
					</div>
				</div>

				 single-story
				<div class="col-lg-4 col-md-6">
					<div class="single-story">
						<div class="story-thumb">
							<img class="img-fluid" src="img/story/s3.jpg" alt="">
						</div>
						<div class="story-details">
							<div class="story-meta">
								<a href="#">
									<span class="lnr lnr-calendar-full"></span>
									20th Sep, 2018
								</a>
								<a href="#">
									<span class="lnr lnr-book"></span>
									Company
								</a>
							</div>
							<h5>
								<a href="#">
									Lime recalls electric scooters over 
									battery fire.
								</a>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
	<!--================ End Story Area =================-->

	<!--================ Start Subscribe Area =================-->
	<!-- <div class="container">
		<div class="subscribe_area">
			<div class="row">
				<div class="col-lg-12">
					<div class="d-flex align-items-center">
						<h1 class="text-white">Do you have a question?</h1>
						<div id="mc_embed_signup">
							<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
								<div class="input-group d-flex flex-row">
									<input name="EMAIL" placeholder="Your email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
									<button class="ml-10 primary_btn yellow_btn btn sub-btn rounded">SUBSCRIBE</button>		
								</div>									
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!--================ End Subscribe Area =================-->
        
	    <!--================ Start footer Area  =================-->    
    <footer>
        <div class="footer-area">
            <div class="container">
                <div class="row section_gap" style="margin-left: 150px">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title large_title">Our Mission</h4>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no 
                                divided deep moved us lan Gathering thing us land years living.
                            </p>
                            <p>
                                So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
                            </p>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Quick Links</h4>
                            <ul class="list">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                 <li><a href="signup.php">Register</a></li>
                                <li><a href="https://www.instagram.com/charitydonationp2000">Follow Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget instafeed">
                            <h4 class="footer_title">Gallery</h6>
                            <ul class="list instafeed d-flex flex-wrap">
                                <li><img src="img/gallery/g1.jpg" alt=""></li>
                                <li><img src="img/gallery/g2.jpg" alt=""></li>
                                <li><img src="img/gallery/g3.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                        <div class="single-footer-widget tp_widgets">
                            <h4 class="footer_title">Contact Us</h4>
                            <div class="ml-40">
                                <p class="sm-head">
                                    <span class="fa fa-location-arrow"></span>
                                    Head Office
                                </p>
                                <p>PrimeQA Solutions</p>
    
                                <p class="sm-head">
                                    <span class="fa fa-phone"></span>
                                    Phone Number
                                </p>
                                <p>
                                    +91 8866997764 <br>
                                    +91 7990135389
                                </p>
    
                                <p class="sm-head">
                                    <span class="fa fa-envelope"></span>
                                    Email
                                </p>
                                <p>
                                    charitydonationp@gmail.com<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex">
                    <p class="col-lg-12 footer-text text-center">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </footer>
    <!--================ End footer Area  =================-->  

	<!-- ================Contact Success and Error message Area ================= -->
    <!-- <div id="success" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Thank you</h2>
                    <p>You are registered successfully...</p>
                </div>
            </div>
        </div>
    </div>

    Modals error
    <div id="error" class="modal modal-message fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                    <h2>Sorry !</h2>
                    <p> Something went wrong </p>
                </div>
            </div>
        </div>
    </div> -->
    <!--================End Contact Success and Error message Area =================-->
	
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/mail-script.js"></script>
	<script src="js/countdown.js"></script>
	<!-- contact js -->
        <!-- <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/signup1.js"></script> -->
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>
</html>