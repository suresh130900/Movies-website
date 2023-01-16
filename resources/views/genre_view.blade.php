<h1>Hello world</h1>
<form action ="/genre/new" method="post"> 
@csrf <!-- token needed in post method  -->

  <label for="genre">Genre Title:</label><br>
  <input type="text" id="genre_name" name="genre_name"><br>

  <button type="submit">Submit</button>
</form>