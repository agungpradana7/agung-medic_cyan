<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

// include_once _ROOT.'templates/medic_cyan/blocks/sosmed/sosmed.html.php';
$_setting = array(
  'image' => array(
  'text' => 'Image',
  'type' => 'text',
  'attr' => 'id="txtUrl"',
  'tips' => '<span class="btn btn-default btn-secondary" onclick="return browse(this);">Browse</span> or leave it blank to sycronize image logo with site main logo'
  ),
  'description'=> array(
    'text'      => 'Dekripsi',
    'type'      => 'text', // type of input
    'language'  => true,   // is input support multiple language, default value is false
    'default'   => 'Masukkan Deskripsi Anda',
  ),
  'location'    => array(
    'text'      => 'Location',
    'type'      => 'text', // type of input
    'language'  => true,   // is input support multiple language, default value is false
    'default'   => 'Masukkan Lokasi',
  ),
  'email'       => array(
    'text'      => 'Email',
    'type'      => 'text', // type of input
    'language'  => true,   // is input support multiple language, default value is false
    'default'   => 'Masukkan Email Anda',
  ),
  'phone_number'=> array(
    'text'      => 'Phone Number',
    'type'      => 'text', // type of input
    'language'  => true,   // is input support multiple language, default value is false
    'default'   => 'Masukkan Nomor Telepon Anda',
  ),
  'facebook'    => array(
    'text'      => 'Facebook',
    'type'      => 'text', // type of input
    'language'  => true,   // is input support multiple language, default value is false
    'default'   => 'Masukkan Link Facebook',
  ),
  'twitter'     => array(
    'text'      => 'Twitter',
    'type'      => 'text', // type of input
    'language'  => true,   // is input support multiple language, default value is false
    'default'   => 'Masukkan Link Twitter',
  ),
  'linkedin'    => array(
    'text'      => 'Linked In',
    'type'      => 'text', // type of input
    'language'  => true,   // is input support multiple language, default value is false
    'default'   => 'Masukkan Link Linked In',
  ),
  'vimeo'       => array(
    'text'      => 'Vimeo',
    'type'      => 'text', // type of input
    'language'  => true,   // is input support multiple language, default value is false
    'default'   => 'Masukkan Link Video',
  ),
);
?>
<script type="text/JavaScript">
function browse()
{
	var theURL = "<?php echo _URL;?>user/files/?editor=form&filemanagerPath=images/uploads/";
	wt = this.open(theURL, 'filemanager',	"width=820, height=510, align=top, scrollbars=auto, status=no, resizable=yes");
	wt.window.focus();
	return false;
}
</script>