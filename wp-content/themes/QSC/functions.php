<?php 
// dequeue the Twenty Twenty-One parent style
function child_enqueue_styles() {
    wp_dequeue_style( 'twenty-twenty-one-style' );    
    // Theme stylesheet
    /*
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array(), wp_get_theme()->get('Version') );
    */
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 11 );


/** to change wdpress block widget to classic widget **/
function example_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'example_theme_support' );



// for custom menu (header menu)
function wpb_custom_new_menu()
{
    register_nav_menu('header_menu', __('Header Menu'));
}
add_action('init', 'wpb_custom_new_menu');


// Logo Section
function custom_logo_customizer($wp_customize)
{
    $wp_customize->add_section('logo_section', array(
        'title'       => __('Logo', 'custom_logo'),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));

    $wp_customize->add_setting('custom_theme_logo');

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custom_theme_logo', array(
        'label'    => __('Logo', 'custom_logo'),
        'section'  => 'logo_section',
        'settings' => 'custom_theme_logo',
    )));
}
add_action('customize_register', 'custom_logo_customizer');


// Theme Options
function theme_settings_page()
{ ?>
    <div class="wrap">
        <h1>Theme Options</h1>
        <form action="options.php" method="post" enctype="multipart/form-data">
            <?php
            settings_fields("section");
            do_settings_sections("theme-options");
            submit_button();
            ?>
        </form>
    </div>
<?php }

function display_all($value = '')
{ ?>
    <table>
        <tr>
            <td><label>Phone:</label></td>
            <td>
                <input type="text" name="phone" id="phone" value="<?php echo get_option('phone'); ?>" placeholder="Enter Phone Number" style="width: 500px;">
            </td>
        </tr>
        <tr>
            <td><label>Email:</label></td>
            <td>
                <input type="text" name="email" id="email" value="<?php echo get_option('email'); ?>" placeholder="Enter Email Address" style="width: 500px;">
            </td>
        </tr>
        <tr>
            <td><label>Facebook:</label></td>
            <td>
                <input type="text" name="facebook" id="facebook" value="<?php echo get_option('facebook'); ?>" placeholder="Enter Facebook URL" style="width: 500px;">
            </td>
        </tr>
        <tr>
            <td><label>Twitter:</label></td>
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo get_option('twitter'); ?>" placeholder="Enter twitter URL" style="width: 500px;">
            </td>
        </tr>
        <tr>
            <td><label>Linkedin:</label></td>
            <td>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo get_option('linkedin'); ?>" placeholder="Enter Linkedin URL" style="width: 500px;">
            </td>
        </tr>
        <tr>
            <td><label>Youtube:</label></td>
            <td>
                <input type="text" name="youtube" id="youtube" value="<?php echo get_option('youtube'); ?>" placeholder="Enter youtube URL" style="width: 500px;">
            </td>
        </tr>        
        <tr>
            <td><label>Header Top Text:</label></td>
            <td><textarea name="header_top" id="header_top" rows="2" cols="30" style="width: 500px;height: 100px;"><?php echo get_option('header_top'); ?></textarea></td>
        </tr>
        <tr>
            <td><label>Footer Bottom Text:</label></td>
            <td><textarea name="footer_bottom" id="footer_bottom" rows="2" cols="30" style="width: 500px;height: 100px;"><?php echo get_option('footer_bottom'); ?></textarea></td>
        </tr>
    </table>
<?php }

function display_theme_fields()
{
    add_settings_section("section", "Contact Information", null, "theme-options");
    add_settings_field("phone", "", "theme-options", "section");
    add_settings_field("email", "", "theme-options", "section");
    add_settings_field("facebook", "", "theme-options", "section");
    add_settings_field("twitter", "", "theme-options", "section");
    add_settings_field("linkedin", "", "theme-options", "section");
    add_settings_field("youtube", "", "theme-options", "section");
    add_settings_field("header_top", "", "theme-options", "section");
    add_settings_field("footer_bottom", "", "display_all", "theme-options", "section");

    register_setting("section", "phone");
    register_setting("section", "email");
    register_setting("section", "facebook");
    register_setting("section", "twitter");
    register_setting("section", "linkedin");
    register_setting("section", "youtube");
    register_setting("section", "header_top");
    register_setting("section", "footer_bottom");
}
add_action("admin_init", "display_theme_fields");

function my_theme_menu()
{
    add_theme_page('My Theme options', 'Theme Options', 'edit_theme_options', 'my-theme-settings', 'theme_settings_page');
}
add_action('admin_menu', 'my_theme_menu');



//Footer col 1 widgetized areas.
function footer_widgets_init1()
{
    register_sidebar(array(
        'name'          => 'Footer Column 1',
        'id'            => 'footer_column_1',
        'before_widget' => '<div class="footer-section__menu">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-section__col-head">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'footer_widgets_init1');

// Footer col 2 widgetized areas.
function footer_widgets_init2()
{
    register_sidebar(array(
        'name'          => 'Footer Column 2',
        'id'            => 'footer_column_2',
        'before_widget' => '<div class="footer-section__menu">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-section__col-head">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'footer_widgets_init2');


//Footer col 3 widgetized areas.
function footer_widgets_init3()
{
    register_sidebar(array(
        'name'          => 'Footer Column 3',
        'id'            => 'footer_column_3',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'footer_widgets_init3');

/*
// Footer col 4 widgetized areas.
function footer_widgets_init4()
{
    register_sidebar(array(
        'name'          => 'Footer Column 4',
        'id'            => 'footer_column_4',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'footer_widgets_init4');


// Sidebar 1 widgetized areas.
function sidebar_widgets_init1()
{
    register_sidebar(array(
        'name'          => 'Sidebar Column 1',
        'id'            => 'sidebar_column_1',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'sidebar_widgets_init1');


// Sidebar 2 widgetized areas.
function sidebar_widgets_init2()
{
    register_sidebar(array(
        'name'          => 'Sidebar Column 2',
        'id'            => 'sidebar_column_2',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'sidebar_widgets_init2');


// Sidebar 3 widgetized areas.
function sidebar_widgets_init3()
{
    register_sidebar(array(
        'name'          => 'Sidebar Column 3',
        'id'            => 'sidebar_column_3',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'sidebar_widgets_init3');

*/



/* Home Slider */
function home_slider() {
    register_post_type( 'Slider',
        array(
            'labels' => array(
                'name' => 'Slider',
                'singular_name' => 'Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit Slide',
                'new_item' => 'New Slide',
                'view' => 'View',
                'view_item' => 'View Slide',
                'search_items' => 'Search Slide',
                'not_found' => 'No Slide found',
                'not_found_in_trash' => 'No Slide found in Trash',
                'parent' => 'Parent Slide'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-images-alt',
            'has_archive' => true
        )
    );
}
add_action( 'init', 'home_slider' );



/* Testimonials */
function testimonials() {
    register_post_type( 'testimonials',
        array(
            'labels' => array(
                'name' => 'Testimonials',
                'singular_name' => 'Testimonials',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Testimonials',
                'edit' => 'Edit',
                'edit_item' => 'Edit Testimonials',
                'new_item' => 'New Testimonials',
                'view' => 'View',
                'view_item' => 'View Testimonials',
                'search_items' => 'Search Testimonials',
                'not_found' => 'No Testimonials found',
                'not_found_in_trash' => 'No Testimonials found in Trash',
                'parent' => 'Parent Testimonials'
            ),
 
            'public' => true,
            'menu_position' => 15,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => 'dashicons-format-quote',
            'has_archive' => true
        )
    );
}
add_action( 'init', 'testimonials' );



?>