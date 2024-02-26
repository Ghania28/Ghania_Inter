
<html lang="en">
<body>
    Belajar Controller laravel mudah <br>
    hasil passing data : {{$nama}}
    <br>
    Belajar Array :
    <ul>
        @foreach ($matkul as $mt)
        <li>{{$mt}}</li>
        @endforeach
    <ul>
</body>
</html>