<?php

// use Diglactic\Breadcrumbs\Breadcrumbs;
// use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Tabuna\Breadcrumbs\Breadcrumbs;
use Tabuna\Breadcrumbs\Trail;

//Home
Breadcrumbs::for('admin.dashboard', fn (Trail $trail) =>
    $trail->push(__('Home'), route('admin.dashboard'))
);

//Items
Breadcrumbs::for('admin.items.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Items Management'), route('admin.items.index'))
);
Breadcrumbs::for('admin.items.create', fn (Trail $trail) =>
    $trail
        ->parent('admin.items.index')
        ->push(__('Add Item'), route('admin.items.create'))
);

//Type
Breadcrumbs::for('admin.type.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Type Management'), route('admin.type.index'))
);
Breadcrumbs::for('admin.type.create', fn (Trail $trail) =>
    $trail
        ->parent('admin.type.index')
        ->push(__('Add Type Items'), route('admin.type.create'))
);
Breadcrumbs::for('admin.type.edit', fn (Trail $trail) =>
    $trail
        ->parent('admin.type.index')
        ->push(__('Edit Items'), route('admin.type.edit'))
);
Breadcrumbs::for('admin.type.show', fn (Trail $trail) =>
    $trail
        ->parent('admin.type.index')
        ->push(__('Show Items'), route('admin.type.show'))
);

//SubType
Breadcrumbs::for('admin.subtype.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Sub Type Management'), route('admin.subtype.index'))
);

//customer
Breadcrumbs::for('admin.customer.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Type Management'), route('admin.customer.index'))
);
Breadcrumbs::for('admin.customer.create', fn (Trail $trail) =>
    $trail
        ->parent('admin.customer.index')
        ->push(__('Add New Customer'), route('admin.customer.create'))
);
//customer group
Breadcrumbs::for('admin.customer.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Type Management'), route('admin.customer.index'))
);
Breadcrumbs::for('admin.customer.create', fn (Trail $trail) =>
    $trail
        ->parent('admin.customer.index')
        ->push(__('Add New Customer'), route('admin.customer.create'))
);

//category
Breadcrumbs::for('admin.category.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Category Management'), route('admin.category.index'))
);

//cost
Breadcrumbs::for('admin.cost.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Cost Management'), route('admin.cost.index'))
);

//unit
Breadcrumbs::for('admin.unit.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Unit Management'), route('admin.unit.index'))
);

//brand
Breadcrumbs::for('admin.brand.index', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Brand Management'), route('admin.brand.index'))
);
Breadcrumbs::for('admin.brand.create', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Add New Brand'), route('admin.brand.create'))
);
Breadcrumbs::for('admin.brand.edit', fn (Trail $trail) =>
    $trail
        ->parent('admin.dashboard')
        ->push(__('Edit Brand'), route('admin.brand.edit'))
);
// Breadcrumbs::for('admin.items.index', function (Trail $trail) =>
//     $trail->parent('admin.dashboard')
//         ->push(__('Items Management'), route('admin.items.index')
// );

// // //supplier
// // Breadcrumbs::for('admin.supplier.index', function (BreadcrumbTrail $trail) {
// //     $trail->parent('admin.dashboard');
// //     $trail->push(__('Supplier Management'), route('admin.supplier.index'));
// // });