
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
    <link href="<?php echo base_url(); ?>assets/css/jquery.dataTable.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/dataTables.bootstrap.min.css"/>
    <!--  Material Dashboard CSS    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/demo.css"/>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" rel="stylesheet" />
    
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
                                                '<td>' . number_format(((($object->reorder-$object->stock)/1000)+0.1),2) .  ' kg </b></td>' ,
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
                        <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="card card-nav-tabs" >
                                
                          
                                
                                
                                
                                
                                 <!--------------------------- Not using  ------------------------------->       
<?php
     $return = 1;
     if(!empty($unpaid)) {                                
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;
            $sup_id = $object->sup_id;
            $dateMin = $object->suppPO_date;
                
                
                                             $oldDate = $object->suppPO_date;
                                             $arr = explode('-', $oldDate);
                                             $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];
?>                           
                                
             
        <div class="modal fade" id="<?php echo "return" . $return   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <!--
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span>Add New Return</h4>
                        </div>-->
                        <form action="InventoryPOUnpaidDelivery/insertReturn" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                
                                        <center><h3><b><?php echo $object->sup_company  ?></b></h3></center>
                                        <center><h4><b><p>Return</p></b></h4></center> 
                                        <center><h5><b><p>Purchase Order No. <?php echo $temp ?></p></b></h5>
                                            
                                            <?php 
                                             $arr = explode('-', $dateMin);
                                             $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];
                                             ?>
                                            
                                            <b><?php echo $newDate ?></b>
                                            </center> 

                                
                                <div class="row">
                             
                                      <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Date Returned</label>
                                            <input class="form-control" type="date" name="date" min="<?php echo $dateMin ?>" max="<?php   echo date("Y-m-d") ?>" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                         
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                           <label>Delivery Receipt No.</label>
                                           <!-- <select class="selectpicker" data-live-search="true" name="drList" id = "drList" required>
                                                <option value="">Select DR#</option> -->
                                        <select class="form-control" name="drList" id="<?php echo "drList".$return ?>"required>
                                               <!-- <option disabled selected value="">Select DR#</option> -->
                                                <option value="">Select DR No.</option>
                                                
                   <?php                              
                          $retrieveDetails ="select distinct drNo from supp_delivery where supp_po_id = $temp"  ;  
                             $query = $this->db->query($retrieveDetails);
                                         if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                               echo '<option>'  . $object->drNo . '</option>' ;
                                              }
                                         }
                                            ?>
                                                     
                                            </select>
                                            
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="item">Item Returned</label>
                                            <select class="form-control" name="item" id="<?php echo "item".$return ?>" required disabled>
                                                <option disabled selected value="">Select Item</option>
                                               

                                            </select>
                                        </div>
                                    </div>
                                 
                                </div>
                                
                                
                                
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <label> <p id="qtywt">Quantity | Weight(Kg)</p></label>
                                        <input class="form-control" type="number" name="returnQty" id="<?php echo "returnQty".$return ?>"  min="1" required disabled/>
                                    </div> 
                                    
                                    
                                    <div class="col-sm-6">
                                        <label> <p id="qtywt">Remarks</p></label>
                                        
                                        <input class="form-control" type="text" name="remarks" id="<?php echo "remarks".$return ?>"   required disabled />
                                    </div>
                                    
                                </div>
                                
                                      <input class="form-control" type="hidden" name="poNo" value="<?php echo $temp ?>"/>
                                      <input class="form-control" type="hidden" name="category" id="<?php echo "category".$return ?>" />
                                
                            </div>
                            <div class="panel-footer" style="margin-bottom:-14px;">
                               <center> <input type="submit" class="btn btn-success" value="Add" />
                                <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">CLOSE</button></center>
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                                <!--<input type="reset" class="btn btn-danger" value="Clear" />-->
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                                <!--<button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>-->
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
        <?php                       
                   $return++;
                               
           }  
     }
 ?>                              
                                    
                                
                               <!---- END MODAL PO BALANCE 1 ------> 
                                    
                                    
                                    
                                    
                                    
                                    
      <?php
     $partial = 1;
     if(!empty($unpaid)) {                                
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;
            $sup_id = $object->sup_id;
            $dateMin = $object->suppPO_date;
            $tfee = $object->trucking_fee
?>                                 
                                    
                               <!--------------------------- MODAL Partial Payment ------------------------------->
                                
          <div class="modal fade" id="<?php echo "partial" . $partial   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="panel panel-primary">
                                            <form action="InventoryPOUnpaidDelivery/insertPartialPayment/<?php echo $temp ?>" method="post" accept-charset="utf-8">
                                            <div class="modal-body" style="padding: 0px;">
                                                
                                                
                                             <center><h3><b><?php echo $object->sup_company  ?></b></h3></center>
                                        <center><h4><b><p>Payment</p></b></h4></center> 
                                        <center><h5><b><p>Purchase Order No. <?php echo $temp ?></p></b></h5>
                                            
                                            <?php 
                                             $arr = explode('-', $dateMin);
                                             $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];
                                             ?>
                                            
                                            <b><?php echo $newDate ?></b>
                                            </center> 

                                                
                                                <table class="table table-striped" id="table-mutasi">
                                                    <thead>
                                                        <tr>
                                                            <th><b>Item Name</b></th>
                                                            <th><b>Type</b></th>
                                                     <!--  <th>Yield Weight(g)</th> -->
                                                            <th><b>Amount</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                                         
               <?php
                                               //$i = 1;
                 $arrayItem = array("raw_coffee","sticker","packaging","machine");
                   $arrayOn = array("raw_coffee","sticker","package_type","brewer");
                      $arrayType = array("raw_type","sticker_type","package_size","brewer_type");
                         for($table = 0 ; $table < 4 ; $table++){
                          
                             $retrieveDetails ="SELECT * FROM supp_po_ordered join ".$arrayItem[$table]." on   item =  ".$arrayOn[$table]." where sup_id = 
                             ".$sup_id ." and  type = ".$arrayType[$table]." and supp_po_ordered.supp_po_id = $temp"  ;  
                       
                                              $query = $this->db->query($retrieveDetails);
                             
                                              if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                                  $tempItemId = $object->supp_po_ordered_id;
                                           echo '<tr>' ,
                                                '<td>'  . $object->item   . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                               // '<td>'  . $object->yield_weight. '</td>' ,
                                               // '<td>'  . $object->yields. '</td>' ,
                                                '<td>Php '  .number_format($object->amount,2)  . '</td>' ;
                                            ?>
                                                        <td><input class="form-control" type="hidden"  id="poId" value="<?php echo $temp ?>" />   </td>
                                                        
                                <?php
                                                '</tr>' ;
                                                  
                                              }
                                            }
                                         } 
                                            ?>
                                                        
                                                          
                                         <tr>
                                                   <td>Trucking Fee</td>
                                                   <td></td>
                                                   <td><input class="form-control" type="text"  id="trucking_fee" value ="<?php echo 'Php ' .  number_format(($tfee),2)?> "readonly disabled /></td>
                                                            
                                                        </tr>   
                                                        
                                               
                                                        
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            
                                                        </tr> 
                                                        
                                                    </tbody>
                                                </table>
                                                <div class="container"  >
                                                    <div class="row justify-content-end"  >
                                                        <div class="col-md-9 form-group" >
                                                            <div class="form-group label-floating">
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <div class="form-group label-floating">
                                                                            <label>Total Balance:</label>
                                                                                <input class="form-control" step="0.01" type="text"  id="total" readonly disabled />
                                                                             </div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-4">
                                                                             <div class="form-group label-floating">
                                                                            <label>Remaining Balance</label>
                                                                             <input class="form-control" type="text"  step="0.01"   id="remaining" readonly disabled />
                                                                             </div>
                                                                        </div>    
                                                                   </div>      
                                                                 <div class="row">
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Date of Payment:</label>
                                                                                  <input class="form-control" type="date"  min="<?php echo $dateMin ?>" max ="<?php echo date("Y-m-d")?>" name="date" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Amount:</label>
                                                                                  <input class="form-control" type="number" min="0" step="0.01"  max="" name="amount" id = "amount" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
                                                                                <div class="form-group label-floating">
                                                                                  <label>Bank:</label>
                                                                                  <input class="form-control" type="text" name="bank" required>
                                                                                </div> 
                                                                            </div>
                                                                 </div>
                                                                        <div class="row">
                                                                        </div>
                                                                    
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-footer" align="center" style="margin-bottom:-14px;">
                                                <center><button type="submit" class="btn btn-success accept">Record Payment</button>
                                                    <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">CLOSE</button></center>
                                                </div>
                                                </div>
                                            </form>    
                                        </div>
                                    </div>
                                </div>                  
                                
          <?php                       
                   $partial++;
               
                               
           }  
     }
 ?>                               
                                      
                                    
                               <!---- END MODAL PO BALANCE 1 ------> 
                                     
                                    
                                    
                           
                                    
                                    
                                    
                                    
                                   
    <?php
           $details = 1;
           if(!empty($unpaid)) {                               
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;
            $sup_id = $object->sup_id;
            $dateMin = $object->suppPO_date;

?>
                                                      
                                    
                                <div class="modal fade" id="<?php echo "details" . $details   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="panel panel-primary modal-content">
                                            <form action="#" method="post" accept-charset="utf-8">
                                                <div class="modal-body" style="padding: 5px;">
                                                    <div id="page-wrapper">
                                                        <div class="table-responsive">
                                           <center><h3><b><?php echo $object->sup_company  ?></b></h3></center>
                                        <center><h4><b><p>Details</p></b></h4></center> 
                                        <center><h5><b><p>Purchase Order No. <?php echo $temp ?></p></b></h5>
                                            
                                            <?php 
                                             $arr = explode('-', $dateMin);
                                             $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];
                                             ?>
                                            
                                            <b><?php echo $newDate ?></b>
                                            </center>
                                                            <table class="table table-striped" id="table-mutasi">
                                                                <thead>
                                                                    <tr>
                                                                        <th><b>Date Received</b></th>
                                                                        <th><b>DR No.</b></th>
                                                                        <th><b>Item Name</b></th>
                                                                        <th><b>Type</b></th>
                                                                        <th><b>Quantity</b></th>
                                                                        <th><b>Weight(kg)</b></th>
                                                                        <th><b>Yield Weight(kg)</b></th>
                                                                        <th><b>Yield(kg)</b></th>
                                                                        <th><b>Received by</b></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
    
                                                                    
                                                                    
                                 
        <?php
                                                                             
            
                 $arrayItem = array("raw_coffee","sticker","packaging","machine");
                   $arrayOn = array("raw_coffee","sticker","package_type","brewer");                                   //lahat ng delivery kahit pare-pareho ng DR received by, kinukuha niya as isang delivery
                      $arrayType = array("raw_type","sticker_type","package_size","brewer_type");                       //pero pwede naman iSum nalang. pero sabi kahit ganito nlang raw. 
                         for($table = 0 ; $table < 4 ; $table++){
                          
                             $retrieveDetails ="SELECT supp_po_ordered_id , date_received, drNo , item , type ,  qty ,supp_delivery.received as received, yield_weight , yields , unitPrice , amount,category,received_by   FROM supp_delivery join supp_po_ordered using(supp_po_ordered_id)  join ".$arrayItem[$table]." on   item =  ".$arrayOn[$table]." where sup_id = 
                             ".$sup_id ." and  type = ".$arrayType[$table]." and supp_po_ordered.supp_po_id = $temp"  ;  
               
                                              $query = $this->db->query($retrieveDetails);
                                           if ($query->num_rows() > 0) {
                                              foreach ($query->result() as $object) {
                                                  $date = $object->date_received;
                                                  
                                                  $arr = explode('-', $date);
                                                  $newDateModal = $arr[1].'/'.$arr[2].'/'.$arr[0];
                                             
                                                  
                                                   // $tempItemId = $object->supp_po_ordered_id;    can use later
                                            if($object->category == 1){      
                                           echo '<tr>' ,
                                                '<td>'  . $newDateModal   . '</td>' ,
                                                '<td>'  . $object->drNo   . '</td>' , 
                                                '<td>'  . $object->item  . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  .  '</td>' ,
                                                '<td>'  . number_format((($object->received)/1000),2)  . '</td>' ,
                                                '<td>'  . number_format((($object->yield_weight)/1000),2). '</td>' ,
                                                '<td>'  . number_format((($object->yields)/1000),2)  . '</td>' ,
                                                '<td>'  . $object->received_by . '</td>' ,
                                             
                                                '</tr>' ;
                                                
                                              }else{
                                          echo '<tr>' ,
                                                '<td>'  . $object->date_received   . '</td>' ,
                                                '<td>'  . $object->drNo   . '</td>' , 
                                                '<td>'  . $object->item  . '</td>' ,
                                                '<td>'  . $object->type  . '</td>' ,
                                                '<td>'  . number_format($object->yield_weight). '</td>' ,
                                                '<td>'  .  '</td>' ,
                                                '<td>'  .  '</td>' ,
                                                '<td>'  .  '</td>' ,
                                                '<td>'  . $object->received_by  . '</td>' , 
                                                
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
                                                    <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">CLOSE</button>
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
                                            <li class="active">
                                                <a href="<?php echo base_url(); ?>inventoryPOUnpaidDelivery">
                                                    Unpaid Delivery
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </li>
                                            <span></span>
                                               <li class="">
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
                                            <th><b class="pull-left">PO Credit Term</b></th>
                                            <th><b class="pull-left">Supplier</b></th>
                                            <th><b><center>Action</center></b></th>
                                            
                                        </thead>
                                        <tbody>
                                            
                                            
                                <?php
                                            $i = 1;
                                           
                                    if(!empty($unpaid)) {  
                                          foreach($unpaid as $object){
                                              
                                             $oldDate = $object->suppPO_date;
                                             $arr = explode('-', $oldDate);
                                             $newDate = $arr[1].'/'.$arr[2].'/'.$arr[0];
                                             
                                            
                                           echo '<tr>' ,
                                                '<td>'  . $object->supp_po_id. '</td>' ,
                                                '<td>'  . $newDate   . '</td>' ,
                                                '<td>'  . $object->supp_creditTerm. ' day/s</td>' ,
                                                '<td>'  . $object->sup_company  . '</td>';
												                      
                                             ?>
                                                                              
                                               <td>
                                                   <center>
                                                    <a class=" btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo 'partial' . $i   ?>">Payment</a>
                                                    <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo 'details' . $i   ?>">Details</a>
                                                    <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#<?php echo 'return' . $i   ?>">Return</a>
                                                   </center>
                                               </td>
                                            
                                    <?php                          
                                            '</tr>' ; 
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
<script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
<script type="text/javascript">
    
    
$(document).ready(function() {
    var table = $('#example').DataTable({
        select: {
            style: 'single'
        }
    });

});
    
    
    
    
    
//$(document).ready(function() {
   // setInterval(function () {getRealData()}, 1000);//request every x seconds

 //}); 
  
    
    
    
///PARTIAL PAYMENT MODAL--------------------------------------  
    
<?php     
$partial = 1;
    
     if(!empty($unpaid)) {                                
           foreach($unpaid as $object){
            $temp =  $object->supp_po_id;
            $sup_id = $object->sup_id;   
    
   ?>
//function getRealData() {    
    var poId = parseFloat($(<?php echo "'#partial".$partial." input[id=poId]'" ?>).val());    
    
           $.ajax({
              url:'<?php echo base_url(); ?>InventoryPOUnpaidDelivery/ajaxTotal',
              method:"POST",
              data:{poId : poId },
              dataType: 'json',
              success: function(data){
                  
                   var total = data['total_amount'];  //use this syntax when returning a single row only data['total_amount'] column name in the query
                   var total1 = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                  
                  
                   var payment =  data['payment'];
                  
            
                  
                   var remaining = total - payment;
                   var remaining = remaining.toFixed(2);
                   var remaining1 = remaining.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                  // var n = Math.floor(remaining);
                  
                   //var remaining = remaining.toFixed(2);
                  $(<?php echo "'#partial".$partial." input[id=total]'" ?>).val(total1); 
                  $(<?php echo "'#partial".$partial." input[id=remaining]'" ?>).val(remaining1);
                  $(<?php echo "'#partial".$partial." input[id=amount]'" ?>).attr("max", remaining)
              },
              error: function(){
                  //alert("error"); 
                
              }
          });
  //   }
    <?php 
           
       $partial++;
    }
 }
  
  ?>
  
    
    
    
$(document).ready(function() { 
   
         
   <?php
     $return = 1;
     if(!empty($unpaid)) {                                
           foreach($unpaid as $object){
           $temp =  $object->supp_po_id;
                         
?>      
     $(<?php echo "'#drList".$return."'"?>).on('change', function(){
          var drList = $(this).val();
             
           $.ajax({
              url:'<?php echo base_url(); ?>InventoryPOUnpaidDelivery/get_itemList' ,
              method:"POST",
              data:{drList : drList , supp_po_id : <?php echo $temp ?> },
              dataType: 'json',
              success: function(data){
                //  alert("success");
                  
                  $(<?php echo "'#item".$return."'"?>).html(data);
                  $(<?php echo "'#item".$return."'"?>).removeAttr('disabled');
                 
               
                  
                  
                   //var n=1234.567;
                   //var parts = total.toFixed(2).split(".");                                                         //searched this on  stackoverflow
                   //var num = parts[0].replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")+(parts[1] ? "." + parts[1] : "");  //searched this on  stackoverflow
                   //alert(num);
        
              },
              error: function(){
                  
                  
                  $(<?php echo "'#item".$return."'"?>).val('')
                  $(<?php echo "'#returnQty".$return."'"?>).val('');
                  $(<?php echo "'#remarks".$return."'"?>).val('');
                  
                  
                  $(<?php echo "'#returnQty".$return."'"?>).attr("placeholder",'');
                  $(<?php echo "'#remarks".$return."'"?>).attr("placeholder",'');
                  
                  
                  $(<?php echo "'#item".$return."'"?>).attr('disabled' , 'disabled')
                  $(<?php echo "'#returnQty".$return."'"?>).attr('disabled','disabled')
                  $(<?php echo "'#remarks".$return."'"?>).attr('disabled','disabled')
                  
                  
                   //alert("error");
                
              }
          });
      }); 
         
<?php   
               $return++;
      }
         
   }   
   ?>
         
         
         
         
             
         
});
    
         
  
         
         
         
$(document).ready(function() {  
    
 <?php
     $return = 1;
     if(!empty($unpaid)) {                                
           foreach($unpaid as $object){
           $temp =  $object->supp_po_id;
                         
?> 
    
    $(<?php echo "'#item".$return."'"?>).on('change', function(){
          var item = $(this).val();
          var drNo = document.getElementById(<?php echo "'drList".$return."'"?>).value;
             
           $.ajax({
              url:'<?php echo base_url(); ?>InventoryPOUnpaidDelivery/get_max' ,
              method:"POST",
              data:{ item : item ,drNo : drNo , poNo : <?php echo $temp ?> },
              dataType: 'json',
              success: function(data){
                //alert("success"); 
                  var category = data['categoryx'];
                  var maxQtyx =   data['yield_weight'];
                  
                if(category == 1){
                    var maxQty = maxQtyx/1000
                      $(<?php echo "'#returnQty".$return."'"?>).attr("max", maxQty);
                      $(<?php echo "'#returnQty".$return."'"?>).attr("placeholder", maxQty);
                      $(<?php echo "'#category".$return."'"?>).val(category);
                      
                }else{
                      $(<?php echo "'#returnQty".$return."'"?>).attr("max", maxQtyx);
                      $(<?php echo "'#returnQty".$return."'"?>).attr("placeholder", maxQtyx);
                      $(<?php echo "'#category".$return."'"?>).val(category);
                } 
                     
                   
                     $(<?php echo "'#returnQty".$return."'"?>).removeAttr('disabled')
                     $(<?php echo "'#remarks".$return."'"?>).removeAttr('disabled')
              },
              error: function(){
                 // alert("error");
                  
                  
                  $(<?php echo "'#returnQty".$return."'"?>).val('');
                  $(<?php echo "'#remarks".$return."'"?>).val('');
                  
                  $(<?php echo "'#returnQty".$return."'"?>).attr("placeholder",'');
                  $(<?php echo "'#remarks".$return."'"?>).attr("placeholder",'');
                  
                  $(<?php echo "'#returnQty".$return."'"?>).attr('disabled','disabled')
                  $(<?php echo "'#remarks".$return."'"?>).attr('disabled','disabled')
                
              }
          });
      });  
        
        
     <?php   
               $return++;
      }
         
   }   
   ?>
        
        
        
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