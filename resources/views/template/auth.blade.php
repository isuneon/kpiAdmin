<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html>
<!--<![endif]-->
<!-- BEGIN HEAD -->
	<head>
		<meta charset="utf-8"/>
		<title>KPISOCIAL | LOGIN</title>
		<meta http-equiv="X-UA-Compatible" 	content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta http-equiv="Content-type" 	content="text/html; charset=utf-8">
		<meta 								content="" name="description"/>
		<meta 								content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES-->

		<!--
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
		-->
		<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" 		rel="stylesheet" type="text/css"/>
		<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" 	rel="stylesheet" type="text/css"/>
		<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" 				rel="stylesheet" type="text/css"/>
		<link href="assets/global/plugins/uniform/css/uniform.default.css" 				rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link href="assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
		<!-- END PAGE LEVEL SCRIPTS -->
		<!-- BEGIN THEME STYLES -->
		<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
		<link href="assets/global/css/plugins.css" 									rel="stylesheet" type="text/css"/>
		<link href="assets/admin/layout/css/layout.css" 							rel="stylesheet" type="text/css"/>

		<link href="assets/admin/layout/css/themes/default.css" 				rel="stylesheet" type="text/css" id="style_color"/>
		<link href="assets/admin/layout/css/custom.css" 						rel="stylesheet" type="text/css"/>


		<!-- END THEME STYLES -->
		<link rel="shortcut icon" href="favicon.ico"/>
	</head>
	<!-- END HEAD -->
	<!-- BEGIN BODY -->
	<body class="login">
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

		<!-- END SIDEBAR TOGGLER BUTTON -->
		<!-- BEGIN LOGO -->
		<div class="logo">
			<img src="assets/admin/layout/img/logo-big.png" alt=""/>
			</a>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN LOGIN -->

		@yield('content')



	<!-- END LOGIN -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->
	<!--[if lt IE 9]>

	<![endif]

		<script src="assets/global/plugins/respond.min.js"></script>
		<script src="assets/global/plugins/excanvas.min.js"></script>
	-->

		<script src="assets/global/plugins/jquery.min.js" 								type="text/javascript"></script>
		<script src="assets/global/plugins/jquery-migrate.min.js" 						type="text/javascript"></script>
		<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js"				type="text/javascript"></script>
		<script src="assets/global/plugins/jquery.blockui.min.js" 						type="text/javascript"></script>
		<script src="assets/global/plugins/uniform/jquery.uniform.min.js"	 			type="text/javascript"></script>
		<script src="assets/global/plugins/jquery.cokie.min.js" 							type="text/javascript"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script src="assets/global/plugins/jquery-validation/js/jquery.validate.min.js" 	type="text/javascript"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script src="assets/global/scripts/metronic.js" 									type="text/javascript"></script>
		<script src="assets/global/scripts/sha1.js" 										type="text/javascript"></script>
		<script src="assets/admin/layout/scripts/layout.js" 								type="text/javascript"></script>
		<script src="assets/admin/layout/scripts/demo.js" 								type="text/javascript"></script>
		<script src="assets/admin/pages/scripts/login.js" 								type="text/javascript"></script>
		<!-- END PAGE LEVEL SCRIPTS -->

		<!--
			AÑADIDAS
				assets/global/plugins/jquery.cokie.min.js
				assets/global/scripts/sha1.js
		 -->



		<script>
			jQuery(document).ready(function() {
			Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			Login.init();
			Demo.init();
			});
		</script>

		<script type="text/javascript">
		    function cifrar(){
						var input_pass = document.getElementById("password");
						input_pass.value = sha1(input_pass.value);
					}
		</script>


		<!-- 	END JAVASCRIPTS -->
	</body>

	<!-- END BODY -->
</html>
