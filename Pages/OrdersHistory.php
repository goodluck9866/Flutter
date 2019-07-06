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
					                          <a class="nav-link active" href="#CompletedOrders" data-toggle="tab" onclick="updateNotPendingOrdertable('Completed','CompletedOrdersTable');">
					                            <i class="material-icons">beenhere</i> Completed Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                        <li class="nav-item">
					                          <a class="nav-link " href="#CanceledOrders" data-toggle="tab"  onclick="updateNotPendingOrdertable('Canceled','CanceledOrdersTable');">
					                            <i class="material-icons">cancel</i> Cancel Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                      </ul>
					                    </div>
					                  </div>
					                </div>
					                <div class="card-body">
					                  	<div class="tab-content">
						                    <div class="tab-pane active" id="CompletedOrders">
						                      	<table class="table" id="CompletedOrdersTable">
							                      <thead class=" text-primary">
							                        <th>Order No</th>
							                        <th>Order By</th>
							                        <th>Assigned To</th>
							                        <th>Date & Time</th>
							                        <th>25 Kg New</th>
							                        <th>25 Kg Refill</th>
							                        <th>50 Kg New</th>
							                        <th>50 Kg Refill</th>
							                        <th>Delivery Address</th>
							                        <th>Total Bill</th>
							                      </thead>
							                      <tfoot class=" text-primary">
							                        <th>Order No</th>
							                        <th>Order By</th>
							                        <th>Assigned To</th>
							                        <th>Date & Time</th>
							                        <th>25 Kg New</th>
							                        <th>25 Kg Refill</th>
							                        <th>50 Kg New</th>
							                        <th>50 Kg Refill</th>
							                        <th>Delivery Address</th>
							                        <th>Total Bill</th>
							                      </tfoot>
					                    		</table>
						                    </div>
						                    <div class="tab-pane" id="CanceledOrders">
						                      <table class="table" id="CanceledOrdersTable">
							                      <thead class=" text-primary">
							                        <th>Order No</th>
							                        <th>Order By</th>
							                        <th>Assigned To</th>
							                        <th>Date & Time</th>
							                        <th>25 Kg New</th>
							                        <th>25 Kg Refill</th>
							                        <th>50 Kg New</th>
							                        <th>50 Kg Refill</th>
							                        <th>Delivery Address</th>
							                        <th>Total Bill</th>
							                      </thead>
							                      <tfoot class=" text-primary">
							                        <th>Order No</th>
							                        <th>Order By</th>
							                        <th>Assigned To</th>
							                        <th>Date & Time</th>
							                        <th>25 Kg New</th>
							                        <th>25 Kg Refill</th>
							                        <th>50 Kg New</th>
							                        <th>50 Kg Refill</th>
							                        <th>Delivery Address</th>
							                        <th>Total Bill</th>
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
				<script src="../Scripts/FetchOrdersByStatus.js"></script>


		</body>

	</html>