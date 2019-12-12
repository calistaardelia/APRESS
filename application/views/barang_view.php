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
                    <a class="btn btn-rounded btn-primary mb-3" href="#modal_tambah_barang" role="button" data-toggle="modal" data-target="#modal_tambah_barang">Tambah Barang</a>
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Voucher</th>
                                    <th scope="col">Foto</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Poin</th>
                                    <th scope="col">Aksi</th>
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
                                                <td>'.$b->stok.'</td>
                                                <td> '.$b->harga.'</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-3"><a href="#" class="text-secondary" data-toggle="modal" data-target="#modal_ubah_barang" onclick="prepare_ubah_barang('.$b->id_barang.')"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger" data-toggle="modal" data-target="#modal_hapus_barang" onclick="prepare_hapus_barang('.$b->id_barang.')"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>
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

<!-- Modal Tambah start -->
<div class="col-lg-6 mt-5">
                <div class="card">
                    <!-- <div class="card-body"> -->

                        <!-- Modal -->
                        <div class="modal fade" id="modal_tambah_barang">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Voucher</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/barang/tambah'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control" name="kode_barang" type="text" placeholder="Kode Voucher" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="nama_barang" type="text" placeholder="Nama Voucher" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="stok" type="text" placeholder="Stok" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="harga" type="text" placeholder="Poin" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <select name="kategori" class="custom-select">
                                                <?php
                                                    foreach ($kategori as $k) {
                                                        echo '
                                                            <option value="'.$k->id_kat.'">'.$k->nama_kat.'</option>
                                                        ';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <input type="file" class="form-control" placeholder="Foto" name="foto">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Modal Tambah end -->


<!-- Modal Ubah start -->
<div class="col-lg-6 mt-5">
                <div class="card">
                    <!-- <div class="card-body"> -->

                        <!-- Modal -->
                        <div class="modal fade" id="modal_ubah_barang">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ubah Voucher</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/barang/ubah'); ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_id_barang" type="hidden" placeholder="ID Voucher" id="ubah_id_barang">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_kode_barang" type="text" placeholder="Kode Voucher" id="ubah_kode_barang">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_nama_barang" type="text" placeholder="Nama Voucher" id="ubah_nama_barang">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_stok" type="text" placeholder="Stok" id="ubah_stok">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_harga" type="text" placeholder="Poin" id="ubah_harga">
                                        </div>
                                        <div class="form-group">
                                            <select name="ubah_kategori" class="custom-select">
                                                <?php
                                                    foreach ($kategori as $k) {
                                                        echo '
                                                            <option value="'.$k->id_kat.'">'.$k->nama_kat.'</option>
                                                        ';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                                <!-- <div class="input-group-prepend">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto" placeholder="Foto">
                                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                </div> -->
                                                <div id="data_foto"></div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Modal Ubah end -->


<!-- Modal Hapus start -->
<div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">

                        <!-- Modal -->
                        <div class="modal fade" id="modal_hapus_barang">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi Hapus Pengguna</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/barang/hapus'); ?>" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="hapus_id_barang" id="hapus_id_barang">
                                        <p>Apakah anda yakin menghapus voucher <b><span id="hapus_nama_barang"></span></b> ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                        <button type="submit" class="btn btn-primary">Yakin</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
</div>
<!-- Modal Hapus end -->


<script type="text/javascript">

	function prepare_ubah_barang(id)
	{
		$("#ubah_id_barang").empty();
		$("#ubah_kode_barang").empty();
		$("#ubah_nama_barang").empty();
		$("#ubah_kategori").val();
		$("#ubah_stok").empty();
		$("#ubah_harga").empty();
		$("#data_foto").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/barang/get_data_barang_by_id/' + id,  function(data){
			$("#ubah_id_barang").val(data.id_barang);
			$("#ubah_kode_barang").val(data.kode_barang);
			$("#ubah_nama_barang").val(data.nama_barang);
			$("#ubah_kategori").val(data.id_kat);
			$("#ubah_stok").val(data.stok);
			$("#ubah_harga").val(data.harga);
			$("#data_foto").html('<img src="<?php echo base_url(); ?>assets/foto/' + data.foto + '" width="50px" >');
		});
	}

	function prepare_hapus_barang(id)
	{
		$("#hapus_id_barang").empty();
		$("#hapus_nama_barang").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/barang/get_data_barang_by_id/' + id,  function(data){
			$("#hapus_id_barang").val(data.id_barang);
			$("#hapus_nama_barang").text(data.nama_barang);
		});
	}
</script>
