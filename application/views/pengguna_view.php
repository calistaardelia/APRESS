<!-- page title area end -->
<div class="main-content-inner">
<div class="row">

    <!-- Progress Table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Pengguna</h4>
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
                    <a class="btn btn-rounded btn-primary mb-3" href="#modal_tambah_pengguna" role="button" data-toggle="modal" data-target="#modal_tambah_pengguna">Tambah Pengguna</a>
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($pengguna as $p) {
                                        echo '
                                        <tr>
                                        <th>'.$no.'</th>
                                        <td>'.$p->nama.'</td>
                                        <td>'.$p->username.'</td>
                                        <td>'.$p->level.'</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="#" class="text-secondary" data-toggle="modal" data-target="#modal_ubah_pengguna" onclick="prepare_ubah_pengguna('.$p->id.')"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger" data-toggle="modal" data-target="#modal_hapus_pengguna" onclick="prepare_hapus_pengguna('.$p->id.')"><i class="ti-trash"></i></a></li>
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
                        <div class="modal fade" id="modal_tambah_pengguna">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Tambah Pengguna</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/pengguna/tambah'); ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control" name="nama" type="text" placeholder="Nama Pengguna" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="username" type="text" placeholder="Username" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="password" type="password" placeholder="Password" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="level">
                                            <option value="Admin">Admin</option>
                                            <option value="Kasir">User</option>
                                            </select>
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
                        <div class="modal fade" id="modal_ubah_pengguna">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Ubah Pengguna</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/pengguna/ubah'); ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_id" type="hidden" id="ubah_id">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_nama" type="text" id="ubah_nama">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_username" type="text" id="ubah_username">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" name="ubah_password" type="password" id="ubah_password">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="ubah_level" id="ubah_level">
                                                <option value="Admin">Admin</option>
                                                <option value="Kasir">User</option>
	        	                            </select>
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
                        <div class="modal fade" id="modal_hapus_pengguna">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Konfirmasi Hapus Pengguna</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <form action="<?php echo base_url('index.php/pengguna/hapus'); ?>" method="post">
                                    <div class="modal-body">
                                        <input type="hidden" name="hapus_id" id="hapus_id">
                                        <p>Apakah anda yakin menghapus pengguna <b><span id="hapus_nama"></span></b> ?</p>
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

	function prepare_ubah_pengguna(id)
	{
		$("#ubah_id").empty();
		$("#ubah_nama").empty();
		$("#ubah_username").empty();
		$("#ubah_password").empty();
		$("#ubah_level").val();

		$.getJSON('<?php echo base_url(); ?>index.php/pengguna/get_data_pengguna_by_id/' + id,  function(data){
			$("#ubah_id").val(data.id);
			$("#ubah_nama").val(data.nama);
			$("#ubah_username").val(data.username);
			$("#ubah_password").val(data.password);
			$("#ubah_level").val(data.level);
		});
	}

	function prepare_hapus_pengguna(id)
	{
		$("#hapus_id").empty();
		$("#hapus_nama").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/pengguna/get_data_pengguna_by_id/' + id,  function(data){
			$("#hapus_id").val(data.id);
			$("#hapus_nama").text(data.nama);
		});
	}
</script>
