<div style="margin-left:700px; background-color:white;width:400px;" >
<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="admin.php">  
  Name: <input type="text" name="name" >
  <span class="error"></span>
  <br><br>
  E-mail: <input type="text" name="email" >
  <span class="error"></span>
  <br><br>
  Website: <input type="password" name="password" >
  <span class="error"></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
</div>
<?php
?>