<?php

/** @var ImportDownloads $this */

// Build our array of 1.5 items
$items = [
	/*
	 * 1.5.17 - Release ID 34
	 */
	[
		'title'        => 'Joomla! 1.5.17 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.17-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '34',
		'created'      => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.18 - Release ID 35
	 */
	[
		'title'        => 'Joomla! 1.5.18 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.18-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '35',
		'created'      => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.19 - Release ID 36
	 */
	[
		'title'        => 'Joomla! 1.5.19 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.19-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '36',
		'created'      => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.20 - Release ID 37
	 */
	[
		'title'        => 'Joomla! 1.5.20 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.20-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '37',
		'created'      => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.21 - Release ID 38
	 */
	[
		'title'        => 'Joomla! 1.5.21 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.21 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.21 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.21-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '38',
		'created'      => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.22 - Release ID 39
	 */
	[
		'title'        => 'Joomla! 1.5.22 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.22-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.22 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.22-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.22 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.22-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.21 to 1.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.21 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21_to_1.5.22-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.21 to 1.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.21 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21_to_1.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.21 to 1.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.21 to 1.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21_to_1.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '39',
		'created'      => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.23 - Release ID 40
	 */
	[
		'title'        => 'Joomla! 1.5.23 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.23-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.23 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.23-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.23 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.23-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.16 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.17 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.17 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.17_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.18 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.18 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.18_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.19 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.19 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.19_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.20 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.20 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.20_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.21 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.21 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.21 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.21 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.21 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.21 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.21_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.22 to 1.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.22 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.22_to_1.5.23-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.22 to 1.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.22 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.22_to_1.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.22 to 1.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.22 to 1.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.22_to_1.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '40',
		'created'      => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.24 - Release ID 41
	 */
	[
		'title'        => 'Joomla! 1.5.24 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.24-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.24 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.24-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.24 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.24-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.24 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.24-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.24 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.24-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.24 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.24-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.23 to 1.5.24 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.23 to 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.23_to_1.5.24-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.23 to 1.5.24 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.23 to 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.23_to_1.5.24-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.23 to 1.5.24 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.23 to 1.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.23_to_1.5.24-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '41',
		'created'      => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.25 - Release ID 42
	 */
	[
		'title'        => 'Joomla! 1.5.25 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.25-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.25 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.25-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.25 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.25-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.25 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.25-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.25 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.25-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.25 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.25-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.24 to 1.5.25 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.24 to 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.24_to_1.5.25-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.24 to 1.5.25 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.24 to 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.24_to_1.5.25-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.24 to 1.5.25 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.24 to 1.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.24_to_1.5.25-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '42',
		'created'      => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.26 - Release ID 43
	 */
	[
		'title'        => 'Joomla! 1.5.26 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.26-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.26 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.26-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.26 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.26-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.26 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.26-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.26 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.26-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.26 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.5 release to 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.26-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.25 to 1.5.26 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.25 to 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.25_to_1.5.26-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.25 to 1.5.26 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.25 to 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.25_to_1.5.26-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.25 to 1.5.26 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.25 to 1.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.25_to_1.5.26-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '43',
		'created'      => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql()
	],
];
