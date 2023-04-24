<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> ONLINE EXAMINATION SYSTEM </title>
  <!-- Fontawesome CDN Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <link rel="stylesheet" href="style.css">
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
  }
  ?>
</head>

<body>

  <!-- Nav bar start -->

  <nav>
    <div class="navbar">
      <div class="logo"><a href="index.php">Master Your Learnings </a></div>
      <ul class="nav-links">
        <li>
          <a href="https://www.ldrp.ac.in/" target="_blank">About Us</a>
        </li>
        <li><a href="developers.html">Developers</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li onclick="document.getElementById('id01').style.display='block'">
          <a href="#">Admin Login</a>
        </li>

        <!-- <button class="btn"onclick="document.getElementById('id01').style.display='block'">Admin Login</button> -->
      </ul>
      <ul class="nav-links">
        <button class="btn" onclick="openForm()" style="bottom: 138px;">Login In</button>
      </ul>
    </div>

    <!-- login popup start -->
    <div class="form-popup" id="myForm">
      <form class="form-container" action="login.php?q=index.php" method="POST">
        <h1>Login</h1>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required />

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required />

        <!-- <span class="psw">Forgot <a href="forgot.php" style="text-decoration:none;">password?</a></span> -->

        <button type="submit" class="btn">Login</button>
        <button type="button" class="btn cancel" onclick="closeForm()">
          Close
        </button>
      </form>
    </div>
    <!-- login popup finish-->
  </nav>

  <!-- Nav bar end -->


  <!-- Registration Form Start-->

  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="sign.php?q=account.php" onsubmit="return validateForm()" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" placeholder="Enter your name" required />
          </div>


          <div class="input-box">
            <span class="details">College Name</span>
            <input type="text" name="college" placeholder="Enter your college name" required />
          </div>

          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" name="email" placeholder="Enter your email" required />
          </div>

          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="tel" name="mob" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Enter your number" required />
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required />
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="cpassword" placeholder="Confirm your password" required />
          </div>
        </div>

        <div class="input-box">
          <option value="Male">Select Gender</option>
          <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md">
            <option value="M">Male</option>
            <option value="F">Female</option>
          </select>
        </div>

      
        <?php if (@$_GET['q7']) {
          echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
        } ?>

        <div class="button">
          <input type="submit" value="Register" />
        </div>
      </form>
    </div>
  </div>


  <!-- Registration Form Finsih-->

  <!-- Admin login Start-->
  <div id="id01" class="modal">
    <form class="modal-content animate" action="admin.php?q=index.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      </div>

      <div class="container-2">
        <label for="uname"><b>Admin Login </b></label>
        <input type="text" placeholder="Admin email id" name="uname" required />

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter password" name="password" required />

        <button type="submit" name="login">Login</button>
      </div>

      <div class="container-2" style="background-color: #f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
          Cancel
        </button>
      </div>
    </form>
  </div>

  <!-- Admin login finish -->



  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    var modal = document.getElementById('id01');
    window.onclick = function(event) {
      if (event.target == modal)
        modal.style.display = "none";
    }
  </script>
</body>

</html>