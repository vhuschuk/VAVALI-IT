@extends ('layout')

@section('content')
<div class="container-fluid arhiv">
    <div class="container">
        <h1>
            Архіви
        </h1>
        <div class="flex-container">
        @foreach($archive  as $arch)
            <div class="row three_bloks">
            
            
            <form action = "/archindex" method = "POST">
        {{ csrf_field() }}
        @method('post')
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="output">
                        <div class="cover">
                        <img src="{{$arch->img}}" class="card-img" alt="...">
                        </div>
                        <p>{{$arch->journal_number}}</p>
                        <input type = 'hidden' name='id' value = '{{$arch->id}}'/>
                        <p>{{$arch->date}}</p>
                    </div>
                </div> 
                <button type="submit" id="{{$arch->id}}" value = '{{$arch->id}}' class="btn btn-danger">
                        <i class="fa fa-btn fa-trash"></i>Відкрити Архів
                    </button>
                    </form>
                    </div>
                @endforeach
                
                
       
             
        </div>
    </div>
</div>
@endsection