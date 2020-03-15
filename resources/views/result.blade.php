
@extends('layouts.app')

@section('content')


    <main class="main-content">
        <div class="container">
            <div class="page">
                <div class="breadcrumbs">
                    <a href="/">Home</a>
                    <a href="/browse">Browse Movies</a>
                    <span>Search Results</span>
                </div>
                <div class="content">
                    <div class="search-section">
                        <h3>Search Movies</h3>
                        <div class="search-form">
                            <form action="/search" method="get">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="search" name="search" class="form-control search" placeholder="Enter Movie Name">

                                    </div>
                                </div>
                                <span class="form-group-btn">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </span>


                            </form>

                        </div>

                    </div>
                    <div class="row browse movies">

                            @if(count($movies)>0)

                                    @foreach($movies as $movie)
                                        <div class="col-md-4 pl-5 pt-4">
                                            <a href="/details/{{$movie->id}}" >
                                                <img src="/storage/{{ $movie->poster }}" height="375px" width="95%" class="rounded">
                                            </a>
                                            <a href="/details/{{$movie->id}}" style="text-decoration: none; color: white;" >
                                                <h3 class="pt-3" >{{$movie->name}}</h3>
                                            </a>


                                        </div>
                                    @endforeach


                            @endif


                        <div class="col-md-12">
                            {{$movies->links()}}
                        </div>
                    </div>

                </div>

            </div>
        </div> <!-- .container -->
    </main>


@endsection
