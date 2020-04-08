@extends ('layout')

@section('content')

<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row"> 
        <p>Відредагуйте титульну сторінку вашого випуску</p>
        </div>
        <form action = "" method = "">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    
            <table>
                <tr>
                    <td> Заголовок</td>
                    <td><input type='text' name='title' /></td>
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

@endsection