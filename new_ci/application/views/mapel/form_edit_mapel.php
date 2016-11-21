<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>
<h1 class="page-header" style="text-transform: capitalize;"><?php echo $judul;?></h1>
<form class="form-horizontal" method="POST" action="<?php echo site_url('mapel/act_edit')?>">
  <div class="form-group">
   <input type="hidden" name="id_mapel" value="<?php echo $data_Mapel->id_mapel?>">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama Mapel</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nama Mapel" name="nama_mapel" value="<?php echo $data_Mapel->nama_mapel?>">
    </div>
  </div>
  <div class="form-group">
  <label for="inputPassword3" class="col-sm-2 control-label">Guru</label>
    <div class="col-sm-10">
     <select name="id_guru">
     <?php 
     foreach ($data_Guru as $key => $value) {
        if ($value->id_guru == $data_Mapel->id_guru) {
          $selected = 'selected';
        } else {
          $selected = '';
        }
     ?>
       <option value="<?php echo $value->id_guru;?>" <?php echo $selected;?>><?php echo $value->nama_guru;?></option>
      <?php } ?>
     </select>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?php echo site_url('mapel')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
</div>