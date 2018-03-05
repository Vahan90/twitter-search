<?php

/**
 * An example api call. Replace YOUR_API_KEY with your actual twitter API key, also replace YOUR_API_SECRET with your own twitter api secret.
 */

include "vendor/autoload.php";

use Twitter\Search\Search;

$search = new Search();
$search->setToken("YOUR_API_KEY", "YOUR_API_SECRET");
$value = ["q" => "Vahan Terzibashian"];
echo "<pre>";
print_r($search->search($value));
echo "</pre>";