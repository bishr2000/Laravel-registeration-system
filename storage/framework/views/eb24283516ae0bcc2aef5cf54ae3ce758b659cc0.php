<?php $__env->startSection('title', 'البيانات الشخصية'); ?>
<?php $__env->startSection('content'); ?>

    <div style = "margin-top: 30px;" id = 'home' class="row">
        <h2 id = "th2" class = "text-center">البيانات الشخصية</h2>
        <div class="col-2"></div>

        <div class="col-8">

            <form enctype="multipart/form-data" method = 'post' action="/personal-info-store">
                <?php echo csrf_field(); ?>
                <div class = "row register-form">
                    <div id = 'mar1' class = "col-md-6">
                        <div><input class = "form-control" name = "first_name" placeholder = 'الاسم الأول'type="text"></div>
                        <div><input class = "form-control" name = "father_name" placeholder = 'اسم الأب' type="text"></div>
                        <div><input class = "form-control" name = 'birth_place' placeholder = 'مكان الولادة' type="text"></div>
                        <div><input class = "form-control" name = 'land_line' placeholder = 'رقم الهاتف' type="text"></div>
                        <div><input class = "form-control" name = 'mobile_number' placeholder = 'رقم الموبايل' type="text"></div>



                    </div>
                    <div id = 'mar2' class = "col-md-6">
                        <div><input class = "form-control" name = "last_name" placeholder = 'الكنية' type="text"></div>
                        <div><input class = "form-control" name = "mother_name" placeholder = 'اسم الأم' type="text"></div>
                        <div><input class = "form-control" name = 'birth_date' placeholder = 'تاريخ الولادة' type="date"></div>
                        <div><input class = "form-control" name = 'nationality' placeholder = 'الجنسية' type="text"></div>
                        <div><label class = "fileInput">صورة عن الهوية<input name = 'image' style = "display:none;" type = 'file' id = 'file'></label></div>
                         <div><input class = "form-control btn btn-primary" type = "submit" value = 'التالي'></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\server\xampp\htdocs\cap\resources\views/personal_info.blade.php ENDPATH**/ ?>