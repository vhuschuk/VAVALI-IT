<?php $__env->startSection('content'); ?>

<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row"> 
        <p>Відредагуйте титульну сторінку вашого випуску</p>
        </div>
        <form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  
            <table>
                <tr>
                    <td> Заголовок</td>
                    <td><input type='text' name='title'  /></td>
                </tr>

                <tr>
                    <td>Опис</td>
                    <td><input type="text" name='description'/></td>
                </tr>

                <tr>
                    <td>Фото</td>
                    <td><input type="text" name='image'/></td>
                </tr>
                <tr>
                    <td>Дата виходу</td>
                    <td><input type="text" name='date'/></td>
                </tr>
                <tr>
                    <td colspan = '2'>
                    <input type = 'submit' value = "Змінити"/>
                    </td>
                </tr>
            </table>
            
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/journals/edit.blade.php ENDPATH**/ ?>