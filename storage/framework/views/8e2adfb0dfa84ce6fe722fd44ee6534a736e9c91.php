<?php $__env->startSection('title', 'المزيد من المعلومات'); ?>
<?php $__env->startSection('content'); ?>
    <section>
        <form method="post" action="<?php echo e(route('application.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <table class = "box">
                <th>ادخال المعلومات</th>
                <tr>

                    <td>
                        <label><h4>رقم الطلب</h4></label>
                        <input value = "<?php echo e($application_id); ?>" type="text" required name="req_num">
                    </td>
                    <td>
                        <label><h4>الحالة</h4></label>
                        <input value = "<?php echo e($state); ?>" type="text" required name="state">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><h4>تاريخ التسجيل</h4></label>
                        <input value = '<?php echo e($application_date); ?>' type="text" required name="">
                    </td>
                    <td>
                        <label><h4>رقم الجوال</h4></label>
                        <input type="text" required name="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><h4>الاسم الأول</h4></label>
                        <input type="text" required name="first_name">
                    </td>
                    <td>
                        <label><h4>اسم العائلة</h4></label>
                        <input type="text" required name="last_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><h4>اسم الأب</h4></label>
                        <input type="text"  required name="father_name">
                    </td>
                    <td>
                        <label><h4>اسم الأم</h4></label>
                        <input type="text" required name="mother_name">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><h4>علامة الثانوية</h4></label>
                        <input type="text" pattern = "[0-9]{11}" required name="nat_num">
                        <label for="">
                            المجموع العام
                            <input type="text">
                        </label>
                    </td>
                    <td>
                        <label><h4>تاريخ الميلاد</h4></label>
                        <input type="date" required name="DOB">
                    </td>
                </tr>

                <td>
                    <label><h4>صورة الهوية</h4></label>
                    <input type="file" required name="nat_id">
                </td>
                <td>
                    <label><h4>صورة عن الشهادة</h4></label>
                    <input type="file" required name="certificate_image">
                </td>
                <tr>
                    <td>
                        <label><h4>صورة شخصية</h4></label>
                        <input type="file" required name="picture">
                    </td>
                    <td>
                        <button type="submit">اضافة طلب</button>
                    </td>
                </tr>
            </table>
        </form>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\server\xampp\htdocs\cap\resources\views/register.blade.php ENDPATH**/ ?>