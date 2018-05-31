
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-select.min.css" />
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Returns</title>
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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" >
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' type='text/css'>
    <link rel="shortcut icon" href="favicon.ico">
</head>
    
    
    
<style>
    
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
s}
    
.form-group.is-focused .form-control {
    outline: none;
    background-image: linear-gradient(#17bbd0, #17bbd0), linear-gradient(#D2D2D2, #D2D2D2);
    background-size: 100% 2px, 100% 1px;
    box-shadow: none;
    transition-duration: 0.3s;
}
    /*
		td.highlight {
			background-color: whitesmoke !important;
		}
*/
.title {
    font-size: large;
    padding-top: 15px;
    border-top: 3px ;
    border-left: 2px ;

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

.label-count {
    height: 15px;
    width: 15px;
    border-radius: 50%;
    display: inline-block;
    background: red; 
    text-align: center;
    color: white;
}

		.table thead,
		thead th {
			text-align: center;
		}
		.table tbody, tbody td{
			text-align: center;
		}
		.navbar-default { 
			text-align: center !important;
			
		}
		.navbar-default > li.active > a, .navbar-default > li.active > a:focus, .navbar-default > li.active > a:hover {
			border-top: 1px solid #75DAE2 !important;
			border-right: 1px solid #75DAE2 !important;
			border-left: 1px solid #75DAE2 !important;
			border-bottom: transparent !important;
			background-color: #75DAE2 !important;
			color: white !important;
		}
		.navbar-default > li.active > a {
			color: white!important; 
			float: none !important;
			display: inline-block!important;
		}
		.navbar-default > li > a, .navbar-default > li > a:hover {
			border: none;
			color: #75DAE2 !important; 
			background: transparent; 
		}
		.navbar-default > li > a::after {
			content: "";
			background: transparent; 
			height: 2px; 
			position: absolute; 
			width: 100%; 
			left: 0px;
			bottom: -1px;
			transition: all 250ms ease 0s;
			transform: scale(0); 
			color: white;
		}
		.navbar-default > li.active > a::after, .navbar-default > li:hover > a::after {
			transform: scale(1); 
		}
		.tab-nav > li > a::after {
			background: #21527d none repeat scroll 0% 0%; color: #fff;
		}
		.tab-pane { 
			padding: 15px 0;
		}
		.tab-color{	
			padding:20px;
			border-top: 3px solid #75DAE2;
			border-left: 2px solid #75DAE2;
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
                    <li class="active">
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
                                                '<td>More than ' . number_format((($object->reorder-$object->stock)/1000),2) .  ' kg </b></td>' ,
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
                        <div class="col-sm-12">
                            <div class="card card-nav-tabs">
                                <div class="card-header" data-background-color="blue">
                                    <div class="nav-tabs-navigation">
                                        <div class="nav-tabs-wrapper">
                                            <span class="nav-tabs-title"> </span>
                                            <ul class="nav nav-tabs" data-tabs="tabs" id="myTab">
                                                <li class="active">
                                                    <a href="#companyreturn" data-toggle="tab">
                                                      Company Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#clientreturn" data-toggle="tab">
                                                     Client Returns
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
  
                     
                                
                                
                                
                                <div class="card-content">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="companyreturn">
                                            <br>
                                            <br>
                                             <table id="" class="table hover order-column" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                     <th><b>Delivery Receipt No.</b></th>
													 <th><b>Date Returned</b></th>
                                                     <th><b>Item Returned</b></th>
                                                     <th><b>Quantity</b></th>
                                                     <th><b>Weight(kg)</b></th>
                                                     <th><b>Remarks</b></th>
                                                     <th><b>Action</b></th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                  $returnModal = 1;
                                                    if(!empty($data1['get_companyreturns'])){
                                                    foreach($data1['get_companyreturns'] as $row){
                                                  
                                                if($row->categoryr==1){ 
                                                  ?>
                                                <tr>
                                                    <td><?php echo $row->drNo ?></td>
                                                    <td><?php echo $row->sup_returnDate ?></td>
                                                    <td><?php echo $row->item."  ".$row->type ?></td>
                                                    <td></td>
                                                    <td><?php echo number_format((($row->sup_returnQty)/1000),2) ?> kg</td>
                                                    <td><?php echo $row->sup_returnRemarks ?></td>
                                              
                                                    
                                                <?php 
                                                    if($row->res == "unresolved"){
                                                 ?>   
                                                    <td><a class=" btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo "returnModal" . $returnModal   ?>">Resolve</a></td>
                                                   
                                                <?php       
                                                    }else{ ?>
													<td><a class=" btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo "detailsModal" . $returnModal   ?>">Details</a></td>	
														
												<?php 		
													}
                                                       ?>
                                                </tr>
                                                
                                                
                                                
                                                <?php
                                                   
                                                    }else{ ?>
                                                <tr>
                                                    <td><?php echo $row->poNo ?></td>
                                                    <td><?php echo $row->drNo ?></td>
                                                    <td><?php echo $row->sup_returnDate ?></td>
                                                    <td><?php echo $row->item."  ".$row->type ?></td>
                                                    <td><?php echo $row->sup_returnQty ?></td>
                                                    <td></td>
                                                    <td><?php echo $row->sup_returnRemarks ?></td>
                                              
                                                    
                                                <?php 
                                                    if($row->res == "unresolved"){
                                                 ?>   
                                                    <td>
                                                    <a class=" btn btn-success btn-sm" data-toggle="modal" data-target="#<?php echo "returnModal" . $returnModal   ?>">Resolve</a>
                                                    </td>
                                                   
                                                <?php       
                                                    }else{ ?>
													<td>
                                                    <a class=" btn btn-info btn-sm" data-toggle="modal" data-target="#<?php echo "detailsModal" . $returnModal   ?>">Details</a>
                                                    </td>	
														
												<?php 		
													}
                                                       ?>
                                                  </tr>
                                                    
                                               <?php     
                                                   }
                                                  $returnModal++;
                                              }
                                           } 
                                                ?>
                                            </tbody>
                                        </table>
                                        </div>
                                        <div class="tab-pane" id="clientreturn">
                                            <ul class="nav nav-tabs navbar-default justify-content-center" id="clientreturn" >
                                                <li class="active"><a href="#coffee" data-toggle="tab" >Coffee</a></li>
                                                <li><a href="#machine" data-toggle="tab">Machine</a></li>
                                            </ul>
                                            <div class="tab-content tab-color">
                                                <div class="tab-pane active" id="coffee">
                                                    <table id="coffee" class="table hover order-column" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Delivery Receipt No.</b></th>
                                                                <th><b>Date Returned</b></th>
                                                                <th><b>Client</b></th>
                                                                <th><b>Coffee</b></th>
                                                                <th><b>Bag</b></th>
                                                                <th><b>Size</b></th>
                                                                <th><b>Quantity</b></th>
                                                                <th><b>Remarks</b></th>
                                                                <th><b>Action Taken</b></th>
                                                                <th><b>Date Resolved</b></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                        foreach($data2['get_clientcoffeereturns'] as $row)
                                                        {
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $row->client_dr; ?></td>
                                                                <td><?php echo $row->coff_returnDate; ?></td>
                                                                <td><?php echo $row->client_company; ?></td>
                                                                <td><?php echo $row->blend; ?></td>
                                                                <td><?php echo $row->package_type; ?></td>
                                                                <td><?php echo number_format($row->package_size); ?> g</td>
                                                                <td><?php echo number_format($row->coff_returnQty); ?> pc/s</td>
                                                                <td><?php echo $row->coff_remarks; ?></td>
                                                                <td><?php echo $row->coff_returnAction; ?></td>
                                                                <td><?php echo $row->coff_resolveDate; ?></td>
                                                            </tr>
                                                            <?php
                                                        }
                                                    ?>
                                                            
                                                        <?php 
                                                        foreach($data6['get_coffee_walkin_return'] as $row)
                                                        {
                                                    ?>
                                                            <tr>
                                                                <td> - </td>
                                                                <td><?php echo $row->coff_returnDate; ?></td>
                                                                <td> Walk-in Client</td>
                                                                <td><?php echo $row->blend; ?></td>
                                                                <td><?php echo $row->package_type; ?></td>
                                                                <td><?php echo number_format($row->package_size); ?> g</td>
                                                                <td><?php echo number_format($row->coff_returnQty); ?> pc/s</td>
                                                                 <td><?php echo $row->coff_remarks; ?></td>
                                                                 <td><?php echo $row->coff_returnAction; ?></td>
                                                                <td><?php echo $row->coff_resolveDate; ?></td>
                                                             </tr>
                                                             <?php
                                                         }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                        
                                                <div class="tab-pane fade" id="machine">
                                                    <table id="machine" class="table hover order-column" cellspacing="0" width="100%">
                                                        <thead>
                                                            <tr>
                                                                <th><b>Return No.</b></th>
                                                                <th><b>Date Returned</b></th>
                                                                <th><b>Machine Serial No.</b></th>
                                                                <th><b>Client</b></th>
                                                                <th><b>Machine</b></th>
                                                                <th><b>Quantity</b></th>
                                                                <th><b>Remarks</b></th>
                                                                <th><b>Action Taken</b></th>
                                                                <th><b>Resolved Date</b></th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                        foreach($data3['get_clientmachinereturns'] as $row)
                                                        {
                                                    ?>
                                                            <tr>
                                                                <td><?php echo $row->client_machReturnID; ?></td>
                                                                <td><?php echo $row->mach_returnDate; ?></td>
                                                                <td><?php echo $row->mach_serial; ?></td>
                                                                <td><?php echo $row->client_company; ?></td>
                                                                <td><?php echo $row->machine; ?></td>
                                                                <td><?php echo number_format($row->mach_returnQty); ?> pc/s</td>
                                                                <td><?php echo $row->mach_remarks; ?></td>
                                                                <td><?php echo $row->mach_returnAction; ?></td>
                                                                <th><?php echo $row->mach_resolveDate; ?></th>
                                                            </tr>
                                                            <?php
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
            </div>
            
            
   <!------------------------------------------------------------------------------------------------------------------------------------------
     ------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------>



            
            
        <div class="modal fade" id="return" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="panel-title" id="contactLabel"><span class="glyphicon glyphicon-info-sign"></span>Add New Return</h4>
                        </div>
                        <form action="InventoryReturnsList/insertReturn" method="post" accept-charset="utf-8">
                            <div class="modal-body" style="padding: 5px;">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Date</label>
                                            <input class="form-control" type="date" name="date" min="2017-01-01" max="<?php   echo date("Y-m-d") ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Purchase Order No.</label>
                                            <select class="selectpicker" data-live-search="true" name="poList" id = "poList" required>
                                                <option disabled selected value="">Select Purchase Order No.</option>
                                                <?php 

                                                    foreach($poList as $object)
                                                    { 
                                                        echo '<option value="'.$object->supp_po_id.'">'.$object->supp_po_id.'</option>';
                                                    }
                                                 ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Item Returned</label>
                                            <select class="form-control" name="item" id="item" required>
                                                <option disabled selected value="">Select Item</option>
                                               

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="form-group label-floating">
                                            <label for="email">Delivery Receipt No.</label>
                                            <input class="form-control" type="number" name="drNo" id="drNo"  min="1"required />
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <label for="email">Qty/Weight(g)</label>
                                        <input class="form-control" type="number" name="returnQty" id="returnQty"  min="1" required />
                                    </div> 
                                    
                                    
                                    <div class="col-sm-6">
                                        <label for="email">Remarks</label>
                                        <textarea style="resize:vertical;" class="form-control" rows="3" name="remarks" id="remarks" required></textarea>
                                    </div>
                                    
                                </div>
                                
                                
                                
                                <div class="row">
                                </div>
                            </div>
                            <div class="panel-footer" style="margin-bottom:-14px;">
                                <input type="submit" class="btn btn-success" value="Add" />
                                <!--<span class="glyphicon glyphicon-ok"></span>-->
                                <input type="reset" class="btn btn-danger" value="Clear" />
                                <!--<span class="glyphicon glyphicon-remove"></span>-->
                                <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> 
            
            
            
                                  
        
     <?php
        $returnModal = 1;

           foreach($data1['get_companyreturns'] as $row){
              $date_returned =$row->sup_returnDate;
              $returnId      = $row->company_returnID;
              $returnItem    = $row->sup_returnItem;
              $supp_po_id    = $row->poNo;
              $qty           = $row->sup_returnQty;
             
               //<?php echo $returnId/$returnItem/$supp_po_id/$qty
?>
                                                      
                                    
                                
                                    
    <div class="modal fade" id="<?php echo "returnModal" . $returnModal   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Resolve Company Returns</center> </h4>
                            </div>
          
    <form action="InventoryReturnsList/resolveIssue/<?php echo $supp_po_id ?>" method="post" accept-charset="utf-8">    
        <div class="modal-body">
			
			
            <center><h3><b><p>Purchase Order No. <?php echo $supp_po_id ?></p></b></h3></center>
           
			
			<div>
			<b><p>DR Number:</p></b>
            <input type="text" class="form-control" name="return_dr" required> 
			</div>
			<br>
			<div>
			<b><p>Date Resolved:</p></b>
            <input type="date" class="form-control" name="return_date" min="<?php echo $date_returned ?>" max="<?php echo date("Y-m-d")?>" required> 
			</div>
            <input type="hidden" class="form-control" name="returnId"  value = "<?php echo $returnId ?>" > 
            <input type="hidden" class="form-control" name="returnItem"  value = "<?php echo $returnItem ?>" > 
            <input type="hidden" class="form-control" name="supp_po_id"  value = "<?php echo $supp_po_id ?>" > 
            <input type="hidden" class="form-control" name="qty"         value = "<?php echo $qty ?>" > 
            
        </div>
       
        
     
      
               <div  align="center">
                                 <button type="submit" class="btn btn-success accept">Yes</button>
                                 <button type="button" class="btn btn-default btn-close" data-dismiss="modal">No</button>
                        
              </div>
            </form>     
        </div>
      </div>
      
    </div>
  </div>                                         
           
            
 <?php      
         $returnModal++;        
        }
?>    
                   

		
		
		
		
		
		
		
	 <?php
        $detailsModal = 1;

           foreach($data1['get_companyreturns'] as $row){
              $date_returned =$row->sup_returnDate;
              $returnId      = $row->company_returnID;
              $returnItem    = $row->sup_returnItem;
              $supp_po_id    = $row->poNo;
              $qty           = $row->sup_returnQty;
             
               //<?php echo $returnId/$returnItem/$supp_po_id/$qty
?>
                                                      
                                    
                                
                                    
    <div class="modal fade" id="<?php echo "detailsModal" . $detailsModal   ?>" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4 class="panel-title" id="contactLabel"><center>Resolved Details</center> </h4>
                            </div>
          
    <form action="InventoryReturnsList/resolveIssue/<?php echo $supp_po_id ?>" method="post" accept-charset="utf-8">    
        
		<div class="modal-body">
			
			
            <center><h3><b><p>Purchase Order No.<?php echo $supp_po_id ?></p></b></h3></center>
           <hr>
			
			<div>
				<b><p>Delivery Receipt No.</p></b>
				<p><?php echo $row->return_dr ?></p>
			</div>
			<br>
			<div>
				<b><p>Date Resolved</p></b>
				<p><?php echo $row->return_date ?></p>
			</div>
            
        </div>
       
        
     
      
               <div  align="center">
                                 <button type="button" class="btn btn-danger btn-close" data-dismiss="modal">Close</button>
                        
              </div>
            </form>     
        </div>
      </div>
		</div>
	</div>                                         
           
            
 <?php      
         $detailsModal++;        
        }
?>    
                   	
		
		   
           
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
<!--
    <script src="../assets/js/jquery-1.12.4.js" type="text/javascript"></script>
-->
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
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
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.datatables.js"></script>
<script src="../assets/js/bootstrap-select.js"></script>
    
    
    
    
    
    
<script>
    
    
   $(document).ready(function() { 
    
     $('#poList').on('change', function(){
          var poList = $(this).val();
             
           $.ajax({
              url:'<?php echo base_url(); ?>InventoryReturnsList/get_itemList' ,
              method:"POST",
              data:{poList : poList },
              dataType: 'json',
              success: function(data){
                  //alert("success");
                  $('#item').html(data);
                 
                 
              },
              error: function(){
                  alert("error");
                
              }
          });
      });  
        
 });    
    
    
       
  $(document).ready(function() {  
    $('#item').on('change', function(){
          var itemList = $(this).val();
          var poNo = document.getElementById("poList").value;
             
           $.ajax({
              url:'<?php echo base_url(); ?>InventoryReturnsList/get_max' ,
              method:"POST",
              data:{itemList : itemList ,poNo : poNo },
              dataType: 'json',
              success: function(data){
                //alert("success"); 
              
                  var newData = data; //data['max']; 
                //  alert(newData);
                 $('#returnQty').attr("max", newData);
                 $('#returnQty').attr("placeholder",newData);
               
              },
              error: function(){
                  alert("error");
                
              }
          });
      });  
        
   });  
    
    
    
    
    
    
     
$(document).ready(function() {
    $('table.table').DataTable({
        select: {
            style: 'single'
        },

        "aaSorting": [1,'desc']

    });
});
         
</script>

<script type="text/javascript">
$(document).on('change', 'select.nav', function() {
    var $this = this;
    var target = $this.value;
    $('div.select-pane').hide();
    $('div[id="' + target + '"]').show();
})

$(document).on('click', '.series-select', function() {
    var $this = this;
    var txt = $this.text + '<span class="caret"></span>';
    $($this).closest('li.dropdown').find('a.dropdown-toggle').php(txt);


})



       
  
    
</script>
    
    <script type="text/javascript">
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
     });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
 });
    </script>
<<<<<<< HEAD
=======
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
>>>>>>> 2aae9f50edba2752a2661b089b4078164fa5cd49
    
 
</html>