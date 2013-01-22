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
		
		
	?>
	
    <div class="wrap">
        
         <form name="cmwsecure_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
            	<input type="hidden" name="cmwsecure_form" value="Y">		
                
                <h2>Welcome, peeps, to CMW Secure's settings page!</h2>
                <p>Welcome to the awesome page that is of the most awesome CloneMyWebsite&trade; skeletal theme there is! Yeah, I know that sentence didn't make sense, but I'll fix it later. Truthfully, it's just filler to make this part of the page look bigger so it "flows well".</p>
                <p>Just click on the big words below to expand the page for more options. And <a href="<?php echo get_bloginfo('stylesheet_directory') .'/img/structure.png' ; ?>" target="_blank">this chart</a> might help.</p>
                <p>And just so you know, only the "Head code" and "Credits" show up on the bump page templates.</p>
           	
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

?>