<?php 
$this->load->view('templates/header_tab');
?>
<div class="row">
    <div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
        <?php if( $this->session->userdata('admin') || $this->session->userdata('user') || $this->session->userdata('owner')) { echo anchor(site_url("review/add_review/".$nama), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary"');} ?>
    </div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Nama Film</th>
            <th>Review</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($review as $key => $value){ ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->username; ?></td>
                <td><?php echo $value->nama_film; ?></td>
                <td><?php echo $value->review; ?></td>
                <?php $nama_film=$value->nama_film;?>
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