				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Data Nilai Mahasiswa
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="<?= base_url() ?>Nilai/tambah" class="btn btn-success m-btn m-btn--cnitom m-btn--icon m-btn--air">
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
                                            <td>Nama Mahasiswa</td>
                                            <td>Indeks Presentase Komulatif (IPK) of 4.0</td>
											<td>Semester</td>
											<td>Status</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($nilai as $ni) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $ni['val_nama']; ?></td>
												<td><?= $ni['ipk']; ?></td>
												<td><?= $ni['semester']; ?></td>
												<?php if($ni['ipk'] >= 2.75 && $ni['ipk'] <= 4.00): ?>
												<td class="text-success"><?= $ni['status'] = "Lanjut"; ?></td>
												<?php else : ?>
												<td class="text-danger"><?= $ni['status']= "Tertunda";?></td>
												<?php endif; ?>                                             
                                                <td>
                                                    <a href="<?= base_url('nilai/hapus/') . $ni['id']; ?>" class="badge badge-danger">Hapus</a>
                                                    <a href="<?= base_url('nilai/edit/') . $ni['id']; ?>" class="badge badge-warning">Edit</a>
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

			