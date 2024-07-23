<?php
	include("includes/header.php");
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>All Contacts</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contact List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Contacts</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Contact Name</th>
				  <th>Email</th>
				  <th>Message</th>
				  <th>Action</th>
                </tr>

                </thead>
                	
				<?php 
					$con_q = "select * from contact";
					
					$con_res = mysqli_query($link,$con_q);
					
					$co = 1;
					while($con_row = mysqli_fetch_assoc($con_res))
					{
						echo '<tr>
								<td>'.$co.'</td>
								<td>'.$con_row['con_fnm'].'</td>
								<td>'.$con_row['con_email'].'</td>
								<td>'.$con_row['con_message'].'</td>
								
								<td>
									<a href="contact-delete.php?id='.$con_row['con_id'].'" onclick="return check()" class="btn btn-danger btn-xs">Delete</a>
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