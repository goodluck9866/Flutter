<?php include '../Includes/Header.php';?>
<?php
/**
 for display full info. and edit data
 */
// start again
//$con=mysqli_connect('localhost','root','','dbphpserverside');  // this one in error
if(isset($_REQUEST['id'])){
    $refid=$_REQUEST['id'];
    ?>
    <form >
        <div class="card">
            <div class="card-header card-header-primary">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="card-title">Assign Supplier To Order</h4>
                <p class="category">Category subtitle</p>

            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Select Supplier</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="selectElementId">
                        </select>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="assignedorder();" data-dismiss="modal" >Assigned</button>
                </form>
            </div>
        </div>
    </form>
<script >
    $(document).ready(function(){
        var select=document.getElementById('selectElementId');
        firebase.database().ref().child('Supplier').on('child_added',function(snapshot) {
            var Key=snapshot.key;
            var SupplierName=snapshot.child("supplier_name").val();
            var isonline=snapshot.child("isOnline").val();
            select.options[select.options.length] = new Option(SupplierName , Key);
        });
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
        var fborderid="<?php echo $refid ?>";
        var stat="Assigned";
        var e = document.getElementById("selectElementId");
        var supplierid = e.options[e.selectedIndex].value;
        var supplierdata = {
            assigned_to: supplierid
          };
        db.ref('Orders/'+ fborderid).update({ assigned_to: supplierid, order_status: stat });
        
        alert('Updated');
        
        
    }
</script>    
<?php
}//end if ?>






