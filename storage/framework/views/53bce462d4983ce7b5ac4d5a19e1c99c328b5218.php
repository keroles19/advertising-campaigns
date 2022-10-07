<div class="btn-group">
    <a class="btn btn-sm btn-success" href="<?php echo e(route('campaign.edit',$id)); ?>">
        <span>Edit</span>
    </a>
    <form action="<?php echo e(route('campaign.destroy',$id)); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-sm mx-1 btn-danger " id="delete_employee">
            <span>delete</span>
        </button>
    </form>
</div>
<?php /**PATH /media/kero/CS/Projects/Interviews Project/laravel-task/resources/views/campaigns/action.blade.php ENDPATH**/ ?>