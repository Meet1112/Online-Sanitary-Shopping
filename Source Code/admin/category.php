<?php 
	include("includes/header.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categories
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Category</li>
      </ol>
    </section>

    <!-- Main content -->
	<form action="category-process.php" method="post" enctype="multipart/form-data">
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
	  <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Category</h3>
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
					<label>Category Name </label>
					<input type="text" name="category" class="form-control" />
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
          <button type="submit" class="btn btn-primary">Add Category</button>
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