@extends('layout') 
@section('content') 

<div class="alert alert-primary" role="alert">
  A simple primary alert—check it out!
</div>
<h1>Hello world</h1>
<form action ="/movie/new" method="post"> 
@csrf <!-- token needed in post method  -->

<label for="poster">Poster:</label><br>
  <input class="form-control " type="text" id="poster" name="poster"><br>

  <label for="movie_name">Movie Name:</label><br>
  <input class="form-control " type="text" id="movie_name" name="movie_name"><br>

  <label for="release_date"> Release Date:</label><br>
  <input class="form-control " type="date" id="release_date" name="release_date"><br>

  <label for="Duration"> Duration :</label><br>
  <input class="form-control " type="number" id="Duration" name="Duration"><br>

  <label for="language"> Language :</label><br>
  <input class="form-control " type="text" id="language" name="language"><br>

  <label for="description"> Description :</label><br>
  <input  class="form-control " type="text" id="description" name="description"><br>

  <select name="actors[]" multiple>
    @foreach (\App\Models\actor::all() as $a )
    <!-- call all actors here  -->
    <option class="form-control " value="{{$a->actor_id}}">{{$a->actor_fname . $a->actor_lname}}</option> 
    @endforeach
  </select>
  <button type="submit">Submit</button>
</form>

@stop 