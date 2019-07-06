
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
            			<div class="col-md-12">
         
							<div class="card">
				                <div class="card-header card-header-primary">
				                  <h4 class="card-title "><span id="sNames" style="font-weight:bold; color:black;"><?php echo $productname; ?></span>Price History</h4>

				                </div>
				                <div class="card-body">
				                  <div class="table-responsive">
				                    <table class="table" id="PriceHistoryTable">
				                      <thead class=" text-primary">
				                        <th>Price</th>
				                        <th>Date</th>
				                        
				                      </thead>
				                      <tbody>
				                        
				                      </tbody>
				                      <tfoot class=" text-primary">
				                      	<th>Price</th>
				                        <th>Date</th>
				                       
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
				<script src="../Scripts/FetchProducts.js"></script>
				<script>
					updateproductpricehistory(<?php echo $id?>);
				</script>

		</body>

	</html>
<?php } else echo"Error: Invalid or Broken URL";?>
