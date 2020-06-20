<!DOCTYPE html>
<html>
<head>

<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
<title>CANVAS-STUDIO</title>

<style>

body {
  margin: 0;
  font-family: 'Ubuntu';font-size: 22px;
}

.headerArea
{
  grid-area: header;
  //border-style: solid;
  background-color: #1e2124;
}

.menuArea
{
  grid-area: menu;
  border-right: 2px solid black;
  height: 100%;
}

.mainArea
{
  grid-area: main;
  //border-style: solid;
}

//.rightArea
//{
//  grid-area: right;
//  border-style: solid;
//}

.grid-container
{
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu main main main right right';
  grid-gap: 0.1%;
  background-color: #7a7c7f;
  height: 100%;
  width: 100%;
}


.navbar {
  overflow: hidden;
  background-color: #3b3c3d;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  text-decoration: none;
  padding: 0.3%;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

</style>
</head>
<body>

<div class="grid-container">

  <div class="headerArea">
    <h1 style="align: left; font-weight: bold; font-size:1.2vw; color: white; padding:0.2%; padding-left: 0.7%;">CANVAS-STUDIO</h1>

    <div class="navbar">
      <a href="#home">Home</a>
      <a href="#news">News</a>
    </div>

  </div>


  <div class="menuArea">
    <p style="align: left; font-weight: Bold; font-size: 1vw; padding-top: 0.1%; padding-left: 3.8%;">Slide Pool:</p>
  </div>


  <div class="mainArea">
    Main
  </div>



  <!-- <div class="rightArea">Right</div> -->
</div>

</body>
</html>
