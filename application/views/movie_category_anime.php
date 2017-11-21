<?php 
$this->load->view('templates/header_tab');
?>
<div class="row">
    <div class="col-md-12 text-right" style="margin-top:20px;margin-bottom:20px">
         <?php  if( $this->session->userdata('admin')==true || $this->session->userdata('user')==true || $this->session->userdata('owner')==true) {echo anchor(site_url("film/add_film/".$kategori), '<i class="fa fa-plus"></i> Tambah Data', 'class="btn btn-primary"'); }?>
    </div>
</div>
<div class="row">
<table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($film as $key => $value){ ?>
            <tr>
                <td><?php echo $value->id; ?></td>
                <td><?php echo $value->nama_film; ?></td>
                <td><?php echo $value->kategori; ?></td>
                <td>
                    <?php echo anchor(site_url("review/index/".$value->nama_film), '<i class="fa fa-eye"></i> Review', 'class="btn btn-primary"'); ?>
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