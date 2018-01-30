<?php

function mergeLess($path) {
	$import = file_get_contents($path.'/_import.less');

	$output = [];
	preg_match_all('/@import "([^"]+)";/', $import, $output);
	
	$merged = '';
	foreach($output[1] as $file) {
		$content = file_get_contents($path.'/'.$file);

		$svg = [];
		preg_match_all('/"\.\.\/([^"]+\.svg)"/', $content, $svg);

		foreach($svg[1] as $key => $svgFile) {
			$contentSvgFile = file_get_contents($svgFile);
			$base64 = '"data:image/svg+xml;charset=UTF-8,'. rawurlencode($contentSvgFile). '"';
			$content = str_replace($svg[0][$key], $base64, $content);
		}

		$merged .= "\n" . $content;
	}

	return $merged;
}

$merged = "<style>\n";
$merged .= mergeLess('components');
$merged .= mergeLess('theme');
$merged .= "\n</style>\n\n<script>\n";

$merged .= file_get_contents('uikit.min.js');

$merged .= <<<'EOD'
module.exports = { 
	render: function(c) { },
}
</script>
EOD;

file_put_contents('uikit-set.vue', $merged);
