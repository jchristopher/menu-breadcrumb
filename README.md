This is a WordPress plugin. [Official download available on wordpress.org](http://wordpress.org/extend/plugins/menu-breadcrumb/).

# Menu Breadcrumb

Generate a breadcrumb trail from a WordPress Menu

## Description

Breadcrumbs are often generated from Page structure, but in a world of Custom Post Types that doesn't always work. Menu Breadcrumb uses your WordPress Menu to generate a breadcrumb trail based on the current page.

## Installation

1. Download the plugin and extract the files
1. Upload `menu-breadcrumb` to your `~/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

## Usage

After activating, add breadcrumbs by inserting the following in you template file:

```php
<?php if ( function_exists( 'menu_breadcrumb') ) { menu_breadcrumb( 'main' ); } ?>
```

where `'main'` is the Location of the Menu from which you want to generate the breadcrumb trail.

**Full usage**

```php
<?php 
    if ( function_exists( 'menu_breadcrumb') ) { 
        menu_breadcrumb( 
            'main',                             // Menu Location to use for breadcrumb
            ' &raquo; ',                        // separator between each breadcrumb
            '<p class="menu-breadcrumb">',      // output before the breadcrumb
            '</p>'                              // output after the breadcrumb
        ); 
    } 
?>
```

### Advanced Usage

If you would like to utilize Menu Breadcrumb more granularly you can use the class directly.

#### Mimic `menu_breadcrumb()`

```php
<?php
    $menu_breadcrumb = new Menu_Breadcrumb( 'main' );   // 'main' is the Menu Location
	$menu_breadcrumb->render( ' &raquo; ', '<p class="menu-breadcrumb">', '</p>' );
```

#### Generate a breadcrumb array

``php
<?php
    $menu_breadcrumb = new Menu_Breadcrumb( 'main' );   // 'main' is the Menu Location
	$breadcrumb_array = $menu_breadcrumb->generate_trail();
	print_r( $breadcrumb_array ); // array of WP_Post objects in order of breadcrumb
```

#### Generate breadcrumb markup from breadcrumb array

``php
<?php
    $menu_breadcrumb = new Menu_Breadcrumb( 'main' );   // 'main' is the Menu Location
	$breadcrumb_array = $menu_breadcrumb->generate_trail();
	$breadcrumb_markup = $menu_breadcrumb->generate_markup( $breadcrumb_array, ' &raquo; ' );
	echo '<p class="menu-breadcrumb">' . $breadcrumb_markup . '</p>';
```

#### Get current Menu item (of the page currently being viewed)

``php
<?php
    $menu_breadcrumb = new Menu_Breadcrumb( 'main' );   // 'main' is the Menu Location
	$current_menu_item_object = $menu_breadcrumb->get_current_menu_item_object();
```

### Changelog

<dl>

	<dt>1.0</dt>
    <dd>Initial release</dd>

</dl>