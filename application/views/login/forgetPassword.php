<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JHCS Inc. | Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url(); ?>../../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>../../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>../../assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>../../assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>../../assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>../../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>../../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>../../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>../../assets/ico/apple-touch-icon-57-precomposed.png">

        <style>
            #hov:hover {
                color: black !important; 
            }

        </style>

    </head>

    <body style="background-image: url('assets/ico/backg.png');">

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        
                    </div>
                    <div class="row">
						
                        <div class="col-sm-6 col-sm-offset-3 form-box">
							<div>
                            	<img src="../../assets/img/0000.png" width="100%">	
                        		</div>
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Forgot your password? </h3>
                            		<p>Enter your email address to recover your password.</p>
                                </div>
                                       
                                
                        		<div class="form-top-right">
                        			<i class="fa fa-lock"></i>
                        		</div>
                        		<?php
                                        $error = $this->session->flashdata('error');
                                        $success = $this->session->flashdata('success');
                                        if(!empty($error)){
                                            ?>
                                            <div class="alert alert-danger" style="margin-top: 100px;  text-align: center; ">
                                                <strong><?php echo $error; ?></strong> 
                                            </div>
                                      <?php } else if(!empty($success)){ ?>
                                            <div class="alert alert-success" style="margin-top: 100px;  text-align: center; ">
                                                <strong><?php echo $success; ?></strong> 
                                      <?php } ?> 
                                
                            </div>
                            <div class="form-bottom">
                                <?php echo form_open('login/sendEmail') ?>
			                    	<div class="form-group">
			                    		<label class="sr-only" for="username">Email Address</label>
                                        <?php echo form_input(['name' => 'email', 'id' => 'email', 'placeholder' => 'Email Address' ,'class' => 'form-control']); ?>
			                        </div>
			                        
                                    <div class="row" style="display: flex; align-items: center; justify-content: center;color: red">
                                      </div>  
			                        <button type="submit" class="btn btn-outline-secondary"><p style="color: black!important;">Send Email</p></button>
                                <?php echo form_close(); ?>
                                <br>
                                <a href="<?php echo base_url(); ?>" style="color: white;" id="hov"> Go Back</a>
			                    
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>../../assets/js/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>../../assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>../../assets/js/jquery.backstretch.min.js"></script>
        <script >
        	
		jQuery(document).ready(function() {
			
		    /*
		        Fullscreen background
		    */
		    $.backstretch("../../assets/img/backg.jpg");
		    
		    /*
		        Form validation
		    */
		    $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function() {
		    	$(this).removeClass('input-error');
		    });
		    
		    /*$('.login-form').on('submit', function(e) {
		    	
		    	$(this).find('input[type="text"], input[type="password"], textarea').each(function(){
		    		if( $(this).val() == "" ) {
		    			e.preventDefault();
		    			$(this).addClass('input-error');
		    		}
		    		else {
		    			$(this).removeClass('input-error');
		    		}
		    	});
		    	
		    });
		    */
		    
		    
		});

        </script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>