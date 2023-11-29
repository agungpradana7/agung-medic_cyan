<?php if (!defined('_VALID_BBC')) exit('No direct script access allowed');
_func('medic');
$r = explode(' ', $config['submenu']);
$y = @$r[0] == 'top' ? 'top' : '';
$x = @$r[1] == 'left' ? 'left' : '';

// echo menu_home($menus, $y='', $x='', $level = -1);
echo medic_menu_horizontal($menus, $y, $x);
