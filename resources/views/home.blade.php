@extends('layouts.main')

@section('cdns')
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css' integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==' crossorigin='anonymous'/>
@endsection

@section('main-content')
    <main class="py-5 text-center">
        <div class="container">
            <div class="row row-cols-2">
                @foreach ($movies as $movie )
                    <div class="col d-flex flex-column mb-3">
                        @include('includes.movies.movies-card')
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection