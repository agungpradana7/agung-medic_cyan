<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

if (!empty($cat['list']) && is_array($cat['list'])) {
?>
  <?php
  foreach ($cat['list'] as $data) {
    $content = substr($data['content'], 0, 200);
    ?>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="team-member">
        <img src="<?php echo $data['image'] ?>" alt="doctor" class="img-responsive">
        <div class="contents text-center">
          <h4><?php echo $data['title'] ?></h4>
          <p><?php echo $content ?></p>
          <a href="<?php echo content_link($item['id'], $item['title']) ?>" class="btn btn-main"><?php echo lang('read more') ?></a>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
<?php
}