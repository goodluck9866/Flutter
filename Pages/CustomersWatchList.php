<!DOCTYPE html>
	<html lang="en">
			<!-- Include Header Here-->
			<?php include '../Includes/Header.php';?>
			<!--End-->

<body class="">
			<div class="wrapper ">
				<!-- Include SideBar Here-->
				<?php include '../Includes/SideBar.php';?>
				<!--End-->
				
				<!-- Include TopHeader Here-->
				<?php include '../Includes/Topheader.php';?>
				<!--End-->

				<div class="content">
					<div class="row">
            			<div class="col-md-12">
         
							<div class="card">
				                <div class="card-header card-header-primary">
				                  <h4 class="card-title ">Customers View</h4>
				                  <p class="card-category"> List of all Customers.</p>
				                </div>
				                <div class="card-body">
				                  <div class="table-responsive">
				                    <table class="table" id="CustomersTable">
				                      <thead class=" text-primary">
				                        <th>Name</th>
				                        <th>Customer Address</th>
				                        <th>Phone</th>
				                        <th>Mobile</th>
				                        <th>Action</th>
				                      </thead>
				                      <tbody>
				                        
				                      </tbody>
				                      <tfoot class=" text-primary">
				                      	<th>Name</th>
				                        <th>Customer Address</th>
				                        <th>Phone</th>
				                        <th>Mobile</th>
				                        <th>Action</th>
				                      </tfoot>
				                    </table>
				                  </div>
				                </div>
				            </div>
				        </div>
				    </div>
				</div>

				<!-- Include Footer Here-->
				<?php include '../Includes/Footer.php';?>
				<!--End-->
				<script src="../Scripts/FetchCustomersList.js"></script>
				<script >
					
				</script>

		</body>

	</html>