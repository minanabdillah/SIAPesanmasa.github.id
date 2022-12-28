<?php
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_mahasantri WHERE id = '$id'");
$view = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Mahasantri</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method="get" action='update/update_data.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" placeholder="Nama" name="Nama" value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" placeholder="id" name="id" value="<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>NIM</label>
                        <input type="text" class="form-control" placeholder="NIM" name="NIM" value="<?php echo $view['nim'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Semester</label>
                        <select class="custom-select" id="inputGroupSelect01" name = "Semester">
                            <option value="<?php echo $view['semester'];?>" selected><?php echo $view['semester'];?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
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