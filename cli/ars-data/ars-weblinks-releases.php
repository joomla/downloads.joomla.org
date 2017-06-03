<?php

/** @var ImportDownloads $this */

// Build our array of releases
$releases = [
	// ID: 133
	[
		'category_id'      => '207',
		'version'          => '3.4.0',
		'alias'            => '3-4-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! Weblinks 3.4.0 release</p>',
		'created'          => $this->platform->getDate('2015-02-24 23:30:00', new DateTimeZone('GMT'))->toSql(),
	],
	// ID: 134
	[
		'category_id'      => '207',
		'version'          => '3.4.1',
		'alias'            => '3-4-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! Weblinks 3.4.1 release</p>',
		'created'          => $this->platform->getDate('2015-07-23 20:30:00', new DateTimeZone('GMT'))->toSql(),
	],
	// ID: 135
	[
		'category_id'      => '207',
		'version'          => '3.5.0',
		'alias'            => '3-5-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! Weblinks 3.5.0 release</p>',
		'created'          => $this->platform->getDate('2016-03-22 20:30:00', new DateTimeZone('GMT'))->toSql(),
	],
	// ID: 136
	[
		'category_id'      => '207',
		'version'          => '3.6.0',
		'alias'            => '3-6-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! Weblinks 3.6.0 release</p>',
		'created'          => $this->platform->getDate('2017-03-08 20:30:00', new DateTimeZone('GMT'))->toSql(),
	],
];
