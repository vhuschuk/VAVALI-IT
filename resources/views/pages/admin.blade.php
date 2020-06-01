@extends ('layout')

@section('content')

<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row"> 
        <p>Привіт Адмін! Ти знаєш що робити)</p>
        </div>
        <form action = "/login" method = "post">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <input type = "hidden" name = "flag" value = "false">
            <table>
                <tr>
                    <td> Ваше ім'я</td>
                    <td><input type='text' name='name' /></td>
                </tr>

                <tr>
                    <td>Ваш пароль</td>
                    <td><input type="password" name='password'/></td>
                </tr>

                <tr>
                    <td colspan = '2'>
                    <input type = 'submit' value = "Логін"/>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection