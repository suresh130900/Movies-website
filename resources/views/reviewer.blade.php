<h1>Hello world</h1>
<form action ="/reviewer/new" method="post"> 
@csrf <!-- token needed in post method  -->

  <label for="reviewer_name">Reviewer Name:</label><br>
  <input type="text" id="reviewer_name" name="reviewer_name"><br>

  <button type="submit">Submit</button>
</form>