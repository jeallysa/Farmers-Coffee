<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Inventory Stickers</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css"/>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker3.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <link href="<?php echo base_url(); ?>assets/css/responsive.bootstrap.min.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
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
                    <li>
                        <a href="<?php echo base_url(); ?>inventoryDashboard">
                            <i class="glyphicon glyphicon-tasks"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
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
                                                    <th align="center"><b>Needed Quantity</b></th>
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
                                                '<td>More than ' . number_format((($object->reorder-$object->stock)/1000)+0.1,2) .  ' kg </b></td>' ,
                                                '</tr>' ;
                                              
                                              }elseif($category == 4){
                                                echo   '<tr>' ,
                                                '<td>' . $object->name . ' </b></td>' ,
                                                '<td>' . $object->type . ' </b></td>' ,
                                                '<td>' . $object->supplier .  ' </b></td>' ,
                                                '<td>More than ' . number_format(($object->reorder-$object->stock)+1) .  ' unit/s </b></td>' ,
                                                '</tr>' ;

                                              }else{
                                                  echo   '<tr>' ,
                                                '<td>' . $object->name . ' </b></td>' ,
                                                '<td>' . $object->type . ' </b></td>' ,
                                                '<td>' . $object->supplier .  ' </b></td>' ,
                                                '<td>More than ' . number_format(($object->reorder-$object->stock+1)) .  ' pc/s </b></td>' ,
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
            
            
            
            
            

                      <form action="InventoryStickers/update/" method="post" accept-charset="utf-8">
                            <div class="modal fade" id="physcountmodal" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h1 class="panel-title" id="contactLabel"><b>Record Physical Count for Stickers</b></h1>
                                        </div>
                                        <div class="modal-body" style="padding: 5px;">
                                            <table id="example3" class="table table-striped table-bordered dt-responsive" width="100%">
                                                <thead>
                                                <tr>
                                                    <th align="center"><b>Sticker</b></th>
                                                    <th align="center"><b>Physical Count</b></th>
                                                    <th align="center"><b>Discrepancy</b></th>
                                                    <th align="center"><b>Inventory Date</b></th>
                                                    <th align="center"><b>Remarks</b></th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    
                           <?php
                              if(!empty($sticker)) {                  
                                      $mapModal = 1;
                                          foreach($sticker as $object){ 
                                             
                                            
                                           echo '<tr>' ,
                                               
                        '<td>'. $object->sticker .'<input  type="hidden" style="resize:vertical;" class="form-control" rows="2" name="stck_name[]" value="'. $object->sticker .'" id="sticker'.$mapModal.'"></td>' ,
                        '<td><input  id="physcount'.$mapModal.'" min="0" step= "0.001"    name="physcount[]" placeholder="Kilograms" type="number" class="form-control"/></td>',
                        '<td><input value="0" id="discrepancy'.$mapModal.'" name="discrepancy[]" class="form-control" readonly/></td>',
                        '<td><input  value="'.date("Y-m-d").'" id="date'.$mapModal.'" type="date" name="date[]" class="form-control" min="2017-01-01" max="'.date("Y-m-d").'"/></td>',
                        '<td><input  type="hidden" class="form-control"  value="'.$object->sticker_id.'" name="stckid[]" /><input  style="resize:vertical;" class="form-control"    name="remarks[]" id="remarks'.$mapModal.'"></td>' ,
                       
                                        
                                              
                                                '</tr>' ; 
                           $mapModal++;
                                         }  
                              }
               ?>
                                                </tbody>
                                            </table>
                                            <!--modal for verification-->
                                            
                                            
                    <div class="modal fade" id="verify" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="panel panel-primary">
                                <div class="panel-heading" style="background-color: #990000;">
                                    <h4 class="panel-title" id="contactLabel"><center><b>Verification</b></center> </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col-md-12 col-md-offset-1">
                                        <h3>Do you want to continue?</h3></div>
                                </div>
                                <hr>
                              <div align="right">
                                <button type="submit" class="btn btn-success">Yes</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              </div>
                            </div>
                            </div>
                        </div>

                        <div align="right">
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#verify" id="submit"> Save </button>
                                                            <input type="reset" class="btn btn-danger" value="Clear" />
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                   </form>               
            
            
            
            
            
            
            
            
            
            
            
            
            
            
                 
    <?php
        $details = 1; 
      if(!empty($sticker)) {                                     
           foreach($sticker as $object){
            $stckr = $object->sticker; 
            $id =  $object->sticker_id;
            $stock =  $object->sticker_stock;
            $physical =  $object->sticker_physcount;
          
           
?>       
            
         <!-----------------------------------------------------------------------  MODAL DETAILS -------------------------------------->
            <div class="modal fade" id="<?php echo "details" . $details   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span>Stock Card Details</h4>
                        </div>
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                   
                                    <div class="table-responsive">
                                        <div class="col-lg-12 col-md-12 col-sm-12 text-center" style="padding-bottom: 10px;">
                                                                <h3><b><?php echo $stckr; ?></b></h3>
                                                                <hr>
                                                            </div>
                                        <table width = "100%" class="table table-striped table-bordered dt-responsive nowrap" id="table-mutasi<?php echo $details ?>">
                                            <thead>
                                                <tr>
                                                    <td><b>Beginning Inventory</b></td>
                                                    <td><b> </b></td>
                                                    <td><b><?php echo ($physical); ?> pc/s</b></td>
                                                    <td><b> </b></td>
                                                    <td><b> </b></td>
                                                </tr>
                                                <tr>
                                                    <th><b>Client/Supplier</b></th>
                                                    <th><b>Date</b></th>
                                                    <th><b>Quantity</b></th>
                                                    <th><b>Remarks</b></th>
                                                    <th><b>Type</b></th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                                <?php
                                              $retrieveDetails4 ="SELECT * FROM jhcs.supp_po_ordered INNER JOIN supp_delivery ON supp_po_ordered.supp_po_ordered_id = supp_delivery.supp_po_ordered_id INNER JOIN supp_po ON supp_po.supp_po_id = supp_po_ordered.supp_po_id INNER JOIN supplier ON supplier.sup_id = supp_po.supp_id INNER JOIN sticker ON (sticker.sticker = supp_po_ordered.item AND sticker.sticker_type = supp_po_ordered.type) WHERE supp_po_ordered.stckr_stat='0' AND sticker_id = ".$id ;
                                              $query = $this->db->query($retrieveDetails4);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->sup_company  . '</td>' ,
                                                '<td>'  . $object->date_received  . '</td>' ,
                                                '<td>'  . number_format($object->yield_weight)  . ' pc/s</td>' ;
                                                ?>
                                                    <td>Company Delivery</td>
                                                    <td>In</td>
                                                 <?php   
                                                '</tr>' ;
                                              }
                                            }
                                        ?> 

                                        <?php
                                              $retrieveDetails5 ="SELECT DISTINCT sup_company, sup_returnDate, sup_returnQty, company_returns.stckr_stat FROM company_returns INNER JOIN supp_po_ordered ON company_returns.sup_returnItem = supp_po_ordered.supp_po_ordered_id INNER JOIN supp_po ON supp_po_ordered.supp_po_id = supp_po.supp_po_id INNER JOIN supplier ON supp_po.supp_id = supplier.sup_id INNER JOIN sticker ON (supp_po_ordered.item = sticker.sticker AND sticker.sticker_type = supp_po_ordered.type) WHERE company_returns.stckr_stat='0' AND sticker.sticker_id = ".$id;
                                              $query = $this->db->query($retrieveDetails5);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->sup_company  . '</td>' ,
                                                '<td>'  . $object->sup_returnDate  . '</td>' ,
                                                '<td>'  . number_format($object->sup_returnQty)  . ' pc/s</td>' ;
                                                ?>
                                                    <td>Company Return</td>
                                                    <td>Out</td>
                                                 <?php   
                                                '</tr>' ;
                                              }
                                            }
                                        ?> 

                                        <?php
                                              $retrieveDetails5 ="SELECT * FROM company_returns INNER JOIN supp_po_ordered ON company_returns.sup_returnItem = supp_po_ordered.supp_po_ordered_id INNER JOIN sticker ON (sticker.sticker = supp_po_ordered.item AND sticker.sticker_type = supp_po_ordered.type) INNER JOIN supplier ON sticker.sup_id = supplier.sup_id WHERE company_returns.stckr_stat='0' AND res = 'resolved' AND sticker_id = ".$id ;
                                              $query = $this->db->query($retrieveDetails5);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->sup_company  . '</td>' ,
                                                '<td>'  . $object->return_date  . '</td>' ,
                                                '<td>'  . number_format($object->sup_returnQty)  . ' pc/s</td>' ;
                                                ?>
                                                    <td>Resolved returns</td>
                                                    <td>In</td>
                                                 <?php   
                                                '</tr>' ;
                                              }
                                            }
                                        ?> 

                                        <?php
                                              $retrieveDetails1 ="SELECT * FROM jhcs.walkin_sales INNER JOIN coffee_blend ON coffee_blend.blend_id = walkin_sales.blend_id INNER JOIN sticker ON sticker.sticker_id = coffee_blend.sticker_id WHERE walkin_sales.stckr_stat='0' AND sticker.sticker_id = ".$id ;
                                              $query = $this->db->query($retrieveDetails1);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>Walkin Client</td>' ,
                                                '<td>'  . $object->walkin_date  . '</td>' ,
                                                '<td>'  . number_format($object->walkin_qty)  . ' pc/s</td>' ;
                                                ?>
                                                    <td>Used for Blends</td>
                                                    <td>Out</td>
                                                 <?php   
                                                 ;
                                              }
                                            }
                                        ?>

                                        <?php
                                              $retrieveDetails2 ="SELECT * FROM jhcs.contracted_po INNER JOIN contracted_client ON contracted_po.client_id = contracted_client.client_id INNER JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id INNER JOIN sticker ON coffee_blend.sticker_id = sticker.sticker_id WHERE contracted_po.stckr_stat='0' AND contracted_po.roast = 'Yes' AND sticker.sticker_id = ".$id ;
                                              $query = $this->db->query($retrieveDetails2);
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                           echo '<tr>' ,
                                                '<td>'  . $object->client_company  . '</td>' ,
                                                '<td>'  . $object->contractPO_date  . '</td>' ,
                                                '<td>'  . number_format($object->contractPO_qty)  . ' pc/s</td>' ;
                                                ?>
                                                    <td>Used for Blends</td>
                                                    <td>Out</td>
                                                 <?php   
                                                '</tr>' ;
                                              }
                                            }
                                        ?>
                                                </tbody>
                                        </table>
                                        <div class="row">
                                            <center>
                                                            <div class="row">
                                                                    <div class="form-group">
                                                                        <label class="col-md-6 control">Total In :</label>

                                                                        <div class="col-md-4">

                                        <?php
                                              $retrieveTotalin ="SELECT SUM(TotalIn) AS TotalIn from
(SELECT yield_weight AS TotalIn FROM supp_po_ordered INNER JOIN supp_delivery ON supp_po_ordered.supp_po_ordered_id = supp_delivery.supp_po_ordered_id INNER JOIN supp_po ON supp_po.supp_po_id = supp_po_ordered.supp_po_id INNER JOIN supplier ON supplier.sup_id = supp_po.supp_id INNER JOIN sticker ON (sticker.sticker = supp_po_ordered.item AND sticker.sticker_type = supp_po_ordered.type) WHERE supp_po_ordered.stckr_stat='0' AND sticker_id = '". $id  ."' UNION ALL
SELECT sup_returnQty AS TotalIn FROM company_returns INNER JOIN supp_po_ordered ON company_returns.sup_returnItem = supp_po_ordered.supp_po_ordered_id INNER JOIN sticker ON (sticker.sticker = supp_po_ordered.item AND sticker.sticker_type = supp_po_ordered.type) INNER JOIN supplier ON sticker.sup_id = supplier.sup_id WHERE company_returns.stckr_stat='0' AND res = 'resolved' AND sticker_id = '". $id  ."') AS b; " ;

$retrieveTotalout ="SELECT SUM(TotalOut) AS TotalOut from
(SELECT walkin_qty AS TotalOut FROM jhcs.walkin_sales INNER JOIN coffee_blend ON coffee_blend.blend_id = walkin_sales.blend_id INNER JOIN sticker ON sticker.sticker_id = coffee_blend.sticker_id WHERE walkin_sales.stckr_stat='0' AND sticker.sticker_id = '". $id  ."' UNION ALL
SELECT contractPO_qty AS TotalOut FROM jhcs.contracted_po INNER JOIN contracted_client ON contracted_po.client_id = contracted_client.client_id INNER JOIN coffee_blend ON contracted_po.blend_id = coffee_blend.blend_id INNER JOIN sticker ON coffee_blend.sticker_id = sticker.sticker_id WHERE contracted_po.stckr_stat='0' AND contracted_po.roast = 'Yes' AND sticker.sticker_id = '". $id  ."' UNION ALL
SELECT sup_returnQty AS TotalOut FROM company_returns INNER JOIN supp_po_ordered ON company_returns.sup_returnItem = supp_po_ordered.supp_po_ordered_id INNER JOIN supp_po ON supp_po_ordered.supp_po_id = supp_po.supp_po_id INNER JOIN supplier ON supp_po.supp_id = supplier.sup_id INNER JOIN sticker ON (supp_po_ordered.item = sticker.sticker AND sticker.sticker_type = supp_po_ordered.type) WHERE company_returns.stckr_stat='0' AND sticker.sticker_id = '". $id  ."') AS b; " ;
                                              $query = $this->db->query($retrieveTotalin);
                                              $query2 = $this->db->query($retrieveTotalout);
                                              if ($query->num_rows() > 0 && $query2->num_rows() > 0) {
                                              
                                           echo 
                                                '<input value="'  . number_format($query->row()->TotalIn)  . ' pc/s" id="totalin<?php echo $details; ?>" name="totalin" readonly="" class="form-control" />' ,
                                                '</div>',
                                                '<label class="col-md-6 control">Total Out :</label>',
                                                '<div class="col-md-4">',
                                                '<input value="'  . number_format($query2->row()->TotalOut)  . ' pc/s" id="totalout<?php echo $details; ?>" name="totalout" readonly="" class="form-control" />' ;
                                              
                                            }
                                        ?> 
                                    </div>

                                    <label class="col-md-6 control">Subtotal :</label>
                                                                        <div class="col-md-4">
                                                                            <?php
                                                                            echo
                                                                            '<input value="'  . number_format(($physical)+($query->row()->TotalIn - $query2->row()->TotalOut))  . ' pc/s"  id="subtotal<?php echo $details; ?>" name="subtotal" readonly="" class="form-control" />';
                                                                            ?>
                                                                        </div>
                                                                    
                                                                    <div class="form-group">
                                                                        <label for="type"></label>
                                                                        <div class="col-md-4">
                                                                            <input value="<?php echo $id; ?>" class="form-control" name="stckrid" type="hidden" />
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="type"></label>
                                                                        <div class="col-md-4">
                                                                            <input value="<?php echo $stock; ?>" class="form-control" id = "stckrstocks<?php echo $details; ?>" name="stckrstocks" type="hidden" />
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                                
                                                         </div> 
                                                    </center>  
                                                  
                                    </div>
                                
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        
    </div> 
<?php                       
                   $details++;
                               
              }
           }      

 ?>
        <!----------------------------------------------------------END     OF     MODAL -------------------------------------->     
        
        
        
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                              <li>
                                                    <a href="<?php echo base_url(); ?>inventoryStocks">
                                                     Raw Coffee
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryBlends">
                                                     Blends
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryPackaging">
                                                       Packaging
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#invstickers" data-toggle="tab">
                                                      Stickers
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url(); ?>inventoryMachines">
                                                     Machines
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="card-content ">
                                    <div style="text-align:right">
                                        <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#physcountmodal">Record Physical Count</a>
                                    </div>
                                    <br>
                                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">Sticker</b></th>
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b class="pull-left">Re-order Level</b></th>
                                            <th><b class="pull-left">Number of Stocks</b></th>
                                            <th><b class="pull-left">Physical Count</b></th>
                                            <th><b class="pull-left">Discrepancy</b></th>
                                            <th><b class="pull-left">Inventory Date</b></th>
                                            <th><b class="pull-left">Remarks</b></th>
                                            <th><b class="pull-left">Stock Card</b></th>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                  <?php
                              if(!empty($sticker)) {                  
                                      $mapModal = 1;
                                          foreach($sticker as $object){ 
                                             
                                            
                                           echo '<tr>' ,
                                                '<td>'  . $object->sticker . '</td>' ,
                                                '<td>'  . $object->sup_company . '</td>' ,
                                                '<td>'  . number_format($object->sticker_reorder)   . ' pc/s</td>' ,
                                                '<td><b>'  . number_format($object->sticker_stock)   . ' pc/s</b></td>' ,
                                                '<td>'  . number_format($object->sticker_physcount)   . ' pc/s</td>' ,
                                                '<td>'  . number_format($object->sticker_discrepancy)   . ' pc/s</td>' ,
                                                '<td>'  . $object->inventory_date   . '</td>' ,
                                                '<td>'  . $object->sticker_remarks   . '</td>' ;

                                                                      
                                        ?>
                                                                              
                                               <td><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo "details" . $mapModal  ?>">View</a></td>
                                            
                                            
                                            
                <?php                          '</tr>' ; 
                           $mapModal++;
                                         }  
                              }
               ?>
                                            
                                            
         
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>     
              </div>
          </div>
     </div>
    </div>    
    </div>     
        
        
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

</body>       
                                                       
<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.Html5.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/buttons.print.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/jszip.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/pdfmake.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/FileExport/vfs_fonts.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/responsive.bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
        "aaSorting": [0,'asc'],
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
        buttons: [
    
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> CSV',"className": 'btn btn-success btn-xs'},
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs'}
        ]

    });
});
</script>

<script>

$(document).ready(function() {
    $('#example2').DataTable({
        "aaSorting": [2, 'asc'],
        select: {
            style: 'single'
        }

    });
});
</script>

<script>

$(document).ready(function() {
    $('#example3').DataTable({
        "pageLength": 200,
        select: {
            style: 'single'
        }

    });
});
</script>

<script>

<?php
           
           $c = 1; 
          
    foreach($sticker as $object){
       $temp =  $object->sticker_id;
              
        
               ?>                               
                                                  
    
  $(document).ready(function(){                
           $(<?php echo "'input[id=physcount".$c."]'"?>).keyup(function(){
            var y = parseFloat($(this).val());
            var x = parseFloat($(<?php echo "'input[id=stckrstocks".$c."]'"?>).val());
            var res = y  - x || 0;
            $(<?php echo "'input[id=discrepancy".$c."]'"?>).val(res);
});      
});     
  
    
<?php                                                  
                                                                 
            
       $c++;
     }
               
?>

</script>

<script>

<?php
           
           $c = 1; 
          
    foreach($sticker as $object){
       $temp =  $object->sticker_id;
          
     
               ?>                               
                                                  
    /**
  $.fn.dataTableExt.afnFiltering.push(
        function(oSettings, aData, iDataIndex){
            var dateStart = parseDateValue($(<?php echo "'#details".$c." input[id=min".$c."]'"?>).val());
            var dateEnd = parseDateValue($(<?php echo "'#details".$c." input[id=max".$c."]'"?>).val());
            var evalDate= parseDateValue(aData[1]);

            if (evalDate >= dateStart && evalDate <= dateEnd) {
                return true;
            }
            else {
                return false;
            }
    }); 
*/
    //Date Converter
    function parseDateValue(rawDate) {
        var month = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
        var dateArray = rawDate.split(" ");
        var parsedDate = dateArray[2] + month + dateArray[0];
        return parsedDate;
    }


    var oTable = $(<?php echo "'#details".$c." table[id=table-mutasi".$c."]'"?>).DataTable({
        "columnDefs": [
            { "orderable": false, "targets": 0 },
            { "orderable": false, "targets": 2 },
            { "orderable": false, "targets": 3 },
            { "orderable": false, "targets": 4 }
        ],
        "aaSorting": [1,'asc'],
        "dom":' fBrtip',
        "lengthChange": false,
        "info":     false,
        buttons: [
               
            { "extend": 'excel', "text":'<i class="fa fa-file-excel-o"></i> CSV',"className": 'btn btn-success btn-xs'},
            { "extend": 'pdf', "text":'<i class="fa fa-file-pdf-o"></i> PDF',"className": 'btn btn-danger btn-xs'}
        ]
});

    $(<?php echo "'#details".$c." input[id=min".$c."]'"?>).datepicker({
        format: "yyyy-mm-dd",
        weekStart: 1,
        daysOfWeekHighlighted: "0",
        autoclose: true,
        todayHighlight: true
    });
    $(<?php echo "'#details".$c." input[id=max".$c."]'"?>).datepicker({
        format: "yyyy-mm-dd",
        weekStart: 1,
        daysOfWeekHighlighted: "0",
        autoclose: true,
        todayHighlight: true
    });

    // Event Listeners
    $(<?php echo "'#details".$c." input[id=min".$c."]'"?>).datepicker().on( 'changeDate', function() {
        oTable.fnDraw(); 
    });  
    $(<?php echo "'#details".$c." input[id=max".$c."]'"?>).datepicker().on( 'changeDate', function() {
        oTable.fnDraw(); 
    }); 
  
    
<?php                  
                       
            
       $c++;
     }
               
?>

</script>
 
</html>