<h1>Hello world</h1>
<form action ="/actor/new" method="post"> 
@csrf <!-- token needed in post method  -->

  <label for="first_name">First Name:</label><br>
  <input type="text" id="first_name" name="first_name"><br>

  <label for="last_name"> Last Name :</label><br>
  <input type="text" id="last_name" name="last_name"><br>

  <input type="radio" id="male" name="gender" value="male">Male<br>
  <input type="radio" id="female" name="gender" value="female">Female<br>
  <button type="submit">Submit</button>
</form>