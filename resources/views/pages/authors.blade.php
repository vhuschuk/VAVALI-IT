@extends ('layout')

@section('content')
@foreach($authors as $auth)
<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 about_title">
                <h1>{{$auth->title}}</h1>
            </div>
            <div class="col-md-10 offset-1 about_text">
                <p>{{$auth->text}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection