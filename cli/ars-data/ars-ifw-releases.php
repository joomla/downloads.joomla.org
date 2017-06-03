<?php

/** @var ImportDownloads $this */

// Build our array of releases
$releases = [
	// ID: 137
	[
		'category_id'      => '208',
		'version'          => '1.0.2',
		'alias'            => '1-0-2',
		'maturity'         => 'stable',
		'description'      => '<p>Install from Web 1.0.2 release</p>',
		'created'          => $this->platform->getDate('2013-11-01 00:00:00', new DateTimeZone('GMT'))->toSql(),
		'access'           => '1',
	],
	// ID: 138
	[
		'category_id'      => '208',
		'version'          => '1.0.3',
		'alias'            => '1-0-3',
		'maturity'         => 'stable',
		'description'      => '<p>Install from Web 1.0.3 release</p>',
		'created'          => $this->platform->getDate('2013-11-05 13:30:00', new DateTimeZone('GMT'))->toSql(),
		'access'           => '1',
	],
	// ID: 139
	[
		'category_id'      => '208',
		'version'          => '1.0.4',
		'alias'            => '1-0-4',
		'maturity'         => 'stable',
		'description'      => '<p>Install from Web 1.0.4 release</p>',
		'created'          => $this->platform->getDate('2013-11-22 18:30:00', new DateTimeZone('GMT'))->toSql(),
		'access'           => '1',
	],
	// ID: 140
	[
		'category_id'      => '208',
		'version'          => '1.0.5',
		'alias'            => '1-0-5',
		'maturity'         => 'stable',
		'description'      => '<p>Install from Web 1.0.5 release</p>',
		'created'          => $this->platform->getDate('2013-12-18 16:30:00', new DateTimeZone('GMT'))->toSql(),
		'access'           => '1',
	],
	// ID: 141
	[
		'category_id'      => '208',
		'version'          => '1.1.0',
		'alias'            => '1-1-0',
		'maturity'         => 'stable',
		'description'      => '<p>Install from Web 1.1.0 release</p>',
		'created'          => $this->platform->getDate('2016-02-17 22:00:00', new DateTimeZone('GMT'))->toSql(),
		'access'           => '1',
	],
	// ID: 142
	[
		'category_id'      => '208',
		'version'          => '1.1.1',
		'alias'            => '1-1-1',
		'maturity'         => 'stable',
		'description'      => '<p>Install from Web 1.1.1 release</p>',
		'created'          => $this->platform->getDate('2017-04-28 19:00:00', new DateTimeZone('GMT'))->toSql(),
		'access'           => '1',
	],
];
