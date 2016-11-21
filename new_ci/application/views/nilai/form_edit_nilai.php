<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>
<h1 class="page-header" style="text-transform: capitalize;"><?php echo $judul;?></h1>
<form class="form-horizontal" method="POST" action="<?php echo site_url('nilai/act_edit')?>">
   <input type="hidden" name="id_nilai" value="<?php echo $data_Nilai->id_nilai?>">
   <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Siswa</label>
    <div class="col-sm-10">
     <select name="id_siswa">
       <?php 
       foreach ($data_Siswa as $key => $value) {
        if ($value->id == $data_Nilai->id_siswa) {
          $selected = 'selected';
        } else {
          $selected = '';
        }
        ?>
        <option value="<?php echo $value->id;?>" <?php echo $selected;?>><?php echo $value->nama;?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Mapel</label>
    <div class="col-sm-10">
     <select name="id_mapel">
       <?php 
       foreach ($data_Mapel as $key => $value) {
        if ($value->id_mapel == $data_Nilai->id_mapel) {
          $selected = 'selected';
        } else {
          $selected = '';
        }
        ?>
        <option value="<?php echo $value->id_mapel;?>" <?php echo $selected;?>><?php echo $value->nama_mapel;?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nilai</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nilai" name="total_nilai" value="<?php echo $data_Nilai->total_nilai?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?php echo site_url('nilai')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
</div>