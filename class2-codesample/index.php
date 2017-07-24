<?php
error_reporting(-1);

/** INITIALIZE VARIABLES **/

$page_title = "Product Entry Form";

// no more work is being done in this script, so we're ready to display


/** DISPLAY **/

include_once 'header.php';


?>
<form action="product_insert_result.php" method="get">
Company: <input type="text" name="company"><br>
Type: <input type="text" name="type"><br>
Roast: <label><input type="radio" name="roast" value="light">Light</label>
<label><input type="radio" name="roast" value="medium">Medium </label>
<label><input type="radio" name="roast" value="dark">Dark</label>

<br>

<textarea name="description" rows="10" cols="40"></textarea>

<br>

<input type="submit" value="Submit">
</form>

<?php
include_once 'footer.php';
