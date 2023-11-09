<?php
$routes['default_controller'] = 'home';

$routes['hoc-sinh'] = 'student/index';
$routes['trang-chu'] = 'home';
$routes['tin-tuc/.+-(\d+)'] = 'grade/category/$1';
