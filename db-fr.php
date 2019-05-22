<?php

$a = 'string';
// string, escape character need to be escaped.

//$file = './wp_posts.sql';
$file = file_get_contents('./wp_posts.sql');
$b = str_replace("$a","",$file);
//$c = 'wp_post_fixed.sql';
file_put_contents('./wp_post_fixed.sql', $b);

?>
