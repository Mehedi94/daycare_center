<?php
 include_once "header.php";
 ?>
<title> Register </title>
<link rel="stylesheet"  href="register.css"/>
</head>
<body>
  <div id="border">
  <h1>Registration Form</h1>
  <div id="w">
  <p>Please fill up the whole form</p> </div>
<form name="caregiver_registration" method="post" action="save.php">
<p>
  <strong>First name </strong><br/>
  <input type="text" name="first_name" />
   </p>
   <p>
  <strong>Last name</strong><br/>
  <input type="text" name="last_name" />
      </p>
  <p>
    <strong>Phone no </strong><br/>
    <input type="text" name="phone" />
         </p>
         <p>
    <strong>Password </strong><br/>
           <input type="password" name="password" />
            </p>
     <strong>Qualifications</strong><br/>
     <textarea name="qualifications" cols="30" rows="5"></textarea>
<p>
  <input type="submit" name="submit" value="Submit" />
</div>

</form>
</div>
<?php
 include_once "footer.php";
 ?>
