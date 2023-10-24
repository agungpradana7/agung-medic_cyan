<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>

<div class="list-group">
  <ul class="list-unstyled">
    <?php
    foreach ($output['data'] as $data) {
      // pr($data)
    ?>
      <ul class="contact-info">
        <li class="item">
          <div class="icon-box">
            <i class="fa fa-envelope-o"></i>
          </div>
          <strong>Email</strong>
          <br />
          <a href="#">
            <span><?php echo $data['name'] ?></span>
          </a>
        </li>
        <li class="item">
          <div class="icon-box">
            <i class="fa fa-phone"></i>
          </div>
          <strong>Call Now</strong>
          <br />
          <span><?php echo $data['name'] ?></span>
        </li>
      </ul>
      <div class="link-btn">
        <a href="<?php echo is_url('contact/main') ?> " class="btn-style-one"><?php echo lang('Appoinment') ?></a>
      </div>
</div>
<?php
    }
    if ($output['show_js']) {
?>
  <script type="text/javascript">
    function ym_chat(a) {
      if (a == '') return true;
      b = this.open("<?php echo $output['js_link'] ?>" + a, "chat_" + a, "width=240, height=385, align=top, scrollbars=no, status=no, resizable=no");
      b.window.focus();
      return false;
    };
  </script>
<?php
    }
?>
</ul>
</div>
<?php
if (!empty($output['address'])) {
  echo '<div>' . nl2br($output['address']) . '</div>';
}
