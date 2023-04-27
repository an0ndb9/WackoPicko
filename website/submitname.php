<?php
require_once("include/html_functions.php");
require_once("include/users.php");
session_start();
require_login();

if (!isset($_GET['value']) || !preg_match('/^[a-zA-Z]+$/', $_GET['value']))    //Fixed Code - Pregmatch REGEX!
{
   http_redirect(Users::$HOME_URL);
}
$value = $_GET['value'];

?>

<?php our_header("home"); ?>

<div class="column prepend-1 span-24 first last">
   <p>
      Your favorite color is <?= htmlspecialchars($value) ?>! and you've been entered in our contest!  
   </p>
</div>

<?php our_footer(); ?>
