<h1>Hello world</h1>
<form action =" /direction/new" method="post"> 
@csrf <!-- token needed in post method  -->

  
  Select Movie Name:

  <!--<label for="movie_id"> Movie Id :</label><br>
  <input type="number" id="movie_id" name="movie_id"><br>-->

  <select name="movie_id">
    @foreach($m as $b)
    <option value="{{$b->movie_id}}">{{$b->movie_name}}</option>
    @endforeach
  </select>
<br>

Select Director Name:
<select name="director_id">
    @foreach($d as $c)
    <option value="{{$c->dir_id}}">{{$c->dir_fname}}</option>
    @endforeach
  </select>

  <br>


  <button type="submit">Submit</button>
</form>