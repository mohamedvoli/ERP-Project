<!DOCTYPE html>
<html class="" lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="admin-themes-lab">
  <meta name="author" content="themes-lab">
  <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/png">
  <title>My Subjects</title>
  <link href="http://fonts.googleapis.com/css?family=Nothing+You+Could+Do" rel="stylesheet" type="text/css">
  <link href="../assets/css/style.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="../assets/css/theme.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="../assets/css/ui.css" rel="stylesheet"> <!-- MANDATORY -->
  <link href="../assets/plugins/datatables/dataTables.min.css" rel="stylesheet">
<link href="../builder/page-builder/plugins/slider-pips/jquery-ui-slider-pips.css" rel="stylesheet">
<script src="../assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>

</head>

<!-- BEGIN BODY -->
<body class="fixed-topbar color-default theme-sdtl submenu-hover">
  <section>
		<!--Begin sidebar   -->
		<?php 
			include'sidebar.php';
		?>
		<!--End sidebar   -->
		
		
      <div class="main-content" style="min-height:600px !important;">
	  
		   <!--Start topbar  ->
			<?php include'topbar.php' ?>
		   <!--End topbar  ->
		   
		 <!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				<!-- Start The tabs-panel-->
					<div class="nav-tabs3">
                        <ul id="myTab6" class="nav nav-tabs">
                          <li class="active"><a href="#tab6_1" data-toggle="tab">SW-2</a></li>
                          <li><a href="#tab6_2" data-toggle="tab">Graphics</a></li>
                          <li><a href="#tab6_3" data-toggle="tab">PL3</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane fade in active" id="tab6_1">
							 <div class="panel-content">
                      <div class="tab_left">
                        <ul  class="nav nav-tabs nav-red">
                          <li class="active in"><a href="#tab3_1" data-toggle="tab">Lectures's</a></li>
                          <li ><a href="#tab3_2" data-toggle="tab">Book's</a></li>
                          <li><a href="#tab3_3" data-toggle="tab">Home work</a></li>
                        </ul>
						
                        <div class="tab-content">
                          <div class="tab-pane fade in active" id="tab3_1">
                          <ul>
							<li><a>lecture1</a></li>
							<li><a>lecture2</a></li>
							<li><a>lecture3</a></li>
						  </ul>
						  </div>
                          <div class="tab-pane fade" id="tab3_2">
                            <li><a>Book1</a></li>
							<li><a>Book2</a></li>
							<li><a>Book3</a></li>
						  </div>
                          <div class="tab-pane fade" id="tab3_3">
                            <li><a>sheet1</a></li>
							<li><a>sheet2</a></li>
							<li><a>sheet3</a></li>
						  </div>
                        </div>
                      </div>
                    </div>
                          </div>
                          <div class="tab-pane fade" id="tab6_2">
							 <div class="panel-content">
                      <div class="tab_left">
                        <ul  class="nav nav-tabs nav-red">
                          <li class="active in"><a href="#tab4_1" data-toggle="tab">Lectures's</a></li>
                          <li ><a href="#tab4_2" data-toggle="tab">Book's</a></li>
                          <li><a href="#tab4_3" data-toggle="tab">Home work</a></li>
                        </ul>
						
                        <div class="tab-content">
                          <div class="tab-pane fade in active" id="tab4_1">
                          <ul>
							<li><a>lecture1</a></li>
							<li><a>lecture2</a></li>
							<li><a>lecture3</a></li>
						  </ul>
						  </div>
                          <div class="tab-pane fade" id="tab4_2">
                            <li><a>Book1</a></li>
							<li><a>Book2</a></li>
							<li><a>Book3</a></li>
						  </div>
                          <div class="tab-pane fade" id="tab4_3">
                            <li><a>sheet1</a></li>
							<li><a>sheet2</a></li>
							<li><a>sheet3</a></li>
						  </div>
                        </div>
                      </div>
                    </div>
                          </div>
                          <div class="tab-pane fade" id="tab6_3">
                           <div class="panel-content">
                      <div class="tab_left">
                        <ul  class="nav nav-tabs nav-red">
                          <li class="active in"><a href="#tab5_1" data-toggle="tab">Lectures's</a></li>
                          <li ><a href="#tab5_2" data-toggle="tab">Book's</a></li>
                          <li><a href="#tab5_3" data-toggle="tab">Home work</a></li>
                        </ul>
						
                        <div class="tab-content">
                          <div class="tab-pane fade in active" id="tab5_1">
                          <ul>
							<li><a>lecture1</a></li>
							<li><a>lecture2</a></li>
							<li><a>lecture3</a></li>
						  </ul>
						  </div>
                          <div class="tab-pane fade" id="tab5_2">
                            <li><a>Book1</a></li>
							<li><a>Book2</a></li>
							<li><a>Book3</a></li>
						  </div>
                          <div class="tab-pane fade" id="tab5_3">
                            <li><a>sheet1</a></li>
							<li><a>sheet2</a></li>
							<li><a>sheet3</a></li>
						  </div>
                        </div>
                      </div>
                    </div>
						  </div>
                        </div>
                      </div>
				<!-- End the tabs panel-->
			</div>
	  </div>
		 <!-- END PAGE CONTENT -->
   </section>
<!-- Preloader -->
<div class="loader-overlay">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up"></i></a>
<script src="../assets/plugins/jquery/jquery-1.11.1.min.js"></script>
<script src="../assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="../assets/plugins/gsap/main-gsap.min.js"></script> <!-- HTML Animations -->
<script src="../assets/plugins/jquery-ui/jquery-ui-1.11.2.min.js"></script>
<script src="../assets/plugins/jquery-block-ui/jquery.blockUI.min.js"></script> <!-- simulate synchronous behavior when using AJAX -->
<script src="../assets/plugins/translate/jqueryTranslator.min.js"></script> <!-- Translate Plugin with JSON data -->
<script src="../assets/plugins/bootbox/bootbox.min.js"></script>
<script src="../assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script> <!-- Custom Scrollbar sidebar -->
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script> <!-- Show Dropdown on Mouseover -->
<script src="../assets/plugins/bootstrap-progressbar/bootstrap-progressbar.min.js"></script> <!-- Animated Progress Bar -->
<script src="../assets/plugins/switchery/switchery.min.js"></script> <!-- IOS Switch -->
<script src="../assets/plugins/charts-sparkline/sparkline.min.js"></script> <!-- Charts Sparkline -->
<script src="../assets/plugins/retina/retina.min.js"></script>  <!-- Retina Display -->
<script src="../assets/plugins/jquery-cookies/jquery.cookies.js"></script> <!-- Jquery Cookies, for theme -->
<script src="../assets/plugins/bootstrap/js/jasny-bootstrap.min.js"></script> <!-- File Upload and Input Masks -->
<script src="../assets/plugins/select2/select2.min.js"></script> <!-- Select Inputs -->
<script src="../assets/plugins/bootstrap-tags-input/bootstrap-tagsinput.min.js"></script> <!-- Select Inputs -->
<script src="../assets/plugins/bootstrap-loading/lada.min.js"></script> <!-- Buttons Loading State -->
<script src="../assets/plugins/timepicker/jquery-ui-timepicker-addon.min.js"></script> <!-- Time Picker -->
<script src="../assets/plugins/multidatepicker/multidatespicker.min.js"></script> <!-- Multi dates Picker -->
<script src="../assets/plugins/colorpicker/spectrum.min.js"></script> <!-- Color Picker -->
<script src="../assets/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script> <!-- A mobile and touch friendly input spinner component for Bootstrap -->
<script src="../assets/plugins/autosize/autosize.min.js"></script> <!-- Textarea autoresize -->
<script src="../assets/plugins/icheck/icheck.min.js"></script> <!-- Icheck -->
<script src="../assets/plugins/bootstrap-editable/js/bootstrap-editable.min.js"></script> <!-- Inline Edition X-editable -->
<script src="../assets/plugins/bootstrap-context-menu/bootstrap-contextmenu.min.js"></script> <!-- File Upload and Input Masks -->
<script src="../assets/plugins/prettify/prettify.min.js"></script> <!-- Show html code -->
<script src="../assets/plugins/slick/slick.min.js"></script> <!-- Slider -->
<script src="../assets/plugins/countup/countUp.min.js"></script> <!-- Animated Counter Number -->
<script src="../assets/plugins/noty/jquery.noty.packaged.min.js"></script>  <!-- Notifications -->
<script src="../assets/plugins/backstretch/backstretch.min.js"></script> <!-- Background Image -->
<script src="../assets/plugins/charts-chartjs/Chart.min.js"></script>  <!-- ChartJS Chart -->
<script src="../assets/plugins/bootstrap-slider/bootstrap-slider.js"></script> <!-- Bootstrap Input Slider -->
<script src="../assets/plugins/visible/jquery.visible.min.js"></script> <!-- Visible in Viewport -->
<script src="../assets/js/builder.js"></script>
<script src="../assets/js/sidebar_hover.js"></script>
<script src="../assets/js/application.js"></script> <!-- Main Application Script -->
<script src="../assets/js/plugins.js"></script> <!-- Main Plugin Initialization Script -->
<script src="../assets/js/widgets/notes.js"></script>
<script src="../assets/js/quickview.js"></script> <!-- Quickview Script -->
<script src="../assets/js/pages/search.js"></script> <!-- Search Script -->
<!-- BEGIN PAGE SCRIPTS -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script> <!-- Tables Filtering, Sorting & Editing -->
<script src="../assets/plugins/summernote/summernote.js"></script>
<script src="../assets/plugins/skycons/skycons.js"></script>
<script src="../assets/plugins/simple-weather/jquery.simpleWeather.min.js"></script>
<script src="../assets/js/widgets/widget_weather.js"></script>
<script src="../assets/js/widgets/todo_list.js"></script>
<script src="../builder/page-builder/plugins/slider-pips/jquery-ui-slider-pips.min.js"></script>
<script src="../builder/page-builder/plugins/saveas/saveAs.js"></script>
<script src="../builder/page-builder/js/builder_page.js"></script>
<!-- END PAGE SCRIPTS -->

</body>
</html>