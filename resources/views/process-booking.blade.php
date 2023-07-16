<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Process Booking</h1>
        @if ($movie)
            <h3>Booking tickets for movie: {{ $movie->title }}</h3>         
                <button type="submit" class="btn btn-success">Book Tickets</button>
            </form>
        @else
            <p>No movie selected for booking.</p>
        @endif
    </div>
@endsection
</body>
</html>