<?php

/** @var ImportDownloads $this */

$items = [
	/*
	 * 3.4.0 - Release ID 133
	 */
	[
		'title'        => 'Joomla! Weblinks 3.4.0 Package (.zip)',
		'description'  => '<p>This is the extension package for Joomla! Weblinks 3.4.0</p>',
		'type'         => 'file',
		'filename'     => 'pkg_weblinks_3.4.0.zip',
		'environments' => ['9'],
		'release_id'   => '133',
		'created'      => $this->platform->getDate('2015-02-24 23:30:00', new DateTimeZone('GMT'))->toSql(),
	],

	/*
	 * 3.4.1 - Release ID 134
	 */
	[
		'title'        => 'Joomla! Weblinks 3.4.1 Package (.zip)',
		'description'  => '<p>This is the extension package for Joomla! Weblinks 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'pkg_weblinks_3.4.1.zip',
		'environments' => ['9'],
		'release_id'   => '134',
		'created'      => $this->platform->getDate('2015-07-23 20:30:00', new DateTimeZone('GMT'))->toSql(),
	],

	/*
	 * 3.5.0 - Release ID 135
	 */
	[
		'title'        => 'Joomla! Weblinks 3.5.0 Package (.zip)',
		'description'  => '<p>This is the extension package for Joomla! Weblinks 3.5.0</p>',
		'type'         => 'file',
		'filename'     => 'pkg-weblinks-3.5.0.zip',
		'environments' => ['9'],
		'release_id'   => '135',
		'created'      => $this->platform->getDate('2016-03-22 20:30:00', new DateTimeZone('GMT'))->toSql(),
	],

	/*
	 * 3.6.0 - Release ID 136
	 */
	[
		'title'        => 'Joomla! Weblinks 3.6.0 Package (.zip)',
		'description'  => '<p>This is the extension package for Joomla! Weblinks 3.6.0</p>',
		'type'         => 'file',
		'filename'     => 'pkg-weblinks-3.6.0.zip',
		'environments' => ['9'],
		'release_id'   => '136',
		'created'      => $this->platform->getDate('2017-03-08 20:30:00', new DateTimeZone('GMT'))->toSql(),
	],
];
