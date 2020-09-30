<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
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
  padding: 20px;
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
  <a href="#">Home</a>
  <a href="login.php"  class="active">Login</a>
  <a href="register.php">Register</a>
  <a href="#" class="right">About Us</a>
</div>

<div class="row">
  <?php require('dynamic/left.php') ?>
  <div class="main">
  <h1>Feedback</h1>
  There are no right answers--please describe yourself as you are, not how you want to be
or think you ought to be. Your teacher will not grade this.<br>

<fieldset data-role="controlgroup" style="padding: 20px;text-align: center;">
  <table style="width: 100%;">
    <tr>
      <td><b>Never</b></td>
      <td><b>Rarely</b></td>
      <td><b>Sometimes</b></td>
      <td><b>Often</b></td>
      <td><b>Always</b></td>
    </tr>
    <tr>
      <td><b>A</b></td>
      <td><b>B</b></td>
      <td><b>C</b></td>
      <td><b>D</b></td>
      <td><b>E</b></td>
    </tr>
  </table>
    <!-- <b style="margin-right: 20px;padding: 20px;">Never</b>
    <b>A</b>
    <b style="margin-right: 20px;padding: 20px;">Rarely</b> 
    <b>B</b>
    <b style="margin-right: 20px;padding: 20px;">Sometimes</b> 
    <b>C</b>
    <b style="margin-right: 20px;padding: 20px;">Often</b> 
    <b>D</b>
    <b style="margin-right: 20px;padding: 20px;">Always</b><br>
    <b>E</b> -->
   
</fieldset>
  1. I try to understand what the problem is asking me.<br> Never Rarely Sometimes Often Always<br>
2. I think of several ways to solve a problem and then choose the best
one.<br>
<input type="radio"></input>
A 
<input type="radio"></input>B 
<input type="radio"></input>C 
<input type="radio"></input>D 
<input type="radio"></input>E<br>

3. I look back at the problem to see if my answer makes sense.<br> A B C D E<br>
4. I use different ways to memorize things.<br> A B C D E<br>
5. I think to myself, do I understand what the problem is asking me?<br> A B C D E<br>
6. I read the problem more than once.<br> A B C D E<br>
7. I think about what information I need to solve this problem.<br> A B C D E<br>
8. I use different learning strategies depending on the problem.<br> A B C D E<br>
9. I look back to see if I did the correct procedures.<br> A B C D E<br>
10. I think about how well I am learning when I work a difficult
problem.<br>

A B C D E<br>

11. I use different ways of learning depending on the problem.<br> A B C D E<br>
12. I go back and check my work.<br> A B C D E<br>

  </div>
</div>

<div class="footer">
  <h2>Designed & maintained @ IProblemSolver</h2>
</div>

</body>
</html>
