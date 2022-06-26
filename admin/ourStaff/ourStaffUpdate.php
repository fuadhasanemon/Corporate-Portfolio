<!DOCTYPE html>
<html lang="en">

<?php 

	if(basename(__DIR__) != 'admin'){
		$baseUrl = '../';
		$isInternal = true;
	} else {
		$baseUrl = '';
		$isInternal = false;
	}

?>

<?php include '../includes/head.php'; ?>

<body>

	<!-- Main navbar -->

	<?php include '../includes/mainNav.php'; ?>

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

					<?php include '../includes/navigation.php'; ?>

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
							<li><a href=""><i class="icon-image-compare position-left"></i> Our Staff</a></li>
							<li><a href="">Update</a></li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Our Staff Update</h5>
							<div class="heading-elements">
								<ul class="icons-list">
									<!-- <li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li> -->
								</ul>
							</div>
						</div>

						<div class="panel-body">

							
							<?php
								require '../controller/dbConfig.php';
								$ourStaff_id = $_GET['ourStaff_id'];
								$singleOurStaffQuery = "SELECT * FROM ourStaff WHERE id={$ourStaff_id}";
								$getResults = mysqli_query($dbCon, $singleOurStaffQuery);
							?>


							<form class="form-horizontal" action="../controller/ourStaffController.php" method="POST">
								<fieldset class="content-group mt-5">

									<?php
										if(isset($_GET['msg'])){

									?>

									<div class="alert alert-success alert-bordered">
										<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
										<span class="text-semibold">Well done!</span> <?php echo $_GET['msg']; ?>
								    </div>

									<?php } ?>

									<?php 
										foreach($getResults as $key => $ourStaff){

										
									?>
										
										<input type="hidden" class="form-control" name="ourStaff_id" value="<?php echo $ourStaff['id']; ?>">

										<div class="form-group">
											<label class="control-label col-lg-2" for="title">Title</label>
											<div class="col-lg-10">
												<input type="text" class="form-control" id="title" name="title" value="<?php echo $ourStaff['title']; ?>" required>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2" for="sub_title">Sub Title</label>
											<div class="col-lg-10">
												<input type="text" class="form-control" id="sub_title" name="sub_title" value="<?php echo $ourStaff['sub_title']; ?>" required>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2" for="details">Details</label>
											<div class="col-lg-10">
												<textarea rows="5" cols="5" class="form-control" placeholder="Default textarea" id="details" name="details" required><?php echo $ourStaff['details']; ?></textarea>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-lg-2" for="image">Image</label>
											<div class="col-lg-10">
												<input type="file" class="form-control" id="image" name="image">
											</div>
										</div>

									<?php } ?>

								</fieldset>

								<div class="text-right">
									<a type="submit" href="ourStaffList.php" class="btn btn-warning">Back to the list</a>
									<button type="submit" class="btn btn-primary" name="updateOurStaff">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>

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

	<?php include '../includes/script.php'; ?>

</body>

</html>