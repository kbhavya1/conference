<?php $__env->startSection('final'); ?>
    <div class="h-75" style="background-color: #0c5460;margin-top: 7.5vh;">
        <center><span>
    <form action="<?php echo e(url('/submit')); ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
        <input type="text" name="fname" value="<?php echo e($info[0]); ?>">
        <input type="email" name="femail" value="<?php echo e($info[1]); ?>">
        <input type="number" name="fcontact" value="<?php echo e($info[2]); ?>">
        <input type="number" name="famount" value="<?php echo e($info[3]); ?>">
        <input type="text" name="cat_id">
        <input type="submit" name="Make Payment">
    </form>
                </span></center>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>