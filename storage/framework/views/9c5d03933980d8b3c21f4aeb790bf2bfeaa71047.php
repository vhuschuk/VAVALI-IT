<?php $__env->startSection('content'); ?>

<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row"> 
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet adipisci temporibus perspiciatis architecto, tempore cupiditate rem quia quaerat porro sapiente ullam quidem, dolorum enim sint. Sequi ab minus architecto! Vel!</p>
        </div>
        <form action = "/create" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
            <table>
                <tr>
                    <td> Ваше ім'я</td>
                    <td><input type='text' name='name' /></td>
                </tr>

                <tr>
                    <td>Ваша пошта</td>
                    <td><input type="text" name='email'/></td>
                </tr>

                <tr>
                    <td colspan = '2'>
                    <input type = 'submit' value = "Підписатися"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OSPanel\domains\Laravel\APP\resources\views/pages/subscribe.blade.php ENDPATH**/ ?>