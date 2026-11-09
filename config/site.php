<?php

// Default content. Used to fill the database the first time (php artisan db:seed) and as a fallback.
return [
    'settings' => [
        'logo' => 'images/logo-transparent-bg.png',
        'email' => '3mattrik@gmail.com',
        'phone' => '01766-405066',
        'whatsapp' => '8801766405066',
        'address' => 'Plot # 9 & 10, Bonoful (2nd Floor), Wapda Moor, Halishahar, Chattogram, Bangladesh.',
        'button_color' => '#dcaa2c',
    ],

    'sections' => [
        'hero' => [
            'label' => 'Hero (top banner)',
            'sub' => 'Engineering · Interiors · Real Estate',
            'heading' => 'We don’t just build.
We shape *possibilities.*',
            'para' => 'One trusted team for thoughtful design, dependable engineering, smart furniture and quality materials—from first line to final finish.',
        ],
        'about' => [
            'label' => 'About',
            'sub' => 'About 3 Mattrik Design',
            'heading' => 'Integrated solutions for building, property & modern living.',
            'para' => '3 Mattrik Design is an integrated Engineering, Real Estate, Interior & Exterior Design, Smart Furniture, and Material Sourcing company dedicated to delivering comprehensive solutions for building and property development.

We bring together technical expertise, creative design, quality materials, smart solutions, and professional project coordination to simplify the entire building experience—from the initial concept to the finished space.',
        ],
        'services' => [
            'label' => 'Services',
            'sub' => 'Our core solutions',
            'heading' => 'Everything your space needs.',
            'para' => 'Five connected disciplines. One accountable partner from concept to completion.',
        ],
        'approach' => [
            'label' => 'Integrated approach',
            'sub' => 'Our integrated approach',
            'heading' => 'From concept
to completion.',
            'para' => 'A building project involves many interconnected decisions. Managing them separately can create unnecessary complexity. At 3 Mattrik Design, our five core solutions work together as an integrated service ecosystem.',
        ],
        'why' => [
            'label' => 'Why 3 Mattrik',
            'sub' => 'Why 3 Mattrik Design?',
            'heading' => 'One partner.
Complete solutions.',
            'para' => 'Professional expertise and careful coordination at every stage of your project.',
        ],
        'collections' => [
            'label' => 'Interior collections',
            'sub' => 'Interior collections',
            'heading' => 'Designed for the way you live.',
            'para' => 'Room by room, detail by detail—click a room to browse its photo gallery.',
        ],
        'calculator' => [
            'label' => 'Cost calculator',
            'sub' => 'Plan with confidence',
            'heading' => 'Know your budget
*before you build.*',
            'para' => 'Use our instant estimator to shape a realistic starting budget. Your final quote is always tailored after a site consultation.',
        ],
        'projects' => [
            'label' => 'Selected work',
            'sub' => 'Selected work',
            'heading' => 'Spaces that speak for us.',
            'para' => null,
        ],
        'materials' => [
            'label' => 'Material sourcing banner',
            'sub' => 'Material sourcing',
            'heading' => 'Quality you can see.
Value you can trust.',
            'para' => 'Rod · Cement · Bricks · Stone · Sand · MS Steel · SS · Glass · Tiles · Paint · Fire Safety · Electrical · Lift · Generator',
        ],
        'commitment' => [
            'label' => 'Our commitment',
            'sub' => 'Our commitment',
            'heading' => 'Every project is an opportunity to create something meaningful.',
            'para' => 'At 3 Mattrik Design, every project is an opportunity to create something meaningful. From the first idea to the final detail, we work to make the journey of building your dream simpler, smarter, and more rewarding.',
        ],
        'cta' => [
            'label' => 'Bottom call-to-action',
            'sub' => 'Let’s build your Dream',
            'heading' => 'Your vision. Our expertise.
One complete solution.',
            'para' => 'Have a project in mind? Connect with our team to discuss your requirements.',
        ],
    ],

    'images' => [
        'hero' => ['label' => 'Hero background', 'path' => 'images/site/hero.webp', 'alt' => 'Warm, modern living room interior'],
        'dept_engineering' => ['label' => 'Service picture – Engineering Solution', 'path' => 'images/departments/engineering-solution.webp', 'alt' => 'Engineering Solution'],
        'dept_interior' => ['label' => 'Service picture – Interior & Exterior', 'path' => 'images/departments/interior-exterior.webp', 'alt' => 'Interior & Exterior'],
        'dept_furniture' => ['label' => 'Service picture – Smart Furniture', 'path' => 'images/departments/smart-furniture.webp', 'alt' => 'Smart Furniture'],
        'dept_realestate' => ['label' => 'Service picture – Real Estate', 'path' => 'images/departments/real-estate.webp', 'alt' => 'Real Estate'],
        'dept_materials' => ['label' => 'Service picture – Material Sourcing', 'path' => 'images/departments/material-sourcing.webp', 'alt' => 'Material Sourcing'],
        'project_1' => ['label' => 'Selected work – large picture', 'path' => 'images/site/exterior.webp', 'alt' => 'Modern multi-storey building exterior'],
        'project_2' => ['label' => 'Selected work – picture 2', 'path' => 'images/site/living.webp', 'alt' => 'Modern living room design'],
        'project_3' => ['label' => 'Selected work – picture 3', 'path' => 'images/site/workspace.webp', 'alt' => 'Contemporary office design'],
        'material' => ['label' => 'Material banner background', 'path' => 'images/site/material.webp', 'alt' => 'Construction materials'],
    ],

    'gallery' => [
        ['living', 'Living', 'Sofa · Center table · TV cabinet · Open shelves', 'images/site/living.webp'],
        ['bedroom', 'Bedroom', 'Bed · Wardrobe · Dressing table · Reading desk', 'images/site/bedroom.webp'],
        ['workspace', 'Workspace', 'Workstation · Conference · Reception · Storage', 'images/site/workspace.webp'],
        ['kitchen', 'Kitchen', 'Modular cabinets · Island · Countertops · Appliances', null],
        ['master-bedroom', 'Master Bedroom', 'King bed · Walk-in closet · Lounge corner · Ensuite', null],
        ['bathroom', 'Bathroom', 'Vanity · Shower zone · Tiles · Fittings', null],
        ['home-livspace', 'Home by Livspace', 'Full-home interiors · Modular design · Styling', null],
        ['wardrobe', 'Wardrobe', 'Sliding doors · Walk-in · Lofts · Smart storage', null],
        ['study-room', 'Study Room Designs', 'Study desk · Bookshelves · Reading nook · Lighting', null],
        ['kids-bedroom', 'Kid\'s Bedroom', 'Bunk beds · Play zone · Study corner · Storage', null],
    ],
];
