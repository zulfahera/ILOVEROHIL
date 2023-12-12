				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<div class="m-content">
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											Data Informasi
										</h3>
									</div>
								</div>
								<!-- <div class="m-portlet__head-tools">
									<ul class="m-portlet__nav">
										<li class="m-portlet__nav-item">
											<a href="<?= base_url() ?>Informasi/tambah" class="btn btn-success m-btn m-btn--cnitom m-btn--icon m-btn--air">
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
								</div> -->
							</div>
							<div class="m-portlet__body">
							 	<?= $this->session->flashdata('message') ?>
								<!--begin: Datatable -->
								<table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
								<thead>
                                        <tr>
                                            <td>No</td>
                                            <td>Universitas</td>
                                            <td>Waktu</td>
											<td>Kuota</td>
                                            <td>Syarat</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($myuser as $us) : ?>
                                            <tr>
                                                <td><?= $i; ?>.</td>
                                                <td><?= $us['universitas']; ?></td>
                                                <td><?= $us['waktu']; ?></td>                                            
                                                <td><?= $us['kuota']; ?></td>                                            
                                                <td><?= $us['syarat']; ?></td>                                            
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

			