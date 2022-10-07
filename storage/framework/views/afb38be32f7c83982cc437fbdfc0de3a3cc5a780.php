<?php $__env->startSection('content'); ?>

    <div class="content-body">
        <!-- Input Mask start -->
        <section id="input-mask-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?php echo app('translator')->get('Edit Company'); ?></h4>
                        </div>
                        <div class="card-body">
                            <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="<?php echo e(route('company.update',$model->id)); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('put'); ?>
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('Company_name'); ?></label>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Enter Name" value="<?php echo e($model->name); ?>"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('address'); ?></label>
                                        <input type="text" name="address" class="form-control"
                                               placeholder="Enter Address" value="<?php echo e($model->address); ?>"/>
                                    </div>

                                    <div class="col-xl-12 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('Logo'); ?></label>
                                        <img id="blah" alt="your image" width="100" height="100" src="<?php echo e(asset('/storage/company/'.$model->logo)); ?>"/>
                                        <input type="file" class="form-control" name="file_upload" type="file" id="customFile1"
                                               onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
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


<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/kero/CS/Projects/Interviews Project/Task/resources/views/companies/edit.blade.php ENDPATH**/ ?>