<?php
include "lib/header.php"
?>

<div class="container-xxl flex-grow-1 container-p-y">

  <div class="card">
    <h4 class="card-header text-black">Data Kategori</h4>
    <div class="row justify-content-end">
        <div class="col">
          <a href="" class="btn btn-outline-info btn-sm" style="margin-left: 25px;">Tambah Data</a>
        </div>
        <div class="col-auto">
          <form action="" class="form-inline">
            <div class="form-row align-items-center">
              <div class="col">
                <input type="text">
                <input type="submit" class="btn btn-outline-info btn-sm mr-3" style="margin-right: 15px;"> <!-- Tambahkan mr-3 untuk margin kanan -->
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="table-responsive text-nowrap mt-4">
        <table class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>#</th>
              <th>Kode Kategori</th>
              <th>Nama Kategori</th>
              <!-- <th>Status</th>
              <th>Actions</th> -->
            </tr>
            <tr>
              <td>1</td>
              <td>dskdksk</td>
              <td>dskdksk</td>
            </tr>
          </thead>
        </table>
      </div>
  </div>
</div>


          

<?php
include "lib/footer.php"
?>