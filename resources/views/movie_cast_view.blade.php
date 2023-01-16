<h1>Hello world</h1>
<form action ="/cast/new " method="post"> 
@csrf <!-- token needed in post method  -->

  <!--<label for="actor_id"> Actor Id :</label><br>
   <input type="number" id="actor_id" name="actor_id"><br> -->

Select Actor Name:
  <select name="actor_id">
    @foreach($a as $b)

    <option value="{{$b->actor_id}}" >{{$b->actor_fname}}</option>
    @endforeach
  </select><br>
  Select Movie Name:

  <!--<label for="movie_id"> Movie Id :</label><br>
  <input type="number" id="movie_id" name="movie_id"><br>-->

  <select name="movie_id">
    @foreach($movies as $c)
    <option value="{{$c->movie_id}}">{{$c->movie_name}}</option>
    @endforeach
  </select>
<br>
  <label for="role">Role:</label><br>
  <input type="text" id="role" name="role"><br>

  <button type="submit">Submit</button>
</form>