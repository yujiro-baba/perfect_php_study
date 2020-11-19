<?php

class ClassLoader {
	protected $dirs;

	//オートローダークラスの登録用関数
	public function register() {
		//呼び出されたクラスが未定義の場合に実行する関数を指定する。
		sql_autoload_register(array($this, 'loadClass'));
	}

	//オートロード対象ファイルのパスを追加する関数
	public function registerDir($dir) {
		$this->dirs[] = $dir;
	}

	//オートロード時にクラスファイルを読み込む関数
	public function loadClass($class) {
		foreach($this->dirs as $dir) {
			$file = $dir . '/' . $class . '.php';
			if(is_readable($file)) {
				require $file;
				return;
			}
		}
	}
}
?>