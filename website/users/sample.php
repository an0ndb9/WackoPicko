<?php

// Terrible hack, but allows us to get around duplicating the view code.
require_once("../include/users.php");
require_once("../include/pictures.php");
require_once("../include/html_functions.php");
require_once("../include/functions.php");

$user = Users::get_user($_GET['userid']);
$x=$_GET['userid'];
if ($x == '1')
{
	$pictures = Pictures::get_all_pictures_by_user($x);
	our_header("");
?>
<div class="column prepend-1 span-24 first last">
	<?if ($pictures) {?>
  	<h2>These are <?=h( $user['login'] )?>&#39;s Pictures: </h2>
<? thumbnail_pic_list($pictures);?>

</div>
<? 
}
  else
  {
    echo "There are no sample pictures";
  }
  our_footer();
}
else
{
  our_header("");
	echo '<p>Error: dont manipulate parameter<p>';
	echo'<p>To see more pictures:Please login<p>';
	our_footer();
}
?>
