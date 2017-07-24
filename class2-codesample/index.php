<?php
error_reporting(-1);

/** INITIALIZE VARIABLES **/

$page_title = "Product Entry Form";

// no more work is being done in this script, so we're ready to display


/** DISPLAY **/

include_once 'page_header.php';

// The `action` attribute determines the script to call when
// submitting the form. The `get` method is used to illustrate
// what the parameters look like. In a "real" application, you
// would use the `POST` method to send data to the script.
$sql='SELECT companyID, name FROM company ORDER BY name';
$result = mysqli_query($link, $sql);
if (!$result) {
$error = 'Error fetching data: ' . mysqli_error($link);
echo $error;
exit();
}
while($recording=mysqli_fetch_array($result)){
//Some awesome PHP code here
}
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
include_once 'page_footer.php';
