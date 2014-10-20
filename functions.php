<?php

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','gallery'));
set_post_thumbnail_size(308, 209, true);

add_action('after_setup_theme', 'default_attachment_display_settings');
function default_attachment_display_settings() {
  update_option('image_default_align', 'left');
  update_option('image_default_link_type', 'none');
  update_option('image_default_size', 'large');
}

add_action('widgets_init', 'register_my_sidebars');
function register_my_sidebars() {
  register_sidebar(
    array(
      'id'            => 'blog',
      'name'          => __( 'Blog Sidebar' ),
      'description'   => __( 'Sidebar for Blog Category' ),
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '',
      'after_title'   => ''
    )
  );
}
register_nav_menu('primary', 'Primary Menu');

add_action('wp_footer', 'js_footer_scripts');
function js_footer_scripts(){
	wp_enqueue_script( 'jquery 1.10.2'
                    , 'http://code.jquery.com/jquery-1.10.2.min.js' );
	wp_enqueue_script( 'bootstrap'
                    , get_template_directory_uri() . '/js/bootstrap.min.js' );
	wp_enqueue_script( 'my js'
                    , get_template_directory_uri() . '/js/my.js' );
	wp_enqueue_script('preload images'
                    , get_template_directory_uri() . '/js/preloadImages.js' );
}

add_action('wp_head', 'send_my_form');
function send_my_form(){
  if(isset($_POST['fstname']) and isset($_POST['lstname']) and isset($_POST['email']) and isset($_POST['message'])) {
    $form = array();
    $form['fstname']  = $_POST['fstname'];
    $form['lstname']  = $_POST['lstname'];
    $form['email']    = $_POST['email'];
    $form['message']  = $_POST['message'];

    $send_to  = 'nicole@allwhowanderevents.com';
    $subject  = 'You\'ve recieved an email from' . $form['fstname'] . $form['fstname'];
    $return   = "-f" . $send_to;

    $message  = "First Name: " . $form['fstname'] . "\r\n";
    $message .= "Last Name: " . $form['lstname'] . "\r\n";
    $message .= "Email: " . $form['email'] . "\r\n";
    $message .= "Message: " . $form['message'] . "\r\n";

    $headers  = 'MIME-Version: 1.0' . '\r\n';
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . '\r\n';
    $headers .= 'From: ' . $send_to . '\r\n';
    $headers .= 'Reply-To: ' . $form['email'] . '\r\n';
    $headers .= 'Return-Path: ' . $send_to . '\r\n';
    $headers .= '\r\nX-Mailer: PHP/' . phpversion();

    mail($send_to, $subject, $message, $headers, $return);
  }
}

?>

<?php add_action('wp_footer', 'add_googleanalytics');

function add_googleanalytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47418401-1', 'allwhowanderevents.com');
  ga('send', 'pageview');

</script>
<?php } ?>
