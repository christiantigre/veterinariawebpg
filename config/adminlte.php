<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Veterinaria',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Austro</b>gen',

    'logo_mini' => '<b>A</b>G',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'home',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'ADMINISTRADOR',
        [
            'text' => 'Blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Paginas',
            'url'         => '/',
            'icon'        => 'file',
            'label'       => 8,
            'label_color' => 'success',
        ],
        'MI CUENTA',
        [
            'text'    => 'Cuenta',
            'url'  => 'admin/settings',
            'icon'    => 'user',
            'submenu' => [
                [
                    'text' => 'Profile',
                    'url'  => 'admin/settings',
                    'icon' => 'user',
                ],
                [
                    'text' => 'Change Password',
                    'url'  => 'admin/settings',
                    'icon' => 'lock',
                ],
            ],
        ],
        'CONFIGURACIÓN',
        [
            'text'    => 'Pagina',
            'icon'    => 'eye',
            'submenu' => [
                [
                    'text' => 'Empresa',
                    'icon'    => 'minus',
                    'url'  => 'admin/veterinary',
                ],
                [
                    'text' => 'Socios',
                    'icon'    => 'minus',
                    'url'  => 'admin/socios',
                ],
                [
                    'text' => 'Notas',
                    'icon'    => 'minus',
                    'url'  => 'admin/notes',
                ],
                [
                    'text' => 'Noticias',
                    'icon'    => 'minus',
                    'url'  => 'admin/notices',
                ],
                [
                    'text' => 'Post',
                    'icon'    => 'minus',
                    'url'  => 'admin/post',
                ],
                [
                    'text' => 'Categorias',
                    'icon'    => 'minus',
                    'url'  => 'admin/category',
                ],
                [
                    'text' => 'Sub-Categorias',
                    'icon'    => 'minus',
                    'url'  => 'admin/subcategory',
                ],
                [
                    'text' => 'Etiquetas',
                    'icon'    => 'minus',
                    'url'  => 'admin/tag',
                ],
                [
                    'text' => 'Modalidades',
                    'icon'    => 'minus',
                    'url'  => 'admin/modalidad',
                ],     
                [
                    'text' => 'Tutores',
                    'icon'    => 'minus',
                    'url'  => 'admin/tutor',
                ],
                [
                    'text' => 'Secciónes',
                    'icon'    => 'minus',
                    'url'  => 'admin/section-title',
                ],
                
            ],
        ],               
        'INSTRUCCIÓN',
        [
            'text'    => 'Cursos',
            'icon'    => 'eye',
            'submenu' => [                
                [
                    'text' => 'Tipo',
                    'icon'    => 'minus',
                    'url'  => 'admin/type-course',
                ],
                [
                    'text' => 'Clasificación',
                    'icon'    => 'minus',
                    'url'  => 'admin/clasification-courses',
                ],
                [
                    'text' => 'Abrir curso',
                    'icon'    => 'minus',
                    'url'  => 'admin/courses',
                ],
            ], 
        ], 
        'PRODUCTOS',
        [
            'text'    => 'Productos',
            'icon'    => 'eye',
            'submenu' => [               
                [
                    'text' => 'Tipos producto',
                    'icon'    => 'minus',
                    'url'  => 'admin/typeproduct',
                ],
                [
                    'text' => 'Producto',
                    'icon'    => 'minus',
                    'url'  => 'admin/product',
                ],
            ], 

        ],
        'SERVICIOS',
        [
            'text'=>'Servicios',
            'icon'=>'eye',
            'submenu'=>[
                [
                    'text'=>'Servicio',
                    'icon'=>'minus',
                    'url'=>'admin/service',
                ],
            ],
        ],
        'MEDIA',
        [
            'text'       => 'Galeria',
            'icon_color' => 'aqua',
            'url'  => 'admin/gallery',
        ],        
        [
            'text'    => 'Slider',
            'icon_color'    => 'aqua',
            'url'     => 'admin/slider',
        ],
    ],

    /* 
    eliminados
    
                [
                    'text' => 'Temas Nuevos',
                    'icon'    => 'minus',
                    'url'  => 'admin/card',
                ],
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
    ],
];
