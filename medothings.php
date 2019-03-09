<?php
//PHP is much cooler than I expected it to be! I like how it is sort of like an HTML page for HTML pages.
echo "<html>";
	echo "<head>";
	echo "</head>";
	echo "<body>";
		$magicNumber1 = 255;
		$magicNumber2 = 65535;
		echo $magicNumber1 + $magicNumber2;
		echo "<br>";
		$ignorance1 = "I don't know why";
		$ignorance2 = "I don't know what";
		$ignorance3 = "I don't know";
		echo $ignorance1 . " " . $ignorance2 . " " . $ignorance3 . ".";
		echo "<br>";
		$t = date("H");

		if ($t % 2 == 0) {
			echo "even";
		} else {
			echo "odd";
		}
	echo "</body>";
echo "</html>"
?>
