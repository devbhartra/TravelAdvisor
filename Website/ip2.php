<?php include_once "common/header.php"; ?>

<section class="box blue">
    
    <form class="f1" action="results.php">
    <h3>Enter a bus number to see its starting point and destination,along with all intermedate stations </h3> <br/>
		<input type="text" placeholder="Bus Number" name="busnumber">
		<input class="button" type="submit" value="Find Bus Route">
	</form>
</section>

<section>
    <!-- Shows the output, After changing the class to "box blue"-->
</section>


<?php include_once "common/footer.php"; ?>
