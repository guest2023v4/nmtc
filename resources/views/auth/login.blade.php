<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>NMTC - Sign in</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->

		<div class="d-flex flex-column flex-root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/login-bg.png'); } [data-theme="dark"] body { background-image: url('assets/media/login-bg.png'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::Aside-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::Aside-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="/" class="mb-7">
							<img alt="Logo" src="assets/media/logos/logo_2x.png" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">“Strong, United, Working until we fall”</h2>
						<!--end::Title-->
					</div>
					<!--begin::Aside-->
				</div>
				<!--begin::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::Card-->
					<div class="card rounded-3 w-md-550px">
						<!--begin::Card body-->
						<div class="card-body p-10 p-lg-20">
							<!--begin::Form-->
							<form method="POST" class="form w-100" novalidate="novalidate"  action="{{ route('login') }}">
								@csrf
								<!--begin::Heading-->
								<div class="text-center mb-11">
									<!--begin::Title-->
									<h1 class="text-dark fw-bolder mb-3">Sign In</h1>
									<!--end::Title-->
									<!--begin::Subtitle-->
									<div class="text-gray-500 fw-semibold fs-6">Your NMTC Account</div>
									<!--end::Subtitle=-->
								</div>
								<!--begin::Heading-->
								
								<!--begin::Input group=-->
								<div class="fv-row mb-8">
									<!--begin::Email-->
									<input type="email" placeholder="Email" name="email" autocomplete="on" class="form-control bg-transparent" />
									<!--end::Email-->
									<span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>
								<!--end::Input group=-->
								<div class="fv-row mb-3">
									<!--begin::Password-->
									<input type="password" placeholder="Password" name="password" autocomplete="off" class="form-control bg-transparent" />
									<!--end::Password-->
									<span class="text-danger">@error('password'){{ $message }}@enderror</span>
								</div>
								<!--end::Input group=-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
									<div></div>
									<!--begin::Link-->
									<a href="{{route('password.request')}}" class="link-primary">Forgot Password ?</a>
									<!--end::Link-->
								</div>
								<!--end::Wrapper-->
								<!--begin::Submit button-->
								<div class="d-grid mb-10">
									<button type="submit"  class="btn btn-primary">
										<!--begin::Indicator label-->
										<span class="indicator-label">Sign In</span>
									
									</button>
								</div>
								<!--end::Submit button-->
								<!--begin::Sign up-->
								<div class="text-gray-500 text-center fw-semibold fs-6">Don't have an account yet ?
								<a href="{{route('register')}}" class="link-primary">Sign up</a></div>
								<!--end::Sign up-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->

		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		{{-- <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js')}}"></script> --}}
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>