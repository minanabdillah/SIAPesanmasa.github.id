    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable-Mapel</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <button type="button" class="btn btn-info" data-toggle="modal"data-target="#modal-lg">
                Tambah Data
               </button>
               <br></br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Number</th>
                    <th>Program</th>
                    <th>Kode</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi,"SELECT * FROM tb_mapel");
                    while ($mpl = mysqli_fetch_array($query)) {
                      $no++
                    ?>
                  <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $mpl['Program']; ?></td>
                    <td><?php echo $mpl['kode']; ?></td>
                    <td>
                      <a onclick="hapus_data(<?php echo $mpl['id']; ?>)" class="btn btn-sm btn-danger">Hapus</a>
                      <a href="index.php?page=edit-data-program&& id=<?php echo $mpl['id']; ?>" class="btn btn-sm btn-success">Edit</a>
                    </td>
                  </tr>
                  <?php  } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Data dari program</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Large Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method = "get" action="add/tambahdata_mapel.php">
            <div class="modal-body">
            
              <div class="form-row">
                <div class="col">
                <select class="custom-select" id="inputGroupSelect01" name = "Program" required>
                  <option selected>Pilih Program</option>
                  <option value="Kajian">Kajian</option>
                  <option value="Tahsin">Tahsin</option>
                </select>
                </div>
                <div class="col">
                <select class="custom-select" id="inputGroupSelect01" name = "Kode" required>
                  <option selected>Kode</option>
                  <option value="k123">k123</option>
                  <option value="t123">t123</option>
                </select>
                </div>
                <!--<div class="col">-->
                <!--<select class="custom-select" id="inputGroupSelect01" name = "guru" required>-->
                    <!--<option selected>Pilih Gurunya</option>-->
                   <!-- <option value="Nafid">Nafid</option>-->
                    <!--<option value="Fikri">Fikri</option>-->
                <!--</select>-->
                <!--</div>-->
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<script>
  function hapus_data(data_kode){
    //alert('ok');
    //window.location=("delete/hapus_data.php?id="+data_id);
    Swal.fire({
      title: 'Apakah datanya akan dihapus?',
      //showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Hapus',
      confirmButtonColor: 'red',
      //denyButtonText: `Don't save`,
    }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      window.location=("delete/hapus_datamapel.php?id="+data_kode);
    }
    })
  }
</script>