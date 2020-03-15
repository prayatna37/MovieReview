@extends('layouts.app')

@section('content')

{{--    @if (Session::has('success') || Session::has('error'))--}}

{{--        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">--}}
{{--            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                <span aria-hidden="true">×</span>--}}
{{--            </button>--}}
{{--            <i class="fa fa-check mx-2"></i>--}}
{{--            {{ Session::get('success') }}--}}
{{--            {{ Session::get('error') }}!--}}
{{--        </div>--}}
{{--    @endif--}}


<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="breadcrumbs">
				<a href="/">Home</a>
				<span>Browse Movies</span>
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

                                <p>{{ Session::get('error') }}</p>


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
