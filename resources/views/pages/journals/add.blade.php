@extends ('layout')

@section('content')



<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row"> 
        <p>Відредагуйте титульну сторінку вашого випуску</p>
        </div>
       
        <form action = "/addjournal" method = "POST">
        {{ csrf_field() }}
        @method('post')
            <table>
                <tr>
                    <td> Заголовок</td>
                    <td><input type='text' name='title' value='Назва випуску' /></td>
                </tr>
            
                <tr>
                    <td>Опис</td>
                    <td><input type="text" name='description' value='Короткий опис'/></td>
                </tr>

                <tr>
                    <td>Фото</td>
                    <td><input type="text" name='image' /> </td>
                </tr>
                <tr>
                    <td>Дата виходу</td>
                    <td><input type="text" name='date'  /></td>
                </tr>
                <tr>
                     <td>PDF файл</td>
                    <td><input type="text" name='pdf_all' value='файл PDF' /></td>
                </tr>
            </table>
          
        
                        <button type="submit" id="" class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i>Додати новий пост
                    </button>
               
         
        </form>
    </div>
</div>

@endsection