<?php $__env->startSection('content'); ?>
<div class="container-fluid arhiv">
    <div class="container">
        <h1>
            Архіви
        </h1>
        <div class="flex-container">
      
            <div class="row three_bloks">
            <?php $__currentLoopData = $archive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="output">
                        <div class="cover">
                        <img src="<?php echo e($arch->img); ?>" class="card-img" alt="...">
                        </div>
                        <a href='/archive_page'><?php echo e($arch->journal_number); ?></a>
                        <p><?php echo e($arch->date); ?></p>
                    </div>
                </div> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
       
             
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/pages/records.blade.php ENDPATH**/ ?>