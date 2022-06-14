<!DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>

<body>

	<!-- Main navbar -->

	<?php include 'includes/mainNav.php'; ?>

	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Victoria Baker</span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->

					<?php include 'includes/navigation.php'; ?>

					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href=""><i class="icon-image-compare position-left"></i> Banner</a></li>
							<li><a href="">List</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Banner List</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<li style=""><a href="" class="btn btn-primary add-new">Add New</a></li>
									<!-- <li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li> -->
								</ul>
							</div>
						</div>

						<div class="panel-body">

							<!-- Default select -->
							<div class="form-group">
								<label>Default select</label>
								<select class="bootstrap-select" data-width="100%">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /default select -->


							<!-- Option groups support -->
							<div class="form-group">
								<label>Option groups support</label>
								<select class="bootstrap-select" data-width="100%">
									<optgroup label="Alaskan/Hawaiian Time Zone">
										<option value="AK">Alaska</option>
										<option value="HI">Hawaii</option>
									</optgroup>
									<optgroup label="Pacific Time Zone">
										<option value="CA">California</option>
										<option value="NV">Nevada</option>
										<option value="OR">Oregon</option>
									</optgroup>
									<optgroup label="Mountain Time Zone">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
									</optgroup>
								</select>
							</div>
							<!-- /option groups support -->


							<!-- Multiple select -->
							<div class="form-group">
								<label>Multiple select</label>
								<select class="bootstrap-select" multiple="multiple" data-width="100%">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /multiple select -->


							<!-- Multiple limited select -->
							<div class="form-group">
								<label>Limited select</label>
								<select class="bootstrap-select" multiple="multiple" data-max-options="2" data-width="100%">
									<option value="AK">Max 2 options</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /multiple limited select -->


							<!-- Disabled state -->
							<div class="form-group">
								<label>Disabled state</label>
								<select class="bootstrap-select" disabled="disabled" data-width="100%">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /disabled state -->


							<!-- Disabled option state -->
							<div class="form-group">
								<label>Disabled option state</label>
								<select class="bootstrap-select" data-width="100%">
									<option value="AK">Alaska</option>
									<option value="HI" disabled="disabled">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV" disabled="disabled">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /disabled option state -->


							<!-- Disabled state for option groups -->
							<div class="form-group">
								<label>Disabled state for option groups</label>
								<select class="bootstrap-select" data-width="100%">
									<optgroup label="Pacific Time Zone" disabled="disabled">
										<option value="CA">California</option>
										<option value="NV">Nevada</option>
										<option value="WA">Washington</option>
									</optgroup>
									<optgroup label="Mountain Time Zone">
										<option value="AZ">Arizona</option>
										<option value="CO">Colorado</option>
										<option value="ID">Idaho</option>
									</optgroup>
									<optgroup label="Central Time Zone" disabled="disabled">
										<option value="AL">Alabama</option>
										<option value="AR">Arkansas</option>
										<option value="IL">Illinois</option>
									</optgroup>
								</select>
							</div>
							<!-- /disabled state for option groups -->


							<!-- Title alternative support -->
							<div class="form-group">
								<label>Option display alternative</label>
								<select class="bootstrap-select" data-width="100%">
									<option value="select">Select Hawaii</option>
									<option value="HI" title="This is a custom title for Hawaii">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /title alternative support -->


							<!-- Title alternative in multiple select -->
							<div class="form-group">
								<label>Options display alternative in multiple select</label>
								<select class="bootstrap-select" multiple="multiple" title="Choose one of the following..." data-width="100%">
									<option value="select">Select Hawaii, California and Nevada</option>
									<option value="HI" title="Fun">Hawaii</option>
									<option value="CA" title="Hollywood">California</option>
									<option value="NV" title="Casino">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /title alternative in multiple select -->


							<!-- Selection display alternative -->
							<div class="form-group">
								<label>Selection display alternative</label>
								<select class="bootstrap-select" multiple="multiple" data-selected-text-format="count" data-width="100%">
									<option value="select">Select 2 options</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- selection display alternative -->


							<!-- Custom count -->
							<div class="form-group">
								<label>Start count after 3rd selection</label>
								<select class="bootstrap-select" multiple="multiple" data-selected-text-format="count > 3" data-width="100%">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /custom count -->


							<!-- Select with icons -->
							<div class="form-group">
								<label>Select with icons</label>
								<select class="bootstrap-select" data-show-subtext="true" data-width="100%">
									<optgroup label="Services">
										<option value="wordpress2" data-icon="icon-wordpress2">Wordpress</option>
										<option value="tumblr2" data-icon="icon-tumblr2">Tumblr</option>
										<option value="stumbleupon" data-icon="icon-stumbleupon">Stumble upon</option>
										<option value="pinterest2" data-icon="icon-pinterest2">Pinterest</option>
										<option value="lastfm2" data-icon="icon-lastfm2">Lastfm</option>
									</optgroup>
									<optgroup label="File types">
										<option value="pdf" data-icon="icon-file-pdf">PDF</option>
										<option value="word" data-icon="icon-file-word">Word</option>
										<option value="excel" data-icon="icon-file-excel">Excel</option>
										<option value="openoffice" data-icon="icon-file-openoffice">Open office</option>
									</optgroup>
									<optgroup label="Browsers">
										<option value="chrome" data-icon="icon-chrome" selected="selected">Chrome</option>
										<option value="firefox" data-icon="icon-firefox">Firefox</option>
										<option value="safari" data-icon="icon-safari">Safari</option>
										<option value="opera" data-icon="icon-opera">Opera</option>
										<option value="IE" data-icon="icon-IE">IE</option>
									</optgroup>
								</select>
							</div>
							<!-- /select with icons -->


							<!-- Custom options class -->
							<div class="form-group">
								<label>Custom options class</label>
								<select class="bootstrap-select" data-width="100%">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
									<option value="CA">California</option>
									<option value="NV" class="special-class">Nevada</option>
									<option value="OR">Oregon</option>
								</select>
							</div>
							<!-- /custom options class -->


							<!-- Using divider -->
							<div class="form-group">
								<label>Option divider support</label>
								<select class="bootstrap-select" data-width="100%">
									<option value="AK">Alaska</option>
									<option value="HI">Hawaii</option>
									<option value="CA" data-divider="true">California</option>
									<option value="NV">Nevada</option>
									<option value="OR">Oregon</option>
									<option value="WA" data-divider="true">Washington</option>
									<option value="AZ">Arizona</option>
									<option value="CO">Colorado</option>
								</select>
							</div>
							<!-- /using divider -->

						</div>


					</div>
					<!-- /basic datatable -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

	<?php include 'includes/script.php'; ?>

</body>

</html>