<?php

include 'stripe-php/init.php';
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_51Ji721D4KMB6EijwQuh0dd2zjrbg6m6jQ20TsCnPjOpR8A0Vrw8bpEPM7yPY3GNpolkdFNgkb1OBJT0sygCraA2R000jZIEkka');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/php-ecommerce';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # TODO: replace this with the `price` of the product you want to sell
    'price' => 'price_1Jiq0ED4KMB6Eijw252Jv8Sh',
    'quantity' => 1,
  ]],
  'payment_method_types' => [
    'card',
  ],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);