<?php
// error_reporting(~0);
// ini_set('display_errors', true);

$do_fetch = false;
if (isset($_GET['__force'])) $do_fetch = true;

$file_cache = 'tags.dump';

if ($do_fetch) {
	$target = 'https://api.github.com/repos/bcit-ci/CodeIgniter/tags';
	$api = exec('curl ' . $target, $api_output, $api_return);
	$respond = implode('', array_map('trim', $api_output));

	// untuk backup/dump data
	file_put_contents($file_cache, $respond);
} else {
	$respond = file_get_contents($file_cache);
}

$tags = json_decode($respond);

$latest = '0.0.0';
foreach ($tags as $tag) {
	if (version_compare($tag->name, $latest, '>')) {
		$latest = $tag->name;
	}
}

header('Content-Type:text/plain');
echo $latest;

/*
echo $tag->name, PHP_EOL;
$version = current(explode('-', $tag->name));
var_dump(version_compare($tag->name, '3', '>'));
*/
// $api = exec('curl -i ' + $ci_tags + ' 2>&1', $output, $return);
// var_dump($api);
// var_dump($output);
// var_dump($return);

/*
	> ambil api-tagnya, jadikan json, loop, ambil terbesar.
	> karena tidak bisa pakai /latest, jadi pakai /tags

	referensi:
	http://stackoverflow.com/a/16665146
	http://laravel.io/forum/05-08-2014-failed-to-open-stream-permission-denied?page=1#reply-6559
*/
