<?php

// Requiring the model
require_once('model.php' );

// Retrieving the list of posts
$animals = getAllPosts();

// Requiring the view
require_once ('view.php');

?>