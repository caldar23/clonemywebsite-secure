<?php
// ********* THE ADMIN PAGES ********* //
	
	
	function cmwsecure_admin_page() {
		
		if ( $_POST['cmwsecure_form'] == 'Y' ) { //Form data sent			
			
			$cmwsecure_head = $_POST['cmwsecure_head'];
			update_option('cmwsecure_head', $cmwsecure_head);
			$cmwsecure_head = stripslashes($cmwsecure_head);
			
			$cmwsecure_outside_page_open = $_POST['cmwsecure_outside_page_open'];
			update_option('cmwsecure_outside_page_open', $cmwsecure_outside_page_open);
			$cmwsecure_outside_page_open = stripslashes($cmwsecure_outside_page_open);
			
			$cmwsecure_outside_wrapper_open = $_POST['cmwsecure_outside_wrapper_open'];
			update_option('cmwsecure_outside_wrapper_open', $cmwsecure_outside_wrapper_open);
			$cmwsecure_outside_wrapper_open = stripslashes($cmwsecure_outside_wrapper_open);
			
			$cmwsecure_outside_content_open = $_POST['cmwsecure_outside_content_open'];
			update_option('cmwsecure_outside_content_open', $cmwsecure_outside_content_open);
			$cmwsecure_outside_content_open = stripslashes($cmwsecure_outside_content_open);
			
			$cmwsecure_outside_content_close = $_POST['cmwsecure_outside_content_close'];
			update_option('cmwsecure_outside_content_close', $cmwsecure_outside_content_close);
			$cmwsecure_outside_content_close = stripslashes($cmwsecure_outside_content_close);
			
			$cmwsecure_outside_wrapper_close = $_POST['cmwsecure_outside_wrapper_close'];
			update_option('cmwsecure_outside_wrapper_close', $cmwsecure_outside_wrapper_close);
			$cmwsecure_outside_wrapper_close = stripslashes($cmwsecure_outside_wrapper_close);
		
			$cmwsecure_outside_page_close = $_POST['cmwsecure_outside_page_close'];
			update_option('cmwsecure_outside_page_close', $cmwsecure_outside_page_close);
			$cmwsecure_outside_page_close = stripslashes($cmwsecure_outside_page_close);
			
			$cmwsecure_credits = $_POST['cmwsecure_credits'];
			update_option('cmwsecure_credits', $cmwsecure_credits);
			$cmwsecure_credits = stripslashes($cmwsecure_credits);
			
			
			?>
			
            <div class="updated"><p><strong><?php _e('BAM! Options saved and stuff...' ); ?></strong></p></div>
			
			<?php
		
		} else {
			
			//Normal page display

			$cmwsecure_head = get_option('cmwsecure_head');
			$cmwsecure_head = stripslashes($cmwsecure_head);
//			$cmwsecure_head = htmlentities($cmwsecure_head);
			
			$cmwsecure_outside_page_open = get_option('cmwsecure_outside_page_open');
			$cmwsecure_outside_page_open = stripslashes($cmwsecure_outside_page_open);
			
			$cmwsecure_outside_wrapper_open = get_option('cmwsecure_outside_wrapper_open');
			$cmwsecure_outside_wrapper_open = stripslashes($cmwsecure_outside_wrapper_open);
			
			$cmwsecure_outside_content_open = get_option('cmwsecure_outside_content_open');
			$cmwsecure_outside_content_open = stripslashes($cmwsecure_outside_content_open);
			
			$cmwsecure_outside_content_close = get_option('cmwsecure_outside_content_close');
			$cmwsecure_outside_content_close = stripslashes($cmwsecure_outside_content_close);
			
			$cmwsecure_outside_wrapper_close = get_option('cmwsecure_outside_wrapper_close');
			$cmwsecure_outside_wrapper_close = stripslashes($cmwsecure_outside_wrapper_close);
			
			$cmwsecure_outside_page_close = get_option('cmwsecure_outside_page_close');
			$cmwsecure_outside_page_close = stripslashes($cmwsecure_outside_page_close);
			
			$cmwsecure_credits = get_option('cmwsecure_credits');
			$cmwsecure_credits = stripslashes($cmwsecure_credits);
			
		}
		
		global $current_user, $user_identity ;
		get_currentuserinfo();
		
		
		$displayname = $user_identity ;	
		
		if ( $displayname == '') { $displayname = 'peeps'; }

	?>
	
    <div class="wrap">
        
         <form name="cmwsecure_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
            	<input type="hidden" name="cmwsecure_form" value="Y">	

                
                <h2>Welcome, <?php echo $displayname; ?>, to CloneMyWebsite&trade; Secure's settings page!</h2>
                <p>This is where you can customize the "wrapper" around the checkout pages. This way you can style the overall theme while still keeping the page content area on the individual page just for the order forms.</p>
                <p>Just click on the big words below to expand the page for more options. And <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">this chart</a> might help.</p>
                <p>And just so you know, the Bump page template only use the "Head code" and "Credits" areas. If there's a script that you want to have on every page, it's probably best to stick it in those places.</p>
           	
            	<h2 class="cmwsecure_expand" id="cmwsecure_head">Head code</h2>
                <div id="cmwsecure_head-html" class="cmwsecure_expand-html" style="display:none">
                
                <p>In this area, called "head code", you are able to add anything to the &lt;head&gt; area of the page as it loads. This is a great place to put any styles that you want to be used anywhere the site, including links to scripts and css files. And for those who really want to know, it's loaded right before the &lt;/head&gt; tag and is attached on the wp_head hook.<br />
				</p>
					<textarea name="cmwsecure_head" type="textarea" style="margin:0;height:20em;width:58%;" ><?php echo $cmwsecure_head; ?></textarea><br>
                    <?php submit_button(); ?><br /><br />
                </div><br />
                                
				<h2 class="cmwsecure_expand" id="cmwsecure_outside_page_open">Outside Page (Open)</h2>
                <div id="cmwsecure_outside_page_open-html" class="cmwsecure_expand-html" style="display:none">
                <p>In this area, you can stick some html outside the <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">big, light blueish box labeled "Page".</a> This is useful to stick some code in the area that would be between the body tag and where the header goes.<br />
		    </p>
                	<textarea name="cmwsecure_outside_page_open" type="textarea" style="margin:0;height:20em;width:58%;" ><?php echo $cmwsecure_outside_page_open; ?></textarea><br>
                	<?php submit_button(); ?><br /><br />
                </div><br />
                
                <h2 class="cmwsecure_expand" id="cmwsecure_outside_wrapper_open">Outside Wrapper (Open)</h2>
                <div id="cmwsecure_outside_wrapper_open-html" class="cmwsecure_expand-html" style="display:none">
                	<p>In this area, you can stick some html outside the <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">big, light greenish box labeled "Wrapper".</a> This is a great spot to put some code so your site could have a cool header.<br />
			    </p>
                    <textarea name="cmwsecure_outside_wrapper_open" type="textarea" style="margin:0;height:20em;width:58%;" ><?php echo $cmwsecure_outside_wrapper_open; ?></textarea><br>
                    <?php submit_button(); ?><br /><br />
                </div><br />
                
                <h2 class="cmwsecure_expand" id="cmwsecure_outside_content_open">Outside Content (Open)</h2>
                <div id="cmwsecure_outside_content_open-html" class="cmwsecure_expand-html" style="display:none">
                	<p>In this area, you can stick some html outside the <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">big, light reddish box labeled "Content".</a> This is super handy area used to wrap your post/page content with a style. Open your divs here and close them in "Outside Content (Close)" and style it any way you like.<br />
			    </p>
                    <textarea name="cmwsecure_outside_content_open" type="textarea" style="margin:0;height:20em;width:58%;" ><?php echo $cmwsecure_outside_content_open; ?></textarea><br>
                    <?php submit_button(); ?><br /><br />
                </div><br />
                
                <h2 class="cmwsecure_expand" id="cmwsecure_outside_content_close">Outside Content (Close)</h2>
                <div id="cmwsecure_outside_content_close-html" class="cmwsecure_expand-html" style="display:none">
                	<p>You know that code you stuck in the area "Outside Content (Open)"? This is the perfect place to close them so your site doesn't get super messed up. Just as a reminder, this is for the <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">big, light reddish box labeled "Content"?</a> <br />
			    </p>
                	<textarea name="cmwsecure_outside_content_close" type="textarea" style="margin:0;height:20em;width:58%;" ><?php echo $cmwsecure_outside_content_close; ?></textarea><br>
                	<?php submit_button(); ?><br /><br />
                </div><br />
                
                <h2 class="cmwsecure_expand" id="cmwsecure_outside_wrapper_close">Outside Wrapper (Close)</h2>
                <div id="cmwsecure_outside_wrapper_close-html" class="cmwsecure_expand-html" style="display:none">
                	<p>Did you have any divs that you opened in "Outside Wrapper (Open)"? The <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">big, light greenish box labeled "Wrapper"?</a> This is a great spot to close them. <br />
			    </p>
                	<textarea name="cmwsecure_outside_wrapper_close" type="textarea" style="margin:0;height:20em;width:58%;" ><?php echo $cmwsecure_outside_wrapper_close; ?></textarea><br>
                	<?php submit_button(); ?><br /><br />
                </div><br />
                
                <h2 class="cmwsecure_expand" id="cmwsecure_outside_page_close">Outside Page (Close)</h2>
                <div id="cmwsecure_outside_page_close-html" class="cmwsecure_expand-html" style="display:none">
                	<p>You know that code you stuck outside the <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">big, light blueish box labeled "Page"?</a> This is a very nice spot to close any divs you might have opened. <br />
					</p>
                	<textarea name="cmwsecure_outside_page_close" type="textarea" style="margin:0;height:20em;width:58%;" ><?php echo $cmwsecure_outside_page_close; ?></textarea><br>
                	<?php submit_button(); ?><br /><br />
      </div><br />
                
                <h2 class="cmwsecure_expand" id="cmwsecure_credits">Credits</h2>
                <div id="cmwsecure_credits-html" class="cmwsecure_expand-html" style="display:none">
                	<p>A great spot to stick any copyrights for the site, and scripts you want to load later on the page. This is in the <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">big, light brownish box labeled "Footer".</a><br />
			    </p>
                	<textarea name="cmwsecure_credits" type="textarea" style="margin:0;height:20em;width:58%;" ><?php echo $cmwsecure_credits; ?></textarea><br>
                	<?php submit_button(); ?><br /><br />
                </div>
                          			
            </form>
    </div>
    
    
	<?php 
	} 
	
	// Add the menu item for the admin page to the menu sidebar
	add_action( 'admin_menu', 'cmwsecure_admin' );
	add_action( 'admin_init', 'cmwsecure_admin_init' );
	

	function cmwsecure_admin() {
		
		$icon =  get_bloginfo('stylesheet_directory').'/img/cmw-admin-menu-icon.png' ;
		
        $page = add_menu_page( "CMW Secure - General Options", "CMW Secure", "edit_theme_options", "CMW-Secure", "cmwsecure_admin_page", $icon, 3.778211877821187782118 ); // To avoid conflicts and stuff (and for the lols! 7782118! LOL!).
		
		add_action('admin_print_scripts-' . $page, 'cmwsecure_admin_scripts');
	
    }
	
	
	 function cmwsecure_admin_init() {
		$url = get_bloginfo('stylesheet_directory');
		 
        wp_register_script( 'cmwsecure.js', $url . '/scripts/cmwsecure.js' );
		wp_register_style(  'cmwsecure.css', $url . '/scripts/cmwsecure.css' );
    }

    function cmwsecure_admin_scripts() {
        wp_enqueue_script( 'cmwsecure.js' );
		wp_enqueue_style( 'cmwsecure.css' );
    }
	
	
	
	
	


/* end admin page */
	
	
// The functions! 	
	function cmwsecure_head_code() {
	
		$output = get_option('cmwsecure_head');
		$output = stripslashes($output);
		
		echo $output;
	
	}
	add_action ( 'wp_head', 'cmwsecure_head_code' );
	
	
	function cmwsecure_outside_page_open() {
	
		$output = get_option('cmwsecure_outside_page_open');
		$output = stripslashes($output);
		
		echo $output;
	
	}
	add_action ( 'cmwsecure_outside_page_open', 'cmwsecure_outside_page_open' );
	
	
	function cmwsecure_outside_wrapper_open() {
	
		$output = get_option('cmwsecure_outside_wrapper_open');
		$output = stripslashes($output);
		
		echo $output;
	
	}
	add_action ( 'cmwsecure_outside_wrapper_open', 'cmwsecure_outside_wrapper_open' );
	
	
	function cmwsecure_outside_content_open() {
	
		$output = get_option('cmwsecure_outside_content_open');
		$output = stripslashes($output);
		
		echo $output;
	
	}
	add_action ( 'cmwsecure_outside_content_open', 'cmwsecure_outside_content_open' );
	
	
	function cmwsecure_outside_content_close() {
	
		$output = get_option('cmwsecure_outside_content_close');
		$output = stripslashes($output);
		
		echo $output;
	
	}
	add_action ( 'cmwsecure_outside_content_close', 'cmwsecure_outside_content_close' );
	
	
	function cmwsecure_outside_wrapper_close() {
	
		$output = get_option('cmwsecure_outside_wrapper_close');
		$output = stripslashes($output);
		
		echo $output;
	
	}
	add_action ( 'cmwsecure_outside_wrapper_close', 'cmwsecure_outside_wrapper_close' );
	
	
	function cmwsecure_outside_page_close() {
	
		$output = get_option('cmwsecure_outside_page_close');
		$output = stripslashes($output);
		
		echo $output;
	
	}
	add_action ( 'cmwsecure_outside_page_close', 'cmwsecure_outside_page_close' );
	
	
	function cmwsecure_credits() {
	
		$output = get_option('cmwsecure_credits');
		$output = stripslashes($output);
		
		echo $output;
	
	}
	add_action ( 'cmwsecure_credits', 'cmwsecure_credits' );


// Widgets and Sidebars
function cmwsecure_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Main Sidebar', 'twentytwelve' ),
		'id' => 'sidebar-1',
		'description' => __( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'twentytwelve' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'cmwsecure_widgets_init' );


// front end scripts
function cmwsecure_front_scripts() {
	wp_enqueue_script("jquery"); 

}


// Activate!
add_action('wp_enqueue_scripts', 'cmwsecure_front_scripts');


// Checkout extra stuff  Custom Checkout HTML custom_checkout_html_
function cmwsecure_add_meta_box() {

	add_meta_box( 'cmwsecure-custom-checkout-html', 'Custom Top Level HTML', 'cmwsecure_inner_meta_box', 'page', 'normal', 'high' );

}

/* Prints the box content */
function cmwsecure_inner_meta_box( $post ) {

	// Use nonce for verification
	wp_nonce_field( plugin_basename( __FILE__ ), 'cmwsecure_meta_box_noncename' );
	
	// Use get_post_meta to retrieve an existing value from the database and use the value for the form
	$value = get_post_meta( $post->ID, '_cmwsecure_custom_checkout_html_meta_box', true ); ?>    

    <p>Sometimes you want the checkout page to do a little... "reinforcing" of the sale. This is where Top Level HTML comes in. This area allows you to stick some HTML above all the fields in the check out page. See, it goes where this <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/top-level-html.png' ; ?>" target="_blank">orange box</a> is. That means it's above the <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">content and sidebar</a>.</p>
    <br />
   	<label for="cmwsecure_meta_box">Enter custom top level HTML below:</label> <strong>HTML is recommended.</strong> And make sure it's good code, cause otherwise it could mess things up bad. But that's pretty much standard anywhere you code.<br />
	<table width="100%">
    	<tr>
        	<td width="100%">
	<textarea id="cmwsecure_custom_checkout_html_meta_box" name="cmwsecure_custom_checkout_html_meta_box" style="width: 100%; height:400px;"><?php echo esc_attr($value); ?></textarea>
			</td>
        </tr>
    </table>
    <?php
}



/* When the post is saved, saves our custom data */
function cmwsecure_meta_box_save_postdata( $post_id ) {
	
	// First we need to check if the current user is authorised to do this action. 
	if ( 'page' == $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) 
			return;
	}
	
	// Secondly we need to check if the user intended to change this value.
	if ( ! isset( $_POST['cmwsecure_meta_box_noncename'] ) || ! wp_verify_nonce( $_POST['cmwsecure_meta_box_noncename'], plugin_basename( __FILE__ ) ) )
		return;
	
	// Thirdly we can save the value to the database
	
	$post_ID = $_POST['post_ID'];
	
	$mydata =  $_POST['cmwsecure_custom_checkout_html_meta_box'];
	
	update_post_meta($post_ID, '_cmwsecure_custom_checkout_html_meta_box', $mydata);

}

add_action( 'add_meta_boxes', 'cmwsecure_add_meta_box' );
add_action( 'save_post', 'cmwsecure_meta_box_save_postdata' );


function cmwsecure_custom_checkout_html() {
	
	$post_ID = get_the_ID();
	$output = get_post_meta($post_ID, '_cmwsecure_custom_checkout_html_meta_box', TRUE );
	$output = stripslashes($output);
	$output = '<div style="margin-top: 10px;" class="entry-content">'.$output.'</div>';
	
	echo $output;

}
add_action ( 'cmwsecure_custom_checkout_html', 'cmwsecure_custom_checkout_html' );
?>