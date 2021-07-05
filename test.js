<!DOCTYPE html>
<html>
<head>
<script>
function check() {
  var names=["Nachiket","AkshayD","AkshayS"];
  var pswd=[""]
  var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["password"].value;

  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body>

<form name="myForm" action="/action_page.php" onsubmit="check()" method="post">
  Name: <input type="text" name="fname">
  <input type="password" placeholder="Enter Password" name="password" required>
  <input type="submit" value="Submit">
</form>

</body>
</html>