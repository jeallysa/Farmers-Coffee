
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Inventory Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
</head>
<style>
.form-group.is-focused .form-control {
    outline: none;
    background-image: linear-gradient(#17bbd0, #17bbd0), linear-gradient(#D2D2D2, #D2D2D2);
    background-size: 100% 2px, 100% 1px;
    box-shadow: none;
    transition-duration: 0.3s;
}    
.pagination>.active>a,
.pagination>.active>a:focus,
.pagination>.active>a:hover,
.pagination>.active>span,
.pagination>.active>span:focus,
.pagination>.active>span:hover {
    background-color: #17bbd0;
    border-color: #9c27b0;
    color: #FFFFFF;
    box-shadow: 0 4px 5px 0 rgba(156, 39, 176, 0.14), 0 1px 10px 0 rgba(156, 39, 176, 0.12), 0 2px 4px -1px rgba(156, 39, 176, 0.2);
}
.title {
    font-size: large;
    padding-top: 15px;

}
.label-count {
    height: 15px;
    width: 15px;
    border-radius: 50%;
    display: inline-block;
    background: red; 
    text-align: center;
    color: white;
}

.navbar .dropdown-menu li a:hover,
.navbar .dropdown-menu li a:focus,
.navbar .dropdown-menu li a:active,
.navbar.navbar-default .dropdown-menu li a:hover,
.navbar.navbar-default .dropdown-menu li a:focus,
.navbar.navbar-default .dropdown-menu li a:active {
    background-color: #17bbd0;
    color: #FFFFFF;
    box-shadow: 0 12px 20px -10px rgba(156, 39, 176, 0.28), 0 4px 20px 0px rgba(0, 0, 0, 0.12), 0 7px 8px -5px rgba(156, 39, 176, 0.2);
}
.footer{
    z-index: 0;
}
</style>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="<?php echo base_url(); ?>assets/img/sidebar-0.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>inventoryDashboard">
                            <i class="glyphicon glyphicon-tasks"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryStocks">
                            <i class="glyphicon glyphicon-stats"></i>
                            <p>Inventory Stocks</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryInventoryReport">
                            <i class="glyphicon glyphicon-book"></i>
                            <p>Inventory Report</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryPOAdd">
                             <i class="glyphicon glyphicon-shopping-cart"></i>
                            <p>Purchase Order</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryOutRawCoffee">
                          <i class="glyphicon glyphicon-indent-left"></i>
                            <p>Inventory Out</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryReturnsList">
                           <i class="glyphicon glyphicon-indent-right"></i>
                            <p>Returns</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            
                                <li id="nameheader">
                                    <?php $username = $this->session->userdata('username') ?>
                                
                                <?php
                                              $retrieveUserDetails ="SELECT * FROM jhcs.user WHERE username = '$username';" ;
                                              $query = $this->db->query($retrieveUserDetails);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<p class="title">Hi, '  . $object->u_fname  . ' ' . $object->u_lname  . '</p>' ;
                                              }
                                            }
                                        ?>
                                </li>
                           
                            
                               
       <!------------------                                          NOTIFICATION                    ---------------------------------->           
                            
                            <li>
                            
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                       <i class="glyphicon glyphicon-bell"></i>
                                       <span class="label-count"><b> <?php 
                                           
                              $total = 0;
                                for($i = 0; $i <= 3 ;$i++){
                                     if(!empty($reorder[$i])){
                                          foreach($reorder[$i] as $object){
                                              $total = $total+1;
                                                 
                                             }
                                      }
                                 } echo $total;
                                           ?>   </b></span> </a>
                            
                            
                            <?php
                            if($total != 0) {
                            ?>
                            
                                <ul class="dropdown-menu">
                                  <li><a data-target="#notifmodal" data-toggle="modal" href="#notifmodal"> <?php echo $total; ?> product/s have dropped to the re-order level</a></li>    
                                </ul>
                            <?php
                            } else {
                            ?>
                            <ul class="dropdown-menu">
                                  <li align="center"> No new notification. </li>    
                                </ul>
                            <?php
                            }
                            ?>

                            </li>
                            

                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                         <i class="glyphicon glyphicon-user"></i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryUser">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>inventoryActivityLogs">Activity Logs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('Login/logout');  ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                            
                            
                            
    <!------------------                                          NOTIFICATION                    ---------------------------------->          

                        
                        </ul>
                    </div>
                
                </div>
            </nav>

            <div class="modal fade" id="notifmodal" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span><b>Kindly Reorder the following:</b></h1>
                                        </div>
                                        <div class="modal-body" style="padding: 5px;">
                                            <table class="table table-striped table-bordered dt-responsive nowrap" id="example2" width="100%">
                                                <thead>
                                                <tr>
                                                    <th align="center"><b>Product</b></th>
                                                    <th align="center"><b>Type</b></th>
                                                    <th align="center"><b>Supplier</b></th>
                                                    <th align="center"><b>Quantity Needed</b></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    <?php 
                                 for($i = 0; $i <= 3 ;$i++){
                                     if(!empty($reorder[$i])){
                                          foreach($reorder[$i] as $object){
                                              $category = $object->category;
                                              
                                              if($category == 1){
                                                  
                                            echo   '<tr>' ,
                                                '<td>' . $object->name . ' </b></td>' ,
                                                '<td>' . $object->type . ' </b></td>' ,
                                                '<td>' . $object->supplier .  ' </b></td>' ,
                                                '<td>' . number_format(((($object->reorder-$object->stock)/1000)+0.1),3) .  ' kg </b></td>' ,
                                                '</tr>' ;
                                              
                                              }else{
                                                  echo   '<tr>' ,
                                                '<td>' . $object->name . ' </b></td>' ,
                                                '<td>' . $object->type . ' </b></td>' ,
                                                '<td>' . $object->supplier .  ' </b></td>' ,
                                                '<td>' . number_format(($object->reorder-$object->stock+1)) .  ' pc/s </b></td>' ,
                                                '</tr>' ;
                                              }
                                              
                                              
                                              
                                                 
                                             }
                                      }
                                 }
                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="glyphicon glyphicon-leaf"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Raw Coffee</p>
                                    <h3 class="title"> <?php echo number_format($data1['rawcoffeestock'] / 1000, 2); ?>
                                        <br><small>kilograms</small>
                                    </h3>
                                </div>
                                <a href="<?php echo base_url(); ?>inventoryStocks">
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-circle-arrow-right"> Details</i>
                                    </div>
                                </div>
                                </a>

                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                      <i class="glyphicon glyphicon-folder-close"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Packaging</p>
                                    <h3 class="title"> <?php echo number_format($data2['packagingstock']); ?>
                                        <br><small>pieces</small>
                                    </h3>
                                </div>
                                <a href="<?php echo base_url(); ?>inventoryPackaging">
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-circle-arrow-right"> Details</i>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                      <i class="glyphicon glyphicon-certificate"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Stickers</p>
                                    <h3 class="title"> <?php echo number_format($data3['stickerstock']); ?>
                                        <br><small>pieces</small>
                                    </h3>
                                </div>
                                <a href="<?php echo base_url(); ?>inventoryStickers">
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="glyphicon glyphicon-circle-arrow-right"> Details</i>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                      <i class="glyphicon glyphicon-wrench"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Machines</p>
                                    <h3 class="title"> <?php echo number_format($data4['machinestock']); ?>
                                        <br><small>pieces</small>
                                    </h3>
                                </div>
                                <a href="<?php echo base_url(); ?>inventoryMachines">
                                <div class="card-footer">
                                    <div class="stats">
                                       <i class="glyphicon glyphicon-circle-arrow-right"> Details</i>
                                    </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Inventory Report</h4>
                                </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="card-content table-responsive">
                                        <div>
                                            <center>
                                    <?php $month_filt = $data7["datav"];
                                    $year = $this->db->query("SELECT year(now()) AS year;")->row()->year;
                                            $tomonth = $this->db->query("SELECT MONTH(NOW()) AS tomonth;")->row()->tomonth;
                                    
                                        if(isset($month_filt)){
                                            $dateObj   = DateTime::createFromFormat('!m', $month_filt);
                                            $monthName = $dateObj->format('F');
                                            ?>
                                    <?php
                                        }else{
                                            $dateObj   = DateTime::createFromFormat('!m', $tomonth);
                                            $monthName = $dateObj->format('F');
                                    ?>
                                            <H4><b><?php echo $monthName; ?> <?php echo $year; ?></b></H4>
                                    <?php
                                        }
                                    ?>
                                            </center>
                                        </div>
                                    <div class="row">
                                    </div>
                                    <table id="coffeein" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date In</b></th>
                                                <th><b></b></th>
                                                <?php
                                                    $conntitle=mysqli_connect("localhost","root","","jhcs");
                                                    if ($conntitle->connect_error) {
                                                        die("Connection failed: " . $conntitle->connect_error);
                                                    } 
                                                    $sql="SELECT distinct raw_coffee FROM raw_coffee where raw_activation = 1";
                                                    $result = $conntitle->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                ?>
                                                <th><b><?php echo $row["raw_coffee"]; ?></b></th>
                                                <?php
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                $conntitle->close();
                                                ?>
                                            </tr>
                                            <tr>
                                                <td><b>Beginning Inventory</b></td>
                                                <td></td>
                                                <?php
                                                
                                                $query = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                if (isset($month_filt)){
                                                    if($month_filt == '1'){
                                                        foreach ($query->result() AS $row){
                                                            $begin ="SELECT (SELECT sum(a.totalin) AS totalin FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '12' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID  where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '12' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '12') a ) + (SELECT sum(a.ending) AS ending FROM (SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '12' UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id  where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '12' UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '12') a) AS beginning;" ;
                                                    
                                                          $query2 = $this->db->query($begin);
                                                          if ($query2->num_rows() > 0) {
                                                          foreach ($query2->result() as $object) {
                                                               echo '<td><b>'  . number_format($object->beginning / 1000, 2)  . ' kg </b></td>' ;
                                                               }
                                                            }
                                                        }
                                                    }else{
                                                        foreach ($query->result() AS $row){
                                                        $begin ="SELECT (SELECT sum(a.totalin) AS totalin FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = ".$month_filt." - 1 UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID  where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = ".$month_filt." - 1 UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = ".$month_filt." - 1) a) + (SELECT sum(a.ending) AS ending FROM (SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = ".$month_filt." - 1 UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id  where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = ".$month_filt." - 1 UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = ".$month_filt." - 1) a) AS beginning" ;
                                                    
                                                          $query3 = $this->db->query($begin);
                                                          if ($query3->num_rows() > 0) {
                                                          foreach ($query3->result() as $object) {
                                                               echo '<td><b>'  . number_format($object->beginning / 1000, 2)  . ' kg</b></td>' ;
                                                               }
                                                            }
                                                        }
                                                    }
                                                
                                                        
                                                    
                                                }else{
                                                foreach ($query->result() AS $row){
                                                    $query4 = $this->db->query("SELECT month(now()) AS this_month");
                                                    if($query4->row()->this_month == '1'){
                                                $begin ="SELECT (SELECT sum(a.totalin) AS totalin FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '12' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID  where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '12' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '12') a ) + (SELECT sum(a.ending) AS ending FROM (SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '12' UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id  where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '12' UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '12') a) AS beginning;" ;
                                                    }else{
                                                        $begin ="SELECT (SELECT sum(a.totalin) AS totalin FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now()) - 1 UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID  where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now()) - 1 UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now()) - 1) a ) + (SELECT sum(a.ending) AS ending FROM (SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = month(now()) - 1 UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id  where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = month(now()) - 1 UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = month(now()) - 1) a) AS beginning;" ;
                                                    }
                                              $query5 = $this->db->query($begin);
                                              if ($query5->num_rows() > 0) {
                                              foreach ($query5->result() as $object) {
                                                   echo '<td><b>'  . number_format($object->beginning / 1000, 2)  . ' kg </b></td>' ;
                                                   }
                                                }
                                                }
                                                }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                    

                                                    if($data5['coffeein']->num_rows() > 0){

                                                        foreach($data5['coffeein'] -> result() as $row)
                                                        {
                                                ?>
                                            <tr>
                                                <td><?php echo $row->transact_date; ?></td>
                                                <td><?php echo $row->supplier; ?></td>
                                                <?php
                                                $qcount1 = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                foreach ($qcount1->result() as $row2){
                                                    $colname1 = $row2->raw_coffee; ?>
                                                        <td><?php echo  number_format($row->$colname1); ?>  g </td>
                                                <?php

                                                }
                                                
                                                ?>
                                            </tr>
                                            <?php
                                                    }

                                                }
                                                else{
                                                ?>
                                                    <tr>
                                                        <td colspan = 11 style = "text-align: center;"> <h3>No data found</h3> </td>
                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <th></th>
                                                <?php
                                                
                                                if (isset($month_filt)){
                                                    $query = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $totalin ="SELECT sum(a.totalin) AS totalin FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '".$month_filt."' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID  where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '".$month_filt."' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '".$month_filt."') a ;" ;
                                                  $query6 = $this->db->query($totalin);
                                                  if ($query6->num_rows() > 0) {
                                                  foreach ($query6->result() as $object) {
                                                       echo '<th>'  . number_format($object->totalin / 1000, 2)  . ' kg </th>' ;
                                                       }
                                                    }
                                                }
                                                }else{
                                                    $query = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $totalin ="SELECT sum(a.totalin) AS totalin FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now()) UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID  where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now()) UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now())) a ;" ;
                                                  $query7 = $this->db->query($totalin);
                                                  if ($query7->num_rows() > 0) {
                                                  foreach ($query7->result() as $object) {
                                                       echo '<th>'  . number_format($object->totalin / 1000, 2)  . ' kg </th>' ;
                                                       }
                                                    }
                                                }
                                                }
                                                
                                                ?>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                </div><hr>
                                
                   <div class="row">
                        <div class="card-content table-responsive">
                            <table id="coffeeout" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th><b>Date Out</b></th>
                                                <th><b></b></th>
                                                <?php
                                                    $conntitle=mysqli_connect("localhost","root","","jhcs");
                                                    if ($conntitle->connect_error) {
                                                        die("Connection failed: " . $conntitle->connect_error);
                                                    } 
                                                    $sql="SELECT distinct raw_coffee FROM raw_coffee where raw_activation = 1";
                                                    $result = $conntitle->query($sql);
                                                    if ($result->num_rows > 0) {
                                                        while($row = $result->fetch_assoc()) {
                                                ?>
                                                <th><b><?php echo $row["raw_coffee"]; ?></b></th>
                                                <?php
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                                $conntitle->close();
                                                ?>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    

                                                    if($data6['coffeeout']->num_rows() > 0){

                                                        foreach($data6['coffeeout'] -> result() as $row)
                                                        {
                                                ?>
                                            <tr>
                                                <td><?php echo $row->transact_date; ?></td>
                                                <td><?php echo $row->client; ?></td>
                                                <?php
                                                $qcount2 = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                foreach ($qcount2->result() as $row3){
                                                    $colname2 = $row3->raw_coffee; ?>
                                                        <td><?php echo number_format($row->$colname2); ?>  g </td>
                                                <?php

                                                }
                                                
                                                ?>
                                            </tr>
                                            <?php
                                                    }

                                                }
                                                else{
                                                ?>
                                                    <tr>
                                                        <td colspan = 11 style = "text-align: center;"> <h3>No data found</h3> </td>
                                                    </tr>
                                                <?php
                                                }

                                                ?>
                                        </tbody>
                                        
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <th></th>
                                                <?php
                                                
                                                if (isset($month_filt)){
                                                    $query = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $totalout ="SELECT sum(a.totalin) AS totalout FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id  where raw_coffee = '".$row->raw_coffee."' and type = 'OUT' and month(transact_date) = '".$month_filt."' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id  where raw_coffee = '".$row->raw_coffee."'  and type = 'OUT' and month(transact_date) = '".$month_filt."' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id where raw_coffee = '".$row->raw_coffee."'  and type = 'OUT' and month(transact_date) = '".$month_filt."') a;";
                                                  $query8 = $this->db->query($totalout);
                                                  if ($query8->num_rows() > 0) {
                                                  foreach ($query8->result() as $object) {
                                                       echo '<th>'  . number_format($object->totalout / 1000, 2)  . ' kg</th>' ;
                                                       }
                                                    }
                                                    
                                                }
                                                }else{
                                                    $query = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $totalout ="SELECT sum(a.totalin) AS totalout FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id  where raw_coffee = '".$row->raw_coffee."' and type = 'OUT' and month(transact_date) = month(now()) UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id  where raw_coffee = '".$row->raw_coffee."'  and type = 'OUT' and month(transact_date) = month(now()) UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id where raw_coffee = '".$row->raw_coffee."'  and type = 'OUT' and month(transact_date) = month(now())) a;" ;
                                                  $query9 = $this->db->query($totalout);
                                                  if ($query9->num_rows() > 0) {
                                                  foreach ($query9->result() as $object) {
                                                       echo '<th>'  . number_format($object->totalout / 1000, 2)  . ' kg</th>' ;
                                                       }
                                                    }
                                                }
                                                }
                                                ?>
                                            </tr>
                                            <tr>
                                                <th>Ending Inventory</th>
                                                <th></th>
                                                <?php
                                                
                                                if (isset($month_filt)){
                                                    $query = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                  $end ="SELECT (SELECT sum(a.totalin) AS totalin FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '".$month_filt."' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID  where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '".$month_filt."' UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = '".$month_filt."') a ) + (SELECT sum(a.ending) AS ending FROM (SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '".$month_filt."' UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id  where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '".$month_filt."' UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = '".$month_filt."') a) AS ending" ;
                                                  $query10 = $this->db->query($end);
                                                  if ($query10->num_rows() > 0) {
                                                  foreach ($query10->result() as $object) {
                                                       echo '<th>'  . number_format($object->ending / 1000, 2)  . ' kg </th>' ;
                                                       }
                                                    }
                                                }
                                                }else{
                                                    $query = $this->db->query("SELECT DISTINCT raw_coffee FROM raw_coffee");
                                                    foreach ($query->result() AS $row){
                                                    $end ="SELECT (SELECT sum(a.totalin) AS totalin FROM (SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN supp_delivery d JOIN supp_po e JOIN supplier f ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_supplier = d.supp_delivery_id AND d.supp_po_id = e.supp_po_id AND e.supp_id = f.sup_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now()) UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN client_coffreturn d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.client_returnID = d.client_coffReturnID  where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now()) UNION SELECT sum(quantity) as totalin FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN walkin_sales d ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.walkin_return = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and type = 'IN' and month(transact_date) = month(now())) a) + (SELECT sum(a.ending) AS ending FROM (SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b JOIN inv_transact c JOIN contracted_po d JOIN contracted_client e ON a.raw_id = b.raw_coffeeid AND b.trans_id = c.trans_id AND c.po_client = d.contractPO_id AND d.client_id = e.client_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = month(now()) UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id  where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = month(now()) UNION SELECT sum(IF(`type`= 'IN', `quantity`, 0))-sum(IF(`type`= 'OUT', `quantity`, 0)) as ending FROM raw_coffee a JOIN trans_raw b ON a.raw_id = b.raw_coffeeid JOIN inv_transact c ON b.trans_id = c.trans_id JOIN walkin_sales d ON c.sales_inv = d.walkin_id where raw_coffee = '".$row->raw_coffee."' and month(transact_date) = month(now())) a) AS ending" ;                                                 
                                                 $query11 = $this->db->query($end);
                                                  if ($query11->num_rows() > 0) {
                                                  foreach ($query11->result() as $object) {
                                                       echo '<th>'  . number_format($object->ending / 1000, 2)  . ' kg </th>' ;
                                                       }
                                                    }
                                                }
                                                }
                                                
                                                ?>
                                                
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<div>
               <footer class="footer navbar navbar-fixed-bottom" >
                <div class="container">
                  <div class="copyright float-center">
                    <center>
                    &copy;
                    <a href="https://www.creative-tim.com" target="_blank">Creative Team</a>
                    <script>
                      document.write(new Date().getFullYear())
                    </script>, made with <i class="material-icons">favorite</i> by
                    Team Barako for John Hay Coffee Services Incorporation.
                </center>
                  </div>
                </div>
              </footer>
        </div>

<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.Html5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/datepicker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script>
$(document).ready(function() {
    $('#coffeein').DataTable({
		"order": [[ 0, "desc"]],
        "lengthMenu": [ 5, 10, 25, 50, 100 ],
        select: {
            style: 'single'
        }
    });
});
</script>
<script>
$(document).ready(function() {
    $('#coffeeout').DataTable({
		"order": [[ 0, "desc"]],
        "lengthMenu": [ 5, 10, 25, 50, 100 ],
        select: {
            style: 'single'
        }
    });
});
</script>
<script>

$(document).ready(function() {
    $('#example2').DataTable({
        select: {
            style: 'single'
        }

    });
});
</script>
</html>