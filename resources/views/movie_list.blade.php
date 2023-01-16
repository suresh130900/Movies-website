@foreach($m as $a)
<a href = "/edit/movie/{{$a->movie_id}}">
    {{$a->movie_name}}
</a> <br>
@endforeach