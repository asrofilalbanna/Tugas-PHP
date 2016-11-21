<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>
<h1 class="page-header" style="text-transform: capitalize;"><?php echo $judul;?></h1>
<form class="form-horizontal" method="POST" action="<?php echo site_url('nilai/act_tambah')?>">
  <div class="form-group">
    <label class="col-sm-2 control-label">Siswa</label>
    <div class="col-sm-10">
      <select name="id_siswa" style="height: 30px">
        <?php foreach ($data_Siswa as $key => $value) {?>
          <option value="<?php echo $value->id?>"><?php echo $value->nama?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Mapel</label>
    <div class="col-sm-10">
      <select name="id_mapel" style="height: 30px;">
        <?php foreach ($data_Mapel as $key => $value) {?>
          <option value="<?php echo $value->id_mapel?>"><?php echo $value->nama_mapel?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Nilai</label>
    <div class="col-sm-2">
      <input type="text" class="form-control" placeholder="Nilai" name="total_nilai">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <a href="<?php echo site_url('guru')?>" class="btn btn-default">Kembali</a>
      <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>
</div>