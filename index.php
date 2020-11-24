<?php
echo '<p>This is PHP! </p>';

if(isst($_GET["FIRSTNAME"])){//show feedback
 echo $_GET["FirstName"];
  
 echo '<pre>';
 var_dump($_GET);
 echo '<pre>';
  
  
}else{//show form
  echo '
  <form action="">
 <p>First Name <input type="text" name="FirstName" /></p> 
 <p>Last Name <input type="text" name="LastName" /></p> 
 <p>Favorite Color</p>
 <p><input type="radio" name="FavoriteColor" value="red" /> Red</p>
 <p><input type="radio" name="FavoriteColor" value="blue" /> Blue</p>
 <p><input type="radio" name="FavoriteColor" value="yellow" /> Yellow</p>
  <input type="submit">
    
 </form> 
  ';
}
