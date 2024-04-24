<!DOCTYPE html>

<html lang = "ar">

    <head>
        <title>
            <?php echo $__env->yieldContent('title'); ?>
        </title>
        <meta charset="utf-8">
        <link href = '<?php echo e(URL::asset('assets/css/app.css')); ?>' rel = 'stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body lang = "ar" dir = "rtl">
        <?php echo $__env->make('inc.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

        <script src = "<?php echo e(URL::asset('assets/js/capScript.js')); ?>"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>
<?php /**PATH C:\server\xampp\htdocs\cap\resources\views/layouts/app.blade.php ENDPATH**/ ?>