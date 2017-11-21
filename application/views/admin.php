<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UMDB - Universe's Movie Database</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?php echo base_url();?>/assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top" background-image: url("../img/header.jpg");">

    <?php $this->load->view('templates/navbar');?>

    <?php $this->load->view('templates/header_admin');?>

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
        <br>
        <br>
        <br>
    <div id="page-wrapper">
    <div class="row">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($admin as $key => $value){ ?>
                <tr>
                    <td><?php echo $value->username; ?></td>
                    <td><?php echo $value->nama; ?></td>
                    <td><?php echo $value->email; ?></td>
                    <td>
                        <?php  echo anchor(site_url('film/delete/'.$value->username),
                        '<i class="fa fa-trash"></i>',
                        'class="btn btn-danger"'); ?>        
                    </td>
                </tr>
            <?php }?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#example').DataTable();
        } );
    </script>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="<?php echo base_url();?>/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>/assets/js/creative.min.js"></script>

  </body>

</html>
