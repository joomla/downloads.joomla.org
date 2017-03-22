<?php

/** @var ImportDownloads $this */

// Build our array of 1.5 items
$items = [
	/*
	 * 1.5.0 - Release ID 17
	 */
	[
		'title'        => 'Joomla! 1.5.0 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla-1.5.0.zip',
		'environments' => ['5'],
		'release_id'   => '17',
		'created'      => $this->platform->getDate('2008-01-21 23:55:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla-1.5.0.tar.gz',
		'environments' => ['5'],
		'release_id'   => '17',
		'created'      => $this->platform->getDate('2008-01-21 23:55:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla-1.5.0.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '17',
		'created'      => $this->platform->getDate('2008-01-21 23:55:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.1 - Release ID 18
	 */
	[
		'title'        => 'Joomla! 1.5.1 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '18',
		'created'      => $this->platform->getDate('2008-02-08 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '18',
		'created'      => $this->platform->getDate('2008-02-08 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '18',
		'created'      => $this->platform->getDate('2008-02-08 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.1-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '18',
		'created'      => $this->platform->getDate('2008-02-08 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.1-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '18',
		'created'      => $this->platform->getDate('2008-02-08 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.1-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '18',
		'created'      => $this->platform->getDate('2008-02-08 22:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.2 - Release ID 19
	 */
	[
		'title'        => 'Joomla! 1.5.2 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.2-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.2-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.2 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.2-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.2-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.2 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.2-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '19',
		'created'      => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.3 - Release ID 20
	 */
	[
		'title'        => 'Joomla! 1.5.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.3-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.3-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.3-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.3-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.3 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.3-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.3-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.3 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.3-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '20',
		'created'      => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.4 - Release ID 21
	 */
	[
		'title'        => 'Joomla! 1.5.4 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.4-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.4-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.4-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.4-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.4-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.4-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.4 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.4-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.4-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.4 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.4-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '21',
		'created'      => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.5 - Release ID 22
	 */
	[
		'title'        => 'Joomla! 1.5.5 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.5-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.5-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.5-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.5-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.5-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.5-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.5-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.5-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.5 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.5-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.5-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.5 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.5-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '22',
		'created'      => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.6 - Release ID 23
	 */
	[
		'title'        => 'Joomla! 1.5.6 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.6-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.6-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.6-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.6-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.6-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.6-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.6-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.6-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.6-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.6-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.6-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.6 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.6-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.6 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.6-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '23',
		'created'      => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.7 - Release ID 24
	 */
	[
		'title'        => 'Joomla! 1.5.7 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.7-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.7-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.7-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.7-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.7-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.7-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.7-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.7-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '24',
		'created'      => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.8 - Release ID 25
	 */
	[
		'title'        => 'Joomla! 1.5.8 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.8-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.8-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.8-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.8-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.8-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.8-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.8-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.8-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.8-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '25',
		'created'      => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.9 - Release ID 26
	 */
	[
		'title'        => 'Joomla! 1.5.9 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.9-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.9-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '26',
		'created'      => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.10 - Release ID 27
	 */
	[
		'title'        => 'Joomla! 1.5.10 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.10-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.10-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '27',
		'created'      => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.11 - Release ID 28
	 */
	[
		'title'        => 'Joomla! 1.5.11 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.11-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.11-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '28',
		'created'      => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.12 - Release ID 29
	 */
	[
		'title'        => 'Joomla! 1.5.12 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.12-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.12-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '29',
		'created'      => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.13 - Release ID 30
	 */
	[
		'title'        => 'Joomla! 1.5.13 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.13-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.13-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '30',
		'created'      => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.14 - Release ID 31
	 */
	[
		'title'        => 'Joomla! 1.5.14 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.14-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.14-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '31',
		'created'      => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.15 - Release ID 32
	 */
	[
		'title'        => 'Joomla! 1.5.15 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.15-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.15-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '32',
		'created'      => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.5.16 - Release ID 33
	 */
	[
		'title'        => 'Joomla! 1.5.16 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16-Stable-Full_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16-Stable-Full_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.16 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.16-Stable-Full_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.0 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.0 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.0_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.1 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.1 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.1_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.2 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.2 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.2_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.3 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.3 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.3_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.4 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.4 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.4_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.5 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.5 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.5_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.6 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.6 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.6_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.7 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.7 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.7_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.8 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.8 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.8_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.9 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.9 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.9_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.10 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.10 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.10_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.11 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.11 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.11_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.12 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.12 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.12_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.13 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.13 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.13_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.14 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.14 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.14_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.16 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.16-Stable-Patch_Package.zip',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.16 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.16-Stable-Patch_Package.tar.gz',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.5.15 to 1.5.16 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.5.15 to 1.5.16</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.5.15_to_1.5.16-Stable-Patch_Package.tar.bz2',
		'environments' => ['5'],
		'release_id'   => '33',
		'created'      => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql()
	],
];
