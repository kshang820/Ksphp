<?php
include 'Loader.php'; // 引入加载器
spl_autoload_register('Loader::autoload', true, true);
$app = new \Kscore\Application();
return $app;