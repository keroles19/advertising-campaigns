<?php $__env->startSection('content'); ?>
    <!-- Basic table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card p-1">
                    <div class="card-header">
                        <a class="dt-button d-flex justify-content-center btn btn-primary"
                           href="<?php echo e(route('campaign.create')); ?>"> Crate Campaign
                        </a>
                    </div>
                    <?php echo e($dataTable->table()); ?>

                </div>
            </div>
        </div>
    </section>
    <!--/ Basic table -->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo e($dataTable->scripts()); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/kero/CS/Projects/Interviews Project/laravel-task/resources/views/campaigns/index.blade.php ENDPATH**/ ?>