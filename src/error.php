<?php

ini_set('display_errors', 1);

// [副作用] ini設定の変更
ini_set('upload_max_filesize', '1M');

// [副作用] ファイルの読み込み
include "component.php";

// [副作用] 出力生成
echo "<p>";

class exampleClass {
	public function example_function() {
		$example_variable = "This is a test.";
		    echo $example_variable;
            echo "tab space.";
	}
}
