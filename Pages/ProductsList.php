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
				                  <h4 class="card-title ">Products View</h4>
				                  <p class="card-category"> List of all Products.</p>
				                </div>
				                <div class="card-body">
				                  <div class="table-responsive">
				                    <table class="table" id="ProductsTable">
				                      <thead class=" text-primary">
				                        <th>Name</th>
				                        <th>Price</th>
				                        <th>Action</th>
				                      </thead>
				                      <tbody>
				                        
				                      </tbody>
				                      <tfoot class=" text-primary">
				                      	<th>Name</th>
				                        <th>Price</th>
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
				<!-- Modal -->
				<div class="modal fade" id="ProductPriceIUpdateModal" tabindex="-1" role="">
				    <div class="modal-dialog ProductPriceIUpdateModal" role="document">
				        <div class="modal-content">
				            <div class="card card-signup card-plain">
				                <div class="modal-header card-header-primary">
				                	<h4 class="card-title">Update Product Price</h4>
				                   	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				                      <i class="material-icons">clear</i>
				                    </button>
								</div>
				                <div class="modal-body">
				                    <form class="form" method="post" action="AssignSupplierToOrder.php">
				                        <div class="card-body">
				                        	<div class="input-group-text"> </div>
				                                  <label id="lbltipupdateprice">New Price</label></div>
				                            <div class="input-group">
				                            	<div class="input-group-prepend">
				                            		<i class="material-icons">attach_money</i>
											    </div>

											    <input type="text" class="form-control" id='newpricetxt' placeholder="Enter New Price Here">
											</div>
				                        </div>
				                    </form>
				                </div>
				                <div class="modal-footer justify-content-center">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        							<button type="button" class="btn btn-primary" onclick="updateproductprice();">Save changes</button>
							    </div>
				            </div>
				        </div>
				    </div>
				</div>
				<script src="../Scripts/FetchProducts.js"></script>
				<script>
					var per_id;
					$(document).on('click','#getEdit',function(e){
			            e.preventDefault();
			            per_id=$(this).data('id');
			            updatepricefield();
			           
			        });
			        //Update Product Price On button Click From Firebase
					function updateproductprice() {
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
					        var Empty=0;
					        var keyref;
					        var OldpriceValue;
					        var NewPriceValue = document.getElementById('newpricetxt').value;
					        //Get Old Price From Database
					        firebase.database().ref().child('Pricing').on('child_added',function(snapshot) {
								
								if(per_id=='25_lb_buy'){
									OldpriceValue=snapshot.child("25_lb_buy").val();
								}
								if(per_id=='25_lb_refill'){
									OldpriceValue=snapshot.child("25_lb_refill").val();	
								}
								if(per_id=='50_lb_buy'){
									OldpriceValue=snapshot.child("50_lb_buy").val();
								}
								if(per_id=='50_lb_refill'){
									OldpriceValue=snapshot.child("50_lb_refill").val();
								}
								if(per_id=='add_on_charges'){
									OldpriceValue=snapshot.child("add_on_charges").val();
								}
							
							});
							//Update Price
					        if(per_id=='25_lb_buy'){
						        keyref = firebase.database().ref().push().key;
						        db.ref('Pricing_Log/'+keyref).update({ buy_lb_25: OldpriceValue, buy_lb_50: Empty, refill_25: Empty, refill_50: Empty, add_on_charges: Empty,  time: firebase.database.ServerValue.TIMESTAMP });
						        db.ref('Pricing/Products').update({ '25_lb_buy': NewPriceValue });
					    	}
					        
					        if(per_id=='25_lb_refill'){
						       	keyref = firebase.database().ref('Pricing_Log').push().key;
						        db.ref('Pricing/Products').update({ '25_lb_refill': NewPriceValue });

						        db.ref('Pricing_Log/'+keyref).update({ refill_25: OldpriceValue, buy_lb_50: Empty, buy_lb_25: Empty, refill_50: Empty, add_on_charges: Empty,  time: firebase.database.ServerValue.TIMESTAMP });
					    	}
					        
					        if(per_id=='50_lb_buy'){
						        keyref = firebase.database().ref('Pricing_Log').push().key;
						        db.ref('Pricing/Products').update({ '50_lb_buy': NewPriceValue });
						        db.ref('Pricing_Log/'+keyref).update({ buy_lb_50: OldpriceValue, refill_25: Empty, buy_lb_25: Empty, refill_50: Empty, add_on_charges: Empty,  time: firebase.database.ServerValue.TIMESTAMP });
					    	}
					        
					        if(per_id=='50_lb_refill'){
						        keyref = firebase.database().ref('Pricing_Log').push().key;
						        db.ref('Pricing/Products').update({ '50_lb_refill': NewPriceValue });
						        db.ref('Pricing_Log/'+keyref).update({ refill_50: OldpriceValue, refill_25: Empty, buy_lb_25: Empty, buy_lb_50: Empty, add_on_charges: Empty,  time: firebase.database.ServerValue.TIMESTAMP });
					    	}
					        
					        if(per_id=='add_on_charges'){
						        keyref = firebase.database().ref('Pricing_Log').push().key;
						        db.ref('Pricing/Products').update({ 'add_on_charges': NewPriceValue });
						        db.ref('Pricing_Log/'+keyref).update({ add_on_charges: OldpriceValue, refill_25: Empty, buy_lb_25: Empty, buy_lb_50: Empty, refill_50: Empty,  time: firebase.database.ServerValue.TIMESTAMP });
					    	}
					        
					        //For Reload
					       
					        location.reload(true);
					}
					//Set Price Filled for updation
					function updatepricefield() {
						if(per_id=='25_lb_buy'){
							document.getElementById('lbltipupdateprice').innerHTML = 'Cylinder 25 LB New Price';
					        }
					        
					        if(per_id=='25_lb_refill'){	
					       	document.getElementById('lbltipupdateprice').innerHTML = 'Cylinder 25 LB Refill Price';
					       	}
					        
					        if(per_id=='50_lb_buy'){
					        document.getElementById('lbltipupdateprice').innerHTML = 'Cylinder 50 LB New Price';
					        
					        }
					        
					        if(per_id=='50_lb_refill'){
					        document.getElementById('lbltipupdateprice').innerHTML = 'Cylinder 50 LB Refill Price';
					        }
					        
					        if(per_id=='add_on_charges'){
					        document.getElementById('lbltipupdateprice').innerHTML = 'Add on Charges';
					        }
						

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
					    firebase.database().ref().child('Pricing').on('child_added',function(snapshot) {
							var Key=snapshot.key;
							var Buy25=snapshot.child(per_id).val();
							
					       //Set Array of DataSet
							document.getElementById('newpricetxt').value = Buy25;
						});
					}

					//When View Button Click
					function ViewHistoryButtonClick(ProductName) {
						window.open("../Reports/ViewPriceUpdateHistory.php?productname="+ProductName, "_self");
					}
					//When View Order History Button Click
					function ViewProductOrderHistory(ProductName) {
						window.open("../Reports/ProductWiseOrdersHistory.php?productname="+ProductName, "_self");
					}
					function NotAccepted() {
						alert('Nothing To Show');
					}
					

				</script>


		</body>

	</html>