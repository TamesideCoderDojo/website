<?php

/**
 * footer.php
 *
 * This file makes the bottom part of the page and finishes everything off.
 *
 * Include this file after all your content, like this:
 *
 * include(dirname(__FILE__) . '/../includes/footer.php');
 *
 */

?>
<footer>
	<hr>
    <p>This website was created by Tameside CoderDojo Mentors and Ninjas (based on code from <a href="https://stockportdojo.org.uk/">Stockport CoderDojo</a>). All source code is available from <a href="https://github.com/tamesidecoderdojo/website">GitHub</a> - take it and use it, and show us what cool stuff you did with it!</p>
</footer>
<?php
//Include the Google Analytics Tracking code if it exists
if (file_exists(dirname(__FILE__) . '/../includes/googleanalytics.php')) {
    include(dirname(__FILE__) . '/../includes/googleanalytics.php');
}
?>
</body>
</html>
