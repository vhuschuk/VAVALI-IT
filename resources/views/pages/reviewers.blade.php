@extends ('layout')

@section('content')
@foreach($reviewers as $review)
<div class="container-fluid col-md-12 about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 about_title">
                <h1>{{$review->title}}</h1>
            </div>
            <div class="col-md-10 offset-1 about_text">
                <p>{{$review->text}}</p>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection