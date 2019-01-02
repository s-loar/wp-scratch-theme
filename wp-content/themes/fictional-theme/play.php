function greet($name, $color) {
  echo "<p>Hi my name is {$name} and my favorite color is $color</p>";
}

greet('John', 'blue');
greet('Jane', 'green');

$names = ['Steve', 'John', 'Jane', 'Meow'];
$count = 0;
?>

<?php bloginfo('name'); ?>
<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>

<?php
while( $count < count($names) ) {
  echo "<li>My name is $names[$count]</li>";
  $count++;
}

/* Where the theme files are located - get_theme_file_uri() */
get_theme_file_uri('/images/library-hero.jpg');

// check if page is a specific slug
is_page('about-us')

// Put a WP menu into the header or footer. Create the menu in functions and on the admin side
<?php
  wp_nav_menu(array(
    'theme_location' => 'headerMenuLocation'
  ));
?>

// ** after adding a custo post type, update the permalinks so WP knows about the new type.

// get value in URL query parameters
get_query_var('param', default)
