<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed'); ?>

<section class="appoinment-section section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="accordion-section">
          <div class="section-title">
            <h3><?php echo lang('FAQ') ?></h3>
          </div>
          <div class="accordion-holder">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                  <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      <?php echo lang('Why Should I choose Medical Health') ?>
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <?php echo lang('Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                    vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent
                    heard of them accusamus labore sustainable VHS.') ?>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <?php echo lang('What are the Centre visiting hours?') ?>
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <?php echo lang('Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                    vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent
                    heard of them accusamus labore sustainable VHS.') ?>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      <?php echo lang('How many visitors are allowed?') ?>
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <?php echo lang('Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                    sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                    helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                    vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably havent
                    heard of them accusamus labore sustainable VHS.') ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="contact-area">
          <div class="section-title">
            <h3><?php echo lang('Request') ?>
              <span><?php echo lang('Appointment') ?></span>
            </h3>
          </div>
          <?php
          if (config('testimonial', 'avatar') == '1') {
            $auth   = user_auth('You must validate your profile');
          }
          if (!$sys->menu_real) {
            $sys->nav_change(lang('Testimonial'), 'testimonial');
            $sys->nav_add(lang('Post Testimonial'));
          }
          $params = array(
            'title'      => 'Use form below',
            'table'      => 'testimonial',
            'config_pre' => array(
              'name' => array(
                'text'      => 'Name',
                'type'      => 'text',
                'default'   => @$auth['name'],
                'mandatory' => 1
              )
            ),
            'config'      => $db->getAll("SELECT * FROM `testimonial_field` WHERE `active`=1 ORDER BY `orderby` ASC"),
            'config_post' => array(
              'email' => array(
                'text'      => 'Email',
                'type'      => 'text',
                'default'   => @$auth['email'],
                'mandatory' => 1
              ),
              'message' => array(
                'text'      => 'Message',
                'type'      => 'textarea',
                'mandatory' => 1
              ),
              'vcode' => array(
                'text' => 'Validation Code',
                'type' => 'captcha'
              )
            ),
            'name'      => 'params',
            'id'        => 0,
            'post_func' => '_send_mail'
          );
          $form = _class('params', $params);
          $form->set_encode(false);
          echo $form->show();

          function _send_mail($form)
          {
            global $sys, $db, $Bbc, $auth;
            $conf   = get_config('testimonial', 'testimonial');
            $q      = "SELECT * FROM $form->table WHERE id=$form->table_id";
            $data   = $db->getRow($q);
            $arr    = config_decode($data['params']);
            $params = array_merge($data, $arr);
            if (!empty($auth)) {
              $arr['image'] = $auth['image'];
              $add_sql      = ', `params`=\'' . json_encode($arr) . '\'';
            } else {
              $add_sql = '';
            }

            $q    = "UPDATE $form->table SET `date`=NOW(){$add_sql}, publish=" . @intval($conf['approved']) . " WHERE id=$form->table_id";
            $db->Execute($q);
            unset($params['id'], $params['date'], $params['publish'], $params['params']);
            if ($conf['alert']) {
              $d = 'User Profile :';
              foreach ($params as $key => $value) {
                $d .= "\n" . $key . ' : ' . $value;
              }
              $params['detail'] = $d;
              $email = is_email($conf['email']) ? $conf['email'] : config('email', 'address');
              $to = array($data['email'], $email);
              $sys->mail_send($to, 'testimonial', $params);
            }
            $message = $sys->text_replace(lang('finished'));
            $_SESSION['testimonial'] = $message;
            redirect($Bbc->mod['circuit'] . '.form-finished');
          }
          ?>
          
        </div>
      </div>
    </div>
  </div>
</section>