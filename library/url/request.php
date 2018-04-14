<?php

$rules = [];

$types = [
	'd' => '[0-9]+',
	's' => '[a-zA-Z\.\-_%]+',
	'any' => '[0-9a-zA-Z\.\-_%]+'
];

function addRule($alias, $routeName, $callback)
{
	global $rules;
	global $types;

	$pattern = preg_replace_callback('#\{(\w+):(\w+)\}#', function($match)use($types){
		$name = $match[1];
		$regex = $match[2];
		return '(?<'.$name.'>'.strtr($regex, $types).')';
	},
	$alias);
	
	$rules[$routeName] = [
		'pattern' => $pattern,
		'callback' => $callback
		];
}

function start()
{
	global $rules;
	$uri = $_SERVER['REQUEST_URI'];
	foreach ($rules as $rule) {
		if (preg_match('#'.$rule['pattern'].'#', $uri, $params)){
			foreach ($params as $k => $v) {
				if(is_int($k)){
					unset($params[$k]);
				}
			}
			$rule['callback']($params);
		}
	}
}

function buildUrl($routeName, $params)
{
	global $rules;
	if(isset($rules[$routeName]));
}