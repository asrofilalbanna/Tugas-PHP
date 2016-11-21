<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<?php echo $this->session->flashdata('alert_msg'); ?>
<h1 class="page-header" style="text-transform: capitalize;"><?php echo $judul;?></h1>
<form class="form-horizontal" method="POST" action="<?php echo site_url('mapel/act_tambah')?>">
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama Mapel</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nama Mapel" name="nama_mapel">
    </div>
  </div>
  <div class="form-group">
    <label class="col-sm-2 control-label">Nama Guru</label>
    <div class="col-sm-10">
       <select name="id_guru" style="height: 30px">
        <?php foreach ($data_Guru as $key => $value) {?>
          <option value="<?php echo $value->id_guru?>"><?php echo $value->nama_guru?></option>
        <?php } ?>
      </select>
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