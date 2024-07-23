<?php 
	include("includes/header.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
			  <?php
				$cq = "select count(*) from category";
				$cres = mysqli_query($link,$cq);
				$crow = mysqli_fetch_assoc($cres);
				echo $crow['count(*)'];
			  ?>
			  </h3>

              <p>Total Catetgory</p>
            </div>
            <div class="icon">
              <i class="ion ion-eye"></i>
            </div>
            <a href="categorylist.php" class="small-box-footer">View All Category <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>
			  <?php
				$cq = "select count(*) from category";
				$cres = mysqli_query($link,$cq);
				$crow = mysqli_fetch_assoc($cres);
				echo $crow['count(*)'];
			  ?>
			  </h3>

              <p>Total Catetgory</p>
            </div>
            <div class="icon">
              <i class="ion ion-plus"></i>
            </div>
            <a href="category.php" class="small-box-footer">Add New Category <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
			   <?php
				$cq = "select count(*) from product";
				$cres = mysqli_query($link,$cq);
				$crow = mysqli_fetch_assoc($cres);
				echo $crow['count(*)'];
			  ?>
			  </h3>

              <p>Total Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-eye"></i>
            </div>
            <a href="productlist.php" class="small-box-footer">View All Products <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
				<h3>
              <?php
				$cq = "select count(*) from product";
				$cres = mysqli_query($link,$cq);
				$crow = mysqli_fetch_assoc($cres);
				echo $crow['count(*)'];
			  ?>
			  </h3>

              <p>Total Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-plus"></i>
            </div>
            <a href="product.php" class="small-box-footer">Add New Product <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>
			   <?php
				$cq = "select count(*) from slider";
				$cres = mysqli_query($link,$cq);
				$crow = mysqli_fetch_assoc($cres);
				echo $crow['count(*)'];
			  ?>
			  </h3>

              <p>Total Slides</p>
            </div>
            <div class="icon">
              <i class="ion ion-eye"></i>
            </div>
            <a href="sliderlist.php" class="small-box-footer">View All Slide <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
			  <h3>
				  <?php
					$cq = "select count(*) from slider";
					$cres = mysqli_query($link,$cq);
					$crow = mysqli_fetch_assoc($cres);
					echo $crow['count(*)'];
				  ?>
			  </h3>

              <p>Total Slides</p>
            </div>
            <div class="icon">
              <i class="ion ion-plus"></i>
            </div>
            <a href="slider.php" class="small-box-footer">Add New Slide <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
		
		<div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>
			  <?php
				$cq = "select count(*) from contact";
				$cres = mysqli_query($link,$cq);
				$crow = mysqli_fetch_assoc($cres);
				echo $crow['count(*)'];
			  ?>
			  </h3>

              <p>Contacts Inquiry</p>
            </div>
            <div class="icon">
              <i class="ion ion-eye"></i>
            </div>
            <a href="contact.php" class="small-box-footer">View All Contact Inquiry <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
     

    </section>
    <!-- /.content -->
  </div>
<?php
	include("includes/footer.php");	
?>