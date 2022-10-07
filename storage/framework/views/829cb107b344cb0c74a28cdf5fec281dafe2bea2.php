<?php $__env->startComponent('mail::message'); ?>
    # Hello <?php echo e($employee->name); ?>,
    <br>

    <p>Welcome For My <?php echo e(config('app.name')); ?> </p>

    Thanks,<br>
    <?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /media/kero/CS/Projects/Interviews Project/Task/resources/views/emails/employee-message.blade.php ENDPATH**/ ?>