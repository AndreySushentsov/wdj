<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Andmin Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="ckeditor/plugins/codesnippet/lib/highlight/styles/default.css" rel="stylesheet"/>
        <script src="ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js"/></script>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">

    </head>
    <body>
      <script>hljs.initHighlightingOnLoad();</script>
      <div id="app" class="admin-page">
        <header class="header">
          <a href="/" class="logo">Web-Development-Journal</a>

          <a href="#" class="auth">Вход</a>
          <burger-component></burger-component>
        </header>
        <main>
          <h1>Admin Page</h1>
          <section>
            <h2>Создание Постов</h2>
            {!! Form::open(['url' => '/admin', 'method' => 'GET', 'enctype' => 'multipart/form-data','class' => 'form']) !!}
                <div class="form-gorup">
                    {{Form::label('title','Title')}}
                    {{Form::text('title', '', ['placeholder' => 'Tilte'])}}
                </div>
                <div class="form-gorup">
                    {{Form::label('content','Content')}}
                    {{Form::textarea('content', '', ['id' => 'article-ckeditor', 'placeholder' => 'Content'])}}
                </div>
                <div class="form-gorup">
                    {{Form::label('categories','Categroies')}}
                    {{Form::select('categories', ['1' => 'Angular','2' => 'React','3' => 'Vue', '4'=>'Post'])}}
                </div>
                <div class="form-gorup">
                    {{Form::label('level','Level')}}
                    {{Form::select('level', ['1' => 'begginer','2' => 'intermediate','3' => 'advanced'])}}
                </div>
                <div class="form-gorup">
                    {{Form::file('cover_image')}}
                </div>
                {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
            {!! Form::close() !!}
          </section>
        </main>
        <footer>

        </footer>
      </div>
      <script src="{{asset('js/app.js')}}"></script>
      <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
      <script>
          CKEDITOR.replace( 'article-ckeditor' );
      </script>

    </body>
</html>
