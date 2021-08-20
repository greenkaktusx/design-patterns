<?php
require_once 'Config.php';

// Get config object.
$config = Config::getInstance();

// Set new config parameters.
$config->setParameter('applicationName', 'Design Patterns');
$config->setParameter('authorName', 'Alexeev Alexey');

// Remove local config object.
unset($config);

// Get config object again.
$newConfig = Config::getInstance();

// Check our parameters.
echo "Application name: " . $newConfig->getParameter('applicationName') . "<br/>"; // Show Design Patterns
echo "Author name: " . $newConfig->getParameter('authorName'); // Show Alexeev Alexey