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
  First Name <input type="text" name="FirstName" />
  <br />
  <input type="submit">
    
 </form> 
  ';
}
