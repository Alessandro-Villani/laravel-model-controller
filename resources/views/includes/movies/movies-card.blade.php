@php
    $languages = explode('/' , $movie->nationality);
    $vote = ceil($movie->vote /2);
    $year = explode('-' , $movie->date)[0];
@endphp


@if (isset($movie))
<div class="movie-card card p-3 py-5 flex-grow-1 text-white">
    <h2 class="mb-2">{{$movie->title}}</h3>
    <h6 class="mb-3">{{$movie->original_title}}</h6>
    <p>{{ $year }}</p>
    <div class="languages d-flex justify-content-center gap-1 mb-3">
        @foreach ($languages as $language)
            <img class="flag" src="{{ Vite::asset("resources/img/$language.png")}}" alt="$language">
        @endforeach
    </div>
    <div class="vote mb-3">
        @for ($i = 0; $i < 5 ; $i++)
            <i class="{{ $i < $vote ? 'fa-solid' : 'fa-regular' }} fa-star"></i>
        @endfor
    </div>
    <img class="movies-pic" src="{{ $movie->poster }}" alt="$movie->title">
</div>
@endif