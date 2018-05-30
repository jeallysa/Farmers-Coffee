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
    <title>Purchase Order</title>
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
    <link rel="stylesheet" href="css.css" />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
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
                    <li class="active">
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










            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs">
                                
           
                                
                                
                                
                                <!-------------------------------        MODAL DETAILS1  ---------------->
                                
                                
<?php
           $details = 1;
        if(!empty($Transactions)) {                                  
           foreach($Transactions as $object){
            $temp =  $object->supp_po_id;
            $sup_id = $object->sup_id;
               
            $oldDate = $object->suppPO_date;
            $arr = explode('-', $oldDate);
            $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];

?>                          
                                
             <div class="modal fade" id="<?php echo "details" . $details   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="panel panel-primary modal-content">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                        <center><h3><b><?php echo $object->sup_company  ?></b></h3></center>
                                        <center><h4><b><p>Order Details</p></b></h4></center> 
                                        <center><h5><b><p>Purchase Order No. <?php echo $temp ?></p></b></h5>
                                     
                                            
                                            <b><?php echo $newDate ?></b>
                                            </center>
                                        
                                        
                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    <th><b>Item Name</b></th>
                                                    <th><b>Type</b></th>
                                                    <th><b>Quantity</b></th>
                                                    <th><b>Weight(Kg)</b></th>
                                              <!--      <th>Yield Weight(g)</th>
                                                    <th>Yield(g)</th> -->
                                                    <th><b>Unit Price</b></th>
                                                    <th><b>Amount</b></th>
                                            <!--        <th>Date Received</th>
                                                     <th>Received by</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                
      <?php
                 //$i = 1;
                 $arrayItem = array("raw_coffee","sticker","packaging","machine");
                   $arrayOn = array("raw_coffee","sticker","package_type","brewer");
                      $arrayType = array("raw_type","sticker_type","package_size","brewer_type");
                        
                         for($table = 0 ; $table < 4 ; $table++){
                          
                             $retrieveDetails ="SELECT * from supp_po_ordered join ".$arrayItem[$table]." on   item =  ".$arrayOn[$table]." where sup_id = 
                             ".$sup_id ." and  type = ".$arrayType[$table]." and supp_po_ordered.supp_po_id = $temp"  ;  
               
                                              $query = $this->db->query($retrieveDetails);
                                           if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                                 $category = $object->category; 
                                   if($category==1){               
                                           echo '<tr>' ,
                                                '<td>'  . $object->item. '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                       
                                                '<td>'   . '</td>',
                                                '<td>'  .     number_format((($object->qty)/1000),2)  . '</td>' ,
                                                '<td>Php '  . number_format($object->unitPrice,2)  . '</td>' ,
                                                '<td>Php '  .  number_format($object->amount,2)  . '</td>' ,
                                                '</tr>' ;
                                              }else{
                                       echo '<tr>' ,
                                                '<td>'  . $object->item. '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . number_format($object->qty)  . '</td>' ,
                                       
                                                '<td>'   . '</td>',
                                                '<td>Php '  . number_format($object->unitPrice,2)  . '</td>' ,
                                                '<td>Php '  .  number_format($object->amount,2)  . '</td>' ,
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
                            <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">CLOSE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                                
        <?php                       
                   $details++;
                               
                            }  
        }
 ?>                      
             
                              <!-------------------------------    END OF   MODAL ---------------->   
                                
                                
                                
                                
                                  
                                <!-------------------------------        MODAL DELIVERY ---------------->
                                
                                
<?php
           $delivery = 1;
        if(!empty($Transactions)) {                                  
           foreach($Transactions as $object){
            $temp =  $object->supp_po_id;
            $sup_id = $object->sup_id;
               
            $oldDate = $object->suppPO_date;
            $arr = explode('-', $oldDate);
            $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];

?>                          
                                
             <div class="modal fade" id="<?php echo "delivery" . $delivery   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="panel panel-primary modal-content">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                             <center><h3><b><?php echo $object->sup_company  ?></b></h3></center>
                                        <center><h4><b><p>Delivery Details</p></b></h4></center> 
                                        <center><h5><b><p>Purchase Order No. <?php echo $temp ?></p></b></h5>
                                     
                                            
                                            <b><?php echo $newDate ?></b>
                                            </center>
                                        
                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    <th><b>Date Delivered</b></th>
                                                    <th><b>DR No. </b></th>
                                                    <th><b>Item Name</b> </th>
                                                    <th><b>Type</b></th>
                                                    <th><b>Quantity</b></th>
                                                    <th><b>Weight(Kg)</b></th>
                                                    <th><b>Yield Weight(Kg)</b></th>
                                                    <th><b>Yield(Kg)</b></th>
                                                    <th><b>Received By</b></th>
                                                </tr>
                                                
                                            </thead>
                                            
                                            <tbody>
                                                
      <?php

             $retrieveDetails ="SELECT date_received, drNo, item, type,supp_delivery.received,categoryx, yield_weight,yields, received_by FROM supp_delivery left join supp_po_ordered using(supp_po_ordered_id) where supp_delivery.supp_po_id =".$temp  ;  
                         $query = $this->db->query($retrieveDetails);
                                           if ($query->num_rows() > 0) {
                                               foreach ($query->result() as $object) {
                                                    $oldDate = $object->date_received;
                                                    $arr = explode('-', $oldDate);
                                                    $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];
                                                  
                                               if($object->categoryx == 1){          
                                           echo 
                                                '<tr>' ,
                                                '<td>'  . $newDate. '</td>' ,
                                                '<td>'  . $object->drNo   .        '</td>' ,
                                                '<td>'  . $object->item .         '</td>' ,
                                                '<td>'  . $object->type .         '</td>' ,  
                                                '<td>'                            ,'</td>' ,
                                                '<td>'  . number_format((($object->received)/1000),2) .     '</td>' ,  
                                                '<td>'  . number_format((($object->yield_weight)/1000),2) . '</td>' ,
                                                '<td>'  . number_format((($object->yields)/1000),2) .       '</td>' ,  
                                                '<td>'  . $object->received_by  . '</td>' ,
                                                '</tr>' ;
                                       }else{
                                            
                                           echo '<tr>' ,
                                                '<td>'  . $newDate. '</td>' ,
                                                '<td>'  . $object->drNo .        '</td>' ,
                                                '<td>'  . $object->item .         '</td>' ,
                                                '<td>'  . $object->type .         '</td>' ,
                                                '<td>'  . number_format($object->yield_weight) .     '</td>' , 
                                                '<td>'        . '</td>' ,
                                                '<td>'        .  '</td>' ,  
                                                '<td>'        . '</td>' ,  
                                                '<td>'  . $object->received_by  . '</td>' ,
                                                '</tr>' ;
                                              }

                                     }
                                               
                                               
                                               
                                               
                                               
                                               
                                               
                                            }
                                         
                                        ?>                     
                                   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">CLOSE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                                
        <?php                       
                   $delivery++;
                               
                            }  
        }
 ?>                      
             
                              <!-------------------------------    END OF   MODAL ---------------->                              
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                              
             <!-------------------------------        MODAL PAYMENT  ---------------->
                                
                                
<?php
           $payment = 1;
        if(!empty($Transactions)) {                                  
           foreach($Transactions as $object){
            $temp =  $object->supp_po_id;
            
            $oldDate = $object->suppPO_date;
            $arr = explode('-', $oldDate);
            $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];

?>                                             
             <div class="modal fade" id="<?php echo "payment".$payment   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="panel panel-primary modal-content">
                        <form action="#" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div id="page-wrapper">
                                    <div class="table-responsive">
                                            <center><h3><b><?php echo $object->sup_company  ?></b></h3></center>
                                        <center><h4><b><p>Payment Details</p></b></h4></center> 
                                        <center><h5><b><p>Purchase Order No. <?php echo $temp ?></p></b></h5>
                                     
                                            
                                            <b><?php echo $newDate ?></b>
                                            </center>
                                        
                                        
                                        <table class="table table-striped" id="table-mutasi">
                                            <thead>
                                                <tr>
                                                    <th><b>Payment Date</b></th>
                                                    <th><b>Amount Paid</b></th>
                                                    <th><b>Bank</b></th> <!-- to be edited     -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                
      <?php
             
                             $retrieveDetails ="SELECT * FROM supp_payment  where supp_po_id = $temp"  ;  
                                     $query = $this->db->query($retrieveDetails);
                                           if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                                   $oldDate = $object->date;
                                                   $arr = explode('-', $oldDate);
                                                   $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];
                                                  
                                           echo '<tr>' ,
                                                '<td>'  .$newDate . '</td>' ,
                                                '<td>Php '  . number_format($object->amount,2) . '</td>' ,
                                                '<td>'  . $object->bank  . '</td>' ,
                                                '</tr>' ;
                                              }
                                            }
                                         
                                        ?>                     
                                   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                <button type="button" class="btn btn-default btn-close" data-dismiss="modal">CLOSE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
                                
        <?php                       
                   $payment++;
                               
                            }  
        }
 ?>                      
             
                              <!-------------------------------    END OF   MODAL ---------------->   
                                                            
                                
                                
                                
                                
                                
                                
                                
                                
                                
    
                                   <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs">
                                                
                                                   <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOAdd">
                                                    Purchase Order
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOOrder">
                                                    Orders
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                            <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOUnpaidDelivery">
                                                    Unpaid Delivery
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                               <li class="active">
                                                <a href="<?php echo base_url(); ?>inventoryPOTransactionHistory">
                                                    Transaction History
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                                <span></span>
                                               <li class="">
                                                <a href="<?php echo base_url(); ?>inventoryPOArchive">
                                                    Archived Purchase Order
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                                
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="card-content ">
                                    <br>
                                    <table id="example" class="table hover order-column" cellspacing="0" width="100%">
                                        <thead>
                                            <th><b class="pull-left">Purchase Order No.</b></th>
                                            <th><b class="pull-left">Date Ordered</b></th>
                                           <!--   <th><b class="pull-left">Date Received</b></th> -->
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b class="pull-left">Total Amount</b></th>
                                          <!--  <th><b class="pull-left">Date of Payment</b></th> -->
                                            <th><b><center>Action</center></b></th>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            
                                            <?php
                                                      if(!empty($Transactions)) {
                                                            $i = 1;
                                                            
                                                                 foreach($Transactions as $object ){
                                                                      $oldDate = $object->suppPO_date;
                                                                      $arr = explode('-', $oldDate);
                                                                      $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];
            
                                                                         echo '<tr>' ,
                                                                              '<td>'  . $object->supp_po_id . '</td>' ,
                                                                              '<td>'  . $newDate   . '</td>' ,
																			  '<td>'  . $object->sup_company  . '</td>' ,
                                                                              '<td>Php '  . number_format($object->total_amount,2)  . '</td>' ;
                                                                      ?> 
                                            <td><center><a class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo "details".$i   ?>">Order Details</a>
                                             <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo "delivery".$i   ?>">Delivery Details</a>
                                            <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo "payment".$i   ?>">Payment Details</a></center></td> 
                                                                  <?php         '</tr>' ; 
                                                                         
                                                                       $i++;
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
<script src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
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
<script type="text/javascript">
$(document).ready(function() {
    var table = $('#example').DataTable({
        "aaSorting": [1,'desc'],
        select: {
            style: 'single'
        }
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
</html>