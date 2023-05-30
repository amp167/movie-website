<div class="container mt-5">
    <div class="row justify-content-evenly g-4">
        @foreach ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <img src="/images/movie.png"  class="card-img-top w-50 mx-auto p-3" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$movie->name}}</h5>
            <a href="/category/{{$movie->category->slug}}"><small class="badge bg-danger">{{$movie->category->name}}</small></a>
            <a href=""><small class="badge bg-danger">{{$movie->actor->name}}</small></a>
            <p class="text-secondary"><small>{{substr($movie->intro,0,30)}} .....</small></p>
            <a href="#" class="btn btn-sm btn-success">Watch>></a>
            </div>
        </div>
        @endforeach
    </div>
</div>