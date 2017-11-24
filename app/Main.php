<?php namespace Codecheck;

function run ($argc, $argv)
{
	if($argc !== 1) {
		return;
	}

	$word = $argv[0];
	if($word === 'World') {
		echo 'Hello World!';
	}else if($word === 'codecheck') {
		echo 'Hello codecheck!';
	}else if($word === '織田信長') {
		echo 'Hello 織田信長!';
	}else if($word === '') {
		echo 'Hello!';
	}
}
