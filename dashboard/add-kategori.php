<?php
include "lib/header.php"
?>


            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0 text-black">Add Kategori</h5>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="">Kode Kategori</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Isikan Kode Kategori" />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="">Nama Kategori</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Isikan Nama Kategori" />
                          </div>
                        </div>

                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <input type="submit" class="btn btn-outline-info" name="" id="" value="Send">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          

<?php
include "lib/footer.php"
?>