</div>
</div>
</body>
<!-- begin::Footer -->
<footer class="m-grid__item		m-footer ">
	<div class="m-container m-container--fluid m-container--full-height m-page__container">
		<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
			<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
				<span class="m-footer__copyright">
					2023 &copy; I LOVE ROHIL by
					<a class="m-link">Zulfahera</a>
				</span>
			</div>
		</div>
	</div>
</footer>

<!-- end::Footer -->
</div>

<!-- end:: Page -->

<!-- Untuk Upload File -->

<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
	<i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->


<!--begin::Base Scripts -->
<script src="<?= base_url('assets/') ?>vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?= base_url('assets/') ?>demo/default/base/scripts.bundle.js" type="text/javascript"></script>

<!--end::Base Scripts -->

<!--begin::Page Vendors Scripts -->
<script src="<?= base_url('assets/') ?>vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Vendors Scripts -->

<!--begin::Page Resources -->
<script src="<?= base_url('assets/') ?>demo/default/custom/crud/datatables/basic/headers.js" type="text/javascript"></script>

<!--begin::Page Resources -->
<script src="<?= base_url('assets/') ?>demo/default/custom/components/base/sweetalert2.js" type="text/javascript"></script>
<script>
	$('.custom-file-input').on('change', function() {
		let fileName = $(this).val().split('\\').pop();

		$(this).next('.custom-file-label').addClass("selected").html(fileName);

	})
</script>

<!--begin::Page Vendors Scripts -->
<script src="<?= base_url('assets/') ?>vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

<!--end::Page Resources -->
</body>

<!-- end::Body -->

</html>