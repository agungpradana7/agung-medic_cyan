<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>
<section class="cta">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="cta-block">
          <div class="top-doctor item">
            <?php
            $config  = $output['config'];
            $arr  = $output['data'];
            foreach ((array)$arr as $data) {
              $link = content_link($data['id'], $data['title']);
              if ($config['title']) {
                if ($config['title_link']) {
                  ?>
                  <h2><a href="<?php echo $link; ?>" title="<?php echo $data['title']; ?>"><?php echo $data['title']; ?></a></h2>
                  <?php
                } else {
                  ?>
                  <h2><?php echo $data['title']; ?></h2>
                  <?php
                }
              }
              if ($config['created'] || $config['author']) {
                ?>
                <hr />
                <div class="row">
                  <?php echo ($config['author']) ? '<div class="col-md-6"><span>' . lang('author') . $data['created_by_alias'] . '</span></div>' : ''; ?>
                  <?php echo ($config['created']) ? '<div class="col-md-6 text-right"><span>' . lang('created') . content_date($data['created']) . '</span></div>' : ''; ?>
                  <div class="clearfix"></div>
                </div>
                <?php
              }
              ?>
              <?php echo (!empty($config['thumbnail']) && !empty($data['image'])) ? content_src($data['image'], ' class="img-thumbnail pull-left" title="' . $data['title'] . '"') : ''; ?>
              <p>
                <?php echo $data['content']; ?>
              </p>
              <?php echo ($config['read_more']) ? '<a href="' . $link . '" class="readmore">' . lang('Read more') . '</a>' : ''; ?>
              <div class="clearfix"></div>
              <?php
              if ($config['tag']) {
                $r = content_category($data['id'], $config['tag_link']);
                echo '<div>' . lang('Tags') . implode(' ', $r) . '</div>';
              }
              if ($config['rating'] || $config['modified']) {
                ?>
                <div class="row">
                  <?php
                  if ($config['rating']) {
                    ?>
                    <div class="col-md-6 no-both">
                      <?php echo rating($data['rating']); ?>
                    </div>
                    <?php
                  }
                  if (empty($data['revised'])) {
                    $config['modified'] = 0;
                  }
                  if (!empty($config['modified'])) {
                    ?>
                    <div class="col-md-6 no-left text-right">
                      <em class="text-right pull-right"><?php echo lang('modified') . content_date($data['modified']); ?></em>
                    </div>
                    <?php
                  }
                  ?>
                  <div class="clearfix"></div>
                </div>
            <?php
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>