<?php 
	include("includes/header.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
	  <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
				<div class="form-group">
					<label>Minimal</label>
					<input type="text" class="form-control" />
				</div>
				
			
				<div class="form-group">
					<label>Minimal</label>
					<select class="form-control select2" style="width: 100%;">
					  <option selected="selected">Alabama</option>
					  <option>Alaska</option>
					  <option>California</option>
					  <option>Delaware</option>
					  <option>Tennessee</option>
					  <option>Texas</option>
					  <option>Washington</option>
					</select>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
	include("includes/footer.php");
?>