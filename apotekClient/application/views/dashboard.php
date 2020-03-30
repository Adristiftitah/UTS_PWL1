

<section class="section mt-5">
<div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Obat Apotek Risti </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Merk Obat</th>
                      <th>Jenis Obat</th>
                      <th>Harga</th>
                      <th>Tanggal Kadaluarsa</th>
                      <th>Stok</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                  for ($i= 0; $i < count($data_obat['data']); $i++) { ?>
                      <!--<div class="card ml-3 mt-3" style="width: 15rem;">
                        <div class="card-body ">
                          <h5 class="card-title mb-1"> <?= $data_obat['data'][$i]['merk_obat'] ?> </h5>
                          <small><?= $data_obat['data'][$i]['jenis_obat'] ?></small><br>
                          <span class="badge badge-success mb-3">Rp. <?= (($data_obat['data'][$i]['harga']) +($data_obat['data'][$i]['harga'])*20/100) ?></span><br>
                          <a href="#" class="btn btn-sm btn-dark">Detail</a>
                        </div>
                      </div>-->
                      <tr>
                        <td> <?= $i+1 ?></td>
                        <td> <?= $data_obat['data'][$i]['merk_obat'] ?></td>
                        <td> <?= $data_obat['data'][$i]['jenis_obat'] ?></td>
                        <td> <?= (($data_obat['data'][$i]['harga']) +($data_obat['data'][$i]['harga'])*20/100) ?></td>
                        <td> <?= $data_obat['data'][$i]['tanggal_kadaluarsa'] ?></td>
                        <td> <?= $data_obat['data'][$i]['stok'] ?></td>
                    </tr>

                <?php } ?>
                </tbody>
               </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

</section>





<!--<?php
  for ($i= 0; $i < count($data_obat['data']); $i++) { ?>
                                            
   <tr>
      <td> <?= $i+1 ?></td>
      <td> <?= $data_obat['data'][$i]['merk_obat'] ?></td>
      <td> <?= $data_obat['data'][$i]['jenis_obat'] ?></td>
      <td> <?= $data_obat['data'][$i]['harga'] ?></td>
      <td> <?= $data_obat['data'][$i]['tanggal_kadaluarsa'] ?></td>
      <td> <?= $data_obat['data'][$i]['stok'] ?></td>
  </tr>
                                            
<?php } ?>-->