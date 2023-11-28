<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<title>NFTC</title>
	
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
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
	
		<div class="d-flex flex-column flex-root">
			<!--begin::Page bg image-->
			<style>body { background-image: url('assets/media/login-bg.png'); } [data-theme="dark"] body { background-image: url('assets/media/login-bg.png'); }</style>
			<!--end::Page bg image-->
			<!--begin::Authentication - Signup Welcome Message -->
			<div class="d-flex flex-column flex-center flex-column-fluid">
				<!--begin::Content-->
				<div class="d-flex flex-column flex-center text-center p-10">
					<!--begin::Wrapper-->
					<div class="card card-flush w-md-650px py-5">
						<div class="card-body py-15 py-lg-20">
							<!--begin::Logo-->
							<div class="mb-7">
								<a href="/" class="">
									<img alt="Logo" src="assets/media/logos/logo_2x.png" class="h-40px" />
								</a>
							</div>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="fw-bolder text-gray-900 mb-5">NFTC</h1>
							<!--end::Title-->
							<!--begin::Text-->
							<div class="fw-semibold fs-6 text-gray-500 mb-7">Click on download</div>
							<!--end::Text-->
							<!--begin::Illustration-->
						
							<!--end::Illustration-->
							<!--begin::Link-->
							<div class="mb-0">
								<a href="{{url('downloads/NFTC.apk')}}" class="btn btn-sm btn-primary">Download APK</a>
							</div>
							<!--end::Link-->
						</div>
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Authentication - Signup Welcome Message-->
		</div>
	
	
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
	
	</body>

</html>