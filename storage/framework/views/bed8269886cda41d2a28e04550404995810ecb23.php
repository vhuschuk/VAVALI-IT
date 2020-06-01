<?php $__env->startSection('content'); ?>
<div class="container-fluid arhiv">
    <div class="container">
        <h1>
            Архіви
        </h1>
        <div class="flex-container">
        <?php $__currentLoopData = $archive; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row three_bloks">
            
            
            <form action = "/archindex" method = "POST">
        <?php echo e(csrf_field()); ?>

        <?php echo method_field('post'); ?>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="output">
                        <div class="cover">
                        <img src="<?php echo e($arch->img); ?>" class="card-img" alt="...">
                        </div>
                        <p><?php echo e($arch->journal_number); ?></p>
                        <input type = 'hidden' name='id' value = '<?php echo e($arch->id); ?>'/>
                        <p><?php echo e($arch->date); ?></p>
                    </div>
                </div> 
                <button type="submit" id="<?php echo e($arch->id); ?>" value = '<?php echo e($arch->id); ?>' class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i>Відкрити Архів
                    </button>
                    </form>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
       
             
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/pages/records.blade.php ENDPATH**/ ?>