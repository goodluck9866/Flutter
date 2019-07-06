$(document).ready(function(){	
	// 	var databaseRef = firebase.database().ref().child("Users");
	updateCustomerList();
	
	
});
function updateCustomerList() {
	//Setting Customer table as a DataTable
	var table = $('#CustomersTable').DataTable ( {
	"bFilter": true
	} );
	//Get Data From Firebase
	firebase.database().ref().child('Users').on('child_added',function(snapshot) {
		var Key=snapshot.key;
		var name=snapshot.child("user_name").val();
		var PlaceName=snapshot.child("place_name").val();
		var IsDeliveryAddress=snapshot.child("isDeliveryAddress").val();
		var Phone=snapshot.child("user_phone").val();
		var Mobile=snapshot.child("user_mobile").val();
		var Address=snapshot.child("user_address").val();
		var emirates=snapshot.child("emirate").val();	
        var buttons='<div class="td-actions text-left">'+
        '<button type="button" rel="tooltip" class="btn btn-info" id="ordercacnelbtn" value="'+Key+'" ><i class="material-icons">visibility</i></button>'+
        '</div>';
		//Set Array of DataSet
		var dataSet=[name, Address, Phone, Mobile, buttons];
		//var dataSet = [snapshot.key, snapshot.child("user_name").val(), snapshot.child("place_name").val(), snapshot.child("user_phone").val(), snapshot.child("user_mobile").val(), snapshot.child("user_address").val(), '<button type="button" rel="tooltip" class="btn btn-info btn-simple"><i class="material-icons">visibility</i></button><button type="button" rel="tooltip" class="btn btn-danger"><i class="material-icons">close</i></button>'];
		
		table.rows.add([dataSet]).draw();
	});
}
function updateOrderHistorytables(status,tablename,userid) {
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
	
	
	firebase.database().ref().child('Orders').orderByChild('user_id').equalTo(userid).on('child_added',function(snapshot) {
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
	window.open("../Reports/CustomerOrdersHistory.php?customername="+orderid, "_self"); 
	
});	
// (document).on('click', '#ordercacnelbtn', function () {
// 	//var customerid=$(this).val()
// 	//window.open("../Reports/CustomerOrdersHistory.php?customername="+customerid, "_self"); 
// 	alert('ssss');
// });

