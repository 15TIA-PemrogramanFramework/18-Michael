<!DOCTYPE html>
<html lang="en">

    <?php $this->load->view('templates/movie-list');?>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>/assets/js/creative.min.js"></script>
    
        <link rel="stylesheet" href="<?php echo base_url('assets_tab/datatables/dataTables.bootstrap.css') ?>"/>
		<!-- MetisMenu CSS -->
		<link href="<?php echo base_url('assets_tab/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="<?php echo base_url('assets_tab/css/sb-admin-2.css') ?>" rel="stylesheet">
	
		<style>
            .dataTables_wrapper {
                min-height: 500px
            }
            
            .dataTables_processing {
                position: absolute;
                top: 50%;
                left: 50%;
                width: 100%;
                margin-left: -50%;
                margin-top: -25px;
                padding-top: 20px;
                text-align: center;
                font-size: 1.2em;
                color:grey;
            }
        </style>
    </head>
    <body>
		<?php $this->load->view('templates/navbar');?>
	<div id="page-wrapper">