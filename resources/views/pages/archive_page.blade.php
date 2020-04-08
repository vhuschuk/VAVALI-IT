@extends ('layout')

@section('content')
<div id="presentation">
    <div class="transparent float-right d-flex justify-content-around align-content-stretch">
        <div class="d-flex flex-column justify-content-center">
            <span class="name">Національний університет</span>
            <span class="name">ОСТРОЗЬКА АКАДЕМІЯ</span>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <img class="logo float-right" src="/img/logo_1149.png" width="109" height="164" alt="Logo"/>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="card mb-3 mt-3 megaimg" style="max-width: 80%; margin: auto">
           
    @foreach($data  as $i)
    
        <div class="row  card-name">
            <div class="col-md-4">
            
                <img src="{{$i->img}}" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$i->journal_number}}</h5>
                    <p class="card-text">{{$i->journal_description}}</p>
                    <p class="card-text">Дата випуску: {{$i->date}}</p>
                    <p class="card-text">Скачать PDF</p>
                </div>
            </div>
        </div>
    @endforeach
        
    </div>
    </div>
<div class="clearfix"></div>

<div class="container-fluid articles">
    <div class="container art">
        <div class="row">
            <div class="col-md-12">
                <h1>
                    НАЗВА ЖУРНАЛУ
                </h1>
                <h2>
                    Статті:
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-2">
            @foreach($articles  as $art)
                <div class="article">
                    <span class="author">{{$art->author}}</span>
                    <span class="title">{{$art->art_name}}</span>
                    <p class="atr-text">{{$art->art_description}}</p>
                    <button class="btn-pdf">PDF</button>
                    <span class="data_article">{{$art->date}}</span>
                </div>
                @endforeach
                
              </div>
             
        </div>
        <div class="row">
        {{$articles->links()}}
            </div>
        </div>
    </div>
</div>
</div>     
@endsection
