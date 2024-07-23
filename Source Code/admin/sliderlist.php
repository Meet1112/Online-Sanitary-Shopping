<?php
	include("includes/header.php");
	
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>All Slider</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Slider List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Slider</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Slider Name</th>
                  <th>Slider Image</th>
                  <th>Action</th>
                </tr>

                </thead>
                <tbody>
				
				<?php 
					$s_q = "select * from slider";
					
					$s_res = mysqli_query($link,$s_q);
					
					$co = 1;
					while($s_row = mysqli_fetch_assoc($s_res))
					{
						echo '<tr>
								  <td>'.$co.'</td>
								  <td>'.$s_row['s_name'].'</td>
								  <td><input type="image" name="imge" width="40" src="../slider_image/'.$s_row['s_img'].'" /></td>
								  <td>
									<a href="slider-edit.php?id='.$s_row['s_id'].'" class="btn btn-success btn-xs">Edit</a>
									<a href="slider-delete.php?id='.$s_row['s_id'].'" onclick="return check()" class="btn btn-danger btn-xs">Delete</a>
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