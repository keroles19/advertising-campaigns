<div class="btn-group">
    <a class="btn btn-sm btn-success" href="<?php echo e(route('employee.edit',$id)); ?>">
        <span>Edit</span>
    </a>
    <form action="<?php echo e(route('employee.destroy',$id)); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-sm mx-1 btn-danger " id="delete_employee">
            <span>delete</span>
        </button>
    </form>
</div>
<?php /**PATH /media/kero/CS/Projects/Interviews Project/Task/resources/views/employees/action.blade.php ENDPATH**/ ?>