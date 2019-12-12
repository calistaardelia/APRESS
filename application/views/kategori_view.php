<!-- page title area end -->
<div class="main-content-inner">
<div class="row">
    
    <!-- Progress Table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Kategori</h4>
                    <?php
                        $notif = $this->session->flashdata('notif');
                        if($notif != NULL){
                            echo '
                                <div class="alert alert-info">'.$notif.'</div>
                            ';
                        }
                    ?>
                    
                <div class="single-table">
                    <div class="table-responsive">
                    <a class="btn btn-rounded btn-primary mb-3" href="#modal_tambah_kategori" role="button" data-toggle="modal" data-target="#modal_tambah_kategori">Tambah Kategori</a>
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($kategori as $k) {
                                        echo '
                                        <tr>
                                        <th>'.$no.'</th>
                                        <td>'.$k->nama_kat.'</td>

                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="#" class="text-secondary" data-toggle="modal" data-target="#modal_ubah_kategori" onclick="prepare_ubah_kategori('.$k->id_kat.')"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger" data-toggle="modal" data-target="#modal_hapus_kategori" onclick="prepare_hapus_kategori('.$k->id_kat.')"><i class="ti-trash"></i></a></li>
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
                        <div class="modal fade" id="modal_tambah_kategori">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Kategori</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/kategori/tambah'); ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control" name="nama" type="text" placeholder="Nama Kategori" id="example-text-input">
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
<!-- Modal Tambah end -->


<!-- Modal Ubah start -->
<div class="col-lg-6 mt-5">
                <div class="card">
                    <div class="card-body">
        
                        <!-- Modal -->
                        <div class="modal fade" id="modal_ubah_kategori">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ubah Kategori</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/kategori/ubah'); ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_id" type="hidden" id="ubah_id">
                                            <input class="form-control" name="ubah_nama" type="text" id="ubah_nama">
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
                        <div class="modal fade" id="modal_hapus_kategori">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi Hapus Kategori</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/kategori/hapus'); ?>" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="hapus_id" id="hapus_id">
                                        <p>Apakah anda yakin menghapus kategori <b><span id="hapus_nama"></span></b> ?</p>
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
	
	function prepare_ubah_kategori(id)
	{
		$("#ubah_id").empty();
		$("#ubah_nama").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/kategori/get_data_kategori_by_id/' + id,  function(data){
			$("#ubah_id").val(data.id_kat);
			$("#ubah_nama").val(data.nama_kat);
		});
	}

	function prepare_hapus_kategori(id)
	{
		$("#hapus_id").empty();
		$("#hapus_nama").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/kategori/get_data_kategori_by_id/' + id,  function(data){
			$("#hapus_id").val(data.id_kat);
			$("#hapus_nama").text(data.nama);
		});
	}
</script>