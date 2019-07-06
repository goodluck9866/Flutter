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
			                          <a class="nav-link active" href="#PendingOrders" data-toggle="tab" onclick="updatePendingOrdertable();">
			                            <i class="material-icons">notifications</i> Pending Orders
			                            <div class="ripple-container"></div>
			                          </a>
			                        </li>
			                        <li class="nav-item">
			                          <a class="nav-link" href="#ProcessingOrders" data-toggle="tab" onclick="updateNotPendingOrdertable('Processing','ProcessingOrdersTable');" >
			                            <i class="material-icons">hourglass_full</i> In Process
			                            <div class="ripple-container"></div>
			                          </a>
			                        </li>
			                        <li class="nav-item">
			                          <a class="nav-link" href="#AssignedOrders" data-toggle="tab" onclick="updateNotPendingOrdertable('Assigned','AssignedOrdersTable');" >
			                            <i class="material-icons">assignment_turned_in</i> Orders Assigned
			                            <div class="ripple-container"></div>
			                          </a>
			                        </li>
			                        <li class="nav-item">
			                          <a class="nav-link" href="#ReassignedOrders" data-toggle="tab" onclick="updateNotPendingOrdertable('Reassigned','ReassignedOrdersTable');" >
			                            <i class="material-icons">backspace</i> Rejected Orders
			                            <div class="ripple-container"></div>
			                          </a>
			                        </li>
			                        <li class="nav-item">
			                          <a class="nav-link" href="#OverdueOrders" data-toggle="tab" onclick="updateNotPendingOrdertable('Overdue','OverdueOrdersTable');" >
			                            <i class="material-icons">not_interested</i> Overdue Orders
			                            <div class="ripple-container"></div>
			                          </a>
			                        </li>
			                      </ul>
			                    </div>
			                  </div>
			                </div>
			                <div class="card-body">
				                <div class="tab-content">
				                    <div class="tab-pane active" id="PendingOrders">
				                      <table class="table" id="PendingOrdersTable">
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
					                        <th>Action</th>
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
					                        <th>Action</th>
					                      </tfoot>
					                      <tbody>
					                      </tbody>
					                    </table>
				                    </div>
				                    <div class="tab-pane" id="ProcessingOrders">
				                      <table class="table" id="ProcessingOrdersTable">
					                      <thead class=" text-primary">
					                        <th>Order No</th>
					                        <th>Order By</th>
					                        <th>Assigned To</th>
					                        <th>Date & Time</th>
					                        <th>25 LB Buy</th>
					                        <th>25 LB Refill</th>
					                        <th>50 LB Buy</th>
					                        <th>50 LB Refill</th>
					                        <th>Delivery Address</th>
					                        <th>Total Bill</th>
					                      </thead>
					                      <tfoot class=" text-primary">
					                      	<th>Order No</th>
					                        <th>Order By</th>
					                        <th>Assigned To</th>
					                        <th>Date & Time</th>
					                        <th>25 LB Buy</th>
					                        <th>25 LB Refill</th>
					                        <th>50 LB Buy</th>
					                        <th>50 LB Refill</th>
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
					                        <th>Assigned To</th>
					                        <th>Date & Time</th>
					                        <th>25 LB Buy</th>
					                        <th>25 LB Refill</th>
					                        <th>50 LB Buy</th>
					                        <th>50 LB Refill</th>
					                        <th>Delivery Address</th>
					                        <th>Total Bill</th>
					                      </thead>
					                      <tfoot class=" text-primary">
					                      	<th>Order No</th>
					                        <th>Order By</th>
					                        <th>Assigned To</th>
					                        <th>Date & Time</th>
					                        <th>25 LB Buy</th>
					                        <th>25 LB Refill</th>
					                        <th>50 LB Buy</th>
					                        <th>50 LB Refill</th>
					                        <th>Delivery Address</th>
					                        <th>Total Bill</th>
					                      </tfoot>
					                    </table>
				                    </div>
				                    <div class="tab-pane" id="ReassignedOrders">
				                      <table class="table" id="ReassignedOrdersTable">
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
					                        <th>Action</th>
					                      </thead>
					                      <tfoot class=" text-primary">
					                      	<th>Order No</th>
					                        <th>Order By</th>
					                        <th>Assigned To</th>
					                        <th>Date & Time</th>
					                        <th>25 LB Buy</th>
					                        <th>25 LB Refill</th>
					                        <th>50 LB Buy</th>
					                        <th>50 LB Refill</th>
					                        <th>Delivery Address</th>
					                        <th>Total Bill</th>
					                        <th>Action</th>
					                      </tfoot>
					                    </table>
				                    </div>
				                    <div class="tab-pane" id="OverdueOrders">
				                      <table class="table" id="OverdueOrdersTable">
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
					                        <th>Action</th>
					                      </thead>
					                      <tfoot class=" text-primary">
					                      	<th>Order No</th>
					                        <th>Order By</th>
					                        <th>Assigned To</th>
					                        <th>Date & Time</th>
					                        <th>25 LB Buy</th>
					                        <th>25 LB Refill</th>
					                        <th>50 LB Buy</th>
					                        <th>50 LB Refill</th>
					                        <th>Delivery Address</th>
					                        <th>Total Bill</th>
					                        <th>Action</th>
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

				
				<!-- Modal -->
				<div class="modal fade" id="AssignSuppliermodal" tabindex="-1" role="">
				    <div class="modal-dialog AssignSuppliermodal" role="document">
				        <div class="modal-content">
				            <div class="card card-signup card-plain">
				                <div class="modal-header card-header-primary">
				                	<h4 class="card-title">Assigned Order To Supplier</h4>
				                   	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				                      <i class="material-icons">clear</i>
				                    </button>
								</div>
				                <div class="modal-body">
				                    <form class="form" method="post" action="AssignSupplierToOrder.php">
				                        <div class="card-body">
				                            <div class="form-group bmd-form-group">
				                                  <div class="input-group-prepend">
				                                    <div class="input-group-text"><i class="material-icons">supervisor_account</i> Select Supplier</div>
				                                  </div>
					                                  <select class="form-control" data-style="btn btn-link" id="SupplierDDList">
												    </select>
				                            </div>
				                        </div>
				                    </form>
				                </div>
				                <div class="modal-footer justify-content-center">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        							<button type="button" class="btn btn-primary" onclick="assignedorder();">Save changes</button>
							    </div>
				            </div>
				        </div>
				    </div>
				</div>
				
				
					
		      
				<script src="../Scripts/FetchOrdersByStatus.js"></script>
				<script>
					var per_id;
					$(document).ready(function(){
				        var select=document.getElementById('SupplierDDList');
				        firebase.database().ref().child('Supplier').orderByChild('supplier_account_status').equalTo('Allowed').on('child_added',function(snapshot) {
				            var Key=snapshot.key;
				            var SupplierName=snapshot.child("supplier_name").val();
				            var isonline=snapshot.child("isOnline").val();
				            var status;
				            if(isonline){
				            	status='(Online)';
				            }else{
				            	status='(Offline)';
				            }
				            select.options[select.options.length] = new Option(SupplierName+' '+status , Key);
				        });
				    });
				    $(document).on('click','#getEdit',function(e){
			            e.preventDefault();
			            per_id=$(this).data('id');
			           
			        });
			        function assignedorder(){
			        	  if (!firebase.apps.length) {
					            var config = {
					              apiKey: "AIzaSyAa0SZ5_hki-3T0b9SEAQZMwPDJ7qnWscE",
					              authDomain: "supply-manager-assort.firebaseapp.com",
					              databaseURL: "https://supply-manager-assort.firebaseio.com",
					              projectId: "supply-manager-assort",
					              storageBucket: "supply-manager-assort.appspot.com",
					              messagingSenderId: "15063854806"
					                };
					        firebase.initializeApp(config);
					        }

					        var db = firebase.database();
					        var fborderid=per_id;
					        var orderstat="Processing";
					        var e = document.getElementById("SupplierDDList");
					        var supplierid = e.options[e.selectedIndex].value;
					        var supplierdata = {
					            assigned_to: supplierid
					          };
					        db.ref('Orders/'+ fborderid).update({ assigned_to: supplierid, order_status: orderstat, time: firebase.database.ServerValue.TIMESTAMP });
					        //For Reload
					        location.reload(true);
			    }
				</script>
		</body>

	</html>