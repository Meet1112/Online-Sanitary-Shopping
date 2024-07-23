<?php
	include("includes/header.php");
	
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>All Product</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Products</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Product Name</th>
				  <th>Category Name</th>
                  <th>Length</th>
				  <th>Width</th>
				  <th>Height</th>
				  <th>Weight</th>
				  <th>Price</th>
				  <th>Image</th>
				  <th>Action</th>
                </tr>

                </thead>
                	
				<?php 
					$pro_q = "select * from product";
					
					$pro_res = mysqli_query($link,$pro_q);
					
					$co = 1;
					while($pro_row = mysqli_fetch_assoc($pro_res))
					{
						echo '<tr>
								<td>'.$co.'</td>
								<td>'.$pro_row['pro_name'].'</td>
								<td>'.$pro_row['pro_cat'].'</td>
								<td>'.$pro_row['pro_length'].'</td>
								<td>'.$pro_row['pro_width'].'</td>
								<td>'.$pro_row['pro_height'].'</td>
								<td>'.$pro_row['pro_weight'].'</td>
								<td>'.$pro_row['pro_price'].'</td>
								<td>
									<input type="image" name="imge" width="40" src="../products/'.$pro_row['pro_img'].'" />
								</td>
								<td>
									<a href="product-edit.php?id='.$pro_row['pro_id'].'" class="btn btn-success btn-xs">Edit</a>
									<a href="product-delete.php?id='.$pro_row['pro_id'].'" onclick="return check()" class="btn btn-danger btn-xs">Delete</a>
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