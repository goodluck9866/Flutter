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
					            <div class="col-lg-12 col-md-12">
					              <div class="card">
					                <div class="card-header card-header-tabs card-header-primary">
					                  <div class="nav-tabs-navigation">
					                    <div class="nav-tabs-wrapper">
					                      <ul class="nav nav-tabs" data-tabs="tabs">
					                      	<li class="nav-item">
					                          <a class="nav-link active" href="#PendingSuppliers" data-toggle="tab" onclick="updateSupplierstable('Pending','PendingSuppliersTable');">
					                            <i class="material-icons">notifications</i> Requests for Approval
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                        <li class="nav-item">
					                          <a class="nav-link " href="#ApprovedSuppliers" data-toggle="tab"  onclick="updateSupplierstable('Allowed','ApprovedSuppliersTable');">
					                            <i class="material-icons">assignment_turned_in</i> Approved Suppliers
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                        <li class="nav-item">
					                          <a class="nav-link " href="#RejectedSuppliers" data-toggle="tab"  onclick="updateSupplierstable('Rejected','RejectedSuppliersTable');">
					                            <i class="material-icons">backspace</i> Rejected Suppliers
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                      </ul>
					                    </div>
					                  </div>
					                </div>
					                <div class="card-body">
					                  <div class="tab-content">
					                    <div class="tab-pane active" id="PendingSuppliers">
					                      	<table class="table" id="PendingSuppliersTable">
						                      <thead class=" text-primary">
						                        <th>Name</th>
						                        <th>Mobile</th>
						                        <th>Address</th>
						                        <th>Vehicle</th>
						                        <th>Emirates</th>
						                        <th>Actions</th>
						                      </thead>
						                      <tfoot class=" text-primary">
						                        <th>Name</th>
						                        <th>Mobile</th>
						                        <th>Address</th>
						                        <th>Vehicle</th>
						                        <th>Emirates</th>
						                        <th>Actions</th>
						                      </tfoot>
				                    		</table>
					                    </div>
					                    <div class="tab-pane" id="ApprovedSuppliers">
					                      <table class="table" id="ApprovedSuppliersTable">
						                      <thead class=" text-primary">
						                        <th>Name</th>
						                        <th>Mobile</th>
						                        <th>Address</th>
						                        <th>Vehicle</th>
						                        <th>Emirates</th>
						                        <th>Actions</th>
						                      </thead>
						                      <tfoot class=" text-primary">
						                        <th>Name</th>
						                        <th>Mobile</th>
						                        <th>Address</th>
						                        <th>Vehicle</th>
						                        <th>Emirates</th>
						                        <th>Actions</th>
						                      </tfoot>
						                    </table>
					                    </div>
					                   <div class="tab-pane" id="RejectedSuppliers">
					                      <table class="table" id="RejectedSuppliersTable">
						                      <thead class=" text-primary">
						                        <th>Name</th>
						                        <th>Mobile</th>
						                        <th>Address</th>
						                        <th>Vehicle</th>
						                        <th>Emirates</th>
						                      </thead>
						                      <tfoot class=" text-primary">
						                        <th>Name</th>
						                        <th>Mobile</th>
						                        <th>Address</th>
						                        <th>Vehicle</th>
						                        <th>Emirates</th>
						                      </tfoot>
						                    </table>
					                    </div>
					                  </div>
					                </div>
					              </div>
					            </div>
		          		</div>
				</div>

				<!-- Include Footer Here-->
				<?php include '../Includes/Footer.php';?>
				<!--End-->
				<script src="../Scripts/FetchSuppliersList.js"></script>
				<script>
					$(document).ready(function(){	
						updateSupplierstable('Pending','PendingSuppliersTable');
					});
				</script>
		</body>

	</html>