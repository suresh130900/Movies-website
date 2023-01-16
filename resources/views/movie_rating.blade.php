<h1>Hello world</h1>
<form action="/rating/new" method="post"> 
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

Select reviwer Name:
<select name="reviewer_id">
    @foreach($r as $c)
    <option value="{{$c->rev_id}}">{{$c->rev_name}}</option>
    @endforeach
  </select>
  <br>


  <label for="rating"> Rating :</label><br>
  <input type="rating" id="rating" name="rating"><br>


  <button type="submit">Submit</button>
</form>