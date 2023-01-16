<h1>Hello world</h1>
<form action ="/edit/movie/{{$mm->movie_id}}/new" method="post"> 
@csrf <!-- token needed in post method  -->


<!-- this is displaying all the records of the movies and its directly feching from the movie table-->
  <label for="movie_name">Movie Name:</label><br>
  <input type="text" id="movie_name"  value ="{{$mm->movie_name}}"name="movie_name"><br>

  <label for="release_date"> Release Date:</label><br>
  <input type="date" id="release_date" value ="{{$mm->release_date}}" name="release_date"><br>

  <label for="Duration"> Duration :</label><br>
  <input type="number" id="Duration" value ="{{$mm->Duration}}" name="Duration"><br>

  <label for="language"> Language :</label><br>
  <input type="text" id="language" value ="{{$mm->language}}" name="language"><br>

  <label for="description"> Description :</label><br>
  <input type="text" id="description" value ="{{$mm->description}}"name="description"><br>

  <select name="actors[]"  multiple>
    @foreach (\App\Models\actor::all() as $a )
    <!-- call all actors here  -->
    <option value="{{$a->actor_id}}">{{$a->actor_fname . $a->actor_lname}}</option> 
    @endforeach
  </select>
<br>
  <select name="genre[]"  multiple>
    @foreach (\App\Models\genres::all() as $a )
    <!-- call all actors here  -->
    <option value="{{$a->id}}">{{$a->genre_title}}</option> 
    @endforeach
  </select>
  <button type="submit">Submit</button>
</form>