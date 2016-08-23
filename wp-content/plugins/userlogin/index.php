<?php
/**
 * Plugin Name: Logga in
 * Plugin URI: 
 * Description: this plugin allows user to sign in and send email to the admin
 * Version: 1.0.0
 * Author: Johan Wendin
 * Author URI: http://danielpataki.com
 * License: GPL2
 */

     require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

     require_once( ABSPATH . '/wp-includes/pluggable.php' );

if( !class_exists('user') ):

	//echo "user";

/**
* 
*/
class user
{


	
	function __construct()
	{
		//echo "init";





		global $wpdb;


		$table_name = $wpdb->prefix . "kund"; 




		if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {

			$sql = "CREATE TABLE $table_name (
          id mediumint(9) NOT NULL AUTO_INCREMENT,
          registration text NOT NULL,
          phone text NOT NULL,
          email text NOT NULL,
          firstname text NOT NULL,
          lastname text NOT NULL,
          UNIQUE KEY id (id)
     ) $charset_collate;";



     

     dbDelta( $sql );



		}else{




		}



				// actions
	
		add_action('init', array($this, 'init'), 1);

			/*

		add_action('get_post_id', array($this, 'get_post_id'), 1);

		add_action('check_user','check_user');
		*/

	}



//Get the puser post id
function get_post_id(){



}


function create_kund() {



}



//add_action('wp_loaded', 'check_user');

function check_user($reg, $numb){

	session_start();


//echo $_POST['ID'];

		if ($_POST['ID'] == 4 ){


	global $wpdb;


	$reg = str_replace(' ', '', $reg);


	$length =  strlen($reg);




	//check if form fields are empty


				if (isset($reg) && !empty($reg)) {

					if ($length != 6) {

						$error = 'Ditt nummer är för långt';
						    if(!session_id()) {
        					
    					}

						$_SESSION['error_msg'] = $error;
						return false;

					}



				$reg = $_POST['reg'];
				$reg = str_replace(' ', '', $reg);
				$reg = strtolower($reg);

			}else{



				$error = "du måste ange ett riktigt registreringsnummer";
				//setcookie('error',$error);
				wp_redirect(bloginfo('url') . '/?error='.$error.'');
				exit;

			}


			if (isset($numb) && !empty($numb)) {

				$phone = $_POST['phone'];

			}else{



				$error = "ange ett telefonnummer";

				//setcookie('error',$error);
				wp_redirect(get_bloginfo('url') . '/?error='.$error.'');
				exit;
			}


// check if user exist


$result = $wpdb->get_results("SELECT * FROM wp_kund WHERE registration='$reg'", OBJECT);

//print_r($result);



if (isset($result) && !empty($result)) {

  // do something
//user exists

//echo "string";


wp_redirect(''. get_bloginfo('url') .'/boka-tid?reg='.$reg.'');
exit;





}else {

	//echo "create customer";





	if($wpdb->insert($wpdb->prefix . "kund", 

		array(

			'registration' => $reg,
			'phone' => $phone

		),

		array(
			'%s'
			)
	)){

wp_redirect(''. get_bloginfo('url') .'/boka-tid?reg='.$reg.'');
exit;

	}



  //if user doesnt exist, create




}






	}





}




function save_post( $post_id )
	{
		
		// load from post
		if( !isset($_POST['fields']) )
		{
			return $post_id;
		}
		

		// loop through and save
		if( !empty($_POST['fields']) )
		{
			// loop through and save $_POST data
			foreach( $_POST['fields'] as $k => $v )
			{
				// get field
				$f = apply_filters('acf/load_field', false, $k );
				
				// update field
				do_action('acf/update_value', $v, $post_id, $f );
				
			}
			// foreach($fields as $key => $value)
		}
		// if($fields)
		
		
		return $post_id;
	}


		function init()
	{


				// Create user post type
		$labels = array(
		    'name' => __( 'Kundlista', 'user' ),
			'singular_name' => __( 'Advanced Custom Fields', 'user' ),
		    'add_new' => __( 'Add New' , 'user' ),
		    'add_new_item' => __( 'Add New Field Group' , 'user' ),
		    'edit_item' =>  __( 'Edit Field Group' , 'user' ),
		    'new_item' => __( 'New Field Group' , 'user' ),
		    'view_item' => __('View Field Group', 'user'),
		    'search_items' => __('Search Field Groups', 'user'),
		    'not_found' =>  __('No Field Groups found', 'user'),
		    'not_found_in_trash' => __('No Field Groups found in Trash', 'user'), 
		);
		
		register_post_type('user', array(
			'labels' => $labels,
			'public' => false,
			'show_ui' => true,
			'_builtin' =>  false,
			'capability_type' => 'page',
			'hierarchical' => true,
			'rewrite' => false,
			'query_var' => "user",
			'supports' => array(
				'title','editor'
			),
			'show_in_menu'	=> true,
		));


				// admin only
		if( is_admin() )
		{
			add_action('admin_menu', array($this,'admin_menu'));

		}

	}


		function admin_menu()
	{
		add_menu_page(__("Kundlista",'user'), __("Kundlista",'user'), 'manage_options', 'edit.php?post_type=user', false, false, '80.025');
	}

	

}



function user()
{
	global $user;
	
	if( !isset($user) )
	{
		$reg = new user();



		if (isset($_POST['reg'])) {

			$reg->check_user($_POST['reg'], $_POST['phone']);

		}
		



	}
	
	return $user;
}




// initialize
$user = user();




endif; // class_exists check