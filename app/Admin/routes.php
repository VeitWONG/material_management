<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->resource('material','MaterialInformationController');
    $router->resource('supplier','SupplierInformationController');
    $router->resource('inventory','InventoryController');
    $router->resource('inventoryexchange','InventoryExchangeController');
    $router->resource('subscription','SubscriptionController');
    $router->resource('claim','ClaimController');
});
