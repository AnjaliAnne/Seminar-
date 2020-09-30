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
.yyy{
    background-color: lightgrey;
    width: 35%;
    padding: 20px;
    margin: 20px;
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
  <div class="side">
    <h1>Case Study 1</h1>
    Professor Lou teaches English literature at College of Arts and Sciences.
    Literature is a subject that many students are not really interested in but have to
    take for credits or other reasons. In order to get her students interested in her class,
    she has come up with lots of innovative ideas to stimulate students’ interest in
    classical literature, including the use of Internet. Recently she has received a small
    grant for integrating technology in instruction. She was very excited about it and
    wanted to implement Web-based instruction to facilitate her classroom teaching.
    She has asked you, a student intern with the Faculty Technology Support Center,
    to develop a Web-based course for her. She mentioned several advantages of using
    technology to deliver instruction: first, the Web can provide students with various
    resources, such as Shakespeare’s time and historical background; second, the Web
    can provide students with easy access to various visuals, such as pictures, audio,
    and video clips, which students can study any time of the day.
    You are very excited about the prospective design project and would like to start

    working on it right away, as you could play to the strength of your Web develop-
    ment skills. At the same time, however, you feel that you have not obtained

    sufficient information that would legitimately allow you to start the design.
    Your task is to work with Professor Lou to <br>(a) identify the problem(s); <br>(b) develop
    a formal needs assessment plan; and <br>(c) write your rationale to justify your plan.
  </div>
  <div class="main">
    <h1>Question Prompts for Case Study 1</h1>
    <div style="display: flex;justify-content: space-around;">
      <div style="width: 50%;">
        <p>1) Is this design project in response to a problem or a need? Is there really a need
        for Web-based instruction? How do you know? How can you determine it?</p>
        <input type="text" Placeholder="Please type your answer here" style="width: 90%;height: 47%;text-align: center;"></input>
      </div>
      <div class="yyy"><b>
        <ul>
          <li>What are the benefits and drawbacks of
          the selected world?</li>
          <li>What are the other worlds that you think
          the Akona can survive?</li>
          <li> How are they compared to your selected
          world?</li>
        </ul></b>
      </div>
    </div>
    <div style="display: flex;justify-content: space-around;">
      <div style="width: 50%;">
        <p>2) What might be the major causes for students’ low motivation in learning
        classical literature? Do you think Web-based instruction can be a solution? Why or
        why not? How do you think the students may respond to such a solution?</p>
        <input type="text" Placeholder="Please type your answer here" style="width: 90%;height: 47%;text-align: center;"></input>
      </div>
      <div class="yyy"><b>
        <ul>
          <li>What might be the major causes for students’ low motivation in learning
            classical literature?</li> 
          <li>Do you think Web-based instruction can be a solution? Why or why not?</li>
          <li>How do you think the students may respond to such a solution?</li>
        </ul></b>
      </div>
    </div>

    <p style="width: 50%;">3) Do you think that the information provided by Professor Lou is sufficient for
you to design the Web-based instructional modules? Why or Why not?</p>
    <div class="yyy"><b><p style="width: 50%;">
      <ul>
        <li>List at least two alternatives to solve the problem.</li>
        <li>Evaluate each alternative by describing its advantages and
        disadvantages, including relevant patient and provider perspectives.</li>
      </ul></p></b>
    </div>
    <input type="text" Placeholder="Please type your answer here" style="width: 50%;"></input>

    <p style="width: 50%;">4) What information do you need to find out before investing your time and
effort into the development of the Web-based instruction?</p>
    <div class="yyy"><b><p style="width: 50%;">
      <ul>
      <li>Which option will you implement as a plan?</li>
      <li>Why is this plan the best choice?</li>
      <li>How will you implement this plan?</li>
      </ul></p></b>
    </div>
    <input type="text" Placeholder="Please type your answer here" style="width: 50%;"></input>

    <p style="width: 50%;">5) What specific questions should be asked in order to find out the gap/
discrepancy between the optimal and the actual situations in the following areas:
the learning environment, learner characteristics, learning goals, contextual
factors, etc.?</p>
    <div class="yyy"><b><p style="width: 50%;">
      <ul>
        <li>How and when will you monitor the implementation of the plan?</li>
        <li>How will you know if the problem is solved, alleviated, or is getting worse?</li>
        <li>What secondary problems should you watch out for, and how would you do that?</li>
      </ul></p></b>
    </div>
    <input type="text" Placeholder="Please type your answer here" style="width: 50%;"></input>

  </div>
  
</div>

<div class="footer">
  <h2>Designed & maintained @ IProblemSolver</h2>
</div>

</body>
</html>
