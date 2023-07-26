<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Movies</title>
	<link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">
<link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;1,600&display=swap" rel="stylesheet">

	
</head>
<body>
@php
$movie = DB::table('movies')->get();
@endphp
@foreach($movie as $key => $movies)

@if (isset($movies->id))

					

					<div class="item vhny-grid">
						
						
						<div class="box16 mb-0">
							<figure>
								<img src="{{ asset('/images/movie/' . $movies->movie_photo) }}" alt="Ảnh phim">
							</figure>
							<a href=".Knivesout" data-toggle="modal">
								<div class="box-content">
									<h3 class="title">{{ $movies->title }}</h3>
									<h4> <span class="post"><span class="fa fa-clock-o"> </span> {{ $movies->time }}</span>

										<span class="post fa fa-heart text-right"></span>
									</h4>
								</div>
							</a>
							<!-- Modal -->
							<div class="modal fade Knivesout" id="myModal" tabindex="-1" role="dialog"
								aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content" id="mymodalcontent">
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLongTitle">{{ $movies->title }}</h4>
											<button type="button" class="closebtn" data-dismiss="modal"
												aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body" id="dynamic-content">
											<img src="{{ asset('/images/movie/' . $movies->movie_photo) }}" class="img-fluid modalimg" alt="" />
											<p>
												<h3>Release Year: {{ $movies->release_year }} </h3>
												<h3>Producer: {{ $movies->producer }} </h3>
											</p>
											<h4>Category: {{ $movies->category }}</h4>
											<h4>Star Cast: {{ $movies->performer }}</h4>
											<p>
												
											</p>
											<h4>About Movie: </h4>
											<p>
												
											</p>
											
										</div>
										<div class="bookbtn">
											<a href="{{ route('ticket-booking', ['movie_id' => $movies->id]) }}" class="btn btn-success book-btn">Book</a>
										</div>
									</div>
								</div>
							</div>
						
							<!-- modal end -->
<!-- Đoạn mã JavaScript -->



						</div>
@endif
					</div>
@endforeach
</body>
