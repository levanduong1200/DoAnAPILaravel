<?php


Route::resources([
    'admin' => 'AdminController',
    'category' => 'CategoryController',
    'product' => 'ProductController',
    'account' => 'UserController',
    'user' => 'UserController',
    'order' => 'OrdersController',
    'order_detail' => 'OrderDetailController',
    'dashboard' => 'DashboardController'
]);

?>
