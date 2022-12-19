<?php
   
   // Ajax started//
   if(is_user_logged_in()) {
    add_action( 'wp_ajax_get_ajaxLoginform', 'get_ajaxLoginform' );
   }else {
    add_action( 'wp_ajax_nopriv_get_ajaxLoginform', 'get_ajaxLoginform' );
   }

   function get_ajaxLoginform() {

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://app.cinchshare.com/frontEnd/login/userName',
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS => array('Username' => ''.$email.'','password' => ''.$pass.''),
      CURLOPT_HTTPHEADER => array(
        'Content-Type: multipart/form-data'
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
    die();
  }

  
add_action( 'gform_confirmation_5', 'pre_submission_handler', 10, 4 );

function pre_submission_handler($confirmation, $form, $entry ) {
      $body     = array(
      'fname' => rgar( $entry, '1.3' ),
      'lname'  => rgar( $entry, '1.6' ),
      'timezone'  => rgar( $entry, '4' ),
      'email'    => rgar( $entry, '5' ),
      'password'    => rgar( $entry, '6' ),
      'promo'    => rgar( $entry, '8' ),
	  
    );

    $fname = $body['fname'];
		$lname = $body['lname'];
		$timezone = $body['timezone'];
		$email = $body['email'];
		$password = $body['password'];
		$promo = $body['promo'];
		$affiliatetoken = $_COOKIE['a'];
		$folderid = $_COOKIE['folderid'];


	

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://app.cinchshare.com/frontEnd/create?a=' .$affiliatetoken. '&folderid='.$folderid,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array('firstName' => ''.$fname.'','lastName' => ''.$lname.'','timezoneId' => ''.$timezone.'','email'=>''.$email.'', 'password' => ''.$password.'','promoCode' => ''.$promo.''),
			CURLOPT_HTTPHEADER => array(
				'Content-Type: multipart/form-data'
			),
		));

		$response = curl_exec($curl);
 
		curl_close($curl);
		$res = json_decode($response);

		if($res->ErrorMessage == null && $res->Redirect){
			
			wp_redirect('https://app.cinchshare.com/frontend/settoken?token=' . $res->Token .'&url=' .$res->Redirect);
			exit;
		} else {
      $confirmation = '<span style = "color:#c02b0a; font-size:20px;text-decoration: underline;font-weight: bold;">'.$res->ErrorMessage.'</span>';
      return $confirmation;
    }
}


add_filter( 'gform_confirmation_6', 'custom_confirmation', 10, 4 );

function custom_confirmation($confirmation,$form, $entry) {
  $body     = array(
    'first_name' => rgar( $entry, '1' ),
    'last_name'  => rgar( $entry, '3' ),
    'email'    => rgar( $entry, '4' ),
    'postId'    => rgar( $entry, '6' ),
  );

  $confirmation = array( 'redirect' => get_field('post_download_file', $body['postId']) );
  return $confirmation;
} 

add_action( 'gform_confirmation_3', 'affiliate_form', 10, 4 );

function affiliate_form($confirmation,$form, $entry) {
  $body     = array(
    'crinshareUser'  => rgar( $entry, '3' ),
    'faviourtFeature'  => rgar( $entry, '4' ),
    'name'  => rgar( $entry, '8.3' ),
    'email'  => rgar( $entry, '9' ),
    'title'  => rgar( $entry, '17' ),
    'companyName'  => rgar( $entry, '14' ),
    'experience'  => rgar( $entry, '16' ),
    'website'  => rgar( $entry, '19' ),
    'facebookUrl'  => rgar( $entry, '20' ),
    'twitterUrl'  => rgar( $entry, '23' ),
    'instagramUrl'  => rgar( $entry, '22' ),
    'printrestProfile'  => rgar( $entry, '21' ),
    'directSale'  => rgar( $entry, '24' ),
    'team_size'  => rgar( $entry, '27' ),
    'events'  => rgar( $entry, '26' ),
  );

  $crinshareUser = $body['crinshareUser'];
  $faviourtFeature = $body['faviourtFeature'];
  $name = $body['name'];
  $email = $body['email'];
  $title = $body['title'];
  $companyName = $body['companyName'];
  $experience = $body['experience'];
  $website = $body['website'];
  $facebookUrl = $body['facebookUrl'];
  $twitterUrl = $body['twitterUrl'];
  $instagramUrl = $body['instagramUrl'];
  $printrestProfile = $body['printrestProfile'];
  $directSale = $body['directSale'];
  $team_size = $body['team_size'];
  $events = $body['events'];

  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://preview.cinchshare.com/frontEnd/affiliate/submit',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('name' => ''.$name.'','company' => ''.$companyName.'','feature' => ''.$faviourtFeature.'','experience' => ''.$experience.'','email' => ''.$email.'','title' => ''.$title.'','website' => ''.$website.'','facebook' => ''.$facebookUrl.'','twitter' => ''.$twitterUrl.'','instagram' => ''.$instagramUrl.'','pinterest' => ''.$printrestProfile.'','inDirectSales' => ''.$directSale.'','isUser' => ''.$crinshareUser.'','team_size' => ''.$team_size.'','events' => ''.$events.''),
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  $res = json_decode($response);
  var_dump($response);

  if($res->ErrorMessage == null && $res->Redirect == null){
    wp_redirect('/affiliate-application/thank-you/');
    exit;
  }else {
    $confirmation = '<span style = "color:#c02b0a; font-size:20px;text-decoration: underline;font-weight: bold;">'.$res->ErrorMessage.'</span>';
    return $confirmation;
  }
}



add_action( 'gform_confirmation_7', 'pre_submission_handler2', 10, 4 );

function pre_submission_handler2($confirmation, $form, $entry ) {
    $body     = array(
      'fname' => rgar( $entry, '1.3' ),
      'lname'  => rgar( $entry, '1.6' ),
      'timezone'  => rgar( $entry, '4' ),
      'email'    => rgar( $entry, '5' ),
      'password'    => rgar( $entry, '6' ),
      'promo'    => rgar( $entry, '8' ),
    );

    $fname = $body['fname'];
	$lname = $body['lname'];
	$timezone = $body['timezone'];
	$email = $body['email'];
	$password = $body['password'];
	$promo = $body['promo'];

	$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => 'https://app.cinchshare.com/frontEnd/create',
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'POST',
			CURLOPT_POSTFIELDS => array('firstName' => ''.$fname.'','lastName' => ''.$lname.'','timezoneId' => ''.$timezone.'','email'=>''.$email.'', 'password' => ''.$password.'','promoCode' => 'thanks30'),
			CURLOPT_HTTPHEADER => array(
				'Content-Type: multipart/form-data'
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$res = json_decode($response);

		if($res->ErrorMessage == null && $res->Redirect){
			wp_redirect('/login');
			exit;
		} else {
      $confirmation = '<span style = "color:#c02b0a; font-size:20px;text-decoration: underline;font-weight: bold;">'.$res->ErrorMessage.'</span>';
      return $confirmation;
    }
}

add_action( 'gform_confirmation_8', 'pre_submission_handler3', 10, 4 );

function pre_submission_handler3($confirmation, $form, $entry ) {
    $body     = array(
      'email'    => rgar( $entry, '1' )
    );

	$email = $body['email'];

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://app.cinchshare.com/frontEnd/requestpasswordreset',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'POST',
		  CURLOPT_POSTFIELDS => array('email' => ''.$email.''),
		  CURLOPT_HTTPHEADER => array(
			 'Content-Type: multipart/form-data'
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		
		$res = json_decode($response);
		
		if(!$res->error && $res->ErrorMessage == null){
			$confirmation = '<p style = "color:#5433ed; font-size:20px; padding:10px; margin-bottom:20px; border:2px solid #e5e7eb; border-radius:0.5rem">'.$res->SuccessMessage.'</p><a href = "/forgot-password">Re-send Email</a>';
		  	return $confirmation;
		} else {
		  $confirmation = '<p style = "color:#5433ed; font-size:20px; padding:10px; margin-bottom:20px; border:2px solid #e5e7eb; border-radius:0.5rem">'.$res->ErrorMessage.'</p><a href = "/forgot-password">Re-send Email</a>';
		  return $confirmation;
		}
}