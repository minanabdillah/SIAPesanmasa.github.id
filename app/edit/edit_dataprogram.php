<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_mapel WHERE id = '$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Program</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action='update/update_dataprogram.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Program</label>
                        <select class="custom-select" id="inputGroupSelect01" name = "Program">
                            <option value="<?php echo $view['Program'];?>" selected><?php echo $view['Program'];?></option>
                            <option value="Kajian">Kajian</option>
                            <option value="Tahsin">Tahsin</option>
                        </select>
                      </div>
                      <div class="col">
                      <label>Kode</label>
                      <select class="custom-select" id="inputGroupSelect01" name = "Kode" required>
                        <option value="<?php echo $view['kode'];?>" selected><?php echo $view['kode'];?></option>
                        <option value="k123">k123</option>
                        <option value="t123">t123</option>
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