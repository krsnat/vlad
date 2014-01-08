<?php
$input = [
	'foo' => 'me@foo.tld',
	'bar' => 'invalidemail',
	'baz' => '',
];

$vlad = new \ay\vlad\Vlad();

$test = $vlad->test([
	[
		['foo', 'bar', 'baz'], // Selectors
		['not_empty','email'] // Validators
	],
	[
		['qux'],
		['required']
	]
]);

// The above method creates an instance of a Test.
// Each selector (e.g. foo, bar, baz) is assigned all of the validators
// from the same group, e.g. selector 'foo' is assigned validators 'not_empty' and 'email'.

$result = $test->assess($input);
?>
<pre><code><?php var_dump($result->getFailed());?></code></pre>