<!-- page title area end -->
<div class="main-content-inner">
<div class="row">

    <!-- Progress Table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Data Riwayat Transaksi</h4>
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
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pembeli</th>
                                    <th scope="col">Tanggal Beli</th>
                                    <th scope="col">Total Belanja</th>
                                    <th scope="col">Pengguna</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $no = 1;
                                    foreach ($riwayat as $r) {
                                        echo '
                                        <tr>
                                        <th>'.$no.'</th>
                                        <td>'.$r->nama_pembeli.'</td>
                                        <td>'.$r->tgl_beli.'</td>
                                        <td>'.$r->total.'</td>
                                        <td>'.$r->id_kasir.'</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                            <a class="btn btn-rounded btn-primary mb-3" href="#modal_detail_transaksi" role="button" data-toggle="modal" data-target="#modal_detail_transaksi" onclick="prepare_detail_transaksi('.$r->id_transaksi.')">Lihat Detail</a>
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

<!-- Modal Detail Transaksi start -->
            <div class="col-lg-6 mt-5">
                <div class="card">
                    <!-- <div class="card-body"> -->

                        <!-- Modal -->
                        <div class="modal fade" id="modal_detail_transaksi">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Detail Transaksi</h5>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                    </div>
                                    <div class="modal-body">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <a href="#" class="btn btn-warning" id="cetak_nota" target="_blank">CETAK NOTA</a>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Modal Detail end -->


<script type="text/javascript">

	function prepare_detail_transaksi(id)
	{
		$(".modal-body").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/transaksi/get_detail_transaksi_by_id/' + id,  function(data){
			$(".modal-body").html(data.show_detail);
		});

		$('#cetak_nota').attr('href','<?php echo base_url();?>index.php/transaksi/cetak_nota/' + id);
	}
</script>
