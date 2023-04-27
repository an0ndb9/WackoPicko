<?php
require_once("../include/pictures.php");
require_once("../include/comments.php");
require_once("../include/cart.php");
require_once("../include/html_functions.php");
require_once("../include/functions.php");

session_start();

if (!isset($_GET['query']) || !preg_match('/^[a-zA-Z0-9]+$/', $_GET['query']))
{
   http_redirect("/error.php?msg=Error, invalid query provided");
   exit();
}

$pictures = Pictures::get_all_pictures_by_tag($_GET['query']);

#Patched code for reflected XSS ( inserted htmlspecialchars tag to prevent malicious inputs )
$query = htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8');

?>

<?php our_header("", $_GET['query']); ?>

<div class="column prepend-1 span-24 first last">
<h2>Pictures that are tagged as '<?= htmlspecialchars($query) ?>'</h2>

   <?php thumbnail_pic_list($pictures); ?>

</div>


<?php our_footer(); ?>
