<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>
<h1 class="page-header" style="text-transform: capitalize;"><?php echo $judul;?></h1>
<form class="form-horizontal" method="POST" action="<?php echo site_url('kelas/act_edit')?>">
  <div class="form-group">
   <input type="hidden" name="id_kelas" value="<?php echo $data_Kelas->id_kelas?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_kelas" value="<?php echo $data_Kelas->nama_kelas?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?php site_url('kelas')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
</div>