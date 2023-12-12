				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Data Mahasiswa
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="<?= base_url() ?>Mahasiswa/tambah" class="btn btn-success m-btn m-btn--custom m-btn--icon m-btn--air">
												<span>
													<i class="la la-plus"></i>
													<span>Tambah Data</span>
												</span>
											</a>
										</li>
										<li class="m-portlet__nav-item"></li>
										<li class="m-portlet__nav-item">											
										</li>
									</ul>
								</div>
							</div>
							<div class="m-portlet__body">
							 	<?= $this->session->flashdata('message') ?>
								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
								<thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Nama</td>
											<td>Universitas</td>
                                            <td>Alamat</td>
											<td>Tahun Akademik</td>
                                            <td>Program Studi</td>
                                            <td>Nama Bank</td>
                                            <td>Nomor Rekening</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
										<?php $univ ?>
                                        <?php foreach ($mahasiswa as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['nama_mhs']; ?></td>
												<td><?= $us['universitas']; ?></td>										
                                                <td><?= $us['kecamatan']; ?></td>										
												<td><?= $us['tahun_akademik']; ?></td>
                                                <td><?= $us['prodi']; ?></td>
                                                <td><?= $us['bank']; ?></td>
												<td><?= $us['no_rek']; ?></td>										
                                                <td>
                                                    <a href="<?= base_url('Mahasiswa/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                                    <a href="<?= base_url('Mahasiswa/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
													<!-- <a href="<?= base_url('Mahasiswa/detail/') . $us['id']; ?>" class="badge badge-primary">Detail</a> -->
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
								</table>
							</div>
						</div>

						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
			</div>

			