           <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <?php echo $this->session->flashdata('alert_msg'); ?>
            
            <h1 class="page-header">Menu Guru</h1>
            <a href="<?php echo site_url('guru/add_guru') ?>" class="btn btn-primary">Tambah Guru</a>
            <br><br>
            <div class="table-responsive">
              <table class="table table-striped table-hover" style="text-transform: capitalize;" >
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  foreach ($data_Guru as $key => $value) 
                  {
                    ?>
                    <tr>
                      <td> <?php echo $value->id_guru ?> </td>
                      <td> <?php echo $value->nama_guru ?> </td>
                      <td>
                        <a href="<?php echo site_url('guru/edit/').$value->id_guru?>" class="btn btn-info">Edit</a>
                        <a href="<?php echo site_url('guru/hapus/').$value->id_guru?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a>
                      </td>
                    </tr>
                    <?php
                  } 
                  ?>
                </tbody>
              </table>
            </div>
          </div>