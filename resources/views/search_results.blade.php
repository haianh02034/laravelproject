<!DOCTYPE html>
<html lang="en">
<head>
  <!-- ... Your head content ... -->
</head>
<body>
  <!-- ... Your other content ... -->
  <div class="container">
    <h2>Search Results</h2>
    @if (count($movies) > 0)
      <ul>
        @foreach ($movies as $movie)
          <li>
            <img style="width: 200px;height:200px" src="{{ asset('/images/movie/' . $movie->movie_photo) }}" alt="Ảnh phim">
            
            <!-- Add other movie details as needed -->
          </li>
          <li>{{ $movie->title }}</li>
        @endforeach
      </ul>
    @else
      <p>No movies found for the search keyword.</p>
    @endif
  </div>
  <!-- ... Your other content ... -->
</body>
</html>
