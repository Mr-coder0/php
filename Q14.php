<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Dynamic Navigation Menu</title>
    <style>
        /* Add some basic CSS for styling the navigation menu */
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            display: inline;
            margin-right: 10px;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
 <h1>Navigation Menu</h1>   

<?php
// Sample navigation data (you can fetch this from a database or other source)
$menuItems = array(
    array('text' => 'Home', 'url' => 'index.php'),
    array('text' => 'About Us', 'url' => 'about.php'),
    array('text' => 'Services', 'url' => 'services.php'),
    array('text' => 'Contact Us', 'url' => 'contact.php')
);

function createNavigationMenu($menuItems) {
    echo '<ul>';
    foreach ($menuItems as $item) {
        echo '<li><a href="' . $item['url'] . '">' . $item['text'] . '</a></li>';
    }
    echo '</ul>';
}

// Call the function to create the navigation menu
createNavigationMenu($menuItems);
?>

</body>
</html>
