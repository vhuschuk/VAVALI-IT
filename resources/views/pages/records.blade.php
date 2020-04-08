@extends ('layout')

@section('content')
<div class="container-fluid arhiv">
    <div class="container">
        <h1>
            Архіви
        </h1>
        <div class="flex-container">
      
            <div class="row three_bloks">
            @foreach($archive  as $arch)
                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="output">
                        <div class="cover">
                        <img src="{{$arch->img}}" class="card-img" alt="...">
                        </div>
                        <a href='/archive_page'>{{$arch->journal_number}}</a>
                        <p>{{$arch->date}}</p>
                    </div>
                </div> 
                @endforeach
            </div>
       
             
        </div>
    </div>
</div>
@endsection