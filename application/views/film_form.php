<?php $this->load->view('templates/header_tab'); ?>
<br>
<br>
<form action="<?php echo $action; ?>" method="POST">
	<div class="form-group">
		<label>Nama_Film</label>
		<input type="text"  value="<?php echo $nama_film; ?>" class="form-control" name="nama_film">

	</div>
	<div class="form-group">
		<label>Kategori</label>
		<input type="text"  value="<?php echo $kategori; ?>" class="form-control" name="kategori">
	</div>
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php echo site_url('home/movies') ?>" class="btn btn-default">Cancel</a>	
</form>