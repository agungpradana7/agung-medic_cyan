<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');

function medic_menu_horizontal($menus, $y = '', $x = '', $level = -1) // $y = 'down' || 'top' AND $x = 'right'|| 'left'
{
  $output = '';
  if (!empty($menus)) {
    $highlight = menu_parent_ids(@$_GET['menu_id'], $menus);
    if ($level == -1) {
      $output = call_user_func(__FUNCTION__, menu_parse($menus), $y, $x, ++$level);
    } else
		if (empty($level)) {
      $cls = !empty($y) ? ' nav-' . $y : '';
      $cls .= !empty($x) ? ' nav-' . $x : '';
      $out = '';
      foreach ($menus as $menu) {
        $sub = call_user_func(__FUNCTION__, $menu['child'], $y, $x, ++$level);
        if (!empty($sub)) {
          $act = in_array($menu['id'], $highlight) ? ' active' : '';
          $out .= '<li class="' . $act . '"><a role="button" data-toggle="dropdown" tabindex="-1" href="' . $menu['link'] . '" title="' . $menu['title'] . '">' . $menu['title'] . ' <b class="caret"></b></a>' . $sub . '</li>';
        } else {
          $act = in_array($menu['id'], $highlight) ? ' class="active"' : '';
          $out .= '<li' . $act . '><a href="' . $menu['link'] . '" title="' . $menu['title'] . '">' . $menu['title'] . '</a></li>';
        }
      }
      $output = '<nav class="navbar navbar-default"><div class="container"><div class="navbar-header"><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"><ul class="nav navbar-nav">' . $cls . '' . $out . '</div></ul></div></div></nav>';
    } else {
      $out = '';
      foreach ($menus as $menu) {
        $sub = call_user_func(__FUNCTION__, $menu['child'], $y, $x, ++$level);
        if (!empty($sub)) {
          $act = in_array($menu['id'], $highlight) ? ' active' : '';
          $out .= '<li class="dropdown-submenu' . $act . '"><a tabindex="-1" href="' . $menu['link'] . '" title="' . $menu['title'] . '">' . $menu['title'] . '</a>' . $sub . '</li>';
        } else {
          $act = in_array($menu['id'], $highlight) ? ' class="active"' : '';
          $out .= '<li' . $act . '><a href="' . $menu['link'] . '" title="' . $menu['title'] . '">' . $menu['title'] . '</a></li>';
        }
      }
      $output = '<ul class="dropdown-menu" role="menu">' . $out . '</ul>';
    }
  }
  return $output;
}
