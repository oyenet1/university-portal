<?php

return [
    /**
     * Control if the seeder should create a user per role while seeding the data.
     */
    'create_users' => true,

    /**
     * Control if all the laratrust tables should be truncated before running the seeder.
     */
    'truncate_tables' => true,

    'roles_structure' => [
        'superadmin' => [
            'users' => 'c,r,u,d',
            'categories' => 'c,r,u,d',
            'products' => 'c,r,u,d',
            'carts' => 'c,r,u,d',
            'orders' => 'c,r,u,d',
            'withdrawals' => 'c,r,u,d',
            'messages' => 'c,r,u,d',
            'states' => 'c,r,u,d',
            'payments' => 'c,r,u,d',
            'shops' => 'c,r,u,d',
            'reviews' => 'c,r,u,d',
            'issues' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'admin' => [
            'users' => 'c,r,u,d',
            'profile' => 'r,u',
        ],
        'dean' => [
            'profile' => 'r,u',
        ],
        'hod' => [
            'profile' => 'r,u',
        ],
        'lecturer' => [
            'profile' => 'r,u',
        ],
        'student' => [
            'profile' => 'r,u',
        ],
    ],

    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
    ],
];