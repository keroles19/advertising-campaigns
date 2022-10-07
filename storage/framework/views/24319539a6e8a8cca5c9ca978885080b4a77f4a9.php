<?php $__env->startSection('content'); ?>

    <div class="content-body">
        <!-- Input Mask start -->
        <section id="input-mask-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?php echo app('translator')->get('Create Employee'); ?></h4>
                        </div>
                        <div class="card-body">
                            <?php echo $__env->make('partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <form action="<?php echo e(route('employee.store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('name'); ?></label>
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Enter Name"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('email'); ?></label>
                                        <input type="email" name="email" class="form-control"
                                               placeholder="Enter email"/>
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('password'); ?></label>
                                        <input type="password" name="password" class="form-control"
                                               placeholder="Enter password"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('password confirmation'); ?></label>
                                        <input type="password" name="password_confirmation" class="form-control"
                                               placeholder="Confirm password"/>
                                    </div>

                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                        <label class="form-label" ><?php echo app('translator')->get('Logo'); ?></label>
                                        <img id="blah" alt="your image" width="100" height="100" />
                                        <input type="file" class="form-control" name="file_upload" type="file" id="customFile1"
                                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                                    </div>


                                    <div class="col-xl-6 col-md-6 col-sm-12 mb-2">
                                    <label class="form-label" for="select-country1">Country</label>
                                        <select name="company_id" class="form-select" id="select-country1" required>
                                            <option value="">Select Country</option>
                                           <?php $__empty_1 = true; $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                               <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <?php endif; ?>
                                        </select>
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


<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/kero/CS/Projects/Interviews Project/Task/resources/views/employees/create.blade.php ENDPATH**/ ?>