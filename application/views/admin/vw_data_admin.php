				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Data Admin
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
                                            <td>Nama Admin</td>
                                            <td>Jenis Kelamin</td>
											<td>Username</td>
                                            <td>Password</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($myuser['role'] == 'Admin'): ?>
                                        <?php $i = 1; ?>
                                        <?php foreach ($myuser as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['nama']; ?></td>
                                                <td><?= $us['jk']; ?></td>                                            
                                                <td><?= $us['username']; ?></td>                                            
                                                <td><?= $us['password']; ?></td>                                            
                                                <td>
                                                    <a href="<?= base_url('superadmin/hapus/') . $us['id']; ?>" class="badge badge-danger">Hapus</a>
                                                    <a href="<?= base_url('superadmin/edit/') . $us['id']; ?>" class="badge badge-warning">Edit</a>
                                                </td>
                                            </tr>
                                            <?php $i++; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?> 
                                    </tbody>
								</table>
							</div>
						</div>

						<!-- END EXAMPLE TABLE PORTLET-->
					</div>
				</div>
			</div>

			