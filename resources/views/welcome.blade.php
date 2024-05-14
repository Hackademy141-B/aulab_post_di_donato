<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->

    </head>
    <body class="antialiased">
      <x-layout>

      <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                The Aulab Post
            </h1>
        </div>
      </div>
      <div class="row justify-content-around">
    @foreach($articles as $article)
    <div class="col-12 col-md-3">
      <div class="card">
        <img
          src="{{Storage::url($article->image)}}"
          class="card-img-top"
          alt="..."
        >
        <div cLass="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <p class="card-text">{{$article->subtitle}}</p>
          <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
          Redatto il {{$article->created_at->format ('d/m/Y')}} da {{$article->user->name}}
          <a
            href="{{route('article.show', compact('article'))}}"
            class="btn btn-info text-white"
          >Leggi</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
      </x-layout>
    </body>
</html>
