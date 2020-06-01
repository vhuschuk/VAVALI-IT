@extends ('layout')

@section('content')



<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row"> 
        <p>Відредагуйте титульну сторінку вашого випуску</p>
        </div>
        @foreach($journalsred  as $i)
        <form action = "{{ action('Journalmain@save', $i->id) }}" method = "POST">
        {{ csrf_field() }}
        @method('post')
            <table>
                <tr>
                    <td> Заголовок</td>
                    <td><input type='text' name='title' value='{{$i->journal_number}}' /></td>
                </tr>
            
                <tr>
                    <td>Опис</td>
                    <td><input type="text" name='description' value='{{$i->journal_description}}'/></td>
                </tr>

                <tr>
                    <td>Фото</td>
                    <td><input type="text" name='image' value='{{$i->img}}'/> </td>
                </tr>
                <tr>
                    <td>Дата виходу</td>
                    <td><input type="text" name='date' value='{{$i->date}}' /></td>
                </tr>
                <tr>
                     <td>PDF файл</td>
                    <td><input type="text" name='pdf_all' value='файл PDF' /></td>
                </tr>
                <tr>
                    <td colspan = '2'>
                    <input type = 'hidden' name='id' value = '{{$i->id}}'/>
                    </td>
                </tr>
            </table>
          
        
                        <button type="submit" id="{{$i}}" class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i>Зберегти зміни
                    </button>
               
            @endforeach  
        </form>
    </div>
</div>

@endsection