<?php 
$cur_page = basename($_SERVER['PHP_SELF']);
?>
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo">
        <a href="#" class="simple-text logo-normal">
          Cylinder  Supply
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          
          <li class= "nav-item <?php if($cur_page == "Dashboard.php"){echo " active";}?>" >
            <a class="nav-link" href="../Pages/Dashboard.php" onclick="active();">
              <i class="material-icons">dashboard</i>
              <p>Admin Dashboard</p>
            </a>
          </li>

          <li class="nav-item <?php if($cur_page == "ProductsList.php"){echo " active";}?>">
            <a class="nav-link" href="../Pages/ProductsList.php">
              <i class="material-icons">library_books</i>
              <p>Manage Products</p>
            </a>
          </li>

          <li class="nav-item <?php if($cur_page == "OrdersList.php"){echo " active";}?>">
            <a class="nav-link" href="../Pages/OrdersList.php">
              <i class="material-icons">library_books</i>
              <p>Pending Orders</p>
            </a>
          </li>
             <li class="nav-item <?php if($cur_page == "OrdersList.php"){echo " active";}?>">
            <a class="nav-link" href="../Pages/OrdersList.php">
              <i class="material-icons">library_books</i>
              <p>SORTED Orders</p>
            </a>
          </li>
          
          <li class="nav-item <?php if($cur_page == "SuppliersList.php"){echo " active";}?>">
            <a class="nav-link" href="../Pages/SuppliersList.php">
              <i class="material-icons">supervisor_account</i>
              <p>Manage Suppliers</p>
            </a>
          </li>
          
          <li class="nav-item <?php if($cur_page == "CustomersWatchList.php"){echo " active";}?>">
            <a class="nav-link" href="../Pages/CustomersWatchList.php">
              <i class="material-icons">person</i>
              <p>Manage Customers</p>
            </a>
          </li>
          <li class="nav-item <?php if($cur_page == "OrdersHistory.php"){echo " active";}?>">
            <a class="nav-link" href="../Pages/OrdersHistory.php">
              <i class="material-icons">find_in_page</i>
              <p>Orders History</p>
            </a>
          </li>
          <li class="nav-item <?php if($cur_page == "Reports.php"){echo " active";}?>">
            <a class="nav-link" href="../Pages/Reports.php">
              <i class="material-icons">description</i>
              <p>Reports</p>
            </a>
          </li>
        </ul>
      </div>
    </div>