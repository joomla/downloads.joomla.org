<?php

/** @var ImportDownloads $this */

// Build our array of 1.0 items
$items = [
	/*
	 * 1.0.0 - Release ID 1
	 */
	[
		'title'        => 'Joomla! 1.0.0 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.0</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0-Stable.tar.gz',
		'environments' => ['4'],
		'release_id'   => '1',
		'created'      => $this->platform->getDate('2005-09-17 00:30:00', new DateTimeZone('GMT'))->toSql()
	],

	/*
	 * 1.0.1 - Release ID 2
	 */
	[
		'title'        => 'Joomla! 1.0.1 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1-Stable.tar.gz',
		'environments' => ['4'],
		'release_id'   => '2',
		'created'      => $this->platform->getDate('2005-09-21 16:30:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.1</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to1.0.1-Stable_Patch.tar.gz',
		'environments' => ['4'],
		'release_id'   => '2',
		'created'      => $this->platform->getDate('2005-09-21 16:30:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.2 - Release ID 3
	 */
	[
		'title'        => 'Joomla! 1.0.2 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '3',
		'created'      => $this->platform->getDate('2005-10-02 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to1.0.2-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '3',
		'created'      => $this->platform->getDate('2005-10-02 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.2 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.2</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to1.0.2-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '3',
		'created'      => $this->platform->getDate('2005-10-02 16:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.3 - Release ID 4
	 */
	[
		'title'        => 'Joomla! 1.0.3 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '4',
		'created'      => $this->platform->getDate('2005-10-14 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '4',
		'created'      => $this->platform->getDate('2005-10-14 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.3-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '4',
		'created'      => $this->platform->getDate('2005-10-14 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.3-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '4',
		'created'      => $this->platform->getDate('2005-10-14 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.3 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.3</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.3-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '4',
		'created'      => $this->platform->getDate('2005-10-14 10:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.4 - Release ID 5
	 */
	[
		'title'        => 'Joomla! 1.0.4 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '5',
		'created'      => $this->platform->getDate('2005-11-21 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.4-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '5',
		'created'      => $this->platform->getDate('2005-11-21 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.4-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '5',
		'created'      => $this->platform->getDate('2005-11-21 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.4-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '5',
		'created'      => $this->platform->getDate('2005-11-21 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.4 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.4</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.4-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '5',
		'created'      => $this->platform->getDate('2005-11-21 10:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.5 - Release ID 6
	 */
	[
		'title'        => 'Joomla! 1.0.5 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '6',
		'created'      => $this->platform->getDate('2005-12-24 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.5-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '6',
		'created'      => $this->platform->getDate('2005-12-24 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.5-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '6',
		'created'      => $this->platform->getDate('2005-12-24 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.5-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '6',
		'created'      => $this->platform->getDate('2005-12-24 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.5-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '6',
		'created'      => $this->platform->getDate('2005-12-24 10:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.5 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.5</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.5-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '6',
		'created'      => $this->platform->getDate('2005-12-24 10:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.6 - Release ID 7
	 */
	[
		'title'        => 'Joomla! 1.0.6 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '7',
		'created'      => $this->platform->getDate('2006-01-15 15:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.6-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '7',
		'created'      => $this->platform->getDate('2006-01-15 15:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.6-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '7',
		'created'      => $this->platform->getDate('2006-01-15 15:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.6-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '7',
		'created'      => $this->platform->getDate('2006-01-15 15:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.6-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '7',
		'created'      => $this->platform->getDate('2006-01-15 15:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.6-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '7',
		'created'      => $this->platform->getDate('2006-01-15 15:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.6 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.6</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.6-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '7',
		'created'      => $this->platform->getDate('2006-01-15 15:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.7 - Release ID 8
	 */
	[
		'title'        => 'Joomla! 1.0.7 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.7-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.7-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.7-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.7-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.7-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.7-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.7-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.7-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.7-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.7-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.7-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.7-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.7 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.7-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.7 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.7-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.7 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.7</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.7-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '8',
		'created'      => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.8 - Release ID 9
	 */
	[
		'title'        => 'Joomla! 1.0.8 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.8-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.8-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.8-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.8-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.8-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.8-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.8-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.8-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.8-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.8-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.8-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.8-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.8-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.8-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.8 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.8-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.8 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.8-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.8 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.8</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.8-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '9',
		'created'      => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.9 - Release ID 10
	 */
	[
		'title'        => 'Joomla! 1.0.9 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.9 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.9-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.9 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.9-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.9 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.9</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.9-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '10',
		'created'      => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.10 - Release ID 11
	 */
	[
		'title'        => 'Joomla! 1.0.10 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.10 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.10-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.10 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.10-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.10 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.10</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.10-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '11',
		'created'      => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.11 - Release ID 12
	 */
	[
		'title'        => 'Joomla! 1.0.11 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.11 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.11 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.11 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.11-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.11 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.11-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.11 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.11</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.11-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '12',
		'created'      => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.12 - Release ID 13
	 */
	[
		'title'        => 'Joomla! 1.0.12 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.11 to 1.0.12 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.11 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11_to_1.0.12-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.11 to 1.0.12 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.11 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11_to_1.0.12-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.11 to 1.0.12 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.11 to 1.0.12</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11_to_1.0.12-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '13',
		'created'      => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.13 - Release ID 14
	 */
	[
		'title'        => 'Joomla! 1.0.13 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.13 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.13 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.0_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.0 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.0 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.1 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.1 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.1_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.2 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.2 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.2_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.3 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.3 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.3_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.4 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.4 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.4_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.5 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.5 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.5_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.6 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.6 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.6_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.7 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.7 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.7_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.8 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.8 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.8_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.9 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.9 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.9_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.10 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.10 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.10_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.11 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.11 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.11 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.11 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.11 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.11 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.11_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.13 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.13-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.13 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.13-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.13 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.13</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.13-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '14',
		'created'      => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.14 - Release ID 15
	 */
	[
		'title'        => 'Joomla! 1.0.14 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.14-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.14 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.14-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.14 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.14-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.14-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.14-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.13 to 1.0.14 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.13 to 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13_to_1.0.14-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.13 to 1.0.14 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.13 to 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13_to_1.0.14-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.13 to 1.0.14 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.13 to 1.0.14</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13_to_1.0.14-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '15',
		'created'      => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql()
	],

	/*
	 * 1.0.15 - Release ID 16
	 */
	[
		'title'        => 'Joomla! 1.0.15 Full Package (.zip)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.15-Stable-Full_Package.zip',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.15 Full Package (.tar.gz)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.15-Stable-Full_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.15 Full Package (.tar.bz2)',
		'description'  => '<p>This is the full download package for Joomla! 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.15-Stable-Full_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.15-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.15-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.12 to 1.0.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.12 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.12_to_1.0.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.13 to 1.0.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.13 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13_to_1.0.15-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.13 to 1.0.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.13 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13_to_1.0.15-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.13 to 1.0.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.13 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.13_to_1.0.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.14 to 1.0.15 Patch Package (.zip)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.14 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.14_to_1.0.15-Stable-Patch_Package.zip',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.14 to 1.0.15 Patch Package (.tar.gz)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.14 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.14_to_1.0.15-Stable-Patch_Package.tar.gz',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
	[
		'title'        => 'Joomla! 1.0.14 to 1.0.15 Patch Package (.tar.bz2)',
		'description'  => '<p>This package is for performing updates from Joomla! 1.0.14 to 1.0.15</p>',
		'type'         => 'file',
		'filename'     => 'Joomla_1.0.14_to_1.0.15-Stable-Patch_Package.tar.bz2',
		'environments' => ['4'],
		'release_id'   => '16',
		'created'      => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql()
	],
];
