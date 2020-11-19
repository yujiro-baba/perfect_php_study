<?php

require 'core/ClassLoader.php';

//coreディレクトリ、modelsディレクトリ以下のディレクトリをオートロード対象ディレクトリに設定
$loader = new ClassLoader();
$loader->registerDir(dirname(__FILE__).'/core');
$loader->registerDir(dirname(__FILE__).'/models');
$loader->register();

?>