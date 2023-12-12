				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Data Universitas
										</h3>
									</div>
								</div>
								<div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="<?= base_url() ?>Universitas/tambah" class="btn btn-success m-btn m-btn--cuntom m-btn--icon m-btn--air">
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
											<td>Nama Universitas</td>
											<td>Alamat</td>
											<td>Akreditasi</td>
											<td>Email</td>
											<td>Aksi</td>
										</tr>
									</thead>
									<tbody>
										<?php $i = 1; ?>
										<?php foreach ($universitas as $un) : ?>
											<tr>
												<td><?= $i; ?>.</td>
												<td><?= $un['nama']; ?></td>
												<td><?= $un['alamat']; ?></td>
												<td><?= $un['akreditasi']; ?></td>
												<td><?= $un['email']; ?></td>
												<td>
													<a href="<?= base_url('Universitas/hapus/') . $un['id']; ?>" class="badge badge-danger">Hapus</a>
													<a href="<?= base_url('Universitas/edit/') . $un['id']; ?>" class="badge badge-warning">Edit</a>
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