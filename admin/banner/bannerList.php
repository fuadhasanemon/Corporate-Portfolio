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

	include '../includes/head.php';
	require '../controller/dbConfig.php';

?>


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
					
					<?php include '../includes/navigation.php' ; ?>

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
								<li style=""><a href="bannerAdd.php" class="btn btn-primary add-new">Add New</a></li>
			                		<!-- <li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li> -->
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">

							<?php
								if(isset($_GET['msg'])){

							?>

							<div class="alert alert-success alert-bordered">
								<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
								<span class="text-semibold">Well done!</span> <?php echo $_GET['msg']; ?>
							</div>

							<?php } ?>

							<table class="table table-bordered datatable-basic">
								<thead>
									<tr>
										<th width="5%">SL</th>
										<th width="20%">Title</th>
										<th width="20%">Sub Title</th>
										<th width="25%">Details</th>
										<th width="20%">Image</th>
										<th width="10%" class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>

								<?php
									$selctorQuery = "SELECT * FROM banner WHERE active_status=1";
									$bannerList = mysqli_query($dbCon, $selctorQuery);

									foreach ($bannerList as $key => $banner){
								?>
									<tr>
										<td><?php echo ++$key ; ?></td>
										<td><?php echo ($banner['title']); ?></td>
										<td><a href="#"><?php echo ($banner['sub_title']); ?></a></td>
										<td><?php echo ($banner['details']); ?></td>
										<td>
											<img class="" width="80" height="80" src="<?php echo '../uploads/bannerImage/'.$banner['image']; ?>" alt="">
										</td>
										<td class="text-center">
											<a href="bannerUpdate.php?banner_id=<?php echo ($banner['id']); ?>"> <i class="icon-pencil7"></i> </a>
											<a href="bannerDelete.php?banner_id=<?php echo ($banner['id']); ?>"> <i class="icon-trash"></i> </a>
										</td>
									</tr>

								<?php } ?>
								</tbody>
							</table>
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
