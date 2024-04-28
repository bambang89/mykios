<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ItemsController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\BuyingController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CostController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\CustomerGroupController;
use App\Http\Controllers\Backend\DiscountController;
use App\Http\Controllers\Backend\SellingController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\TaxController;
use App\Http\Controllers\Backend\TypeController;
use App\Http\Controllers\Backend\SubTypeController;
use App\Http\Controllers\Backend\UnitController;
use App\Http\Controllers\Backend\WarehouseController;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('admin.dashboard'));
    });

    Route::group([
        'prefix' => 'items',
        'as' => 'items.',
    ], function () {
        Route::get('/', [ItemsController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Items Management'), route('admin.items.index'));
        });
    });

    Route::group([
        'prefix' => 'supplier',
        'as' => 'supplier.',
    ], function () {
        Route::get('/', [SupplierController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Supplier Management'), route('admin.supplier.index'));
        });
    });

    Route::group([
        'prefix' => 'customer',
        'as' => 'customer.',
    ], function () {
        Route::get('/', [CustomerController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Customer Management'), route('admin.customer.index'));
        });

        Route::get('group', [CustomerGroupController::class, 'index'])
            ->name('group.index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Customer Group Management'), route('admin.customer.group.index'));
        });
    });

    Route::group([
        'prefix' => 'category',
        'as' => 'category.',
    ], function () {
        Route::get('/', [CategoryController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Category Management'), route('admin.category.index'));
        });
    });

    Route::group([
        'prefix' => 'tax',
        'as' => 'tax.',
    ], function () {
        Route::get('/', [TaxController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Tax Management'), route('admin.tax.index'));
        });
    });

    Route::group([
        'prefix' => 'cost',
        'as' => 'cost.',
    ], function () {
        Route::get('/', [CostController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Cost Management'), route('admin.cost.index'));
        });
    });

    Route::group([
        'prefix' => 'unit',
        'as' => 'unit.',
    ], function () {
        Route::get('/', [UnitController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Unit Management'), route('admin.unit.index'));
        });
    });

    Route::group([
        'prefix' => 'discount',
        'as' => 'discount.',
    ], function () {
        Route::get('/', [DiscountController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Discount Management'), route('admin.discount.index'));
        });
    });

    Route::group([
        'prefix' => 'brand',
        'as' => 'brand.',
    ], function () {
        Route::get('/', [BrandController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Brand Management'), route('admin.brand.index'));
        });
    });

    Route::group([
        'prefix' => 'type',
        'as' => 'type.',
    ], function () {
        Route::get('/', [TypeController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Type Management'), route('admin.type.index'));
        });

        Route::get('sub', [SubTypeController::class, 'index'])
            ->name('sub.index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Sub Type Management'), route('admin.type.sub.index'));
        });
    });

    Route::group([
        'prefix' => 'warehouse',
        'as' => 'warehouse.',
    ], function () {
        Route::get('/', [WarehouseController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Warehouse Management'), route('admin.warehouse.index'));
        });
    });

    Route::group([
        'prefix' => 'selling',
        'as' => 'selling.',
    ], function () {
        Route::get('/', [SellingController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Selling'), route('admin.selling.index'));
        });
    });

    Route::group([
        'prefix' => 'buying',
        'as' => 'buying.',
    ], function () {
        Route::get('/', [BuyingController::class, 'index'])
            ->name('index')
            ->breadcrumbs(function (Trail $trail) {
                $trail->parent('admin.dashboard')
                    ->push(__('Buying'), route('admin.buying.index'));
        });
    });

   