@extends('layouts.app')

@section('content')


    <main class="main-content">
        <div class="container">
            <div class="page">
                <div class="align-content-center">
                    <h1 class="align-content-center">Movie Review</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="slider">
                            <ul class="slides">
                                @if(count($movie)>0)
                                    @foreach($movie as $movies)
                                        <li>
                                            <div class="row p-3 rounded" style="background-color: #777777;">
                                                <div class="col-md-6">
                                                    <a href="/details/{{$movies->id}}">
                                                    <figure class="movie-poster"><img src="/storage/{{ $movies->poster }}" alt="#" height="550px" width="450px"></figure>
                                                    </a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="/details/{{$movies->id}}" style="text-decoration: none; color: white; ">
                                                        <h2 class="movie-title">{{$movies->name}}</h2>
                                                    </a>
                                                    <ul class="movie-meta" style="font-size: 17px;">

                                                        <li><strong>Length:</strong> {{$movies->length}}</li>
                                                        <li><strong>Premiere:</strong> {{$movies->releasedate}}</li>
                                                        <li><strong>Genre:</strong> {{$movies->genre}}</li>
                                                        <li><strong>Description:</strong> {{$movies->description}}</li>
                                                    </ul>
                                                </div>
                                            </div> <!-- .row -->


                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div> <!-- .row -->
                <div class="row">
                    <div class="latest-movie">
                        <h1>Latest Movies</h1>
                        @if(count($movie)>0)
                            <div>
                                <?php $count = 0; ?>
                                @foreach($movie as $movies)
                                    <?php if($count == 6) break; ?>
                                    <div class="col-md-4 ">
                                        <a href="/details/{{$movies->id}}">
                                            <img src="/storage/{{ $movies->poster }}" class="rounded">
                                        </a>
                                    </div>

                                    <?php $count++; ?>

                                @endforeach
                            </div>
                        @endif
                    </div>
                </div> <!-- .row -->

            </div>
        </div> <!-- .container -->
    </main>


@endsection


