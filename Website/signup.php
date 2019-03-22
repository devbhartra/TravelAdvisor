<?php include_once "common/header.php"; ?>

<section id="signup-section">
<form class="box" action="signup.php" method="POST">
    <div class="container">
      <h1 class="signup-h">Sign Up!</h1>
      <h3>Already a member? Click here to <a href="Login.html">Login!</a></h3>
      <p>Please fill in this form to create an account with us.</p>
      <hr>
      <label for="Name">Name</label>
      <input type="text" id="Name" name="name" placeholder="Enter Name" required>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>
     <label for="Gender">Gender</label>
      <div class="container1">
        <input type="radio" checked="checked" value="Male" name="gender">
        <label>Male</label>
        <!-- <span class="checkmark"></span> -->
      </div>
      <div class="container1">
        <input type="radio" value="Female" name="gender">
        <!-- <span class="checkmark"></span> -->
        <label>Female</label>
      </div>
      <div class="container1">
        <input type="radio" value="Other" name="gender">
        <!-- <span class="checkmark"></span> -->
        <label>Other</label>
      </div>
      <label for="phno">Phone Number</label>
      <input type="number" id="phno" name="phno" maxlength="10" required>
      <label for="DOB">Date Of Birth</label>
      <input type="date" id="dob" name="dob" required>
      <!-- <label for="Allergies">Allergies(optional)</label>
      <input type="textarea" id="Allergies" name="Allergies" rows=20 cols=20> -->
      <label for="psw">Password</label>
      <input type="password" id="psw" name="psw" placeholder="Enter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
      <div id="message">
        <h5>Note!Password must contain the following:</h5>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <p>By creating an account you agree to our <a href="TandC.php" style="color:rgb(192, 34, 42)">Terms & Privacy</a>.</p>
      <div class="button-wrapper">

        <button type="button" class="cancelbtn"><a href="index.php">Cancel</button></a>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
  </div>
</form>
</section>
<?php include_once "common/footer.php"; ?>
