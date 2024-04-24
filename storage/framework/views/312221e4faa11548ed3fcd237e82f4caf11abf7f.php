<?php $__env->startSection('title', 'البيانات الشخصية'); ?>
<?php $__env->startSection('content'); ?>

    <input type="hidden" name="_token" value="'<?php echo e(csrf_token()); ?>'">
    <form method = 'post' action = "/code-check">
        <?php echo csrf_field(); ?>
        <input placeholder = 'رمز التأكد' type = 'text' name = 'code'>
        <input type = 'submit'>
    </form>
    <div>
    <?php if(isset($err)): ?>
        <?php echo e($err); ?>

    <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\server\xampp\htdocs\cap\resources\views/confirm.blade.php ENDPATH**/ ?>