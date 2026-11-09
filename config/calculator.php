<?php

// Cost calculator numbers. Edit here (later this can move to the admin panel).
return [
    // storeys => rate per sq ft (BDT)
    'rates' => [2 => 3000, 5 => 2750, 10 => 2500],
    'default_rate' => 2500,

    // Building budget split: [name, % of total]
    'groups' => [
        ['id' => 'structTotal', 'title' => 'Structure cost', 'items' => [
            ['Foundation (design & approval)', 8], ['Rod', 15], ['Cement', 12], ['Sand', 5],
            ['Brick', 10], ['Stone', 5], ['Labour', 10],
        ]],
        ['id' => 'finishTotal', 'title' => 'Finishing cost', 'items' => [
            ['Tiles', 5], ['Door & window', 5], ['Electrical', 5], ['Interior budget', 5], ['Painting', 3],
            ['Sanitary', 5], ['Interior', 3], ['Transport', 1], ['Food', 1], ['Others', 2],
        ]],
    ],

    // Interior item calculator: [item, price each (BDT)]
    'rooms' => [
        ['name' => 'Bedroom', 'items' => [
            ['Bed back panel', 15000], ['Cabinet', 60000], ['TV unit', 15000], ['Dressing unit', 20000],
            ['Reading table', 20000], ['False ceiling', 20000], ['Wall paint / wallpaper', 20000],
        ]],
        ['name' => 'Living Room', 'items' => [
            ['TV unit', 50000], ['Partition wall', 50000], ['Bookshelf / racks', 25000], ['False ceiling', 20000],
            ['Shoe rack', 10000], ['Wall paint / wallpaper', 20000], ['Strip light', 10000],
        ]],
        ['name' => 'Dining Room', 'items' => [
            ['Dinner wagon', 60000], ['Louver panelling', 30000], ['False ceiling', 15000],
            ['Basin vanity', 20000], ['Wall paint', 20000], ['Lighting', 10000],
        ]],
        ['name' => 'Kitchen', 'items' => [
            ['Upper cabinet', 20000], ['Middle cabinet', 20000], ['Lower cabinet', 20000], ['Spices corner', 15000],
            ['Modular unit', 50000], ['Pull-out basket', 20000], ['False ceiling', 15000], ['Wall paint', 20000], ['Lighting', 10000],
        ]],
    ],
];
