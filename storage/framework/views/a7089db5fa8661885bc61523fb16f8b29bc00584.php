<?php $__env->startSection('title', 'البيانات الشخصية'); ?>
<?php $__env->startSection('content'); ?>

<div style = "margin-top: 30px;" id = 'home' class="row">
    <h2 id = "th2">تقديم طلب</h2>
    <input type="hidden" name="_token" value="'<?php echo e(csrf_token()); ?>'">
    <div class="col-5">
        <form enctype="multipart/form-data" method = 'post' action = '/admission-store'>
            <?php echo csrf_field(); ?>
        <div class="row">

                <div id = 'mar1' class="col-6">

                    <div>
                        <input name = 'nat_num' type = 'text' placeholder = 'الرقم الوطني' class = 'form-control'>
                        <?php if($errors->has('nat_num')): ?>
                            <span style = 'font-size: 12px;' ><?php echo e($errors->first('nat_num')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div>
                        <input name = 'email' type = 'text' placeholder = 'الايميل' class = 'form-control'>
                        <?php if($errors->has('email')): ?>
                            <span style = 'font-size: 12px;' ><?php echo e($errors->first('email')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div>
                        <div id = 'cap1' style = 'margin: auto 0px; '>
                            <img style = 'margin-left: 12px;' id = 'cap' src = '<?php echo e(captcha_src()); ?>' />
                            <a href = '' id = 'regen-captcha'><img id = 'refresh' width = '40' height = '36' src = '<?php echo e(URL::asset('assets/icons/refresh-captcha.png')); ?>'/></a>
                        </div>
                    </div>
                    <div>
                        <input name = 'captcha' type = 'text' placeholder = 'الرمز' class = 'form-control'>
                        <?php if($errors->has('captcha')): ?>
                            <span style = 'font-size: 12px;' ><?php echo e($errors->first('captcha')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div><input class = 'btn btn-primary' type="submit" value = 'استمرار'></div>
                </div>


                <div id = 'mar2' class="col-6">
                    <div>
                        <input name = 'password' type = 'password' placeholder = 'كلمة السر' class = 'form-control'>
                        <?php if($errors->has('password')): ?>
                            <span style = 'font-size: 12px;' ><?php echo e($errors->first('password')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div>
                        <input name = 'password_confirm' type = 'password' placeholder = 'تأكيد كلمة السر' class = 'form-control'>
                        <?php if($errors->has('password_confirm')): ?>
                            <span style = 'font-size: 12px;' ><?php echo e($errors->first('password_confirm')); ?></span>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label class = "fileInput">
                            صورة وصل الدفع<input name = 'image' style = "display:none;" type = 'file' id = 'file'>
                        </label>
                        <?php if($errors->has('image')): ?>
                            <span style = 'font-size: 12px;' ><?php echo e($errors->first('image')); ?></span>
                        <?php endif; ?>
                    </div>
                </div>

        </div>

    </form>
    </div>
    <div class="col-4">

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src = '<?php echo e(URL::asset('assets/js/ajax.js')); ?>'></script>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\server\xampp\htdocs\cap\resources\views/login.blade.php ENDPATH**/ ?>