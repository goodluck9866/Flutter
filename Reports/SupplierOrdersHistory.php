
<?php
/**
 for display full info. and edit data
 */
// start again

if(isset($_REQUEST['suppliername'])){
   $id=$_GET['suppliername'];
    ?>
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
					                	 <h4 class="card-title "><span id="sNames" style="font-weight:bold; color:black;"></span>Orders History:</h4>
					                  <div class="nav-tabs-navigation">
					                    <div class="nav-tabs-wrapper">
					                      <ul class="nav nav-tabs" data-tabs="tabs">
					                      	
					                      	<li class="nav-item">
					                          <a class="nav-link active" href="#ProcessingOrders" data-toggle="tab" onclick="updateOrderHistorytables('Processing','ProcessingOrdersTable','<?php echo $id; ?>');" id="PendingOrdersLink">
					                            <i class="material-icons">hourglass_full</i> In Process
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>

					                      	<li class="nav-item">
					                          <a class="nav-link " href="#AssignedOrders" data-toggle="tab" onclick="updateOrderHistorytables('Assigned','AssignedOrdersTable','<?php echo $id; ?>');">
					                            <i class="material-icons">assignment_turned_in</i> Accepted Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                        
					                        <li class="nav-item">
					                          <a class="nav-link" href="#OverdueOrders" data-toggle="tab" onclick="updateOrderHistorytables('Overdue','OverdueOrdersTable','<?php echo $id; ?>');" >
					                            <i class="material-icons">not_interested</i> Overdue Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>

					                        <li class="nav-item">
					                          <a class="nav-link" href="#CompletedOrders" data-toggle="tab" onclick="updateOrderHistorytables('Completed','CompletedOrdersTable','<?php echo $id; ?>');" id="NotDeliveredOrdersLink">
					                            <i class="material-icons">beenhere</i> Completed Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                      </ul>
					                    </div>
					                  </div>
					                </div>
					                <div class="card-body">
					                  <div class="tab-content">
					                    <div class="tab-pane active" id="ProcessingOrders">
					                      	<table class="table" id="ProcessingOrdersTable">
						                      <thead class=" text-primary">
							                        <th>Order No</th>
							                        <th>Order By</th>
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
					                    <div class="tab-pane" id="AssignedOrders">
					                      <table class="table" id="AssignedOrdersTable">
						                      <thead class=" text-primary">
							                        <th>Order No</th>
							                        <th>Order By</th>
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
					                    
					                    <div class="tab-pane" id="OverdueOrders">
					                      	<table class="table" id="OverdueOrdersTable">
						                      <thead class=" text-primary">
							                        <th>Order No</th>
							                        <th>Order By</th>
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

					                    <div class="tab-pane" id="CompletedOrders">
					                      	<table class="table" id="CompletedOrdersTable">
						                      <thead class=" text-primary">
							                        <th>Order No</th>
							                        <th>Order By</th>
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
				<script src="../Scripts/FetchSuppliersList.js"></script>
				<script>
					updateOrderHistorytables('Processing','ProcessingOrdersTable','<?php echo $id; ?>');
					firebase.database().ref('Supplier/<?php echo $id; ?>/supplier_name').once('value',snap => {
						if (snap.exists()){
							       	var suppliername=snap.val();
							       	document.getElementById("sNames").innerHTML=suppliername+' ';
							       	
						}				
					});
				</script>

		</body>

	</html>

<?php } 
else echo"Error: Invalid or Broken URL"; ?>
