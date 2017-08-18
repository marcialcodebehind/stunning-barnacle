<!DOCTYPE html>
<html lang="en" class="no-js">
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title> {{Settings::get('site_name')}} | Admin</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/plugins/Uniform-3.0/dist/css/default.css')}}" rel="stylesheet" type="text/css"/>

<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css" />
<!-- <link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}" /> -->
<!-- END PAGE LEVEL PLUGIN STYLES -->

<!-- BEGIN PAGE STYLES -->

<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<?php $color = Settings::get('theme_color');?>
<?php $components = Settings::get('theme_style');?>
<link href="{{asset('assets/global/css/'.$components.'.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/global/css/plugins-md.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/admin/layout/css/layout.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/admin/layout/css/themes/'.$color.'.css')}}" id="style_color" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/admin/layout/css/custom.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('assets/admin/layout/css/style.css')}}" rel="stylesheet" type="text/css"/>
@stack('style')
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-md page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
@include('metronic::admin.partials.top-nav')
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div id="body_container" class="container"> <!-- remove container if fluid -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		@include('metronic::admin.partials.sidebar-nav')
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				
				<!-- BEGIN PAGE HEADER-->
				@include('metronic::admin.partials.page-header')
				<!-- END PAGE HEADER-->
				<!-- START PAGE BODY -->
				@yield('page_body')
				<!-- END PAGE BODY -->
			</div>
		</div>
		<!-- END CONTENT -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	@include('metronic::admin.partials.footer')
	<!-- END FOOTER -->

	<!-- BEGIN STYLE CUSTOMIZER -->
	@include('metronic::admin.partials.metronic-setting')
	<!-- END STYLE CUSTOMIZER -->
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script type="text/javascript" src="{{mix('/js/core_plugins.js')}}"></script>
<script type="text/javascript" src="{{mix('/js/app.js')}}"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- <script src="{{asset('assets/global/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script> -->
<!-- <script src="{{asset('assets/offline_cdnjs/jquery.sparkline.min.js')}}" type="text/javascript"></script> -->

<!--select-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js" type="text/javascript" ></script>
<!-- <script src="{{asset('assets/global/plugins/select2/select2.min.js')}}" type="text/javascript" ></script> -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="{{mix('/js/metronic_layout.js')}}"></script>

<!-- END PAGE LEVEL SCRIPTS -->
<script>
$(function() {   
	Metronic.init(); // init metronic core componets
	Layout.init(); // init layout
	Demo.init(); // init demo features 
});
var vm = new Vue({
	el: "#top-menu",
	methods: {
		logout: function () {
			axios.post("{{ url('/logout') }}");
			this.reload();
		},
		reload: function(){
			setTimeout(function(){ location.reload(); }, 500);
		},
	}
})
</script>
@stack('scripts')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>