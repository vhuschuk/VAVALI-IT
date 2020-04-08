@extends ('layout')

@section('content')

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

@endsection