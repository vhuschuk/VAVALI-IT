<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container">
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <ul><?php echo e($article->id); ?>

                     <li><?php echo e($article->art_name); ?></li>
                     <li><?php echo e($article->author); ?></li>
                     <li><?php echo e($article->pdf_article); ?></li>
                </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</body>
</html><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/welcome.blade.php ENDPATH**/ ?>