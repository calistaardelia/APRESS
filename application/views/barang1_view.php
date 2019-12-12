<!-- page title area end -->
<div class="main-content-inner">
<div class="row">

    <!-- Progress Table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Voucher</h4>
                    <?php
                        $notif = $this->session->flashdata('notif');
                        if($notif != NULL){
                            echo '
                                <div class="alert alert-danger">'.$notif.'</div>
                            ';
                        }
                    ?>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Voucher</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Point</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($barang as $b) {
                                        echo '
                                            <tr>
                                                <th>'.$no.'</th>
                                                <td>'.$b->kode_barang.'</td>
                                                <td>'.$b->nama_barang.'</td>
                                                <td><img src="'.base_url().'assets/foto/'.$b->foto.'" width="50px" /></td>
                                                <td>'.$b->nama_kat.'</td>
                                                <td id="stok">'.$b->stok.'</td>
                                    

                                            </tr>
                                        ';
                                        $no++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Progress Table end -->
</div>
</div>
</div>

<!-- main content area end -->
