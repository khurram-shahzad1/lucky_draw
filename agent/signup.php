<?php include "comp/header.php";
include "core/dbconfig.php";
// include "core/functions.php";

// if(isset($_COOKIE["admin_auth"]) && $_COOKIE['admin_auth'] == md5('AdminIsAuthenticatedByAliHamza')){
// 	header("location: dashboard");	
// }


?>
<!--begin::Page Custom Styles(used by this page)-->
<link href="assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Login-->
			<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
				<!--begin::Aside-->
				<div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #F2C98A;">
					<!--begin::Aside Top-->
					<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<!--begin::Aside header-->
						<a href="#" class="text-center mb-10">
							<img src="assets/media/logos/logo.png" class="max-h-70px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin::Aside title-->
						<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;"></h3>
						<!--end::Aside title-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/svg/illustrations/login-visual-1.svg)"></div>
					<!--end::Aside Bottom-->
				</div>
				<!--begin::Aside-->
				<!--begin::Content-->
				<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
					<!--begin::Content body-->
					<div class="d-flex flex-column-fluid flex-center">
						<!--begin::Signin-->
						<div class="login-form login-signin">
							<!--begin::Form-->
							<form class="form" method="POST" id="signUpForm">
								<!--begin::Form group-->
								<div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Agent First Name</label>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="firstname" autocomplete="off" required />
								</div>

                                <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Agent Last Name</label>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="lastname" autocomplete="off" required />
								</div>
                                <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Agent Email</label>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="email" autocomplete="off" required />
								</div>
                                <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Agent Mobile Number</label>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="number" autocomplete="off" required />
								</div>
                                <div class="form-group">
									<label class="font-size-h6 font-weight-bolder text-dark">Agent Address</label>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="text" name="address" autocomplete="off" required />
								</div>
								<!--end::Form group-->
								<!--begin::Form group-->
								<div class="form-group">
									<div class="d-flex justify-content-between mt-n5">
										<label class="font-size-h6 font-weight-bolder text-dark pt-5">Agent Password</label>
									</div>
									<input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg" type="password" name="password" autocomplete="off" required />
									<input type="hidden" name="signUpForm" value="1">
									<p class="mt-3">Already Have An Account?<a href="index.php"> SignIn Here!</a></p>
								</div>
								<!--end::Form group-->
								<!--begin::Action-->
								<div class="pb-lg-0 pb-5">
									<button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign Up</button>
								</div>
								<!--end::Action-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Signin-->
						<!--begin::Signup-->
						<!--end::Signup-->
						<!--begin::Forgot-->
						<!--end::Forgot-->
					</div>
					<!--end::Content body-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Login-->
		</div>
		<!--end::Main-->
<?php include "comp/footer.php"?>
<script>
$(function () {
            $('#signInForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'core/actions.php',
                    data: $('#signInForm').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0") {
							alert("Incorrect Credentials");
                               setTimeout(function () {
                            location.reload();
                        }, 500);
                        } else {
                                setTimeout(function () {
                                    location.replace('dashboard.php');
                                }, 500);

                        }
                    }
                });

            });
        })

        $(function () {
            $('#signUpForm').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'core/actions.php',
                    data: $('#signUpForm').serialize(),
                    success: function (val) {
                        console.log(val);
                        if (val == "0") {
							alert("Sorry... email already regisrtered!");
                          setTimeout(function () {
                          location.reload();
                        }, 500);
                        } else {
                            if (val == "1") {
								alert("Fill all the fields!");
                                setTimeout(function () {
                                location.reload();
                                }, 500);
                            } else {
                              setTimeout(function () {
                                location.replace('index.php');
                            }, 500);
                            }
                        }
                    }
                });

            });
        })
        </script>