<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
    <form action="AdminPage.html">
    
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

  
    <label for="feedback">Feedback</label>
    <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
        <div>TODO write content</div>
        <?php
$myfile = fopen("static.txt", "w") or die("Unable to open file!");
$txt = firstname;
fwrite($myfile, $txt);
$txt = lastname;
fwrite($myfile, $txt);
$txt = feedback;
fwrite($myfile, $txt);
fclose($myfile);
?>
    </body>
</html>
