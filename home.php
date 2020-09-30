<!DOCTYPE html>
<html lang="en">
<head>
<title>IproblemSolver</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 10px;
  text-align: center;
  background: #1a88bc;
  color: white;
}

/* Increase the font size of the heading */
.header h1 {
  font-size: 40px;
}

/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
.navbar {
  overflow: hidden;
  background-color: #333;
  position: sticky;
  position: -webkit-sticky;
  top: 0;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}


/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 20%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 80%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 1px;
  text-align: center;
  background: #1a88bc;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
  <h1>iProblemSolver</h1>
  <h3>The <b>complete</b> solution is here.</h3>
</div>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="login.php"  class="active">Login</a>
  <a href="register.php">Register</a>
  <a href="#" class="right">About Us</a>
</div>

<div class="row">
  <?php require('dynamic/left.php') ?>
  <div class="main">
    <div class="demo" style="padding-left: 22%;">
      <button style="width: 72%;padding: 20px;font-size: 20px;font-weight: bold;margin-bottom: 13px;" onclick="document.location='demographic.php'">Demographic Questionaire</button><br>
      <button style="width: 72%;padding: 20px;font-size: 20px;font-weight: bold;margin-bottom: 13px;" onclick="document.location='pretester.php'">Pre Test</button><br>
      <button style="width: 72%;padding: 20px;font-size: 20px;font-weight: bold;margin-bottom: 13px;" onclick="document.location='casestudy.php'">Case Study</button><br>
      <button style="width: 72%;padding: 20px;font-size: 20px;font-weight: bold;margin-bottom: 13px;" onclick="document.location='problems.php'">Problems</button><br>
      <button style="width: 72%;padding: 20px;font-size: 20px;font-weight: bold;margin-bottom: 13px;" onclick="document.location='feedback.php'">Feedback</button>
    </div>
  </div>
</div>

<div class="footer">
  <h2>Designed & maintained @ IProblemSolver</h2>
</div>

</body>
</html>