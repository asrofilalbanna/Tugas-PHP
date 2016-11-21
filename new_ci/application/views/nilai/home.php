<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

  <?php echo $this->session->flashdata('alert_msg'); ?>

  <h1 class="page-header">Menu Nilai</h1>
  <a href="<?php echo site_url('nilai/add_nilai') ?>" class="btn btn-primary">Tambah Nilai</a>
  <br><br>
  <div class="table-responsive">
    <table class="table table-striped table-hover" style="text-transform: capitalize;" >
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Mapel</th>
          <th>Nama Siswa</th>
          <th>Nilai</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
        foreach ($data_Nilai as $key => $value) 
        {
          ?>
          <tr>
            <td> <?php echo $value->id_nilai ?> </td>
            <td> <?php echo $value->nama_mapel ?> </td>
            <td> <?php echo $value->nama ?> </td>
            <td> <?php echo $value->total_nilai ?> </td>
            <td>
              <a href="<?php echo site_url('nilai/edit/').$value->id_nilai?>" class="btn btn-info">Edit</a>
              <a href="<?php echo site_url('nilai/hapus/').$value->id_nilai?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
            </td>
          </tr>
          <?php
        } 
        ?>
      </tbody>
    </table>
  </div>
</div>