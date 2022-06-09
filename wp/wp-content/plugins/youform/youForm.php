<?php
/**
 * @package YouForm
 * @version 1.0.0
 */
/*
Plugin Name: YouForm
Plugin URI: http://localhost/wordpress/plugins/youForm/
Description: Une extension qui ajoute plus d'informations de l'utilisateur au moment de l'inscription sur le site
Author: Jean Paul SOSSAH
Version: 1.0.0
Author URI: http://localhost/wordpress/
*/



add_action( 'register_form', 'you_form_add_fields');

function you_form_add_fields() 
{
    //ajout des champs dans le formulaire d'enregistrement
    $city = $_POST['city'] ?? '';
    $country = $_POST['country'] ?? '';
    $phone = $_POST['phone'] ?? '';

    ?>

    <p>
        <label for="city">Ville<br />
        <input type="text" id="city" name="city" class="input" size="30" value="<?php echo esc_attr($city);?>"></label>
    </p>
    <p>
        <label for="country">Pays<br />
        <input type="text" id="country" name="country" class="input" size="30" value="<?php echo esc_attr($country);?>"></label>
    </p>
    <p>
        <label for="phone">Téléphone<br />
        <input type="number" id="phone" name="phone" class="input" size="20" value="<?php echo esc_attr($phone);?>"></label>
    </p>
<?php }
