$(document).ready(function(){	
	
	var table;
    if ( $.fn.dataTable.isDataTable( '#ProductsTable' ) ) {
    table = $('#ProductsTable').DataTable();
	}
	else {
	    table = $('#ProductsTable').DataTable( {
	        paging: true
	    } );
	}
    
    var checktable = $('#ProductsTable').DataTable();

	if ( ! checktable.data().any() ) {

		//Get Data From Firebase
		firebase.database().ref('Pricing/Products/25_lb_buy').on('value',function(snapshot) {
			var buy25=snapshot.val();
			//Set Array of DataSet
			var buttons='<div class="td-actions text-left">'+
			'<button type="button" rel="tooltip" class="btn btn-info" onclick="ViewProductOrderHistory(1);"><i class="material-icons">visibility</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(1);"><i class="material-icons">history</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="25_lb_buy"><i class="material-icons">edit</i></button></div>';
			var dataSet=['Cylinder 25 LB New', buy25, buttons];
			table.rows.add([dataSet]).draw();

		});
			firebase.database().ref('Pricing/Products/25_lb_refill').on('value',function(snapshot) {
			var refill25=snapshot.val();
			
			var buttons='<div class="td-actions text-left">'+
			'<button type="button" rel="tooltip" class="btn btn-info" onclick="ViewProductOrderHistory(2);"><i class="material-icons">visibility</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(2);"><i class="material-icons">history</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="25_lb_refill"><i class="material-icons">edit</i></button></div>';
			var dataSet=['Cylinder 25 LB Refill', refill25, buttons];
			table.rows.add([dataSet]).draw();
			
		});
			firebase.database().ref('Pricing/Products/50_lb_buy').on('value',function(snapshot) {
			var buy50=snapshot.val();
			
			var buttons='<div class="td-actions text-left">'+
			'<button type="button" rel="tooltip" class="btn btn-info" onclick="ViewProductOrderHistory(3);"><i class="material-icons">visibility</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(3);"><i class="material-icons">history</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="50_lb_buy"><i class="material-icons">edit</i></button></div>';
			var dataSet=['Cylinder 50 LB New', buy50, buttons];
			table.rows.add([dataSet]).draw();
			
		});
			firebase.database().ref('Pricing/Products/50_lb_refill').on('value',function(snapshot) {
			 var refill50=snapshot.val();
			
			var buttons='<div class="td-actions text-left">'+
			'<button type="button" rel="tooltip" class="btn btn-info" onclick="ViewProductOrderHistory(4);"><i class="material-icons">visibility</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(4);"><i class="material-icons">history</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="50_lb_refill"><i class="material-icons">edit</i></button></div>';
			var dataSet=['Cylinder 50 LB Refill', refill50, buttons];
			table.rows.add([dataSet]).draw();
			
		});
				firebase.database().ref('Pricing/Products/add_on_charges').on('value',function(snapshot) {
			//var buy25=snapshot.val();
			//var refill25=snapshot.child("25_lb_refill").val();
			//var buy50=snapshot.child("50_lb_buy").val();
			 //var refill50=snapshot.val();
			var aoc=snapshot.val();
			
			//Set Array of DataSet
			// var buttons='<div class="td-actions text-left">'+
			// '<button type="button" rel="tooltip" class="btn btn-info" onclick="ViewProductOrderHistory(1);"><i class="material-icons">visibility</i></button>'+
			// '<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(1);"><i class="material-icons">history</i></button>'+
			// '<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="25_lb_buy"><i class="material-icons">edit</i></button></div>';
			// var dataSet=['Cylinder 25 LB New', buy25, buttons];
			// table.rows.add([dataSet]).draw();

			// var buttons='<div class="td-actions text-left">'+
			// '<button type="button" rel="tooltip" class="btn btn-info" onclick="ViewProductOrderHistory(2);"><i class="material-icons">visibility</i></button>'+
			// '<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(2);"><i class="material-icons">history</i></button>'+
			// '<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="25_lb_refill"><i class="material-icons">edit</i></button></div>';
			// var dataSet=['Cylinder 25 LB Refill', refill25, buttons];
			// table.rows.add([dataSet]).draw();
			
			// var buttons='<div class="td-actions text-left">'+
			// '<button type="button" rel="tooltip" class="btn btn-info" onclick="ViewProductOrderHistory(3);"><i class="material-icons">visibility</i></button>'+
			// '<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(3);"><i class="material-icons">history</i></button>'+
			// '<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="50_lb_buy"><i class="material-icons">edit</i></button></div>';
			// var dataSet=['Cylinder 50 LB New', buy50, buttons];
			// table.rows.add([dataSet]).draw();
			
			// var buttons='<div class="td-actions text-left">'+
			// '<button type="button" rel="tooltip" class="btn btn-info" onclick="ViewProductOrderHistory(4);"><i class="material-icons">visibility</i></button>'+
			// '<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(4);"><i class="material-icons">history</i></button>'+
			// '<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="50_lb_refill"><i class="material-icons">edit</i></button></div>';
			// var dataSet=['Cylinder 50 LB Refill', refill50, buttons];
			// table.rows.add([dataSet]).draw();
			
			var buttons='<div class="td-actions text-left">'+
			'<button type="button" rel="tooltip" class="btn btn-info" onclick="NotAccepted();"><i class="material-icons">visibility</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-success" onclick="ViewHistoryButtonClick(5);"><i class="material-icons">history</i></button>'+
			'<button type="button" rel="tooltip" class="btn btn-default" id="getEdit" data-toggle="modal" data-target="#ProductPriceIUpdateModal" data-id="add_on_charges"><i class="material-icons">edit</i></button></div>';
			var dataSet=['Add on charges', aoc, buttons];
			table.rows.add([dataSet]).draw();
			
		});
	}
});
//Update Products Price History
function updateproductpricehistory(productid){	
	var table;
    if ( $.fn.dataTable.isDataTable( '#PriceHistoryTable' ) ) {
    table = $('#PriceHistoryTable').DataTable();
	}
	else {
	    table = $('#PriceHistoryTable').DataTable( {
	        paging: true
	    } );
	}
    
    var checktable = $('#PriceHistoryTable').DataTable();
    var productname;
    if(productid==1){
    	productname='buy_lb_25';
    }
    if(productid==2){
    	productname='refill_25';
    }
    if(productid==3){
    	productname='buy_lb_50';
    }
    if(productid==4){
    	productname='refill_50';
    }
    if(productid==5){
    	productname='add_on_charges';
    }
	if ( ! checktable.data().any() ) {
	    //Fetch Pending Orders Data From Firebase
	    firebase.database().ref().child('Pricing_Log').orderByChild(productname).startAt(1).on('child_added',function(snapshot) {
			var Key=snapshot.key;
			var price=snapshot.child(productname).val();	
			var DateTime=snapshot.child("time").val();
			var sdate=new Date(DateTime);
	        var Year=sdate.getFullYear();
	        var month=sdate.getMonth()+1;
	        var day=sdate.getDate();
	        var hh=sdate.getHours();
	        var mm=sdate.getMinutes();
	        var ss=sdate.getSeconds();

	       	//Set Array of DataSet
			var dataSet=[price, sdate];
			table.rows.add([dataSet]).draw();
		});
	}
}
//Update Product History Table
function updateProductOrderHistorytables(status,tablename,productid){
	var productname;
	var productpriceattr_name;
	if(productid==1){
    	productname='buy_25';
    	productpriceattr_name='buy_price_25';
    }
    if(productid==2){
    	productname='refill_25';
    	productpriceattr_name='refill_price_25';
    }
    if(productid==3){
    	productname='buy_50';
    	productpriceattr_name='buy_price_50';
    }
    if(productid==4){
    	productname='refill_50';
    	productpriceattr_name='refill_price_50';
    }
    if(productid==5){
    	productname='add_on_charges';
    	productpriceattr_name='add_on_charges';
    }
	var table;
    if ( $.fn.dataTable.isDataTable( '#'+tablename ) ) {
    table = $('#'+tablename).DataTable();
	}
	else {
	    table = $('#'+tablename).DataTable( {
	        paging: true
	    } );
	}
    
    var checktable = $('#'+tablename).DataTable();

	if ( ! checktable.data().any() ) {
	    //Fetch Pending Orders Data From Firebase
	    firebase.database().ref().child('Orders').orderByChild('order_status').equalTo(status).on('child_added',function(snapshot) {
			var Key=snapshot.key;
			var ProductQty=snapshot.child(productname).val();
			var ProductPrice=snapshot.child(productpriceattr_name).val();
			// var Buy25=snapshot.child("buy_25").val();
			// var Buy50=snapshot.child("buy_50").val();
			// var Buy25Price=snapshot.child("buy_price_25").val();
			// var Buy50Price=snapshot.child("buy_price_50").val();
			// var Refill25=snapshot.child("refill_25").val();
			// var Refill50=snapshot.child("refill_50").val();
			// var Refill25Price=snapshot.child("refill_price_25").val();
			// var Refill50Price=snapshot.child("refill_price_50").val();
			var TB;
			var Customer=snapshot.child("user_name").val();	
			var DateTime=snapshot.child("time").val();
			var sdate=new Date(DateTime);
			//Set Array of DataSet
			
			if(ProductQty>0){
				TB=ProductQty*ProductPrice;
				var dataSet=[Key,Customer, sdate, ProductQty, ProductPrice, TB];
	      		table.rows.add([dataSet]).draw();
			}
		});
	}


}


