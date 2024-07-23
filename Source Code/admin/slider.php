<?php 
	include("includes/header.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Slider
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Slider</li>
      </ol>
    </section>

    <!-- Main content -->
	<form action="slider-process.php" method="post" enctype="multipart/form-data">
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
	  <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Slider</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
		
			
				<?php
				
					if(!empty($_SESSION['errors'])){
						
						foreach($_SESSION['errors'] as $er){
							echo'<div class="alert alert-danger">';
							echo '<p class="error">'.$er.'</p>';
							echo'</div>';

						}
						unset($_SESSION['errors']);
					}
				?>
			
		
          <div class="row">
            <div class="col-md-12">
				<div class="form-group">
					<label>Slider Name </label>
					<input type="text" name="sname" class="form-control" />
				</div>
            </div>
			<div class="col-md-12">
				<label>Select Image</label>
				<input type="file" name="image" class="form-control" />
			</div>
			
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Add Slider</button>
        </div>
      </div>
      <!-- /.box -->
	
    </section>
	</form>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
	include("includes/footer.php");
?>