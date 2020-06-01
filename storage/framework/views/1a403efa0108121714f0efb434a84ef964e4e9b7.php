<?php $__env->startSection('content'); ?>



<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row"> 
        <p>Відредагуйте титульну сторінку вашого випуску</p>
        </div>
        <?php $__currentLoopData = $journalsred; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action = "<?php echo e(action('Journalmain@save', $i->id)); ?>" method = "POST">
        <?php echo e(csrf_field()); ?>

        <?php echo method_field('post'); ?>
            <table>
                <tr>
                    <td> Заголовок</td>
                    <td><input type='text' name='title' value='<?php echo e($i->journal_number); ?>' /></td>
                </tr>
            
                <tr>
                    <td>Опис</td>
                    <td><input type="text" name='description' value='<?php echo e($i->journal_description); ?>'/></td>
                </tr>

                <tr>
                    <td>Фото</td>
                    <td><input type="text" name='image' value='<?php echo e($i->img); ?>'/> </td>
                </tr>
                <tr>
                    <td>Дата виходу</td>
                    <td><input type="text" name='date' value='<?php echo e($i->date); ?>' /></td>
                </tr>
                <tr>
                     <td>PDF файл</td>
                    <td><input type="text" name='pdf_all' value='файл PDF' /></td>
                </tr>
                <tr>
                    <td colspan = '2'>
                    <input type = 'hidden' name='id' value = '<?php echo e($i->id); ?>'/>
                    </td>
                </tr>
            </table>
          
        
                        <button type="submit" id="<?php echo e($i); ?>" class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i>Зберегти зміни
                    </button>
               
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/pages/journals/edit.blade.php ENDPATH**/ ?>