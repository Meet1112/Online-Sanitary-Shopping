<?php 
	include("includes/header.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add Product</li>
      </ol>
    </section>

    <!-- Main content --> 
	<form action="product-process.php" method="POST" enctype="multipart/form-data" >
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
	<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Product</h3>
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
						<label>Product Name</label>
						<input type="text" name="pnm" class="form-control" />
					</div>
				
			
					<div class="form-group">
						<label>Category</label>
						<select class="form-control select2" name="category" style="width: 100%;">
						<?php 
							$cat_q = "select * from category";
					
							$cat_res = mysqli_query($link,$cat_q);
					
							while($cat_row = mysqli_fetch_assoc($cat_res))
							{
								echo '<option value="'.$cat_row['cat_id'].'">'.$cat_row['cat_name'].'</option>';
					
							}
						?>
						</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Length</label>
						<input type="text" name="length" class="form-control" />
					</div>	
				</div>
				<div class="col-md-4">
					<div class="form-group">		
						<label>Width</label>						
						<input type="text" name="width" class="form-control" />
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label>Height</label>
						<input type="text" name="height" class="form-control" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Weight</label>
						<input type="text" name="weight" class="form-control" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Price</label>
						<input type="text" name="price" class="form-control" />
					</div>
				</div>
				
				<div class="col-md-12">
					<div class="form-group">
						<label>Description</label>
						<input type="textarea" name="description" class="form-control" />
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-12">
						<label>Select Image</label>
						<input type="file" name="image" class="form-control" />
					</div>
				</div>
			</div>
            <!-- /.col -->
        </div>
          <!-- /.row -->
    </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">Add Product</button>
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