<?php
 include_once "header.php";
 ?>
<title> Register </title>
<link rel="stylesheet"  href="admission.css"/>
</head>
<body>
  <div id="border">
  <h1>Admission Form</h1>
  <div id="w">
  <p>Please fill up the whole form</p> </div>
<form name="admission_registration" method="post" action="admit.php">
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
            <p>
           <strong>Child's Name</strong><br/>
           <input type="text" name="child_name" />
               </p>
               <p>
              <strong>Child's age</strong><br/>
              <input type="tinyint" name="child_age" />
                  </p>
                  <p>
              <strong> Gender </strong><br/>
                           <input type="radio" name="gender" value="Male" checked="checked" />Male &nbsp;
                           <input type="radio" name="gender" value="Female"  />Female &nbsp;
                            </p>
             <p>
                 <strong>Time Schedule: </strong><br/>
                 <select name="timing" >
                 <option value="8am to 1pm">8am to 1pm</option>
                 <<option value="1pm to 6pm">1pm to 6pm</option>
                 <select/>
               </p>
               <p>
                <strong>Days Selection:</strong><br/>
                 <input type="checkbox" name="days" value="Saturday"/> &nbsp;Saturday<br/>
                 <input type="checkbox" name="days" value="Sunday"/> &nbsp;Sunday<br/>
                 <input type="checkbox" name="days" value="Monday"/> &nbsp;Monday<br/>
                 <input type="checkbox" name="days" value="Tuesday"/> &nbsp;Tuesday<br/>
                 <input type="checkbox" name="days" value="Wednesday"/> &nbsp;Wednesday<br/>
                 <input type="checkbox" name="days" value="Thursday"/> &nbsp;Thursday<br/>
               </p>



<p>
  <input type="submit" name="submit" value="Submit" />
</div>

</form>
</div>
<?php
 include_once "footer.php";
 ?>

