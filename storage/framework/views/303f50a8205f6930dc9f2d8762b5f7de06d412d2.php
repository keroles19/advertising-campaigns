<?php $__env->startSection('content'); ?>
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">

                </div>
            </div>
        </div>
    </div>
    <div>

        <a class="dt-button create-new btn btn-primary"
           href="">
            <span>
                <svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-plus me-50 font-small-4"><line x1="12" y1="5" x2="12" y2="19"></line>
                    <line
                        x1="5" y1="12" x2="19" y2="12"></line>
                </svg>Add New Company</span>
        </a>
    <?php echo e($dataTable->table()); ?>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Digital Experts\postman\ASk\resources\views/companies/index.blade.php ENDPATH**/ ?>