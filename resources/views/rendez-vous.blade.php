@extends('layouts.app')

@section('content')

    {{-- <!-- Vendor CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="vendor/animate/animate.compat.css">
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">
    <link rel="stylesheet" href="vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css">
    <link rel="stylesheet" href="vendor/bootstrap-timepicker/css/bootstrap-timepicker.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="css/theme-elements.css">
    <link rel="stylesheet" href="css/theme-blog.css">
    <link rel="stylesheet" href="css/theme-shop.css">



    <!-- Demo CSS -->
    <link rel="stylesheet" href="css/demos/demo-auto-services.css">
    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="css/skins/skin-auto-services.css">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.min.js"></script> --}}

    <div class="body">


        @include('header')
        <div role="main" class="main">

            <section class="page-header page-header-modern bg-color-light-scale-1 page-header-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 order-2 order-md-1 align-self-center p-static">
                            <h1 class="text-color-dark font-weight-bold">Appointment</h1>
                        </div>
                        <div class="col-md-4 order-1 order-md-2 align-self-center">
                            <ul class="breadcrumb d-flex justify-content-md-end text-3-5">
                                <li><a href="demo-auto-services.html"
                                        class="text-color-default text-color-hover-primary text-decoration-none">HOME</a>
                                </li>
                                <li class="active">APPOINTMENT</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
	<div class="container my-5 pt-4 pb-5">

				<div class="row">
					<div class="col">
						<form class="contact-form custom-form-style-1" action="php/rendez_vous.php" method="POST">
							<div class="contact-form-success alert alert-success d-none mt-4">
								<strong>Success!</strong> Your appointment has been sent to us.
							</div>

							<div class="contact-form-error alert alert-danger d-none mt-4">
								<strong>Error!</strong> There was an error sending your appointment.
								<span class="mail-error-message text-1 d-block"></span>
							</div>

							<div class="form-row">
								<div class="col">
									<h2 class="text-color-dark font-weight-bold text-4-5 mb-3">Personal Information:</h2>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 mb-3">
									<input type="text" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control" name="firstName" id="firstName" required placeholder="First Name">
								</div>
								<div class="form-group col-md-6 mb-3">
									<input type="text" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control" name="lastName" id="lastName" required placeholder="Last Name">
								</div>
							</div>
							<div class="form-row mb-3">
								<div class="form-group col-md-6 mb-3">
									<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="E-mail Address">
								</div>
								<div class="form-group col-md-6 mb-3">
									<input type="tel" value="" data-msg-required="Please enter your phone." maxlength="100" class="form-control" name="phone" id="phone" required placeholder="Phone">
								</div>
							</div>

							<div class="form-row mb-3">
								<div class="form-group col-md-6 mb-3">
									<input type="text" value="" data-msg-required="Please select a date." maxlength="100" class="form-control custom-datepicker" name="firstDate" id="firstDate" required placeholder="Date">
								</div>
								<div class="form-group col-md-6 mb-3">
									<input type="text" value="" data-msg-required="Please select a time." maxlength="100" class="form-control custom-timepicker" name="firstTime" id="firstTime" required placeholder="Time">
								</div>
							</div>
							<div class="form-row mb-3">
								<div class="form-group col">
									<textarea maxlength="5000" data-msg-required="Please enter your reason." rows="5" class="form-control" name="reason" id="reason" placeholder="Description"></textarea>
								</div>
							</div>

							<div class="form-row pb-2 mb-4">
								<div class="col">
									<div class="alert alert-warning custom-alert-bg-color-1">
										<p class="text-2 mb-0"><i class="fas fa-info-circle mr-1"></i> Please note that the date and time you requested may not be available. We will contact you to confirm your actual appointment details.</p>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col mb-0">
									<input type="submit" class="btn btn-primary btn-modern font-weight-bold custom-btn-border-radius custom-btn-arrow-effect-1 text-3 px-5 py-3" data-loading-text="Loading..." value="SUBMIT">										
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>



        </div>
        @include('footer')


    </div>

    {{-- <!-- Vendor -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery.appear/jquery.appear.min.js"></script>
    <script src="vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
    <script src="vendor/popper/umd/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.validation/jquery.validate.min.js"></script>
    <script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
    <script src="vendor/lazysizes/lazysizes.min.js"></script>
    <script src="vendor/isotope/jquery.isotope.min.js"></script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <script src="vendor/vivus/vivus.min.js"></script>
    <script src="vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="vendor/bootstrap-star-rating/js/star-rating.min.js"></script>
    <script src="vendor/bootstrap-star-rating/themes/krajee-fas/theme.min.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>


    <!-- Current Page Vendor and Views -->


    <!-- Current Page Vendor and Views -->
    <script src="js/views/view.contact.js"></script>


    <!-- Demo -->
    <script src="js/demos/demo-auto-services.js"></script>
    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script> --}}
@endsection
