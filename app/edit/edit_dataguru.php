<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_guru WHERE id = '$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Guru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action='update/update_dataguru.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="Nama" value="<?php echo $view['Nama'];?>">
                        <input type="text" class="form-control" placeholder="id" name="id" value="<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIP</label>
                        <input type="text" class="form-control" placeholder="NIP" name="NIP" value="<?php echo $view['NIP'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Program</label>
                        <select class="custom-select" id="inputGroupSelect01" name = "Program">
                            <option value="<?php echo $view['Program'];?>" selected><?php echo $view['Program'];?></option>
                            <option value="Kajian">Kajian</option>
                            <option value="Tahsin">Tahsin</option>
                        </select>
                      </div>
                    </div>
                  </div>
                <button type="submit" class="btn btn-sm btn-info">Simpan</button>
                  <!-- input states -->
                </form>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</section>