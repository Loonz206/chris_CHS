<?php

$page = basename($_SERVER['SCRIPT_NAME']);


if ($page == 'index.php') { print 'At CHS we specialize in hair replacement, perfecting the art of natural looking styles and color matching. We offer stock or custom order units to fit your individual needs and offer flexible financial options. Whether you are bringing your own system, or ordering with us, we can serve all of your replacement needs. Synthetic or Human, female or male, we are happy to take care of you.'; }

if ($page == 'about.php') { print 'All of our stylists are qualified to design a new hair system or customize a stock unit, both human and synthetic. We are highly experienced cut-in specialists for new units as well as maintenance on current units, and any other hair need from cuts to color, or perms. All services are performed in individual cutting rooms allowing our guests to feel comfortable and enjoy a private experience.'; }

if ($page == 'services.php') { print 'CHS stylists are known for perfecting each cut to match their clients\' lifestyle, hair type and face shape. At CHS we will start with a precise, personalized cut and finish by supplying you with the tools and knowledge to keep you looking \'salon fresh\' every day.'; }

if ($page == 'contact.php') { print 'Contact Collective Hair Systems for all your hair needs'; }

if ($page == 'thanks.php') { print 'Thank you for contacting CHS, we\'ll be in touch!'; }

if ($page == 'product.php') { print 'All hair replacement-related products needed to maintain your hair system from tapes and glue to specialized conditioners and shampoos can be found here at Chris\'. '; }

?>