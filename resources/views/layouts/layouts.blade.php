<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title>Mager</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<!--end::Fonts -->

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="{{asset('')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="{{asset('')}}/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="{{asset('')}}/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
 		<link href="{{asset('')}}/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{asset('')}}/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="{{asset('')}}/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/css/demo1/skins/brand/light.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="{{asset('')}}/assets/media/logos/favicon.ico" />

	</head>

	<!-- end::Head -->

	{{-- <!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"> --}}

		<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-page--loading">

	@include('partials/navbar')

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
          colors: {
            state: {
              brand: "#5d78ff",
              dark: "#282a3c",
              light: "#ffffff",
              primary: "#5867dd",
              success: "#34bfa3",
              info: "#36a3f7",
              warning: "#ffb822",
              danger: "#fd3995",
            },
            base: {
              label: ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
              shape: ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"],
            },
          },
        };
      </script>

 		<!-- begin::Global Config(global config for global JS sciprts) -->
         <script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>
	<!--begin:: Global Mandatory Vendors -->
	<script src="{{asset('')}}/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
	<!--end:: Global Mandatory Vendors -->

	<!--begin:: Global Optional Vendors -->
	<script src="{{asset('')}}/assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
	<!--end:: Global Optional Vendors -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="{{asset('')}}/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors(used by this page) -->
	<script src="{{asset('')}}/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
	<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="{{asset('')}}/assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>
	<script src="{{asset('')}}/assets/js/demo1/pages/components/extended/blockui.js" type="text/javascript"></script>
	</body>
</html>
