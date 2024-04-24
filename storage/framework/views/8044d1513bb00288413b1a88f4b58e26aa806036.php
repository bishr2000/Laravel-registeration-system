<?php $__env->startSection('title', 'البيانات الشخصية'); ?>
<?php $__env->startSection('content'); ?>

<div style = "margin-top: 30px;" id = 'home' class="row">
    <h2 id = "th2">البيانات الشخصية</h2>
    <input type="hidden" name="_token" value="'<?php echo e(csrf_token()); ?>'">
    <div class="col-5">
        <form method = 'post' action = '/store-admission'>
            <?php echo csrf_field(); ?>
        <div class="row">

                <div id = 'mar1' class="col-6">

                    <div><input name = 'nat_num' type = 'text' placeholder = 'الرقم الوطني' class = 'form-control'></div>
                    <div><input name = 'email' type = 'text' placeholder = 'الايميل' class = 'form-control'></div>

                </div>
                <div id = 'mar2' class="col-6">
                    <div><input name = 'password' type = 'password' placeholder = 'كلمة السر' class = 'form-control'></div>
                    <div><input name = 'password_confirm' type = 'password' placeholder = 'تأكيد كلمة السر' class = 'form-control'></div>
                </div>

        </div>
        <div class = 'row'>

            <div id = 'mar2' class="col-6">
                <div>
                    <span style = 'margin: auto 0px; '>
                        <img style = 'padding: 20px;' id = 'cap' src = '<?php echo e(captcha_src()); ?>' />
                    <a href = '' id = 'regen-captcha'><img id = 'refresh' width = '40' height = '36' src = '<?php echo e(URL::asset('assets/icons/refresh-captcha.png')); ?>'/></a>
                    </span>
                    <input name = 'captcha' type = 'text' placeholder = 'الرمز' class = 'form-control'>
            </div>
                <div><input class = 'btn btn-primary' type="submit" value = 'استمرار'></div>

            </div>
        </div>

    </form>
    </div>
    <div class="col-4">
        <?php if(count($errors) > 0): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src = '<?php echo e(URL::asset('assets/js/ajax.js')); ?>'></script>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\server\xampp\htdocs\cap\resources\views/payment.blade.php ENDPATH**/ ?>