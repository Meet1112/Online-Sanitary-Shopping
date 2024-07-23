<?php
	include("includes/header.php");
	
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>All Category</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Category Name</th>
                  <th>Category Image</th>
                  <th>Action</th>
                </tr>

                </thead>
                <tbody>
				
				<?php 
					$cat_q = "select * from category";
					
					$cat_res = mysqli_query($link,$cat_q);
					
					$co = 1;
					while($cat_row = mysqli_fetch_assoc($cat_res))
					{
						echo '<tr>
								  <td>'.$co.'</td>
								  <td>'.$cat_row['cat_name'].'</td>
								  <td><input type="image" name="imge" width="40" src="../cat_image/'.$cat_row['cat_img'].'" /></td>
								  <td>
									<a href="category-edit.php?id='.$cat_row['cat_id'].'" class="btn btn-success btn-xs">Edit</a>
									<a href="category-delete.php?id='.$cat_row['cat_id'].'" onclick="return check()" class="btn btn-danger btn-xs">Delete</a>
								  </td>
								</tr>';
						$co++;
					}
				?>
				
                
				
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
	include("includes/footer.php");
?>