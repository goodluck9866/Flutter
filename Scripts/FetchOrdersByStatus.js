$(document).ready(function(){	
	updatePendingOrdertable();
	updateNotPendingOrdertable('Completed','CompletedOrdersTable');
	
});
$(document).on('click', '#ordercacnelbtn', function () {
    var Confirmation = confirm("Are You Sure to cancel This Order!");
    if (Confirmation == true) {
    	// Get Order Id 
	    var orderid = document.getElementById("ordercacnelbtn").value;
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
						        var orderstat="Canceled";
						        db.ref('Orders/'+ orderid).update({ order_status: orderstat });
						        //For Reload
						        location.reload(true);    
    	} else {}
});

function updatePendingOrdertable() {
	var table;
    if ( $.fn.dataTable.isDataTable( '#PendingOrdersTable' ) ) {
    table = $('#PendingOrdersTable').DataTable();
	}
	else {
	    table = $('#PendingOrdersTable').DataTable( {
	        paging: true
	    } );
	}
	table.clear().draw();
    
    var checktable = $('#PendingOrdersTable').DataTable();

	if ( ! checktable.data().any() ) {
	    //Fetch Pending Orders Data From Firebase
	    firebase.database().ref().child('Orders').orderByChild('order_status').equalTo('Pending').on('child_added',function(snapshot) {
			var Key=snapshot.key;
			var Buy25=snapshot.child("buy_25").val();
			var Buy50=snapshot.child("buy_50").val();
			var Buy25Price=snapshot.child("buy_price_25").val();
			var Buy50Price=snapshot.child("buy_price_50").val();
			var Refill25=snapshot.child("refill_25").val();
			var Refill50=snapshot.child("refill_50").val();
			var Refill25Price=snapshot.child("refill_price_25").val();
			var Refill50Price=snapshot.child("refill_price_50").val();
			var TB=snapshot.child("total_payable").val();
			var Customer=snapshot.child("user_name").val();	
			var DateTime=snapshot.child("time").val();
			var sdate=new Date(DateTime);
	        var Year=sdate.getFullYear();
	        var month=sdate.getMonth()+1;
	        var day=sdate.getDate();
	        var hh=sdate.getHours();
	        var mm=sdate.getMinutes();
	        var ss=sdate.getSeconds();

	        var buttons='<div class="td-actions text-left">'+
	        '<button type="button" id="getEdit" rel="tooltip" class="btn btn-info btn-simple" data-toggle="modal" data-target="#AssignSuppliermodal" data-id="'+Key+'"><i class="material-icons">input</i></button>'+
	        '<button type="button" id="ordercacnelbtn" value="'+Key+'" rel="tooltip" class="btn btn-danger"><i class="material-icons">close</i></button>'+
	        '</div>';
			//Set Array of DataSet
			var dataSet=[Key,Customer, sdate, Buy25, Buy50, Refill25, Refill50, Refill25Price, TB, buttons];
			table.rows.add([dataSet]).draw();
		});
	}
}
function updateNotPendingOrdertable(status,tablename){

	var table;
	var Orderid='null';
    if ( $.fn.dataTable.isDataTable( '#'+tablename ) ) {
    table = $('#'+tablename).DataTable();
	}
	else {
	    table = $('#'+tablename).DataTable( {
	        paging: true
	    } );
	}
	table.clear().draw();
    
    var checktable = $('#'+tablename).DataTable();

	if ( ! checktable.data().any() ) {
	    //Fetch Pending Orders Data From Firebase
	    firebase.database().ref().child('Orders').orderByChild('order_status').equalTo(status).on('child_added',function(snapshot) {
			var Key=snapshot.key;
			Orderid=Key;
			///////////////////////////////////
			var supplierid=snapshot.child("assigned_to").val();
			var suppliername='<span style="font-weight:bold; color:red;">Supplier Not Mention</span>';
			
			firebase.database().ref('Supplier/' + supplierid+'/supplier_name').once('value',snap => {
			    if (snap.exists()){
			       	suppliername=snap.val();
				}				
			});
			////////////////////////////////////////
			var Buy25=snapshot.child("buy_25").val();
			var Buy50=snapshot.child("buy_50").val();
			var Buy25Price=snapshot.child("buy_price_25").val();
			var Buy50Price=snapshot.child("buy_price_50").val();
			var Refill25=snapshot.child("refill_25").val();
			var Refill50=snapshot.child("refill_50").val();
			var Refill25Price=snapshot.child("refill_price_25").val();
			var Refill50Price=snapshot.child("refill_price_50").val();
			var TB=snapshot.child("total_payable").val();
			var Customer=snapshot.child("user_name").val();	
			var DateTime=snapshot.child("time").val();
			var address=snapshot.child("deliver_at").val();
			var sdate=new Date(DateTime);
	        var Year=sdate.getFullYear();
	        var month=sdate.getMonth()+1;
	        var day=sdate.getDate();
	        var hh=sdate.getHours();
	        var mm=sdate.getMinutes();
	        var ss=sdate.getSeconds();
	        if(address=='None'){
	        	address='<span style="font-weight:bold; color:red;">Please Delivered at Customer Map Address</span>';
	        }
	 		   
	        
			//Set Array of DataSet
			
			if(status=='Processing'){
				var dataSet=[Key,Customer, suppliername, sdate, Buy25, Buy50, Refill25, Refill50, address,TB];
				table.rows.add([dataSet]).draw();
			}else if (status=='Reassigned'){
				var buttons='<div class="td-actions text-left">'+
		    	'<button type="button" id="getEdit" rel="tooltip" class="btn btn-info btn-simple" data-toggle="modal" data-target="#AssignSuppliermodal" data-id="'+Key+'"><i class="material-icons">cached</i></button>'+
		    	'<button type="button" id="ordercacnelbtn" value="'+Orderid+'" rel="tooltip" class="btn btn-danger"><i class="material-icons">close</i></button>'+
				'</div>';
				dataSet=[Key,Customer, suppliername, sdate, Buy25, Buy50, Refill25, Refill50, address,TB, buttons];
				table.rows.add([dataSet]).draw();
			}else if (status=='Assigned'){
				var dataSet=[Key,Customer, suppliername, sdate, Buy25, Buy50, Refill25, Refill50, address,TB];
				table.rows.add([dataSet]).draw();
			}else if(status=='Overdue') {
				var buttons='<div class="td-actions text-left">'+
		    	'<button type="button" id="getEdit" rel="tooltip" class="btn btn-info btn-simple" data-toggle="modal" data-target="#AssignSuppliermodal" data-id="'+Key+'"><i class="material-icons">cached</i></button>'+
		    	'<button type="button" id="ordercacnelbtn" value="'+Orderid+'" rel="tooltip" class="btn btn-danger"><i class="material-icons">close</i></button>'+
				'</div>';
				var dataSet=[Key,Customer, suppliername, sdate, Buy25, Buy50, Refill25, Refill50, address,TB, buttons];
				table.rows.add([dataSet]).draw();
			}else {
				var dataSet=[Key,Customer, suppliername, sdate, Buy25, Buy50, Refill25, Refill50, address,TB];
				table.rows.add([dataSet]).draw();
			}
		});
	}
}
//End Funtion
//Start New Funtion
