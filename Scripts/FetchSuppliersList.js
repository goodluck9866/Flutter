
function updateSupplierstable(status,tablename){

	var table;
    if ( $.fn.dataTable.isDataTable( '#'+tablename ) ) {
    table = $('#'+tablename).DataTable();
	}
	else {
	    table = $('#'+tablename).DataTable( {
	        paging: true
	    } );
	}
	table.clear().draw();
	//Fetch Pending Orders Data From Firebase
	firebase.database().ref().child('Supplier').orderByChild('supplier_account_status').equalTo(status).on('child_added',function(snapshot) {
			var Key=snapshot.key;
			var name=snapshot.child("supplier_name").val();
			var mobile=snapshot.child("supplier_mobile").val();
			var emirates=snapshot.child("supplier_emirate").val();
			var vehicle=snapshot.child("supplier_vehicle").val();
			var address=snapshot.child("supplier_address").val();
			var isonline=snapshot.child("isOnline").val();
			
			if(status=="Pending"){
	        	var buttons='<div class="td-actions text-left">'+
	        	'<button type="button" rel="tooltip" class="btn btn-info btn-simple"><i class="material-icons">assignment_turned_in</i></button>'+
	        	'<button type="button" rel="tooltip" class="btn btn-danger"><i class="material-icons">close</i></button>'+
	        	'</div>';
				var dataSet=[name, mobile, address, vehicle, emirates, buttons];
				table.rows.add([dataSet]).draw();
			}
			if(status=="Allowed"){
	        	var buttons='<div class="td-actions text-left">'+
	        	'<button type="button" rel="tooltip" class="btn btn-info" id="ordercacnelbtn" value="'+Key+'" ><i class="material-icons">visibility</i></button>'+
	        	'<button type="button" rel="tooltip" class="btn btn-danger"><i class="material-icons">close</i></button>'+
	        	
	        	'</div>';
	        	var dataSet=[name, mobile, address, vehicle, emirates, buttons];
	        	table.rows.add([dataSet]).draw();
			}
			if(status=="Rejected"){
	        	var dataSet=[name, mobile, address, vehicle, emirates];
	        	table.rows.add([dataSet]).draw();
			}
	});
}
function updateOrderHistorytables(status,tablename,supplierid) {
	var table;
	if ( $.fn.dataTable.isDataTable( '#'+tablename ) ) {
    table = $('#'+tablename).DataTable();
	}
	else {
	    table = $('#'+tablename).DataTable( {
	        paging: true
	    } );
	}
	table.clear().draw();
	
	
	firebase.database().ref().child('Orders').orderByChild('assigned_to').equalTo(supplierid).on('child_added',function(snapshot) {
			var Key=snapshot.key;
			///////////////////////////////////
			var orderstatus=snapshot.child("order_status").val();
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

	        if(orderstatus==status){
				var dataSet=[Key,Customer, sdate, Buy25, Buy50, Refill25, Refill50, address,TB];
				table.rows.add([dataSet]).draw();
			}
	});
}	

$(document).on('click', '#ordercacnelbtn', function () {
	var orderid=$(this).val()
	window.open("../Reports/SupplierOrdersHistory.php?suppliername="+orderid, "_self"); 
	
});	
