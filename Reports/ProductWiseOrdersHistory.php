
<?php
/**
 for display full info. and edit data
 */
// start again

if(isset($_REQUEST['productname'])){
   $id=$_GET['productname'];
   $productname='';
    if($id==1){
    	$productname='Cylinder 25 LB New ';
    }
    elseif ($id==2){
    	$productname='Cylinder 25 LB Refill ';
    }
    elseif ($id==3){
    	$productname='Cylinder 50 LB New ';
    }
    elseif ($id==4){
    	$productname='Cylinder 50 LB Refill ';
    }
    elseif ($id==5){
    	$productname='Add on charges ';
    }

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
					                	 <h4 class="card-title "><span id="sNames" style="font-weight:bold; color:black;"><?php echo $productname; ?></span>orders history:</h4>
					                  <div class="nav-tabs-navigation">
					                    <div class="nav-tabs-wrapper">
					                      <ul class="nav nav-tabs" data-tabs="tabs">
					                      	
					                      	<li class="nav-item">
					                          <a class="nav-link active" href="#PendingOrders" data-toggle="tab" onclick="updateProductOrderHistorytables('Pending','PendingOrdersTable',<?php echo $id?>);" id="PendingOrdersLink">
					                            <i class="material-icons">notifications</i> Pending Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>

					                      	<li class="nav-item">
					                          <a class="nav-link " href="#AssignOrders" data-toggle="tab" onclick="updateProductOrderHistorytables('Assigned','AssignOrdersTable',<?php echo $id?>);">
					                            <i class="material-icons">assignment_turned_in</i> Assign Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                        
					                        <li class="nav-item">
					                          <a class="nav-link" href="#DeliveredOrders" data-toggle="tab" onclick="updateProductOrderHistorytables('Completed','DeliveredOrdersTable',<?php echo $id?>);" >
					                            <i class="material-icons">assignment_turned_in</i> Delivered Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>

					                        <li class="nav-item">
					                          <a class="nav-link" href="#NotDeliveredOrders" data-toggle="tab" onclick="updateProductOrderHistorytables('Not Delivered','NotDeliveredOrdersTable',<?php echo $id?>);" id="NotDeliveredOrdersLink">
					                            <i class="material-icons">backspace</i> Not Delivered Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>

					                        <li class="nav-item">
					                          <a class="nav-link " href="#CancelOrders" data-toggle="tab"  onclick="updateProductOrderHistorytables('Canceled','CancelOrdersTable',<?php echo $id?>);">
					                            <i class="material-icons">notifications</i> Cancel Orders
					                            <div class="ripple-container"></div>
					                          </a>
					                        </li>
					                      </ul>
					                    </div>
					                  </div>
					                </div>
					                <div class="card-body">
					                  <div class="tab-content">
					                    <div class="tab-pane active" id="CancelOrders">
					                      	<table class="table" id="CancelOrdersTable">
						                      <thead class=" text-primary">
						                        <th>Order No</th>
						                        <th>Order By</th>
						                        <th>Date & Time</th>
						                        
						                        <th><?php echo $productname?></th>
						                        <th>Price</th>
						                        <th>Total Bill</th>
						                      </thead>
				                    		</table>
					                    </div>
					                    <div class="tab-pane" id="AssignOrders">
					                      <table class="table" id="AssignOrdersTable">
						                      <thead class=" text-primary">
						                        <th>Order No</th>
						                        <th>Order By</th>
						                        <th>Date & Time</th>
						                        <th><?php echo $productname?></th>
						                        <th>Price</th>
						                        <th>Total Bill</th>
						                      </thead>
						                    </table>
					                    </div>
					                    
					                    <div class="tab-pane" id="PendingOrders">
					                      	<table class="table" id="PendingOrdersTable">
						                      <thead class=" text-primary">
						                        <th>Pending</th>
						                        <th>Order By</th>
						                        <th>Date & Time</th>
						                        <th><?php echo $productname?></th>
						                        <th>Price</th>
						                        <th>Total Bill</th>
						                      </thead>
				                    		</table>
					                    </div>

					                    <div class="tab-pane" id="DeliveredOrders">
					                      	<table class="table" id="DeliveredOrdersTable">
						                      <thead class=" text-primary">
						                        <th>Order No</th>
						                        <th>Order By</th>
						                        <th>Date & Time</th>
						                        <th><?php echo $productname?></th>
						                        <th>Price</th>
						                        <th>Total Bill</th>
						                      </thead>
				                    		</table>
					                    </div>

					                    <div class="tab-pane" id="NotDeliveredOrders">
					                      	<table class="table" id="NotDeliveredOrdersTable">
						                      <thead class=" text-primary">
						                        <th>Order No</th>
						                        <th>Order By</th>
						                        <th>Date & Time</th>
						                        <th><?php echo $productname?></th>
						                        <th>Price</th>
						                        <th>Total Bill</th>
						                      </thead>
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
				<script src="../Scripts/FetchProducts.js"></script>
				<script>
					updateProductOrderHistorytables('Pending','PendingOrdersTable',<?php echo $id ?>);
				</script>

		</body>

	</html>
<?php } else echo"Error: Invalid or Broken URL";?>
