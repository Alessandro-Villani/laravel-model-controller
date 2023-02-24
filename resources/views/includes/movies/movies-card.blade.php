
@if (isset($movie))
<div class="card p-3 flex-grow-1 text-dark">
    <h4>{{$movie->title}}</h4>
    <h6>{{$movie->original_title}}</h6>
</div>
@endif