<?php

/** @var ImportDownloads $this */

// Build our array of 2.5 items
$items = [
	/*
	 * 1.6.0 - Release ID 44
	 */
	[
		'title'        => 'Joomla! 1.6.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0-Stable-Full_Package.zip',
		'environments' => ['6'],
		'release_id'   => '44',
		'created'      => $this->platform->getDate('2011-01-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0-Stable-Full_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '44',
		'created'      => $this->platform->getDate('2011-01-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0-Stable-Full_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '44',
		'created'      => $this->platform->getDate('2011-01-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.6.1 - Release ID 45
	 */
	[
		'title'        => 'Joomla! 1.6.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1-Stable-Full_Package.zip',
		'environments' => ['6'],
		'release_id'   => '45',
		'created'      => $this->platform->getDate('2011-03-07 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1-Stable-Full_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '45',
		'created'      => $this->platform->getDate('2011-03-07 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1-Stable-Full_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '45',
		'created'      => $this->platform->getDate('2011-03-07 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.1-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '45',
		'created'      => $this->platform->getDate('2011-03-07 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.1-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '45',
		'created'      => $this->platform->getDate('2011-03-07 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '45',
		'created'      => $this->platform->getDate('2011-03-07 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.6.2 - Release ID 46
	 */
	[
		'title'        => 'Joomla! 1.6.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2-Stable-Full_Package.zip',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2-Stable-Full_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2-Stable-Full_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.2-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.2-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.2-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.2-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '46',
		'created'      => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.6.3 - Release ID 47
	 */
	[
		'title'        => 'Joomla! 1.6.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.3-Stable-Full_Package.zip',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.3-Stable-Full_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.3-Stable-Full_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.3-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.3-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.3-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.3-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.2 to 1.6.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.2 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2_to_1.6.3-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.2 to 1.6.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.2 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2_to_1.6.3-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.2 to 1.6.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.2 to 1.6.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2_to_1.6.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '47',
		'created'      => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.6.4 - Release ID 48
	 */
	[
		'title'        => 'Joomla! 1.6.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.4-Stable-Full_Package.zip',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.4-Stable-Full_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.4-Stable-Full_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.4-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.4-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.0 to 1.6.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.0 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.4-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.4-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.1 to 1.6.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.1 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.1_to_1.6.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.2 to 1.6.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.2 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2_to_1.6.4-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.2 to 1.6.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.2 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2_to_1.6.4-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.2 to 1.6.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.2 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.2_to_1.6.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.3 to 1.6.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.3 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.3_to_1.6.4-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.3 to 1.6.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.3 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.3_to_1.6.4-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.3 to 1.6.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.3 to 1.6.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.3_to_1.6.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '48',
		'created'      => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.6.5 - Release ID 49
	 */
	[
		'title'        => 'Joomla! 1.6.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.5-Stable-Full_Package.zip',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.5-Stable-Full_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.5-Stable-Full_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.x to 1.6.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.6 release to 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.5-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.x to 1.6.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.6 release to 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.5-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.x to 1.6.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.6 release to 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.4 to 1.6.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.4 to 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.4_to_1.6.5-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.4 to 1.6.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.4 to 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.4_to_1.6.5-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.4 to 1.6.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.4 to 1.6.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.4_to_1.6.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '49',
		'created'      => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.6.6 - Release ID 50
	 */
	[
		'title'        => 'Joomla! 1.6.6 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.6-Stable-Full_Package.zip',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.6 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.6-Stable-Full_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.6 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.6-Stable-Full_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.x to 1.6.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.6 release to 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.6-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.x to 1.6.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.6 release to 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.6-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.x to 1.6.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.6 release to 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.0_to_1.6.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.5 to 1.6.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.5 to 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.5_to_1.6.6-Stable-Patch_Package.zip',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.5 to 1.6.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.5 to 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.5_to_1.6.6-Stable-Patch_Package.tar.gz',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.5 to 1.6.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.5 to 1.6.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.5_to_1.6.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['6'],
		'release_id'   => '50',
		'created'      => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.7.0 - Release ID 51
	 */
	[
		'title'        => 'Joomla! 1.7.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0-Stable-Full_Package.zip',
		'environments' => ['7'],
		'release_id'   => '51',
		'created'      => $this->platform->getDate('2011-07-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0-Stable-Full_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '51',
		'created'      => $this->platform->getDate('2011-07-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0-Stable-Full_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '51',
		'created'      => $this->platform->getDate('2011-07-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.5 to 1.7.0 Upgrade (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.6.5 to 1.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.5_to_1.7.0_Package.zip',
		'environments' => ['7'],
		'release_id'   => '51',
		'created'      => $this->platform->getDate('2011-07-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.6.x to 1.7.0 Upgrade (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.6 to 1.7.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.6.x_to_1.7.0_Package.zip',
		'environments' => ['7'],
		'release_id'   => '51',
		'created'      => $this->platform->getDate('2011-07-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.7.1 - Release ID 52
	 */
	[
		'title'        => 'Joomla! 1.7.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.1-Stable-Full_Package.zip',
		'environments' => ['7'],
		'release_id'   => '52',
		'created'      => $this->platform->getDate('2011-09-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.1-Stable-Full_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '52',
		'created'      => $this->platform->getDate('2011-09-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.1-Stable-Full_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '52',
		'created'      => $this->platform->getDate('2011-09-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.0 to 1.7.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.1-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '52',
		'created'      => $this->platform->getDate('2011-09-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.0 to 1.7.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.1-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '52',
		'created'      => $this->platform->getDate('2011-09-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.0 to 1.7.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '52',
		'created'      => $this->platform->getDate('2011-09-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.7.2 - Release ID 53
	 */
	[
		'title'        => 'Joomla! 1.7.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.2-Stable-Full_Package.zip',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.2-Stable-Full_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.2-Stable-Full_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.0 to 1.7.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.0 to 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.2-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.0 to 1.7.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.0 to 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.2-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.0 to 1.7.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.0 to 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.1 to 1.7.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.1 to 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.1_to_1.7.2-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.1 to 1.7.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.1 to 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.1_to_1.7.2-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.1 to 1.7.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.1 to 1.7.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.1_to_1.7.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '53',
		'created'      => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.7.3 - Release ID 54
	 */
	[
		'title'        => 'Joomla! 1.7.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.3-Stable-Full_Package.zip',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.3-Stable-Full_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.3-Stable-Full_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.3-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.3-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.2 to 1.7.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.2 to 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.2_to_1.7.3-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.2 to 1.7.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.2 to 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.2_to_1.7.3-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.2 to 1.7.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.2 to 1.7.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.2_to_1.7.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '54',
		'created'      => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.7.4 - Release ID 55
	 */
	[
		'title'        => 'Joomla! 1.7.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.4-Stable-Full_Package.zip',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.4-Stable-Full_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.4-Stable-Full_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.4-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.4-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.3 to 1.7.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.3 to 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.3_to_1.7.4-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.3 to 1.7.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.3 to 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.3_to_1.7.4-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.3 to 1.7.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.3 to 1.7.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.3_to_1.7.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '55',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.7.5 - Release ID 56
	 */
	[
		'title'        => 'Joomla! 1.7.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.5-Stable-Full_Package.zip',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.5-Stable-Full_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.5-Stable-Full_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.5-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.5-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.x to 1.7.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 1.7 release to 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.0_to_1.7.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.4 to 1.7.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.4 to 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.4_to_1.7.5-Stable-Patch_Package.zip',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.4 to 1.7.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.4 to 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.4_to_1.7.5-Stable-Patch_Package.tar.gz',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.7.4 to 1.7.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7.4 to 1.7.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.7.4_to_1.7.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['7'],
		'release_id'   => '56',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.0 - Release ID 57
	 */
	[
		'title'        => 'Joomla! 2.5.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '57',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '57',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '57',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.0 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '57',
		'created'      => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.1 - Release ID 58
	 */
	[
		'title'        => 'Joomla! 2.5.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.1-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '58',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.1-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '58',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.1-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '58',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.0 to 2.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.1-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '58',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.0 to 2.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.1-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '58',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.0 to 2.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '58',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.1-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '58',
		'created'      => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.2 - Release ID 59
	 */
	[
		'title'        => 'Joomla! 2.5.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.2-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.2-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.2-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.0 to 2.5.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.0 to 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.2-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.0 to 2.5.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.0 to 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.2-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.0 to 2.5.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.0 to 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 to 2.5.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.1 to 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.1_to_2.5.2-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 to 2.5.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.1 to 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.1_to_2.5.2-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.1 to 2.5.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.1 to 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.1_to_2.5.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.2 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.2-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '59',
		'created'      => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.3 - Release ID 60
	 */
	[
		'title'        => 'Joomla! 2.5.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.3-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.3-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.3-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.3-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.3-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.2 to 2.5.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.2 to 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.2_to_2.5.3-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.2 to 2.5.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.2 to 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.2_to_2.5.3-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.2 to 2.5.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.2 to 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.2_to_2.5.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.3 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.3-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '60',
		'created'      => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.4 - Release ID 61
	 */
	[
		'title'        => 'Joomla! 2.5.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.4-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.4-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.4-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.4-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.4-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.3 to 2.5.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.3 to 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.3_to_2.5.4-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.3 to 2.5.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.3 to 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.3_to_2.5.4-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.3 to 2.5.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.3 to 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.3_to_2.5.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.4 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.4-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '61',
		'created'      => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.5 - Release ID 62
	 */
	[
		'title'        => 'Joomla! 2.5.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.5-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.5-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.5-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.5-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.5-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.4 to 2.5.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.4 to 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.4_to_2.5.5-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.4 to 2.5.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.4 to 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.4_to_2.5.5-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.4 to 2.5.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.4 to 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.4_to_2.5.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.5 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.5-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '62',
		'created'      => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.6 - Release ID 63
	 */
	[
		'title'        => 'Joomla! 2.5.6 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.6-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.6 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.6-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.6 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.6-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.6-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.6-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.0_to_2.5.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.5 to 2.5.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.5 to 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.5_to_2.5.6-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.5 to 2.5.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.5 to 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.5_to_2.5.6-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.5 to 2.5.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.5 to 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.5_to_2.5.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.6 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.6-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '63',
		'created'      => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.7 - Release ID 64
	 */
	[
		'title'        => 'Joomla! 2.5.7 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.7-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.7 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.7-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.7 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.7-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.7-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.6 to 2.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.6 to 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.6_to_2.5.7-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.6 to 2.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.6 to 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.6_to_2.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.6 to 2.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.6 to 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.6_to_2.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.7 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.7-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '64',
		'created'      => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.8 - Release ID 65
	 */
	[
		'title'        => 'Joomla! 2.5.8 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.8-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.8 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.8-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.8 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.8-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.8-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.7 to 2.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.7 to 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.7_to_2.5.8-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.7 to 2.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.7 to 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.7_to_2.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.7 to 2.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.7 to 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.7_to_2.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.8 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.8-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '65',
		'created'      => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.9 - Release ID 66
	 */
	[
		'title'        => 'Joomla! 2.5.9 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.9-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.9 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.9-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.9 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.9-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.9-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.8 to 2.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.8 to 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.8_to_2.5.9-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.8 to 2.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.8 to 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.8_to_2.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.8 to 2.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.8 to 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.8_to_2.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.9 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.9-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '66',
		'created'      => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.10 - Release ID 67
	 */
	[
		'title'        => 'Joomla! 2.5.10 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.10-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.10 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.10-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.10 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.10-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.10-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.9 to 2.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.9 to 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.9_to_2.5.10-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.9 to 2.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.9 to 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.9_to_2.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.9 to 2.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.9 to 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.9_to_2.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.10 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.10-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '67',
		'created'      => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.11 - Release ID 68
	 */
	[
		'title'        => 'Joomla! 2.5.11 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.11-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.11 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.11-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.11 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.11-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.11-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.10 to 2.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.10 to 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.10_to_2.5.11-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.10 to 2.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.10 to 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.10_to_2.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.10 to 2.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.10 to 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.10_to_2.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.11 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.11-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '68',
		'created'      => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.12 - Release ID 69
	 */
	[
		'title'        => 'Joomla! 2.5.x to 2.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.12-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '69',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '69',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '69',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.11 to 2.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.11 to 2.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.11_to_2.5.12-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '69',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.11 to 2.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.11 to 2.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.11_to_2.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '69',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.11 to 2.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.11 to 2.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.11_to_2.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '69',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.12 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.12-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '69',
		'created'      => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],

	/*
	 * 2.5.13 - Release ID 70
	 */
	[
		'title'        => 'Joomla! 2.5.13 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.13-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.13 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.13-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.13 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.13-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.13-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.12 to 2.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.12 to 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.12_to_2.5.13-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.12 to 2.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.12 to 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.12_to_2.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.12 to 2.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.12 to 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.12_to_2.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'published'    => '0'
	],
	[
		'title'        => 'Joomla! 2.5.13 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.13-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '70',
		'created'      => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.14 - Release ID 71
	 */
	[
		'title'        => 'Joomla! 2.5.14 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.14-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.14 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.14-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.14 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.14-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.14-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.13 to 2.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.13 to 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.13_to_2.5.14-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.13 to 2.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.13 to 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.13_to_2.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.13 to 2.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.13 to 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.13_to_2.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.14 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.14-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '71',
		'created'      => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.15 - Release ID 72
	 */
	[
		'title'        => 'Joomla! 2.5.15 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.15-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.15 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.15-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.15 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.15-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.15-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.14 to 2.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.14 to 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.14_to_2.5.15-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.14 to 2.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.14 to 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.14_to_2.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.14 to 2.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.14 to 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.14_to_2.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.15 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.15-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '72',
		'created'      => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.16 - Release ID 73
	 */
	[
		'title'        => 'Joomla! 2.5.16 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.16-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.16 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.16-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.16 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.16-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.16-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.15 to 2.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.15 to 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.15_to_2.5.16-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.15 to 2.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.15 to 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.15_to_2.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.15 to 2.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.15 to 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.15_to_2.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.16 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.16-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '73',
		'created'      => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.17 - Release ID 74
	 */
	[
		'title'        => 'Joomla! 2.5.17 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.17 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.17 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.17-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.16 to 2.5.17 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.16 to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.16_to_2.5.17-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.16 to 2.5.17 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.16 to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.16_to_2.5.17-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.16 to 2.5.17 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.16 to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.16_to_2.5.17-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.17 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.17 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.17 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.17</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '74',
		'created'      => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.18 - Release ID 75
	 */
	[
		'title'        => 'Joomla! 2.5.18 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.18 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.18 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.18-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.17 to 2.5.18 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.17 to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17_to_2.5.18-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.17 to 2.5.18 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.17 to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17_to_2.5.18-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.17 to 2.5.18 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.17 to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.17_to_2.5.18-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.18 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.18 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.18 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.18</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '75',
		'created'      => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.19 - Release ID 76
	 */
	[
		'title'        => 'Joomla! 2.5.19 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.19 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.19 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.19-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.18 to 2.5.19 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.18 to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18_to_2.5.19-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.18 to 2.5.19 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.18 to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18_to_2.5.19-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.18 to 2.5.19 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.18 to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.18_to_2.5.19-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.19 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.19 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.19 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.19</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '76',
		'created'      => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.20 - Release ID 77
	 */
	[
		'title'        => 'Joomla! 2.5.20 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.20 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.20 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.20-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.19 to 2.5.20 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.19 to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19_to_2.5.20-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.19 to 2.5.20 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.19 to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19_to_2.5.20-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.19 to 2.5.20 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.19 to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.19_to_2.5.20-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.20 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.20 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.20 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.20</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '77',
		'created'      => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.21 - Release ID 78
	 */
	[
		'title'        => 'Joomla! 2.5.21 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.21 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.21 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.21-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.20 to 2.5.21 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.20 to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20_to_2.5.21-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.20 to 2.5.21 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.20 to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20_to_2.5.21-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.20 to 2.5.21 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.20 to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.20_to_2.5.21-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.21 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.21 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.21 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.21</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '78',
		'created'      => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.22 - Release ID 79
	 */
	[
		'title'        => 'Joomla! 2.5.22 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.22 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.22 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.22-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.21 to 2.5.22 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.21 to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21_to_2.5.22-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.21 to 2.5.22 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.21 to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21_to_2.5.22-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.21 to 2.5.22 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.21 to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.21_to_2.5.22-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.22 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.22 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.22 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.22</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '79',
		'created'      => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.23 - Release ID 80
	 */
	[
		'title'        => 'Joomla! 2.5.23 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.23 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.23 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.23-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.22 to 2.5.23 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.22 to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22_to_2.5.23-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.22 to 2.5.23 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.22 to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22_to_2.5.23-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.22 to 2.5.23 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.22 to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.22_to_2.5.23-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.23 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.23 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.23 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.23</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '80',
		'created'      => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.24 - Release ID 81
	 */
	[
		'title'        => 'Joomla! 2.5.24 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.24 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.24 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.24 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.24-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.24 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.24-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.24 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.24-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.23 to 2.5.24 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.23 to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23_to_2.5.24-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.23 to 2.5.24 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.23 to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23_to_2.5.24-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.23 to 2.5.24 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.23 to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.23_to_2.5.24-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.24 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.24 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.24 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.24</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '81',
		'created'      => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.25 - Release ID 82
	 */
	[
		'title'        => 'Joomla! 2.5.25 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.25 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.25 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.25 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.25-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.25 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.25-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.25 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.25-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.24 to 2.5.25 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.24 to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24_to_2.5.25-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.24 to 2.5.25 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.24 to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24_to_2.5.25-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.24 to 2.5.25 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.24 to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.24_to_2.5.25-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.25 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.25 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.25 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.25</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '82',
		'created'      => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.26 - Release ID 83
	 */
	[
		'title'        => 'Joomla! 2.5.26 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.26 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.26 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.26 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.26-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.26 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.26-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.26 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.26-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.25 to 2.5.26 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.25 to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25_to_2.5.26-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.25 to 2.5.26 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.25 to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25_to_2.5.26-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.25 to 2.5.26 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.25 to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.25_to_2.5.26-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.26 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.26 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.26 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.26</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '83',
		'created'      => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.27 - Release ID 84
	 */
	[
		'title'        => 'Joomla! 2.5.27 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.27 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.27 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.27 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.27-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.27 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.27-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.27 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.27-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.26 to 2.5.27 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.26 to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26_to_2.5.27-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.26 to 2.5.27 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.26 to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26_to_2.5.27-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.26 to 2.5.27 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.26 to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.26_to_2.5.27-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.27 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.27 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.27 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.27</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '84',
		'created'      => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 2.5.28 - Release ID 85
	 */
	[
		'title'        => 'Joomla! 2.5.28 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.28-Stable-Full_Package.zip',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.28 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.28-Stable-Full_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.28 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.28-Stable-Full_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.28 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.28-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.28 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.28-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.x to 2.5.28 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from any Joomla! 2.5 release to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.x_to_2.5.28-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.27 to 2.5.28 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.27 to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27_to_2.5.28-Stable-Patch_Package.zip',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.27 to 2.5.28 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.27 to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27_to_2.5.28-Stable-Patch_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.27 to 2.5.28 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 2.5.27 to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.27_to_2.5.28-Stable-Patch_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.28 Upgrade Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.28-Stable-Update_Package.zip',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.28 Upgrade Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.28-Stable-Update_Package.tar.gz',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 2.5.28 Upgrade Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.7 to 2.5.28</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_2.5.28-Stable-Update_Package.tar.bz2',
		'environments' => ['8'],
		'release_id'   => '85',
		'created'      => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql()
	],
];
