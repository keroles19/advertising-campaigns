<?php $__env->startSection('content'); ?>
    <!-- Basic table -->
    <section id="basic-datatable">
        <div class="row">
            <div class="col-12">
                <div class="card p-1">
                    <div class="card-header">
                        <a class="dt-button d-flex justify-content-center btn btn-primary"
                           href="<?php echo e(route('employee.create')); ?>"> Create Employee
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label><strong>Company :</strong></label>
                            <select id='user' class="form-control" style="width: 200px">
                                <option value="">--Select Company--</option>
                                <?php $__empty_1 = true; $__currentLoopData = $model; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                    <table class="table table-bordered" id="category_table">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>user</th>
                            <th>email</th>
                            <th>Company</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--/ Basic table -->

<?php $__env->stopSection(); ?>


<?php $__env->startPush('scripts'); ?>

    <script type="text/javascript">
        $(function () {

            var table = $('#category_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?php echo e(route('employees')); ?>",
                    data: function (d) {
                        d.user = $('#user').val(),
                        d.search = $('input[type="search"]').val()
                    }
                },
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'company.name', name: 'company.name'},
                    {data: 'action', name: 'action',searchable: false,orderable : false, exportable:false},
                ]
            });

            $('#user').change(function(){
                table.draw();
            });

        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /media/kero/CS/Projects/Interviews Project/Task/resources/views/employees/index.blade.php ENDPATH**/ ?>