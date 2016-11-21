           <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <?php echo $this->session->flashdata('alert_msg'); ?>
            
            <h1 class="page-header">Menu Mata Pelajaran(Mapel)</h1>
            <a href="<?php echo site_url('mapel/add_mapel') ?>" class="btn btn-primary">Tambah Mapel</a>
            <br><br>
            <div class="table-responsive">
              <table class="table table-striped table-hover" style="text-transform: capitalize;" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Mapel</th>
                    <th>Nama Guru</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach ($data_Mapel as $key => $value) 
                  {
                    ?>
                    <tr>
                      <td> <?php echo $value->id_guru ?> </td>
                      <td> <?php echo $value->nama_mapel ?> </td>
                      <td> <?php echo $value->nama_guru ?> </td>
                      <td>
                        <a href="<?php echo site_url('mapel/edit/').$value->id_mapel?>" class="btn btn-info">Edit</a>
                        <a href="<?php echo site_url('mapel/hapus/').$value->id_mapel?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                      </td>
                    </tr>
                    <?php
                  } 
                  ?>
                </tbody>
              </table>
            </div>
          </div>