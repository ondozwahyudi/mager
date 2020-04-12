<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Mager</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
         <!-- Styles -->
          <!-- Scripts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<link href="{{asset('')}}assets/css/demo1/pages/general/login/login-6.css" rel="stylesheet" type="text/css" />
		<link href="{{asset('')}}assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('')}}assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

  @yield('content')
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
		<script src="{{asset('')}}assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="{{asset('')}}/assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="{{asset('')}}assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="{{asset('')}}assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="{{asset('')}}assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="{{asset('')}}assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
		<script src="{{asset('')}}assets/js/demo1/pages/login/login-general.js" type="text/javascript"></script>
		@yield('js')
	</body>
</html>