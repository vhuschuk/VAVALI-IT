<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Академия</title>
    
    <link href="/css/styles.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
   <?php echo $__env->yieldContent('content'); ?>
<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
</body>
</html>
<?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/layout.blade.php ENDPATH**/ ?>