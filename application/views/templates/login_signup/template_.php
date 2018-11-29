<!DOCTYPE html>
<html lang="en" ng-app="GymApp">
<head>
    <meta charset="utf-8" />
    <title>Jampedo</title>

    <link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>assets/themes/admin/images/logo.png">
    <!-- build:css css/styles/app.min.css -->
    <!-- endbuild -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/header.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jamlyStyles.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/index.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/profile.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/studio.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/hottestSessions.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/version.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/versionComment.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/videoPlayer.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/videoPlayerButtonsForSession.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/signupLogin.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">



    <script>
        var asset_url = "<?php echo base_url();?>assets/";
        var admin_asset_url = "<?php echo base_url();?>assets/themes/admin/";
        var base_url = "<?php echo base_url();?>";
    </script>    



</head>
<body>
<input type="hidden" value="<?php echo $google_login_url;?>" id="google_url">

<div class="app" id="app" style="box-sizing;unset;-webkit-box-sizing:unset;">
    {content}
</div>
<!-- AngularJs -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular-route.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ng-file-upload-shim.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/ng-file-upload.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/global.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/studio_config.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/app.js" type="text/javascript"></script>
	

<script src="<?php echo base_url(); ?>assets/js/utilities/s3.fine-uploader.core.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/utilities/s3upload.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/utilities/searchBox.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/utilities/recorderWorker.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/service/recordingService.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/service/filesService.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/service/convertService.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/hottestSessions.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/videoPlayerApp.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/service/audioVisService.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/js/utilities/audiolib.min.js" type="text/javascript"></script>
	
	
	
{_styles}
{_scripts}

<!-- build:js scripts/app.min.js -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/themes/admin/libs/jquery/dist/jquery.js"></script>

<!-- Bootstrap -->
<script src="<?php echo base_url(); ?>assets/themes/admin/libs/tether/dist/js/tether.min.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/admin/libs/bootstrap/dist/js/bootstrap.js"></script>
<!-- core -->
<script src="<?php echo base_url(); ?>assets/themes/admin/libs/jQuery-Storage-API/jquery.storageapi.min.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/admin/libs/PACE/pace.min.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/admin/libs/jquery-pjax/jquery.pjax.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/admin/libs/blockUI/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>assets/themes/admin/libs/jscroll/jquery.jscroll.min.js"></script>
<?php
if(isset($jsinc) && !empty($jsinc)){
    for ($i = 0; $i < count($jsinc); $i++) {
    ?>
        <script src="<?php echo base_url(); ?>assets/js/<?php echo $jsinc[$i]?>"></script>
    <?php }
}
?>

<script src="<?php echo base_url(); ?>assets/themes/admin/scripts/config.lazyload.js"></script>




<!-- endbuild -->
</body>
</html>
