<?php $__env->startSection('content'); ?>

    <div class="content-body">
        <!-- Input Mask start -->
        <section id="input-mask-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?php echo app('translator')->get('Create Campaign'); ?></h4>
                        </div>
                        <div class="card-body">
                            <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="<?php echo e(route('campaign.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('name'); ?></label>
                                        <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>"
                                               placeholder="Enter Name"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('from'); ?></label>
                                        <input type="date" name="from" class="form-control" value="<?php echo e(old('from')); ?>"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('to'); ?></label>
                                        <input type="date" name="to" class="form-control" value="<?php echo e(old('to')); ?>"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('total'); ?></label>
                                        <input type="text" name="total" class="form-control" value="<?php echo e(old('total')); ?>"/>
                                    </div>
                                      <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('daily_budget'); ?></label>
                                        <input type="text" name="daily_budget" value="<?php echo e(old('daily_budget')); ?>" class="form-control"/>
                                    </div>

                                    <div class="col-xl-12 col-md-12 col-sm-12 mb-2">
                                        <div class="form-group">
                                            <label for="document">Images</label>
                                            <div class="needsclick dropzone" id="document-dropzone">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 d-grid gap-6" style="margin-top: 10px;">
                                        <button class="btn btn-icon btn-primary btn-block" type="submit">
                                            <?php echo app('translator')->get('Submit'); ?>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Input Mask End -->

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js_section'); ?>
    <?php echo $__env->make('partials.dropzone', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/kero/CS/Projects/Interviews Project/laravel-task/resources/views/campaigns/create.blade.php ENDPATH**/ ?>