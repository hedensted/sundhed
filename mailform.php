<?php
        
if (!empty($_POST)) {
	// Store data in database
        global $wpdb;
            $table = 'wp_hed766_form';
            $data = array(
		'ip' => $_SERVER['REMOTE_ADDR'],
                'fullname' => sanitize_text_field($_POST['fullname']),
                'phone'    => sanitize_text_field($_POST['phone'])
            );
            $format = array(
		'%s',
                '%s',
                '%s'
            );

            $success=$wpdb->insert( $table, $data, $format );

            if($success){
// Kvitteringsteksten kommer nedenfor 
?>


<div id="kvittering">
<h3>Tak for din tilmelding</h3>
</br>
<p>Du vil blive kontaktet af en sundhedskonsulent, så vi kan finde en tid der passer dig.</p>
</div>

<?php
	            // Send e-mail
					$to = "sundhedskonsulenterne@hedensted.dk";
					$subject = "Sundhedskampagne - tilmelding";
					$headers = 'From: Post Web <web@hedensted.dk>' . "\r\n";
					$message = "Der er modtaget en tilmelding fra:\n\n" . sanitize_text_field($_POST['fullname']) . "\nTlf: " . sanitize_text_field($_POST['phone']);
				   wp_mail( $to, $subject, $message,$headers);
	    } else {
		    		echo 'Der skete en fejl. Pr&oslash;v igen senere';

	    }
	  
} else {

?>

<h3>M&aring; vi kontakte dig?</h3>
<form method="POST" action="#" name="contactform" id="contactform" data-abide>
<div id="name-field">
<label>Navn:
<input type="text" required id="fullname" name="fullname"/>
<small class="error">Indtast navn</small>
</label>
</div>
<div id="phone-field">
<label>Telefon:
<input type="text" required pattern="[0-9 ]+" id="phone" name="phone"/>
<small class="error">Indtast telefonnummer</small>
</label>
</div>
<button type="submit">Tilmeld</button>
</form>
<?php
}
?>