<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>
<h1 class="page-header" style="text-transform: capitalize;"><?php echo $judul;?></h1>
<form class="form-horizontal" method="POST" action="<?php echo site_url('siswa/act_edit')?>">
  <div class="form-group">
   <input type="hidden" name="id" value="<?php echo $data_Siswa->id?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?php echo $data_Siswa->nama?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="alamat" name="alamat" value="<?php echo $data_Siswa->alamat?>">
    </div>
  </div>
  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Kelas</label>
    <div class="col-sm-10">
     <select name="id_kelas">
     <?php 
     foreach ($data_Kelas as $key => $value) {
        if ($value->id_kelas == $data_Siswa->id_kelas) {
          $selected = 'selected';
        } else {
          $selected = '';
        }
     ?>
       <option value="<?php echo $value->id_kelas;?>" <?php echo $selected;?>><?php echo $value->nama_kelas;?></option>
      <?php } ?>
     </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?php echo site_url('siswa')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
</div>