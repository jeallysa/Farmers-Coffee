<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sales Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, wal-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
    .dropdown-menu {
        right: 0;
        left: auto;
    }
    .select-pane {
        display: none;
    }
        .no-border{
            border: none !important;

        }
        .panel-primary>.panel-heading{color:#fff !important;background-color:#9c27b0 !important;border-color:#9c27b0 !important}
    .panel-primary{ border-color:#9c27b0 !important}

        .footer{
            z-index: -1;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-0.jpg">
            <div class="logo">
                <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="image1" width="250px" height="150px">
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="<?php echo base_url(); ?>salesDashboard">
                            <i class="glyphicon glyphicon-tasks"></i><i class="material-icons pull-right select-pane" style="color:red !important"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesSellProduct">
                            <i class="glyphicon glyphicon-shopping-cart"></i>
                            <p>Sell Products</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesClients">
                             <i class="glyphicon glyphicon-user"></i>
                            <p>Clients</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReturns">
                           <i class="glyphicon glyphicon-indent-right"></i>
                            <p>Returns</p>
                        </a>
                    </li>
                    <li >
                        <a href="<?php echo base_url(); ?>salesDelivery">
                            <i class="glyphicon glyphicon-bed"></i>
                            <p>Deliveries</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReceivables">
                             <i class="glyphicon glyphicon-credit-card"></i>
                            <p>Receivables</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesCollections">
                           <i class="glyphicon glyphicon-inbox"></i>
                            <p>Collections</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>salesReport">
                            <i class="glyphicon glyphicon-signal"></i>
                            <p>Sales Summary</p>
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

                            <li class="dropdown">


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

                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                     <i class="glyphicon glyphicon-user"></i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>salesUserProfile">User Profile</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>salesChangePassword">Change Password</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(); ?>salesActivityLogs">Activity Logs</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('Login/logout');  ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
            
                     <p style="text-align:right; font-weight: bold; font-size: 20px;"> <?php
                                    echo "Today is " . date("M j, Y - l");
                                    ?> </p> <br>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                     <i class="glyphicon glyphicon-signal"></i>
                                </div>
                                <div class="card-content">
                                    
                                    <p class="category">Sales of the Day</p>
                                    <h3 class="title">
                                        <b>
                                        <?php
                                            $total = $this->db->query("SELECT SUM(client_balance) AS total FROM client_delivery WHERE client_deliverDate=curdate() ;")->row()->total;

                                        if(!empty($total)){
                                            echo 'Php '.number_format($total,2);
                                        }else{
                                            echo 0;
                                        }

                                         ?>
                                            </b>
                                    </h3>

                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-circle-arrow-right"><a href="<?php echo base_url();?>salesReport"> Details</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                   <i class="glyphicon glyphicon-inbox"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Collections</p>
                                    
                                    <h3 class="title">
                                        <b>
                                    <?php
                                            $total = $this->db->query("SELECT SUM(client_balance) AS total FROM client_delivery  WHERE  payment_remarks='paid'; ")->row()->total;
                                        if(!empty($total)){
                                            echo 'Php '.number_format($total,2);
                                        }else{
                                            echo 0;
                                        }

                                         ?></b>
                                    </h3>

                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-circle-arrow-right"><a href="<?php echo base_url();?>salesCollections"> Details</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="red">
                                    <i class="glyphicon glyphicon-credit-card"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Total Receivables</p>
                                    <h3 class="title">
                                        <b>
                                    <?php
                                            $total = $this->db->query("SELECT SUM(client_balance) AS total FROM client_delivery WHERE payment_remarks='unpaid';")->row()->total;
                                            if(!empty($total)){
                                                echo 'Php '.number_format($total,2);
                                            }else{
                                                echo 0;
                                            }
                                         ?>
                                            </b>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                      <i class="glyphicon glyphicon-circle-arrow-right"> <a href="<?php echo base_url();?>salesReceivables"> Details</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="blue">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Clients</p>
                                    <h3 class="title">
                                        <b>
                                    <?php
                                            $total = $this->db->query("SELECT COUNT(client_company) AS total FROM contracted_client NATURAL JOIN contract WHERE client_activation='1';")->row()->total;
                                            if(!empty($total)){
                                                echo number_format($total);
                                            }else{
                                                echo 0;
                                            }
                                         ?><br>
                                            </b>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="glyphicon glyphicon-circle-arrow-right"> <a href="<?php echo base_url();?>salesClients">Details</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="white">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Pending Orders</p>
                                    <h3 class="title">
                                        <b>
                                    <?php
                                            $total = $this->db->query("SELECT COUNT(delivery_stat) AS total FROM contracted_po WHERE delivery_stat ='pending delivery';")->row()->total;
                                            if(!empty($total)){
                                                echo $total;
                                            }else{
                                                echo 0;
                                            }
                                         ?>
                                            </b>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                      <i class="glyphicon glyphicon-circle-arrow-right"> <a href="<?php echo base_url();?>salesReceivables"> Details</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="white">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Partial Deliveries</p>
                                    <h3 class="title">
                                        <b>
                                    <?php
                                            $total = $this->db->query("SELECT COUNT(delivery_stat) AS total FROM contracted_po WHERE delivery_stat ='partial delivery';")->row()->total;
                                            if(!empty($total)){
                                                echo $total;
                                            }else{
                                                echo 0;
                                            }
                                         ?>
                                            </b>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                      <i class="glyphicon glyphicon-circle-arrow-right"> <a href="<?php echo base_url();?>salesReceivables"> Details</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="white">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Partial Payments</p>
                                    <h3 class="title">
                                        <b>
                                    <?php
                                            $total = $this->db->query("SELECT COUNT(payment_remarks) AS total FROM client_delivery WHERE payment_remarks ='partially paid';")->row()->total;
                                            if(!empty($total)){
                                                echo $total;
                                            }else{
                                                echo 0;
                                            }
                                         ?>
                                            </b>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                      <i class="glyphicon glyphicon-circle-arrow-right"> <a href="<?php echo base_url();?>salesReceivables"> Details</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                     <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="white">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Unpaid Payments</p>
                                    <h3 class="title">
                                        <b>
                                    <?php
                                            $total = $this->db->query("SELECT COUNT(payment_remarks) AS total FROM client_delivery WHERE payment_remarks ='unpaid';")->row()->total;
                                            if(!empty($total)){
                                                echo $total;
                                            }else{
                                                echo 0;
                                            }
                                         ?>
                                            </b>
                                    </h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                      <i class="glyphicon glyphicon-circle-arrow-right"> <a href="<?php echo base_url();?>salesReceivables"> Details</a></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Reminders<i class="glyphicon glyphicon-info-sign" style="color:red !important"></i> </h4>
                                </div>
                                <div class="card-content table-responsive">
                                    
                                        <?php

                                            $query = $this->db->query("SELECT date_expiration,client_id,client_company,seen FROM contract NATURAL JOIN contracted_client");
                                                $date = date('Y-m-d');

                                             $query2 = $this->db->query("SELECT a.client_id, client_company, date_expiration, ABS((dayofyear(date_expiration) - dayofyear(now()))) as numdays        from contracted_client a
join contract b on a.client_id = b.client_id
where ABS((dayofyear(date_expiration) - dayofyear(now()))) = 10 or ABS((dayofyear(date_expiration) - dayofyear(now()))) < 10 and year(date_expiration) = year(now()) != 0");

                                                if(!empty($query)){
                                                    foreach($query->result() as $object){
                                                        if($object->date_expiration == $date ){
                                        ?>
                                                <ul>
                                                      <li>  The Contract of <?php echo $object->client_company; ?> has expired today ! </li>
                                                </ul>
                                        <?php
                                                        }
                                                    }
                                                }

                                                if(!empty($query2)){
                                                    foreach ($query2->result() as $key ) {
                                                        if($key->date_expiration != $date ){
                                                     ?>
                                                    <ul>
                                                      <li>  The Contract of <?php echo $key->client_company; ?> will expire <?php echo $key->numdays; ?> day/s from now. </li>
                                                    </ul>
                                                     <?php  
                                                    }}
                                                }

                                        ?>


                                           <!--  <?php

                                                $query = $this->db->query("SELECT date_expiration,client_id,client_company,seen FROM contract NATURAL JOIN contracted_client WHERE seen='0'");
                                                $date = date('Y-m-d');


                                                if(!empty($query)){
                                                    foreach($query->result() as $object){
                                                        if($object->date_expiration == $date){
                                                            if($object->seen ==  '0'){
                                                ?>

                                                    <tr>
                                                        <td>
                                                            <span > The contract of <?php echo $object->client_company; ?> client has Expired. </span>
                                                            <input class="no-border" type="hidden" value="<?php echo $object->client_id; ?>" id="idClient" readonly />
                                                        </td >
                                                        <td class="td-actions text-right"><button type="submit" class="btn btn-primary pull-right" id="check" data-id="<?php echo $object->client_id; ?>" >Details</button></td>
                                                    </tr>


                                                    <?php
                                                            }elseif($object->seen == '1'){
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <span> The contract of <?php echo $object->client_company; ?> client has Expired. </span>
                                                            <input class="no-border" type="text" value="<?php echo $object->client_id; ?>" id="idClient" readonly />
                                                        </td >
                                                        <td class="td-actions text-right"><button type="submit" class="btn btn-default pull-right" id="check" data-id="<?php echo $object->client_id; ?>" >Details</button></td>
                                                    </tr>
                                                    <?php

                                                            }
                                                        }else{

                                                    }   }
                                                }else{
                                                    echo 0;
                                                }

                                            ?> -->

                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with love by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                </div>
            </footer>
</body>
<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/material.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/chartist.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/arrive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="<?php echo base_url(); ?>assets/js/material-dashboard.js?v=1.2.0"></script>
<script src="<?php echo base_url(); ?>assets/js/demo.js"></script>
<script type="text/javascript">
    var id = document.getElementById('idClient').value;
    $.ajax({
        url:'<?=base_url()?>AdminDashboard/getExpire/' +id,
        method: 'POST',
        success:function(data){
                    $(".select-pane").show();
        }
    });
    /*$(document).ready(function() {
        demo.initDashboardPageCharts();

        $(document).on('click', '#check', function(e){
            e.preventDefault();
            var id = $(this).data('id');
                $.ajax({
                    url:'<?=base_url()?>AdminDashboard/updateNotif/' +id,
                    method: 'POST',
                    success:function(data){
                        $(".select-pane").hide();
                        alert('naupdate na!');
                    }

                    });

        });
*/
    });
</script>

</html>
