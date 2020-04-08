<?php $__env->startSection('content'); ?>        
              
<?php $__currentLoopData = $about; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 about_title">
                <h1><?php echo e($ab->title); ?></h1>
            </div>
            <div class="col-md-10 offset-1 about_text">
                <p><?php echo e($ab->text); ?></p>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/pages/about.blade.php ENDPATH**/ ?>