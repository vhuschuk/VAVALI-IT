@extends ('layout')

@section('content')        
              
@foreach($about as $ab)
<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 about_title">
                <h1>{{$ab->title}}</h1>
            </div>
            <div class="col-md-10 offset-1 about_text">
                <p>{{$ab->text}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection