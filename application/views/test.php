<!DOCTYPE html>
<html lang="en">
<head>
<title>City-Lab</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="../../public/assets/img/favicon.png"/>
<link rel="stylesheet" href="../../public/css/all.min.css"/>
<link rel="stylesheet" href="../../public/styles.css"/>
<link rel="stylesheet" href="table.css"/>

<script>

  function openNav() {
    document.getElementById("mySidenav").style.width = "200px";
    document.getElementById("menu").style.marginLeft = "200px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.getElementById("menu").style.display = 'none';
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("menu").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
    document.getElementById("menu").style.display = 'block';
  }

</script>
</head>
<body>
  <div class="blue_bar"></div>
  <div class="container">
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="home_articles.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="test.php"><i class="fas fa-vials"></i><span>Tests</span></a>
      <a href="book.php"><i class="fas fa-bookmark"></i><span> Book</span></a>
      <a href="doctor.php"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
      <a href="settings.php"><i class="fas fa-cog"></i><span>Settings</span></a>
      <a href="homepage.php"><i class="fas fa-sign-out-alt"></i><span>Sign Out</span></a>

    </div>
    <div id="menu">
      <span style="font-size:30px; cursor:pointer" onclick= "openNav()">&#9776;</span>
    </div>

    <div class="sidebar">                               
      <header>
        <img src="../../public/assets/img/logo.jpg" alt=""></img>
      </header>
        <a href="home_articles.php"><i class="fas fa-home"></i><span>Home</span></a>
        <a class="active" href="test.php"><i class="fas fa-vials"></i><span>Tests</span></a>
        <a href="book.php"><i class="fas fa-bookmark"></i><span> Book</span></a>
        <a href="doctor.php"><i class="fas fa-stethoscope"></i><span>Doctor</span></a>
        <a href="settings.php"><i class="fas fa-cog"></i><span>Settings</span></a>
        <div><button onclick="window.location.href='homepage.php'">Logout</button></div>
      </div>
    
    <div class="nav">
      <a class="activ" href="test.php">My Tests</a>
    </div>

    <div class="info">
      <button class="notifi"><i class="far fa-bell"></i></button>
      <div class="user_image">
        <img src="../../public/assets/img/tuat.png" alt=""></img>
      </div>
      <div class="user_name">Mr. Samaranayake</div>
      <div id="user-role">Laboratory Scientist</div>
      
      <div class="Date">
        <p> <i class="fas fa-calendar-alt"></i><span id="date"></span></p>
        <script>
          var dt = new Date();
          document.getElementById('date').innerHTML=dt.toDateString();
        </script>
      </div> 
    </div> 

    <div class="main">
      
      <table class="styled-table">
        
        <thead>
        <tr>
          <th>Date</th>
          <th>Test</th>
          <th>Report</th>
          <th>Status</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>23-08-2020</td>
          <td>FBC</td>
          <td><a href="#">Blood Report</a></td>
          <td>normal</td>
        </tr>
        <tr>
          <td>23-08-2020</td>
          <td>Urine test</td>
          <td><a href="#">Urine Report</a></td>
          <td>normal</td>
        </tr>
        <tr>
          <td>23-08-2020</td>
          <td>FBC</td>
          <td><a href="#">Blood Report</a></td>
          <td>High glucose</td>
        </tr>
        </tbody>
      </table>

    </div>  

  </div>
</body>