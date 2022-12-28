<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_tahsin WHERE id = '$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Tahsin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action='update/update_datatahsin.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="col">
                        <label>Program</label>
                        <select class="custom-select" id="inputGroupSelect01" name = "Program">
                            <option value="<?php echo $view['program'];?>" selected><?php echo $view['program'];?></option>
                            <option value="Tahsin">Tahsin</option>
                        </select>
                        <input type="text" class="form-control" placeholder="id" name="id" value="<?php echo $view['id'];?>" hidden>
                      </div>
                      <div class="col">
                      <label>Kode</label>
                      <select class="custom-select" id="inputGroupSelect01" name = "Kode" required>
                          <option value="<?php echo $view['kode'];?>" selected><?php echo $view['kode'];?></option>
                          <option value="t123">t123</option>
                      </select>
                      </div>
                      <div class="col">
                      <label>Guru</label>
                      <input type="text" class="form-control" placeholder="id" name="id" value="<?php echo $view['id'];?>" hidden>
                      <select class="custom-select" id="inputGroupSelect01" name = "guru" required>
                          <option value="<?php echo $view['guru'];?>" selected><?php echo $view['guru'];?></option>
                          <option value="Nafid">Nafid</option>
                          <option value="Fikri">Fikri</option>
                          <option value="Dana">Dana</option>
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