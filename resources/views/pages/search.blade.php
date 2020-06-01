@extends ('layout')

@section('content')
<div class="container-fluid">
    <div class="container search">
        <div class="row">
            <div class="col-md-12">
                <h1 class="search_h1">ПОШУК</h1>
            </div>
            <div class="col-md-5">
                <h2>Параметри пошуку</h2>
            </div>
            <div class="col-md-7">
                <h2>Результати пошуку</h2>
                <div class="col-md-8 offset-2">
                @if(isset($newsearchnames))
            @foreach($newsearchnames   as $newsearchname)
            
                <div class="article">
                    <span class="author">{{$newsearchname->author}}</span> </b>
                    <span class="title">{{$newsearchname->art_name}}</span>
                    <p class="atr-text">{{$newsearchname->art_description}}</p>
                    <button class="btn-pdf">PDF</button>
                    <span class="data_article">{{$newsearchname->date}}</span>
                </div>
                @endforeach
            @endif
              </div>
            </div>
        </div>
        <div class="row">
        <form action = "" method = "POST">
        {{ csrf_field() }}
        @method('post')
            <div class="col-md-5">
                <label for="validationDefault01">Пошуковий запит</label>
                <input type="text" class="form-control" name="NameArticle" id="validationDefault01" value="Назва статті" >
                <div>
                    <label for="validationDefault02">По автору</label>
                    <input type="text" class="form-control" name="NameAuthor" id="validationDefault02" value="Автор">
                </div>
               
                <p>За датою статті</p>
                <div class="row">
                    
                    <div class="col-md-5">
                        <input type="date"  id="date" name="date" placeholder="Дата" >
                        <div class="bn-sc">
                            <button class="btn-search" type="submit">Search</button>
                        </div>
                    </div>
                    
                </div>
                </form> 
            </div>
           
            
        </div>
    </div>
</div>
</div>
@endsection