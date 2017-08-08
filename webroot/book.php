<?php

/**
 * book.php
 *
 * This file is the "Book Your Place" page.
 *
 */

/**
 * Include the page header to add the menu at the top of the page.
 */
include(dirname(__FILE__) . '/../includes/header.php');

?>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="img-responsive img-thumbnail" src="/images/book_your_place.jpg"
					 alt="Photograph of Ninjas coding with Minecraft at Stockport CoderDojo">
				<div class="well well-sm" style="margin-top: 1em; max-width: 320px">
					If you're interested in helping out as a Mentor or Volunteer, please use our <a href="/contact.php">Contact Us page</a> to get in touch.
				</div>
			</div>
			<div class="col-md-8">
				<h2>Get Me Coding!</h2>

				<p>We run on the 1st Sunday of the month.</p>

                <p>You can book your place through the CoderDojo Zen system. Before you do, please read this important information:</p>

                <h3>What to expect</h3>
                <p>Our CoderDojo is an informal event, with lots of different activities and areas.</p>
                <p>There will be areas to help with Raspberry Pi, Python, Scratch and other stuff such as Microbits.  Please let us know if you are new to coding and/or CoderDojo, so that we can make you especially welcome.</p>
                <p>We have one rule. <i>Be Cool.</i></p>
                <p>Once you arrive and sign in, we'll try and bring everyone together to plan the day - but bear in mind everyone usually arrives all at once!</p>
                <h3>Looking for something to try beforehand?</h3>
                <p>The CoderDojo Kata is very useful.  We'd also recommend the CodeClub resources, and Raspberry Pi projects. Mozilla Webmaker is also great.   The BBC have also some good Bitesize guides on computing. Finally, there are also some good resources on the Hour of Code website.</p>
                <p>The seasonal Advent of Code might be of interest too.</p>
                <h3>Who?</h3>
                <p>Tameside CoderDojo is run entirely by volunteer mentors. Many of us are STEM Ambassadors or work in digital and tech businesses.</p>
                <p>We're hugely grateful to the team at Active Medlock Sky High Adventure, who kindly host and welcome us.</p>
                <p>Please make sure you say hello - the event is only as good as we all make it.</p>
                <h3>Can't make it anymore?</h3>
                <p>It's no problem - but we'd appreciate if you could let us know. That way, we can make spaces available to those who are waiting.</p>
                <h3>Contacts</h3>
                <p>You can reach us using the contact form on this website, by emailing <a href="mailto:tamesidecoderdojo@gmail.com">tamesidecoderdojo@gmail.com</a>, or on Twitter <a href="https://twitter.com/TamesideDojo">@TamesideDojo</a> </p>
                <div class="well well-sm">
                    <p>To book your place, sign up through CoderDojo Zen using the button below:</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="https://zen.coderdojo.com/dojo/gb/tameside-district/tameside">Visit Zen to Book</a>
                    </p>
                </div>

			</div>
		</div>
	</div> <!-- /container -->
<?php
/**
 * Include the page footer to finish the page neatly.
 */
include(dirname(__FILE__) . '/../includes/footer.php');
