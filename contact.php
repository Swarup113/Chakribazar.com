<!doctype html>
<html lang="en">
<?php 
include 'constants/settings.php'; 
include 'constants/check-login.php';
?>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Chakribazar - Contact Us</title>
	<meta name="description" content="Online Job Portal" />
	<meta name="keywords" content="job, work, resume, applicants, application, employee, employer, hire, hiring, human resource management, hr, online job management, company, worker, career, recruiting, recruitment" />
	<meta name="author" content="BwireSoft">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" media="screen">	
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/component.css" rel="stylesheet">
	
	<link rel="stylesheet" href="icons/linearicons/style.css">
	<link rel="stylesheet" href="icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="icons/ionicons/css/ionicons.css">
	<link rel="stylesheet" href="icons/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" href="icons/rivolicons/style.css">
	<link rel="stylesheet" href="icons/flaticon-line-icon-set/flaticon-line-icon-set.css">
	<link rel="stylesheet" href="icons/flaticon-streamline-outline/flaticon-streamline-outline.css">
	<link rel="stylesheet" href="icons/flaticon-thick-icons/flaticon-thick.css">
	<link rel="stylesheet" href="icons/flaticon-ventures/flaticon-ventures.css">

	<link href="css/style.css" rel="stylesheet">

	
</head>


<body class="not-transparent-header">

	<div class="container-wrapper">

		<header id="header">
			<nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function">

				<div class="container">
					
				<div class="logo-wrapper">
					<a href="#" class="logo"><img src="images/logo.jpeg"></a>
					</div>
					
					<div id="navbar" class="navbar-nav-wrapper navbar-arrow">
					
						<ul class="nav navbar-nav" id="responsive-menu">
						
							<li>
							
								<a href="./">Home</a>
								
							</li>
							
							<li>
								<a href="job-list.php">Job List</a>

							</li>
							
							<li>
								<a href="employers.php">Employers</a>
							</li>
							
							<li>
								<a href="employees.php">Employees</a>
							</li>
							
							<li>
								<a href="contact.php">Contact Us</a>
							</li>

						</ul>
				
					</div>

					<div class="nav-mini-wrapper">
						<ul class="nav-mini sign-in">
						<?php
						if ($user_online == true) {
						print '
						    <li><a href="logout.php">logout</a></li>
							<li><a href="'.$myrole.'">Profile</a></li>';
						}else{
						print '
							<li><a href="login.php">login</a></li>
							<li><a data-toggle="modal" href="#registerModal">register</a></li>';						
						}
						
						?>

						</ul>
					</div>
				
				</div>
				
				<div id="slicknav-mobile"></div>
				
			</nav>

			<div id="registerModal" class="modal fade login-box-wrapper" tabindex="-1" style="display: none;" data-backdrop="static" data-keyboard="false" data-replace="true">
			
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title text-center">Create your account for free</h4>
				</div>
				
				<div class="modal-body">
				
					<div class="row gap-20">
					
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employer" class="btn btn-facebook btn-block mb-5-xs">Register as Employer</a>
						</div>
						<div class="col-sm-6 col-md-6">
							<a href="register.php?p=Employee" class="btn btn-facebook btn-block mb-5-xs">Register as Employee</a>
						</div>

					</div>
				
				</div>
				
				<div class="modal-footer text-center">
					<button type="button" data-dismiss="modal" class="btn btn-primary btn-inverse">Close</button>
				</div>
				
			</div>


			
		</header>

		<div class="main-wrapper">

			<div class="breadcrumb-wrapper">
			
				<div class="container">
				
					<ol class="breadcrumb-list">
						<li><a href="./">Home</a></li>
						<li><span>Contact Us</span></li>
					</ol>
					
				</div>
				
			</div>
			
			<div class="section sm">
			
				<div class="container">
				
					<div class="row">
					
						<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
						
							<div class="section-title">
							
								<h2>Contact us for help</h2>
								
							</div>

						</div>
					
					</div>
					
					<div class="row">

						<div class="col-sm-7 col-md-6 col-md-offset-1 mb-30">
						<?php include 'constants/check_reply.php'; ?>
						
							<form class="contact-form-wrapper" data-toggle="validator" action="app/send-message.php" method="POST" autocomplete="off">
							
								<div class="row">
								
									<div class="col-sm-6">
									
										<div class="form-group">
											<label for="inputName">Your Name <span class="font10 text-danger">(required)</span></label>
											<input id="inputName" name="fullname" type="text" class="form-control" data-error="Your name is required" required>
											<div class="help-block with-errors"></div>
										</div>
										
									</div>
									
									<div class="col-sm-6">
									
										<div class="form-group">
											<label for="inputEmail">Your Email <span class="font10 text-danger">(required)</span></label>
											<input id="inputEmail" name="email" type="email" class="form-control" data-error="Your email is required and must be a valid email address" required>
											<div class="help-block with-errors"></div>
										</div>
										
									</div>

									
									<div class="col-sm-12">
									
										<div class="form-group">
											<label for="inputMessage">Message <span class="font10 text-danger">(required)</span></label>
											<textarea id="inputMessage" name="message" class="form-control" rows="8" data-minlength="50" data-error="Your message is required and must not less than 50 characters" required></textarea>
											<div class="help-block with-errors"></div>
										</div>

									</div>
									
									<div class="col-sm-12 text-right">
										<button type="submit" class="btn btn-primary mt-5">Send Message</button>
									</div>
									
								</div>
								
							</form>
							
						</div>
						
						<div class="col-sm-5 col-md-4">
						
							<ul class="address-list">
								<li>
										<h5>Address</h5>
										<address> Chittagong <br/> Bangladesh<br/></address>
								</li>
								<li>
										<h5>Email</h5><a href="mailto:Teaminnovators@gmail.com">Teaminnovators@gmail.com</a>
								</li>
								<li>
										<h5>Phone Number</h5><a href="tel:++8801843392831">+8801843392831</a>
								</li>

								<li>
										<h5>Social Networks</h5>
										<div class="contact-social">
										
											<a href="<?php echo "$fb"; ?>" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
											<a href="<?php echo "$tw"; ?>" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
											<a href="<?php echo "$ig"; ?>" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
										
										</div>
								</li>
									
							</ul>
						
						</div>
						
					</div>

					
				</div>
			
			</div>

			<footer class="footer-wrapper">
			
				<div class="main-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-12 col-md-9">
							
								<div class="row">
								
									<div class="col-sm-6 col-md-4">
									
									<div class="footer-about-us">
											<h5 class="footer-title">About Chakribazar.com</h5>
											<p>The job portal is designed for the organizations and recruiting agencies as well as job seekers. Candidates can use this system to fill out online job applications and submit their updated resume. Employers will be able to recruit employees and manage job applications.
    This Online Job Portal serves as a communication link between recruiters and the applicants.</p>
										
										</div>

									</div>
									
									<div class="col-sm-6 col-md-5 mt-30-xs">
										<h5 class="footer-title">Quick Links</h5>
										<ul class="footer-menu clearfix">
											<li><a href="./">Home</a></li>
											<li><a href="job-list.php">Job List</a></li>
											<li><a href="employers.php">Employers</a></li>
											<li><a href="employees.php">Employees</a></li>
											<li><a href="contact.php">Contact Us</a></li>
											<li><a href="#">Go to top</a></li>

										</ul>
									
									</div>

								</div>

							</div>
							
							<div class="col-sm-12 col-md-3 mt-30-sm">
							<h5 class="footer-title">Chakribazar.com</h5>
								
								<p>Address : Chittagong, 
									Bangladesh</p>
								<p>Email : <a href="">Teaminnovators@gmail.com</a></p>
								<p>Phone : <a href="tel:+8801843392831">+8801843392831</a></p>
								



							</div>

							
						</div>
						
					</div>
					
				</div>
				
				<div class="bottom-footer">
				
					<div class="container">
					
						<div class="row">
						
							<div class="col-sm-4 col-md-4">
					
							<p class="copy-right">&#169; Copyright Chakribazar.com</p>
								
							</div>
							
							<div class="col-sm-4 col-md-4">
							
								<ul class="bottom-footer-menu">
									<li><a >Developed by Team Innovators</a></li>
								</ul>
							
							</div>
							
							<div id="footer">
                             <div id="v_line"></div>
                                 <div class="social-popout">
                                     <div class="columns">
                                            <ul id="lpro">
                 <li><a href="https://www.facebook.com/" target="_blank"><div class="fbicon"><img id="social_me" src="images/fblogo.png" alt="Facebook"></a>
                </li>
                <li><a href="https://www.twitter.com/" target="_blank"><div class="twitter"><img id="social_me" src="images/twitter.png" alt="Twitter"></a>
                </li>
                <li><a href="https://www.linkedin.com/" target="_blank"><div class="linkedin_amandasopkin"><img id="social_me" src="images/linkedin.png" alt="Linked In"></a>
                </li>
                <li><a href="https://instagram.com/" target="_blank"><img id="social_me" src="images/instagram.png" alt="Instagram"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
                
                                
</ul>
    </div>


</div>

 

<div id="back-to-top">
   <a href="#"><i class="ion-ios-arrow-up"></i></a>
</div>

<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-modalmanager.js"></script>
<script type="text/javascript" src="js/bootstrap-modal.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.min.js"></script>
<script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
<script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
<script type="text/javascript" src="js/bootstrap-tokenfield.js"></script>
<script type="text/javascript" src="js/typeahead.bundle.min.js"></script>
<script type="text/javascript" src="js/bootstrap3-wysihtml5.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="js/jquery-filestyle.min.js"></script>
<script type="text/javascript" src="js/bootstrap-select.js"></script>
<script type="text/javascript" src="js/ion.rangeSlider.min.js"></script>
<script type="text/javascript" src="js/handlebars.min.js"></script>
<script type="text/javascript" src="js/jquery.countimator.js"></script>
<script type="text/javascript" src="js/jquery.countimator.wheel.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/easy-ticker.js"></script>
<script type="text/javascript" src="js/jquery.introLoader.min.js"></script>
<script type="text/javascript" src="js/jquery.responsivegrid.js"></script>
<script type="text/javascript" src="js/customs.js"></script>

<script src="js/validator.min.js"></script>

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/infobox.js"></script>
