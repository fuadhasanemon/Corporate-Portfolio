<div class="sidebar-category sidebar-category-visible">
	<div class="category-content no-padding">
		<ul class="navigation navigation-main navigation-accordion">

			<!-- Main -->
			<?php $menuName = basename(__DIR__);

			?>
			<li class=<?php echo $menuName == "admin" ? "active" : ''; ?>><a href=""><i class="icon-home4"></i> <span>Dashboard</span></a></li>
			<li class=<?php echo $menuName == "banner" ? "active":''; ?>><a href="<?php echo $isInternal == true ? "": "banner/"; ?>bannerList.php"><i class="icon-image-compare"></i> <span>Banner</span></a></li>
			<li class=""><a href="#"><i class="icon-home4"></i> <span>Services</span></a></li>
			<li class=""><a href="#"><i class="icon-home4"></i> <span>Section</span></a></li>
			<li class=""><a href="#"><i class="icon-home4"></i> <span>Our Projects</span></a></li>
			<li class=""><a href="#"><i class="icon-home4"></i> <span>Our Staff</span></a></li>
			<li class=""><a href="#"><i class="icon-home4"></i> <span>Our Clients</span></a></li>
			<li class=""><a href="#"><i class="icon-home4"></i> <span>Contact Message</span></a></li>
			<li>
				<a href="#"><i class=" icon-cog2"></i> <span>Back Office Setup</span></a>
				<ul>
					<li><a href="layout_navbar_fixed.html">Categories</a></li>
					<li><a href="layout_navbar_fixed.html">Designation</a></li>
				</ul>
			</li>


			<li>
				<a href="#"><i class="icon-stack"></i> <span>Starter kit</span></a>
				<ul>
					<li>
						<a href="#">3 columns</a>
						<ul>
							<li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
							<li><a href="starters/3_col_double.html">Double sidebars</a></li>
						</ul>
					</li>

				</ul>
			</li>

			<!-- /main -->


		</ul>
	</div>
</div>