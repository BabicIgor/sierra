<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7
Version: 4.7.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Metronic Admin Theme #1 | User Login 5</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for " name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url();?>assets/pages/css/login-5.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font.css">
        <style>
        ::placeholder {
		    color: #B8B8B8;
		    opacity: 1; /* Firefox */
		    font-weight: bold;
		    
		}
		label,span{
			font-family: 'proximanovalight' !important;

		}
        </style>
	
        </head>
        
        
        
    <!-- END HEAD -->

    <body>
        <div class="user-login-5" style="width:1363px;margin:0 auto;">
            <div class="row bs-reset">
                <div class="col-md-8 bs-reset mt-login-5-bsfix" style="width:64%;">
                   	<img src="<?php echo base_url();?>assets/imgs/welcome.png" /> 
                    <div style="position:absolute;left:100px;top:450px;">
                    	<div class="row">
                    		<div class="col-md-12" style="height:60px;">
								<span style="color:#fff;font-size:50px;"><strong>Start driving</strong></span>
                    		</div>
                    		<div class="col-md-12">
								<span style="color:#fff;font-size:50px;"><strong>new business today</strong></span>
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="col-md-12" style="height:20px;">
								<span style="color:#fff;font-size:14px;"><strong>A partnership with Sierra Green will provide access to our Sierra Green community and all of our followers.</strong></span>
                    		</div>
                    		<div class="col-md-12" style="height:20px;">
								<span style="color:#fff;font-size:14px;"><strong>It includes details of your business on our digital map, and comes with monthly geolocated coupons that can be</strong></span>
                    		</div>
                    		<div class="col-md-12" style="height:20px;">
								<span style="color:#fff;font-size:14px;"><strong>collected and redeemed by Sierra Green users. Our mission is to partner with local business to help generate</strong></span>
                    		</div>
							<div class="col-md-12" style="height:20px;">
								<span style="color:#fff;font-size:14px;"><strong>new customers and forge lasting relationships within the community</strong></span>
                    		</div>

                    	</div>
                    	
                    </div>
                </div>
                <div class="col-md-4 login-container bs-reset mt-login-5-bsfix" style="width:36%;">
                    <div class="login-content" style="margin-top:28%;">
                        
                        <img src="<?php echo base_url();?>assets/imgs/icon.png" style="width:120px;height:120px;">
                        <p class="fontsforweb_fontid_12950"><strong>Already have an account? </strong></p>
                        <form action="<?php echo base_url();?>Login" class="login-form" method="post" style="margin-top:36px;">
                            
                            <div class="row">
                            	<div class="col-md-12">
	                                <div class="form-body">
	                                    <div class="form-group form-md-line-input" style="margin-bottom:0px;">
				                            <input type="text" class="form-control fontsforweb_fontid_12950" name="email" id="form_control_1" placeholder="you@email.com">
				                            <label for="form_control_1">EMAIL</label>
				                            
			                            </div>
			                            <span class="help-block" style="color:#f00;display:none;" ><strong>No account found, please recheck </strong></span>
			                            <div style="height:20px;">
			                            </div>
			                            <div class="form-group form-md-line-input" style="margin-bottom:0px;">
				                            <input type="password" class="form-control fontsforweb_fontid_12950" name="password" id="form_control_1" placeholder="your password">
				                            <label for="form_control_1">PASSWORD</label>
			                            </div>
			                            <span class="help-block" style="color:#f00;display:none;" ><strong>Password wrong, please recheck </strong></span>
										<div style="height:20px;">
			                            </div>	
	                                </div>

                            	</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-left">
                                    <div class="forgot-password" style="margin-bottom:30px;">
                                        <a href="javascript:;" id="forget-password" class="forget-password"><span style="font-size:13px;text-decoration:underline;color:#bbb5b5;">FORGOT PASSWORD?</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
								<div class="col-sm-12" style="margin-bottom:20px;">
                                    <button class="btn green" id="sign_user" type="submit" style="width:100%;background:#008B84;height:40px;box-shadow:0 9px 8px 0 rgba(0, 0, 0, 0.12), 0 13px 22px 0 rgba(0, 0, 0, 0.09);"><span>SIGN IN</span></button>
                                </div>                            
                           	</div>
                           	<div class="row">
								<div class="col-sm-12" style="margin-bottom:20px;">
	                                <button id="reg_user" class="btn green" type="button" style="width:100%;background:#fff;color:#068f89;height:40px;box-shadow:0 9px 8px 0 rgba(0, 0, 0, 0.12), 0 13px 22px 0 rgba(0, 0, 0, 0.09);"><span>REGISTER</span></button>
                                </div>                            
                           	</div>
                        </form>
                       
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url();?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <!--<script src="<?php echo base_url();?>assets/pages/scripts/login-5.js" type="text/javascript"></script>-->
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        <script>
        	
        	$('#reg_user').on('click', function(){
        		location.href = "https://192.168.0.7/sierra-green/Signup";
    		});
    	</script>
    </body>

</html>