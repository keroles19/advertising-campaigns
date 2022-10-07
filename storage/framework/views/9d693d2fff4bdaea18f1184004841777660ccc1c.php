

</div>
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>


<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25" href="https://github.com/keroles19" target="_blank">Kero</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Kero<i data-feather="heart"></i></span></p>
</footer>
<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<!-- END: Footer-->

<!-- BEGIN: Vendor JS-->
<script src="<?php echo e(asset('app-assets/vendors/js/vendors.min.js')); ?>"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?php echo e(asset('app-assets/vendors/js/extensions/toastr.min.js')); ?>"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?php echo e(asset('app-assets/js/core/app-menu.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/js/core/app.js')); ?>"></script>

<!-- END: Theme JS-->
<script src="<?php echo e(asset('app-assets/vendors/js/extensions/sweetalert2.all.min.js')); ?>"></script>

<script src="<?php echo e(asset('app-assets/vendors/js/forms/select/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/forms/validation/jquery.validate.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/js/scripts/forms/form-validation.js')); ?>"></script>


<script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/responsive.bootstrap5.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')); ?>"></script>

<script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/vfs_fonts.js')); ?>"></script>

<script src="<?php echo e(asset('app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')); ?>"></script>

<script src="<?php echo e(asset('app-assets/js/scripts/tables/table-datatables-basic.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/filter.dropdown.min.js')); ?>"></script>



<script>
    $(document).ready(function() {
        $('#example').DataTable({
            filterDropDown: {
                columns: [
                    idx: 3
    ]
    }
    } );
    } );
</script>

<?php echo $__env->yieldPushContent('scripts'); ?>

<?php echo $__env->make('partials.swal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
<?php /**PATH /media/kero/CS/Projects/Interviews Project/Task/resources/views/layouts/includes/footer.blade.php ENDPATH**/ ?>