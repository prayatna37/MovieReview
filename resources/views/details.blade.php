@extends('layouts.extended-layouts')

@section('content')

<main class="main-content">
	<div class="container">
		<div class="page">
			<div class="breadcrumbs">
				<a href="/">Home</a>
				<a href="/browse">Browse Movies</a>
				<span>{{$movies->name}}</span>
			</div>
{{--                @foreach($pros as pro)--}}
{{--                    {{$pro->id}}--}}
{{--                --}}
{{--            @endforeach--}}

			<div class="content">
				<div class="row">
					<div class="col-md-6">
						<figure class="movie-poster"><img src="/storage/{{ $movies->poster }}" alt="#" height="500px" width="450px"></figure>
					</div>
					<div class="col-md-6">
						<h2 class="movie-title">{{$movies->name}}</h2>
						<div class="movie-summary">
							<p>{{$movies->description}}</p>
						</div>
						<ul class="movie-meta">

							<li><strong>Length:</strong> {{$movies->length}}</li>
							<li><strong>Premiere:</strong> {{$movies->releasedate}}</li>
							<li><strong>Genre:</strong> {{$movies->genre}}</li>
						</ul>

						<ul class="starring">
                            <li><strong>Cast:</strong> {{$movies->cast}}</li>
                            <li><strong>Director(s):</strong> {{$movies->director}}</li>
						</ul>
					</div>
				</div> <!-- .row -->
				<hr>
				<button class="btn btn-light" onclick="myFunction1()">User Reviews
				</button>
				<button class="btn btn-light" onclick="myFunction2()">Professional Reviews
				</button>

				<div id="review-sec">
					<div class="row">
		                <div class="col-12 m-2">

		                    @include('partials._review_replies', ['review' => $movies->review, 'movie_id' => $movies->id])
		                    <hr />
{{--                            @auth()--}}
		                    <h4>Add review</h4>
		                    <form method="post" action="{{ route('review.add') }}">
		                        @csrf
		                        <div class="form-group">
		                            <input type="text" name="review_body" class="form-control" />
		                            <input type="hidden" name="movie_id" value="{{ $movies->id }}" />
		                        </div>
		                        <div class="form-group">
		                            <input type="submit" class="btn btn-success" value="Submit" />
		                        </div>
		                    </form>
{{--                                @endauth--}}

		                </div>
		            </div>
				</div>




				<div id="criticreview-sec">
                    <div class="row">
                        <div class="col-12 m-2">

                            <div class="display-comment">
{{--                                @if($movies->imdb=="")--}}

                                    <h4 class="text-capitalize">IMDB</h4>
                                    <p style="color: white"><i>{{ $movies->imdb }}</i></p>
{{--                                    @else--}}
{{--                                    <p>No Reviews Found</p>--}}


{{--                                @endif--}}

                            </div>
                            <div class="display-comment">
                                <h4 class="text-capitalize">Flim Companion</h4>
                                <p style="color: white"><i>{{ $movies->flimcompanion }}</i></p>
                            </div>

                            <div class="display-comment">
                                <h4 class="text-capitalize">Rotten Tomatoes</h4>
                                <p style="color: white"><i>{{ $movies->rottentomatoes }}</i></p>
                            </div>
                            <div class="display-comment">
                                <h4 class="text-capitalize">IGN</h4>
                                <p style="color: white"><i>{{$movies->ign }}</i></p>
                            </div>
                            <div class="display-comment">
                                <h4 class="text-capitalize">Roger Ebert</h4>
                                <p style="color: white"><i>{{ $movies->rogerebert }}</i></p>
                            </div>
                            <div class="display-comment">
                                <h4 class="text-capitalize">Times Of India</h4>
                                <p style="color: white"><i>{{ $movies->timesofindia }}</i></p>
                            </div>



                        </div>
                    </div>
				</div>


			</div>
		</div>
	</div> <!-- .container -->
</main>
<script>
        function myFunction1() {
            document.getElementById("criticreview-sec").style.display="none";
            document.getElementById("review-sec").style.display = "block";

        }
	function myFunction2() {
		document.getElementById("review-sec").style.display="none";
	  	document.getElementById("criticreview-sec").style.display="block";
	}
</script>

@endsection
