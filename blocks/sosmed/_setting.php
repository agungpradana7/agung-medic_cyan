<?php  if ( ! defined('_VALID_BBC')) exit('No direct script access allowed');

// include_once _ROOT.'templates/medic_cyan/blocks/sosmed/sosmed.html.php';
$_setting = array (
    'open' => array(
        'text'      => 'Sample Text Input',
        'help'      => 'popup tips to display right after the title',
        'type'      => 'text', // type of input
        'language'  => true, 	// is input support multiple language, default value is false
        'attr'      => ' size="40"', // additional attribute for the input
        'default'   => 'Opening Hours : Saturday to Tuesday - 8am to 10pm',
        'mandatory' => 1, // is this field must be filled in (compulsory). Eg. 1 or 0
        'checked'   => 'any'	// validate input before it save in database eg. 'any' || 'email' || 'url' || 'phone' || 'number' default is 'any'
    ),
    'facebook' => array(
        'text'      => 'Facebook',
        'help'      => 'popup tips to display right after the title',
        'type'      => 'text', // type of input
        'language'  => true, 	// is input support multiple language, default value is false
        'attr'      => ' size="40"', // additional attribute for the input
        'default'   => 'Masukkan Link Facebook',
        'mandatory' => 1, // is this field must be filled in (compulsory). Eg. 1 or 0
        'checked'   => 'any'	// validate input before it save in database eg. 'any' || 'email' || 'url' || 'phone' || 'number' default is 'any'
    ),
    'twitter' => array(
        'text'      => 'Twitter',
        'help'      => 'popup tips to display right after the title',
        'type'      => 'text', // type of input
        'language'  => true, 	// is input support multiple language, default value is false
        'attr'      => ' size="40"', // additional attribute for the input
        'default'   => 'Masukkan Link Twitter',
        'mandatory' => 1, // is this field must be filled in (compulsory). Eg. 1 or 0
        'checked'   => 'any'	// validate input before it save in database eg. 'any' || 'email' || 'url' || 'phone' || 'number' default is 'any'
    ),
    'google' => array(
        'text'      => 'Google +',
        'help'      => 'popup tips to display right after the title',
        'type'      => 'text', // type of input
        'language'  => true, 	// is input support multiple language, default value is false
        'attr'      => ' size="40"', // additional attribute for the input
        'default'   => 'Masukkan Link Google +',
        'mandatory' => 1, // is this field must be filled in (compulsory). Eg. 1 or 0
        'checked'   => 'any'	// validate input before it save in database eg. 'any' || 'email' || 'url' || 'phone' || 'number' default is 'any'
    ),
    'instagram' => array(
        'text'      => 'Instagram',
        'help'      => 'popup tips to display right after the title',
        'type'      => 'text', // type of input
        'language'  => true, 	// is input support multiple language, default value is false
        'attr'      => ' size="40"', // additional attribute for the input
        'default'   => 'Masukkan Link Instagram',
        'mandatory' => 1, // is this field must be filled in (compulsory). Eg. 1 or 0
        'checked'   => 'any'	// validate input before it save in database eg. 'any' || 'email' || 'url' || 'phone' || 'number' default is 'any'
    ),
    'pinterest' => array(
        'text'      => 'Pinterest',
        'help'      => 'popup tips to display right after the title',
        'type'      => 'text', // type of input
        'language'  => true, 	// is input support multiple language, default value is false
        'attr'      => ' size="40"', // additional attribute for the input
        'default'   => 'Masukkan Link Pinterest',
        'mandatory' => 1, // is this field must be filled in (compulsory). Eg. 1 or 0
        'checked'   => 'any'	// validate input before it save in database eg. 'any' || 'email' || 'url' || 'phone' || 'number' default is 'any'
    ),
);
?>