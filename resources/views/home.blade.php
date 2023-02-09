@extends("layouts.app")


@section("main")
    <section id="maive-card" class="container">
        <div class="row row-cols-6 text-center">
            @foreach($movies as $movie)
            <article class="col bg-info m-3">
                <h2 class="fs-3">{{$movie->title}}</h2>
                <h6>{{$movie->original_title}}</h6>
                <div>{{$movie->nationality}}</div>
                <div>{{$movie->date}}</div>
                <div>{{$movie->vote}}</div>
            </article>
            @endforeach
        </div>
    </section>
@endsection
