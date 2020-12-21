
<?php
 include_once "header.php";
 ?>
 <form method="post"  action="log.php">
  <label> Username:</label>
    <input type="text" id="user" name="user"/><br/><br/>
   <label>Password:</label>
   <input type="password" id="pass" name="pass"/><br/><br/>
   <input type="submit" name="submit" value="Log In"/>
 </form>
 <?php
  include_once "footer.php";
  ?>
