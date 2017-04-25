<?php

/** @var ImportDownloads $this */

// Build our array of 3.x items
$items = [
	/*
	 * 3.0.0 - Release ID 86
	 */
	[
		'title'        => 'Joomla! 3.0.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '86',
		'created'      => $this->platform->getDate('2012-09-27 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '86',
		'created'      => $this->platform->getDate('2012-09-27 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '86',
		'created'      => $this->platform->getDate('2012-09-27 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 to 3.0.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '86',
		'created'      => $this->platform->getDate('2012-09-27 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.0.1 - Release ID 87
	 */
	[
		'title'        => 'Joomla! 3.0.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.1-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '87',
		'created'      => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.1-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '87',
		'created'      => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.1-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '87',
		'created'      => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.0 to 3.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0_to_3.0.1-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '87',
		'created'      => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.0 to 3.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0_to_3.0.1-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '87',
		'created'      => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.0 to 3.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0_to_3.0.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '87',
		'created'      => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 to 3.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.1-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '87',
		'created'      => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.0 Hotfix (.zip)',
		'description'  => '<p>This hotfix is required for Joomla! 3.0.0 installations before updating to Joomla! 3.0.1 or later.</p>',
		'type'         => 'file',
		'filename'     => 'joomla_3-0-0_hotpatch.zip',
		'environments' => ['9'],
		'release_id'   => '87',
		'created'      => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.0.2 - Release ID 88
	 */
	[
		'title'        => 'Joomla! 3.0.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.2-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.2-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.2-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.0 to 3.0.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.0 to 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0_to_3.0.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.0 to 3.0.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.0 to 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0_to_3.0.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.0 to 3.0.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.0 to 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.0_to_3.0.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 to 3.0.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.1 to 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.1_to_3.0.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 to 3.0.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.1 to 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.1_to_3.0.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.1 to 3.0.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.1 to 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.1_to_3.0.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.2 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 to 3.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.2-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '88',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.0.3 - Release ID 89
	 */
	[
		'title'        => 'Joomla! 3.0.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.3-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.3-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.3-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.x to 3.0.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.x_to_3.0.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.x to 3.0.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.x_to_3.0.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.x to 3.0.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.x_to_3.0.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.2 to 3.0.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.2 to 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.2_to_3.0.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.2 to 3.0.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.2 to 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.2_to_3.0.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.2 to 3.0.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.2 to 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.2_to_3.0.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.3 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 to 3.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.3-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '89',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.0.4 - Release ID 90
	 */
	[
		'title'        => 'Joomla! 3.0.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.4-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.4-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.4-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.x to 3.0.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.x_to_3.0.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.x to 3.0.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.x_to_3.0.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.x to 3.0.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.x_to_3.0.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.3 to 3.0.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.3 to 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.3_to_3.0.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.3 to 3.0.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.3 to 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.3_to_3.0.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.3 to 3.0.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.0.3 to 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.3_to_3.0.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.0.4 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 to 3.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.0.4-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '90',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.1.0 - Release ID 91
	 */
	[
		'title'        => 'Joomla! 3.1.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.0-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '91',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.0-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '91',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.0-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '91',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.0-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '91',
		'created'      => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.1.1 - Release ID 92
	 */
	[
		'title'        => 'Joomla! 3.1.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.1-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '92',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.1-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '92',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.1-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '92',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.0 to 3.1.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.1-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '92',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.0 to 3.1.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.1-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '92',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.0 to 3.1.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '92',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.1 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.1-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '92',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.1.2 - Release ID 93
	 */
	[
		'title'        => 'Joomla! 3.1.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.2-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '93',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 3.1.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.2-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '93',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 3.1.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.2-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '93',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 3.1.0 to 3.1.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.0 to 3.1.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '93',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 3.1.1 to 3.1.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.1 to 3.1.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.1_to_3.1.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '93',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 3.1.2 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.2-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '93',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],

	/*
	 * 3.1.3 - Release ID 94
	 */
	[
		'title'        => 'Joomla! 3.1.2 to 3.1.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from the pre-release Joomla! 3.1.2 to 3.1.3 to address an issue in the update component</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.2_to_3.1.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '94',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.1.4 - Release ID 95
	 */
	[
		'title'        => 'Joomla! 3.1.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.4-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.4-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.4-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.3 to 3.1.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.3 to 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.3_to_3.1.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.3 to 3.1.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.3 to 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.3_to_3.1.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.3 to 3.1.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.3 to 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.3_to_3.1.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.4 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.4-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '95',
		'created'      => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.1.5 - Release ID 96
	 */
	[
		'title'        => 'Joomla! 3.1.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.4 to 3.1.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.4 to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.4_to_3.1.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.4 to 3.1.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.4 to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.4_to_3.1.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.4 to 3.1.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.4 to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.4_to_3.1.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.5 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.5 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.5 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '96',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.1.6 - Release ID 97
	 */
	[
		'title'        => 'Joomla! 3.1.6 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.6-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.6 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.6-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.6 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.6-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.6-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.6-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.x to 3.1.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.1 release to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.x_to_3.1.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.5 to 3.1.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.5 to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5_to_3.1.6-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.5 to 3.1.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.5 to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5_to_3.1.6-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.5 to 3.1.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.1.5 to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.5_to_3.1.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.6 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.6-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.6 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.6-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.1.6 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 or 3.0 to 3.1.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.1.6-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '97',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.2.0 - Release ID 98
	 */
	[
		'title'        => 'Joomla! 3.2.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.0-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '98',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.0-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '98',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.0-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '98',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.0-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '98',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.0 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.0-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '98',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.0 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.0-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '98',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.2.1 - Release ID 99
	 */
	[
		'title'        => 'Joomla! 3.2.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.0 to 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.1-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.0 to 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.1-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.0 to 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '99',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.2.2 - Release ID 100
	 */
	[
		'title'        => 'Joomla! 3.2.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.0 to 3.2.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.0 to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.0 to 3.2.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.0 to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.0 to 3.2.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.0 to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 to 3.2.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.1 to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1_to_3.2.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 to 3.2.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.1 to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1_to_3.2.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.1 to 3.2.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.1 to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.1_to_3.2.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.2 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.2 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.2 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '100',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.2.3 - Release ID 101
	 */
	[
		'title'        => 'Joomla! 3.2.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.2 to 3.2.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.2 to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2_to_3.2.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.2 to 3.2.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.2 to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2_to_3.2.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.2 to 3.2.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.2 to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.2_to_3.2.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.3 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.3 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.3 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '101',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.2.4 - Release ID 102
	 */
	[
		'title'        => 'Joomla! 3.2.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.3 to 3.2.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.3 to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3_to_3.2.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.3 to 3.2.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.3 to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3_to_3.2.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.3 to 3.2.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.3 to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.3_to_3.2.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.4 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.4 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.4 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '102',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.2.5 - Release ID 103
	 */
	[
		'title'        => 'Joomla! 3.2.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.4 to 3.2.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.4 to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4_to_3.2.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.4 to 3.2.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.4 to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4_to_3.2.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.4 to 3.2.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.4 to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.4_to_3.2.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.5 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.5 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.5 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '103',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.2.6 - Release ID 104
	 */
	[
		'title'        => 'Joomla! 3.2.6 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.6 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.6 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.6-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.6-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.5 to 3.2.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.5 to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5_to_3.2.6-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.5 to 3.2.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.5 to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5_to_3.2.6-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.5 to 3.2.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.5 to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.5_to_3.2.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.6 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.6 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.6 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '104',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.2.7 - Release ID 105
	 */
	[
		'title'        => 'Joomla! 3.2.7 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.7-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.7 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.7-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.7 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.7-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.7-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.7-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.x to 3.2.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.2 release to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.x_to_3.2.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.6 to 3.2.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.6 to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6_to_3.2.7-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.6 to 3.2.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.6 to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6_to_3.2.7-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.6 to 3.2.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.2.6 to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.6_to_3.2.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.7 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.7-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.7 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.7-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.2.7 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.2.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.2.7-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '105',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.3.0 - Release ID 106
	 */
	[
		'title'        => 'Joomla! 3.3.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.0-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '106',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.0-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '106',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.0-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '106',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.0-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '106',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.0 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.0-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '106',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.0 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.0-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '106',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.3.1 - Release ID 107
	 */
	[
		'title'        => 'Joomla! 3.3.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.0 to 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.1-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.0 to 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.1-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.0 to 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '107',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.3.2 - Release ID 108
	 */
	[
		'title'        => 'Joomla! 3.3.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.0 to 3.3.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.0 to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.0 to 3.3.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.0 to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.0 to 3.3.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.0 to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 to 3.3.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.1 to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1_to_3.3.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 to 3.3.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.1 to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1_to_3.3.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.1 to 3.3.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.1 to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.1_to_3.3.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.2 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.2 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.2 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '108',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.3.3 - Release ID 109
	 */
	[
		'title'        => 'Joomla! 3.3.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.2 to 3.3.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.2 to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2_to_3.3.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.2 to 3.3.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.2 to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2_to_3.3.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.2 to 3.3.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.2 to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.2_to_3.3.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.3 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.3 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.3 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '109',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.3.4 - Release ID 110
	 */
	[
		'title'        => 'Joomla! 3.3.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.3 to 3.3.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.3 to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3_to_3.3.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.3 to 3.3.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.3 to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3_to_3.3.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.3 to 3.3.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.3 to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.3_to_3.3.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.4 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.4 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.4 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '110',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.3.5 - Release ID 111
	 */
	[
		'title'        => 'Joomla! 3.3.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.4 to 3.3.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.4 to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4_to_3.3.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.4 to 3.3.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.4 to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4_to_3.3.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.4 to 3.3.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.4 to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.4_to_3.3.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.5 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.5 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.5 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '111',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.3.6 - Release ID 112
	 */
	[
		'title'        => 'Joomla! 3.3.6 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.6-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.6 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.6-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.6 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.6-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.6-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.6-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.x to 3.3.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.3 release to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.x_to_3.3.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.5 to 3.3.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.5 to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5_to_3.3.6-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.5 to 3.3.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.5 to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5_to_3.3.6-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.5 to 3.3.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.3.5 to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.5_to_3.3.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.6 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.6-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.6 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.6-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.3.6 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.3.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.3.6-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '112',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.0 - Release ID 113
	 */
	[
		'title'        => 'Joomla! 3.4.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.0-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '113',
		'created'      => $this->platform->getDate('2015-02-24 20:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.0-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '113',
		'created'      => $this->platform->getDate('2015-02-24 20:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.0-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '113',
		'created'      => $this->platform->getDate('2015-02-24 20:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.0-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '113',
		'created'      => $this->platform->getDate('2015-02-24 20:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.0 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.0-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '113',
		'created'      => $this->platform->getDate('2015-02-24 20:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.0 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.0-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '113',
		'created'      => $this->platform->getDate('2015-02-24 20:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.1 - Release ID 114
	 */
	[
		'title'        => 'Joomla! 3.4.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.0 to 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.1-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.0 to 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.1-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.0 to 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '114',
		'created'      => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.2 - Release ID 115
	 */
	[
		'title'        => 'Joomla! 3.4.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.0 to 3.4.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.0 to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.0 to 3.4.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.0 to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.0 to 3.4.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.0 to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 to 3.4.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.1 to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1_to_3.4.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 to 3.4.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.1 to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1_to_3.4.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.1 to 3.4.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.1 to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.1_to_3.4.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.2 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.2 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.2 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '115',
		'created'      => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.3 - Release ID 116
	 */
	[
		'title'        => 'Joomla! 3.4.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.2 to 3.4.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.2 to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2_to_3.4.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.2 to 3.4.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.2 to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2_to_3.4.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.2 to 3.4.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.2 to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.2_to_3.4.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.3 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.3 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.3 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '116',
		'created'      => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.4 - Release ID 117
	 */
	[
		'title'        => 'Joomla! 3.4.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.3 to 3.4.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.3 to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3_to_3.4.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.3 to 3.4.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.3 to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3_to_3.4.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.3 to 3.4.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.3 to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.3_to_3.4.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.4 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.4 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.4 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '117',
		'created'      => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.5 - Release ID 118
	 */
	[
		'title'        => 'Joomla! 3.4.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.4 to 3.4.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.4 to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4_to_3.4.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.4 to 3.4.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.4 to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4_to_3.4.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.4 to 3.4.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.4 to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.4_to_3.4.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.5 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.5 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.5 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '118',
		'created'      => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.6 - Release ID 119
	 */
	[
		'title'        => 'Joomla! 3.4.6 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.6 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.6 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.6-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.6-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.5 to 3.4.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.5 to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5_to_3.4.6-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.5 to 3.4.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.5 to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5_to_3.4.6-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.5 to 3.4.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.5 to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.5_to_3.4.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.6 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.6 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.6 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '119',
		'created'      => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.7 - Release ID 120
	 */
	[
		'title'        => 'Joomla! 3.4.7 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.7 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.7 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.7-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.7-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.6 to 3.4.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.6 to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6_to_3.4.7-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.6 to 3.4.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.6 to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6_to_3.4.7-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.6 to 3.4.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.6 to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.6_to_3.4.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.7 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.7 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.7 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '120',
		'created'      => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.4.8 - Release ID 121
	 */
	[
		'title'        => 'Joomla! 3.4.8 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.8-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.8 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.8-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.8 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.8-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.8-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.8-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.x to 3.4.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.4 release to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.x_to_3.4.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.7 to 3.4.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.7 to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7_to_3.4.8-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.7 to 3.4.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.7 to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7_to_3.4.8-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.7 to 3.4.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.4.7 to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.7_to_3.4.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.8 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.8-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.8 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.8-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.4.8 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.4.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.4.8-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '121',
		'created'      => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.5.0 - Release ID 122
	 */
	[
		'title'        => 'Joomla! 3.5.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.0-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '122',
		'created'      => $this->platform->getDate('2016-03-21 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.0-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '122',
		'created'      => $this->platform->getDate('2016-03-21 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.0-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '122',
		'created'      => $this->platform->getDate('2016-03-21 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.0-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '122',
		'created'      => $this->platform->getDate('2016-03-21 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.0 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.0-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '122',
		'created'      => $this->platform->getDate('2016-03-21 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.0 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.0-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '122',
		'created'      => $this->platform->getDate('2016-03-21 22:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.5.1 - Release ID 123
	 */
	[
		'title'        => 'Joomla! 3.5.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.1-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.1-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.1-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.5.0 to 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.x_to_3.5.1-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.5.0 to 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.x_to_3.5.1-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.5.0 to 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.x_to_3.5.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.1 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.1-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.1 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.1-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.5.1 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.5.1-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '123',
		'created'      => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.6.0 - Release ID 124
	 */
	[
		'title'        => 'Joomla! 3.6.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.0-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '124',
		'created'      => $this->platform->getDate('2016-07-12 21:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.0-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '124',
		'created'      => $this->platform->getDate('2016-07-12 21:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.0-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '124',
		'created'      => $this->platform->getDate('2016-07-12 21:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.0-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '124',
		'created'      => $this->platform->getDate('2016-07-12 21:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.0 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.0-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '124',
		'created'      => $this->platform->getDate('2016-07-12 21:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.0 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.0-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '124',
		'created'      => $this->platform->getDate('2016-07-12 21:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.6.1 - Release ID 125
	 */
	[
		'title'        => 'Joomla! 3.6.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.0 to 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.1-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.0 to 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.1-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.0 to 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '125',
		'created'      => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.6.2 - Release ID 126
	 */
	[
		'title'        => 'Joomla! 3.6.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.0 to 3.6.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.0 to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.0 to 3.6.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.0 to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.0 to 3.6.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.0 to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 to 3.6.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.1 to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1_to_3.6.2-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 to 3.6.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.1 to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1_to_3.6.2-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.1 to 3.6.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.1 to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.1_to_3.6.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.2 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.2 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.2 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '126',
		'created'      => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.6.3 - Release ID 127
	 */
	[
		'title'        => 'Joomla! 3.6.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.2 to 3.6.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.2 to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2_to_3.6.3-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.2 to 3.6.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.2 to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2_to_3.6.3-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.2 to 3.6.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.2 to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.2_to_3.6.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.3 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.3 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.3 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '127',
		'created'      => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.6.4 - Release ID 128
	 */
	[
		'title'        => 'Joomla! 3.6.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.3 to 3.6.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.3 to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3_to_3.6.4-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.3 to 3.6.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.3 to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3_to_3.6.4-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.3 to 3.6.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.3 to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.3_to_3.6.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.4 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.4 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.4 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '128',
		'created'      => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.6.5 - Release ID 129
	 */
	[
		'title'        => 'Joomla! 3.6.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.5-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.5-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.5-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.x to 3.6.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 3.6 release to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.x_to_3.6.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.4 to 3.6.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.4 to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4_to_3.6.5-Stable-Patch_Package.zip',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.4 to 3.6.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.4 to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4_to_3.6.5-Stable-Patch_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.4 to 3.6.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 3.6.4 to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.4_to_3.6.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.5 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.5-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.5 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.5-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.6.5 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.6.5-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '129',
		'created'      => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 3.7.0 - Release ID 130
	 */
	[
		'title'        => 'Joomla! 3.7.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 3.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.7.0-Stable-Full_Package.zip',
		'environments' => ['9'],
		'release_id'   => '130',
		'created'      => $this->platform->getDate('2017-04-25 17:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.7.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 3.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.7.0-Stable-Full_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '130',
		'created'      => $this->platform->getDate('2017-04-25 17:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.7.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 3.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.7.0-Stable-Full_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '130',
		'created'      => $this->platform->getDate('2017-04-25 17:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.7.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.7.0-Stable-Update_Package.zip',
		'environments' => ['9'],
		'release_id'   => '130',
		'created'      => $this->platform->getDate('2017-04-25 17:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.7.0 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.7.0-Stable-Update_Package.tar.gz',
		'environments' => ['9'],
		'release_id'   => '130',
		'created'      => $this->platform->getDate('2017-04-25 17:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 3.7.0 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5 and previous 3.x releases to 3.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_3.7.0-Stable-Update_Package.tar.bz2',
		'environments' => ['9'],
		'release_id'   => '130',
		'created'      => $this->platform->getDate('2017-04-25 17:00:00', new DateTimeZone('GMT'))->toSql()
	],
];
