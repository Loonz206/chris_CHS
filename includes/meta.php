<?php

$page = basename($_SERVER['SCRIPT_NAME']);


if ($page == 'index.php') { print 'Welcome '; }

if ($page == 'about.php') { print 'About '; }

if ($page == 'services.php') { print 'Services '; }

if ($page == 'contact.php') { print 'Contact '; }

if ($page == 'thanks.php') { print 'Thanks '; }

if ($page == 'product.php') { print 'Products '; }

?>