<?php include_once "common/header.php"; ?>

<div id="main">
<section id="section1">
       <noscript>This site just doesn't work, period, without JavaScript</noscript>

       <!-- IF LOGGED IN -->

              <!-- php to redirect to input page. -->

       <!-- IF LOGGED OUT -->

              <!-- Alternate content here -->
       <div class="box" id="intro">
              <div id="intro-text">
              Get there fast with Travel Advisor
              <p>
                     Now it is more easy to know which bus to take. Just ask Travel Advisor.
                     <br/><br/>
                     <a class="button" href="#section2">Get Started</a>
              </p>
              </div>
              <div id="intro-image"><img src="images/bus.png" alt="bus">
              </div>
       </div>


</section>
<section class="box" id="section2">

<div class="box">
       <h2>Features</h2>
       <ul>
              <li>Facilitates saving and sharing directions</li>
              <li>Provides routes of all the buses</li>
              <li>Provides information on busses that stop at a station</li>
              <li>Fast and highly secure</li>
       </ul>

</div>
<div class="box">
       <a class="button" href="signup.php">Sign up</a> to enjoy all the features, or <a class="button" href="input_page.php">skip >></a> for now. 
</div>

</section>
</div>
<?php include_once "common/footer.php"; ?>