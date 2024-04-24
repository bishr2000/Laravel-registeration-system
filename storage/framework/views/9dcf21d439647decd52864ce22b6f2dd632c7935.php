<?php $__env->startSection('title', 'البيانات الشخصية'); ?>
<?php $__env->startSection('content'); ?>

    <div style = "margin-top: 30px;" id = 'home' class="row">
        <h2 id = "th2" class = "text-center">البيانات الشخصية</h2>
        <div class="col-2"></div>

        <div class="col-8">

            <form action="">
                <div class = "row register-form">
                    <div id = 'mar1' class = "col-md-6">
                        <div><input class = "form-control" placeholder = 'الاسم الأول'type="text"></div>
                        <div><input class = "form-control" placeholder = 'اسم الأب' type="text"></div>
                        <div><input class = "form-control" placeholder = 'مكان الولادة' type="text"></div>
                        <div><input class = "form-control" placeholder = 'الرقم الوطني' type="text"></div>
                        <div><input class = "form-control" placeholder = 'رقم الهاتف' type="text"></div>
                        <div><input class = "form-control" placeholder = 'الإيميل' type="email"></div>

                    </div>
                    <div id = 'mar2' class = "col-md-6">
                        <div><input class = "form-control" placeholder = 'الكنية' type="text"></div>
                        <div><input class = "form-control" placeholder = 'اسم الأم' type="text"></div>
                        <div><input class = "form-control" placeholder = 'تاريخ الولادة' type="date"></div>
                        <div><input class = "form-control" placeholder = 'الجنسية' type="text"></div>
                        <div><input class = "form-control" placeholder = 'رقم الموبايل' type="text"></div>
                        <div><label class = "fileInput">صورة عن الهوية<input style = "display:none;" type = 'file' id = 'file'></label></div>
                        <div><input class = "form-control btn btn-primary" type = "submit" value = 'التالي'></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\server\xampp\htdocs\cap\resources\views/exam.blade.php ENDPATH**/ ?>