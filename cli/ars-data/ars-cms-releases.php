<?php

/** @var ImportDownloads $this */

// Build our array of releases
$releases = [
	/*
	 * Joomla! 1.0
	 */
	// ID: 1
	[
		'category_id'      => '1',
		'version'          => '1.0.0',
		'alias'            => '1-0-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.0 release</p>',
		'created'          => $this->platform->getDate('2005-09-17 00:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/general-news/164-baby-joomla-cuts-its-first-tooth.html',
	],
	// ID: 2
	[
		'category_id'      => '1',
		'version'          => '1.0.1',
		'alias'            => '1-0-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.1 release</p>',
		'created'          => $this->platform->getDate('2005-09-21 16:30:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/202-joomla-101-stability-release-now-available.html',
	],
	// ID: 3
	[
		'category_id'      => '1',
		'version'          => '1.0.2',
		'alias'            => '1-0-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.2 release</p>',
		'created'          => $this->platform->getDate('2005-10-02 16:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/274-joomla-102-stability-release-now-available.html',
	],
	// ID: 4
	[
		'category_id'      => '1',
		'version'          => '1.0.3',
		'alias'            => '1-0-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.3 release</p>',
		'created'          => $this->platform->getDate('2005-10-14 10:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/338-upgrade-to-joomla-103-security-release-now.html',
	],
	// ID: 5
	[
		'category_id'      => '1',
		'version'          => '1.0.4',
		'alias'            => '1-0-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.4 release</p>',
		'created'          => $this->platform->getDate('2005-11-21 10:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/498-upgrade-to-joomla-104-security-release-now.html',
	],
	// ID: 6
	[
		'category_id'      => '1',
		'version'          => '1.0.5',
		'alias'            => '1-0-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.5 release</p>',
		'created'          => $this->platform->getDate('2005-12-24 10:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/638-joomla-105-released.html',
	],
	// ID: 7
	[
		'category_id'      => '1',
		'version'          => '1.0.6',
		'alias'            => '1-0-6',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.6 release</p>',
		'created'          => $this->platform->getDate('2006-01-15 15:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/727-joomla-107-released.html',
	],
	// ID: 8
	[
		'category_id'      => '1',
		'version'          => '1.0.7',
		'alias'            => '1-0-7',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.7 release</p>',
		'created'          => $this->platform->getDate('2006-01-15 20:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/727-joomla-107-released.html',
	],
	// ID: 9
	[
		'category_id'      => '1',
		'version'          => '1.0.8',
		'alias'            => '1-0-8',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.8 release</p>',
		'created'          => $this->platform->getDate('2006-02-26 05:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/940-joomla-108-released.html',
	],
	// ID: 10
	[
		'category_id'      => '1',
		'version'          => '1.0.9',
		'alias'            => '1-0-9',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.9 release</p>',
		'created'          => $this->platform->getDate('2006-06-05 16:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/1398-joomla-109-out-now.html',
	],
	// ID: 11
	[
		'category_id'      => '1',
		'version'          => '1.0.10',
		'alias'            => '1-0-10',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.10 release</p>',
		'created'          => $this->platform->getDate('2006-06-26 00:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/1510-upgrade-to-joomla-1010-security-release.html',
	],
	// ID: 12
	[
		'category_id'      => '1',
		'version'          => '1.0.11',
		'alias'            => '1-0-11',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.11 release</p>',
		'created'          => $this->platform->getDate('2006-08-28 20:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/1843-upgrade-immediately-to-joomla-1011.html',
	],
	// ID: 13
	[
		'category_id'      => '1',
		'version'          => '1.0.12',
		'alias'            => '1-0-12',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.12 release</p>',
		'created'          => $this->platform->getDate('2006-12-25 01:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/2446-joomla-1012-released.html',
	],
	// ID: 14
	[
		'category_id'      => '1',
		'version'          => '1.0.13',
		'alias'            => '1-0-13',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.13 release</p>',
		'created'          => $this->platform->getDate('2007-07-21 20:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/3677-joomla-1013-released.html',
	],
	// ID: 15
	[
		'category_id'      => '1',
		'version'          => '1.0.14',
		'alias'            => '1-0-14',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.14 release</p>',
		'created'          => $this->platform->getDate('2008-02-11 00:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/4563-joomla-1014-released.html',
	],
	// ID: 16
	[
		'category_id'      => '1',
		'version'          => '1.0.15',
		'alias'            => '1-0-15',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.0.15 release</p>',
		'created'          => $this->platform->getDate('2008-02-22 23:00:00', new DateTimeZone('UTC'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/4609-joomla-1015-released.html',
	],

	/*
	 * Joomla! 1.5
	 */
	// ID: 17
	[
		'category_id'      => '2',
		'version'          => '1.5.0',
		'alias'            => '1-5-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.0 release</p>',
		'created'          => $this->platform->getDate('2008-01-21 23:55:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/4488-ladies-and-gentlemen.html',
	],
	// ID: 18
	[
		'category_id'      => '2',
		'version'          => '1.5.1',
		'alias'            => '1-5-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.1 release</p>',
		'created'          => $this->platform->getDate('2008-02-08 22:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/4560-joomla-1-5-1-released.html',
	],
	// ID: 19
	[
		'category_id'      => '2',
		'version'          => '1.5.2',
		'alias'            => '1-5-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.2 release</p>',
		'created'          => $this->platform->getDate('2008-03-22 22:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/4720-joomla-152-released.html',
	],
	// ID: 20
	[
		'category_id'      => '2',
		'version'          => '1.5.3',
		'alias'            => '1-5-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.3 release</p>',
		'created'          => $this->platform->getDate('2008-04-22 22:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/4852-joomla-153-released.html',
	],
	// ID: 21
	[
		'category_id'      => '2',
		'version'          => '1.5.4',
		'alias'            => '1-5-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.4 release</p>',
		'created'          => $this->platform->getDate('2008-07-06 22:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5180-joomla-154-released.html',
	],
	// ID: 22
	[
		'category_id'      => '2',
		'version'          => '1.5.5',
		'alias'            => '1-5-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.5 release</p>',
		'created'          => $this->platform->getDate('2008-07-27 22:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5193-joomla-155-released.html',
	],
	// ID: 23
	[
		'category_id'      => '2',
		'version'          => '1.5.6',
		'alias'            => '1-5-6',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.6 release</p>',
		'created'          => $this->platform->getDate('2008-08-12 22:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5199-joomla-156-released.html',
	],
	// ID: 24
	[
		'category_id'      => '2',
		'version'          => '1.5.7',
		'alias'            => '1-5-7',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.7 release</p>',
		'created'          => $this->platform->getDate('2008-09-09 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5212-joomla-157-security-release-now-available.html',
	],
	// ID: 25
	[
		'category_id'      => '2',
		'version'          => '1.5.8',
		'alias'            => '1-5-8',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.8 release</p>',
		'created'          => $this->platform->getDate('2008-11-10 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5219-joomla-158-released.html',
	],
	// ID: 26
	[
		'category_id'      => '2',
		'version'          => '1.5.9',
		'alias'            => '1-5-9',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.9 release</p>',
		'created'          => $this->platform->getDate('2009-01-09 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5226-joomla-159-security-release-now-available.html',
	],
	// ID: 27
	[
		'category_id'      => '2',
		'version'          => '1.5.10',
		'alias'            => '1-5-10',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.10 release</p>',
		'created'          => $this->platform->getDate('2009-03-27 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5231-joomla-1510-security-release-now-available.html',
	],
	// ID: 28
	[
		'category_id'      => '2',
		'version'          => '1.5.11',
		'alias'            => '1-5-11',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.11 release</p>',
		'created'          => $this->platform->getDate('2009-06-03 03:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5235-joomla-1511-security-release-now-available.html',
	],
	// ID: 29
	[
		'category_id'      => '2',
		'version'          => '1.5.12',
		'alias'            => '1-5-12',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.12 release</p>',
		'created'          => $this->platform->getDate('2009-07-01 02:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5242-joomla-1512-released.html',
	],
	// ID: 30
	[
		'category_id'      => '2',
		'version'          => '1.5.13',
		'alias'            => '1-5-13',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.13 release</p>',
		'created'          => $this->platform->getDate('2009-07-23 04:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5243-joomla-1513-security-release-now-available.html',
	],
	// ID: 31
	[
		'category_id'      => '2',
		'version'          => '1.5.14',
		'alias'            => '1-5-14',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.14 release</p>',
		'created'          => $this->platform->getDate('2009-07-30 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5244-joomla-1514-released.html',
	],
	// ID: 32
	[
		'category_id'      => '2',
		'version'          => '1.5.15',
		'alias'            => '1-5-15',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.15 release</p>',
		'created'          => $this->platform->getDate('2009-11-05 04:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5249-joomla-1515-released.html',
	],
	// ID: 33
	[
		'category_id'      => '2',
		'version'          => '1.5.16',
		'alias'            => '1-5-16',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.16 release</p>',
		'created'          => $this->platform->getDate('2010-04-24 04:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5259-joomla-1516-released.html',
	],
	// ID: 34
	[
		'category_id'      => '2',
		'version'          => '1.5.17',
		'alias'            => '1-5-17',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.17 release</p>',
		'created'          => $this->platform->getDate('2010-04-27 04:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5268-joomla-1517-released.html',
	],
	// ID: 35
	[
		'category_id'      => '2',
		'version'          => '1.5.18',
		'alias'            => '1-5-18',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.18 release</p>',
		'created'          => $this->platform->getDate('2010-05-27 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5276-joomla-1518-released.html',
	],
	// ID: 36
	[
		'category_id'      => '2',
		'version'          => '1.5.19',
		'alias'            => '1-5-19',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.19 release</p>',
		'created'          => $this->platform->getDate('2010-07-15 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5283-joomla-1519-released.html',
	],
	// ID: 37
	[
		'category_id'      => '2',
		'version'          => '1.5.20',
		'alias'            => '1-5-20',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.20 release</p>',
		'created'          => $this->platform->getDate('2010-07-18 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5284-joomla-1520-released.html',
	],
	// ID: 38
	[
		'category_id'      => '2',
		'version'          => '1.5.21',
		'alias'            => '1-5-21',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.21 release</p>',
		'created'          => $this->platform->getDate('2010-10-08 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5300-joomla-1521-released.html',
	],
	// ID: 39
	[
		'category_id'      => '2',
		'version'          => '1.5.22',
		'alias'            => '1-5-22',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.22 release</p>',
		'created'          => $this->platform->getDate('2010-11-04 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5318-joomla-1522-released.html',
	],
	// ID: 40
	[
		'category_id'      => '2',
		'version'          => '1.5.23',
		'alias'            => '1-5-23',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.23 release</p>',
		'created'          => $this->platform->getDate('2011-03-04 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5367-joomla-1523-released.html',
	],
	// ID: 41
	[
		'category_id'      => '2',
		'version'          => '1.5.24',
		'alias'            => '1-5-24',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.24 release</p>',
		'created'          => $this->platform->getDate('2011-10-17 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5390-joomla-1524-released.html',
	],
	// ID: 42
	[
		'category_id'      => '2',
		'version'          => '1.5.25',
		'alias'            => '1-5-25',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.25 release</p>',
		'created'          => $this->platform->getDate('2011-11-14 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5393-joomla-1525-released.html',
	],
	// ID: 43
	[
		'category_id'      => '2',
		'version'          => '1.5.26',
		'alias'            => '1-5-26',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.5.26 release</p>',
		'created'          => $this->platform->getDate('2012-03-27 18:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5419-joomla-1526-released.html',
	],

	/*
	 * Joomla! 1.6
	 */
	// ID: 44
	[
		'category_id'      => '3',
		'version'          => '1.6.0',
		'alias'            => '1-6-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.6.0 release</p>',
		'created'          => $this->platform->getDate('2011-01-10 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/general-news/5348-joomlar-16-has-arrived.html',
	],
	// ID: 45
	[
		'category_id'      => '3',
		'version'          => '1.6.1',
		'alias'            => '1-6-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.6.1 release</p>',
		'created'          => $this->platform->getDate('2011-03-07 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5350-joomla-161-released.html',
	],
	// ID: 46
	[
		'category_id'      => '3',
		'version'          => '1.6.2',
		'alias'            => '1-6-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.6.2 release</p>',
		'created'          => $this->platform->getDate('2011-04-14 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5368-joomla-162-released.html',
	],
	// ID: 47
	[
		'category_id'      => '3',
		'version'          => '1.6.3',
		'alias'            => '1-6-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.6.3 release</p>',
		'created'          => $this->platform->getDate('2011-04-18 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5370-joomla-163-released.html',
	],
	// ID: 48
	[
		'category_id'      => '3',
		'version'          => '1.6.4',
		'alias'            => '1-6-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.6.4 release</p>',
		'created'          => $this->platform->getDate('2011-06-23 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5374-joomla-164-released.html',
	],
	// ID: 49
	[
		'category_id'      => '3',
		'version'          => '1.6.5',
		'alias'            => '1-6-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.6.5 release</p>',
		'created'          => $this->platform->getDate('2011-07-11 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5378-joomla-165-released.html',
	],
	// ID: 50
	[
		'category_id'      => '3',
		'version'          => '1.6.6',
		'alias'            => '1-6-6',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.6.6 release</p>',
		'created'          => $this->platform->getDate('2011-07-26 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5383-joomla-166-released.html',
	],

	/*
	 * Joomla! 1.7
	 */
	// ID: 51
	[
		'category_id'      => '3',
		'version'          => '1.7.0',
		'alias'            => '1-7-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.7.0 release</p>',
		'created'          => $this->platform->getDate('2011-07-19 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5380-joomla-170-released.html',
	],
	// ID: 52
	[
		'category_id'      => '3',
		'version'          => '1.7.1',
		'alias'            => '1-7-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.7.1 release</p>',
		'created'          => $this->platform->getDate('2011-09-26 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5387-joomla-171-released.html',
	],
	// ID: 53
	[
		'category_id'      => '3',
		'version'          => '1.7.2',
		'alias'            => '1-7-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.7.2 release</p>',
		'created'          => $this->platform->getDate('2011-10-17 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5389-joomla-172-released.html',
	],
	// ID: 54
	[
		'category_id'      => '3',
		'version'          => '1.7.3',
		'alias'            => '1-7-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.7.3 release</p>',
		'created'          => $this->platform->getDate('2011-11-14 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5392-joomla-173-released.html',
	],
	// ID: 55
	[
		'category_id'      => '3',
		'version'          => '1.7.4',
		'alias'            => '1-7-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.7.4 release</p>',
		'created'          => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5405-joomla-174-released.html',
	],
	// ID: 56
	[
		'category_id'      => '3',
		'version'          => '1.7.5',
		'alias'            => '1-7-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 1.7.5 release</p>',
		'created'          => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5411-joomla-175-released.html',
	],

	/*
	 * Joomla! 2.5
	 */
	// ID: 57
	[
		'category_id'      => '3',
		'version'          => '2.5.0',
		'alias'            => '2-5-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.0 release</p>',
		'created'          => $this->platform->getDate('2012-01-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5403-joomla-250-released.html',
	],
	// ID: 58
	[
		'category_id'      => '3',
		'version'          => '2.5.1',
		'alias'            => '2-5-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.1 release</p>',
		'created'          => $this->platform->getDate('2012-02-02 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5410-joomla-251-released.html',
	],
	// ID: 59
	[
		'category_id'      => '3',
		'version'          => '2.5.2',
		'alias'            => '2-5-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.2 release</p>',
		'created'          => $this->platform->getDate('2012-03-05 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5415-joomla-252-released.html',
	],
	// ID: 60
	[
		'category_id'      => '3',
		'version'          => '2.5.3',
		'alias'            => '2-5-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.3 release</p>',
		'created'          => $this->platform->getDate('2012-03-15 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5416-joomla-253-released.html',
	],
	// ID: 61
	[
		'category_id'      => '3',
		'version'          => '2.5.4',
		'alias'            => '2-5-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.4 release</p>',
		'created'          => $this->platform->getDate('2012-04-02 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5418-joomla-254-released.html',
	],
	// ID: 62
	[
		'category_id'      => '3',
		'version'          => '2.5.5',
		'alias'            => '2-5-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.5 release</p>',
		'created'          => $this->platform->getDate('2012-06-18 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5427-joomla-255-released.html',
	],
	// ID: 63
	[
		'category_id'      => '3',
		'version'          => '2.5.6',
		'alias'            => '2-5-6',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.6 release</p>',
		'created'          => $this->platform->getDate('2012-06-19 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5428-joomla-256-released.html',
	],
	// ID: 64
	[
		'category_id'      => '3',
		'version'          => '2.5.7',
		'alias'            => '2-5-7',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.7 release</p>',
		'created'          => $this->platform->getDate('2012-09-13 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5463-joomla-2-5-7-released.html',
	],
	// ID: 65
	[
		'category_id'      => '3',
		'version'          => '2.5.8',
		'alias'            => '2-5-8',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.8 release</p>',
		'created'          => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5470-joomla-2-5-8-released.html',
	],
	// ID: 66
	[
		'category_id'      => '3',
		'version'          => '2.5.9',
		'alias'            => '2-5-9',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.9 release</p>',
		'created'          => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5477-joomla-2-5-9-released.html',
	],
	// ID: 67
	[
		'category_id'      => '3',
		'version'          => '2.5.10',
		'alias'            => '2-5-10',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.10 release</p>',
		'created'          => $this->platform->getDate('2013-04-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5493-joomla-2-5-10-released.html',
	],
	// ID: 68
	[
		'category_id'      => '3',
		'version'          => '2.5.11',
		'alias'            => '2-5-11',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.11 release</p>',
		'created'          => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5498-joomla-2-5-11-released.html',
	],
	// ID: 69
	[
		'category_id'      => '3',
		'version'          => '2.5.12',
		'alias'            => '2-5-12',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.12 release</p><p><span class="label label-important">Important!</span> Due to issues during pre-release testing, this release was never officially distributed.  Please see <a href="http://community.joomla.org/blogs/leadership/1763-update-on-2512-and-312-releases.html">this blog post</a> for additional information.</p>',
		'created'          => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5503-joomla-2-5-13-released.html',
	],
	// ID: 70
	[
		'category_id'      => '3',
		'version'          => '2.5.13',
		'alias'            => '2-5-13',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.13 release</p>',
		'created'          => $this->platform->getDate('2013-07-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5503-joomla-2-5-13-released.html',
	],
	// ID: 71
	[
		'category_id'      => '3',
		'version'          => '2.5.14',
		'alias'            => '2-5-14',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.14 release</p>',
		'created'          => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5506-joomla-2-5-14-released.html',
	],
	// ID: 72
	[
		'category_id'      => '3',
		'version'          => '2.5.15',
		'alias'            => '2-5-15',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.15 release</p>',
		'created'          => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5517-joomla-2-5-15-released.html',
	],
	// ID: 73
	[
		'category_id'      => '3',
		'version'          => '2.5.16',
		'alias'            => '2-5-16',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.16 release</p>',
		'created'          => $this->platform->getDate('2013-11-06 22:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5518-joomla-2-5-16-released.html',
	],
	// ID: 74
	[
		'category_id'      => '3',
		'version'          => '2.5.17',
		'alias'            => '2-5-17',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.17 release</p>',
		'created'          => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5522-joomla-2-5-17-released.html',
	],
	// ID: 75
	[
		'category_id'      => '3',
		'version'          => '2.5.18',
		'alias'            => '2-5-18',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.18 release</p>',
		'created'          => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5530-joomla-2-5-18-released.html',
	],
	// ID: 76
	[
		'category_id'      => '3',
		'version'          => '2.5.19',
		'alias'            => '2-5-19',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.19 release</p>',
		'created'          => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5537-joomla-2-5-19-released.html',
	],
	// ID: 77
	[
		'category_id'      => '3',
		'version'          => '2.5.20',
		'alias'            => '2-5-20',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.20 release</p>',
		'created'          => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5545-joomla-2-5-20-released.html',
	],
	// ID: 78
	[
		'category_id'      => '3',
		'version'          => '2.5.21',
		'alias'            => '2-5-21',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.21 release</p>',
		'created'          => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5550-joomla-2-5-21-released.html',
	],
	// ID: 79
	[
		'category_id'      => '3',
		'version'          => '2.5.22',
		'alias'            => '2-5-22',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.22 release</p>',
		'created'          => $this->platform->getDate('2014-06-12 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5552-joomla-2-5-22-released.html',
	],
	// ID: 80
	[
		'category_id'      => '3',
		'version'          => '2.5.23',
		'alias'            => '2-5-23',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.23 release</p>',
		'created'          => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5554-joomla-2-5-23-released.html',
	],
	// ID: 81
	[
		'category_id'      => '3',
		'version'          => '2.5.24',
		'alias'            => '2-5-24',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.24 release</p>',
		'created'          => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5556-joomla-2-5-24-released.html',
	],
	// ID: 82
	[
		'category_id'      => '3',
		'version'          => '2.5.25',
		'alias'            => '2-5-25',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.25 release</p>',
		'created'          => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5563-joomla-2-5-25-released.html',
	],
	// ID: 83
	[
		'category_id'      => '3',
		'version'          => '2.5.26',
		'alias'            => '2-5-26',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.26 release</p>',
		'created'          => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5566-joomla-2-5-26-released.html',
	],
	// ID: 84
	[
		'category_id'      => '3',
		'version'          => '2.5.27',
		'alias'            => '2-5-27',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.27 release</p>',
		'created'          => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5568-joomla-2-5-27-released.html',
	],
	// ID: 85
	[
		'category_id'      => '3',
		'version'          => '2.5.28',
		'alias'            => '2-5-28',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 2.5.28 release</p>',
		'created'          => $this->platform->getDate('2014-12-10 15:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5574-joomla-2-5-28-released.html',
	],

	/*
	 * Joomla! 3.0
	 */
	// ID: 86
	[
		'category_id'      => '4',
		'version'          => '3.0.0',
		'alias'            => '3-0-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.0.0 release</p>',
		'created'          => $this->platform->getDate('2012-09-27 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5464-joomla-3-0-0-released.html',
	],
	// ID: 87
	[
		'category_id'      => '4',
		'version'          => '3.0.1',
		'alias'            => '3-0-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.0.1 release</p>',
		'created'          => $this->platform->getDate('2012-10-09 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5468-joomla-3-0-1-released.html',
	],
	// ID: 88
	[
		'category_id'      => '4',
		'version'          => '3.0.2',
		'alias'            => '3-0-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.0.2 release</p>',
		'created'          => $this->platform->getDate('2012-11-08 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5471-joomla-3-0-2-released.html',
	],
	// ID: 89
	[
		'category_id'      => '4',
		'version'          => '3.0.3',
		'alias'            => '3-0-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.0.3 release</p>',
		'created'          => $this->platform->getDate('2013-02-04 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5478-joomla-3-0-3-released.html',
	],
	// ID: 90
	[
		'category_id'      => '4',
		'version'          => '3.0.4',
		'alias'            => '3-0-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.0.4 release</p>',
		'created'          => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5494-joomla-3-1-0-stable-released.html',
	],

	/*
	 * Joomla! 3.1
	 */
	// ID: 91
	[
		'category_id'      => '4',
		'version'          => '3.1.0',
		'alias'            => '3-1-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.1.0 release</p>',
		'created'          => $this->platform->getDate('2013-04-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5494-joomla-3-1-0-stable-released.html',
	],
	// ID: 92
	[
		'category_id'      => '4',
		'version'          => '3.1.1',
		'alias'            => '3-1-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.1.1 release</p>',
		'created'          => $this->platform->getDate('2013-04-26 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5499-joomla-3-1-1-stable-released.html',
	],
	// ID: 93
	[
		'category_id'      => '4',
		'version'          => '3.1.2',
		'alias'            => '3-1-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.1.2 release</p><p><span class="label label-important">Important!</span> Due to issues during pre-release testing, this release was never officially distributed.  Please see <a href="http://community.joomla.org/blogs/leadership/1763-update-on-2512-and-312-releases.html">this blog post</a> for additional information.</p>',
		'created'          => $this->platform->getDate('2013-07-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5504-joomla-3-1-4-stable-released.html',
	],
	// ID: 94
	[
		'category_id'      => '4',
		'version'          => '3.1.3',
		'alias'            => '3-1-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.1.3 release</p><p><span class="label label-important">Important!</span> This release is only for users who had installed the pre-release testing packages for the scheduled 3.1.2 release.  Please see <a href="http://community.joomla.org/blogs/community/1764-312-313-314-what-is-going-on.html">this blog post</a> for additional information.</p>',
		'created'          => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5504-joomla-3-1-4-stable-released.html',
	],
	// ID: 95
	[
		'category_id'      => '4',
		'version'          => '3.1.4',
		'alias'            => '3-1-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.1.4 release</p>',
		'created'          => $this->platform->getDate('2013-07-25 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5504-joomla-3-1-4-stable-released.html',
	],
	// ID: 96
	[
		'category_id'      => '4',
		'version'          => '3.1.5',
		'alias'            => '3-1-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.1.5 release</p>',
		'created'          => $this->platform->getDate('2013-08-01 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5505-joomla-3-1-5-stable-released.html',
	],
	// ID: 97
	[
		'category_id'      => '4',
		'version'          => '3.1.6',
		'alias'            => '3-1-6',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.1.6 release</p>',
		'created'          => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5516-joomla-3-2-0-stable-released.html',
	],

	/*
	 * Joomla! 3.2
	 */
	// ID: 98
	[
		'category_id'      => '4',
		'version'          => '3.2.0',
		'alias'            => '3-2-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.2.0 release</p>',
		'created'          => $this->platform->getDate('2013-11-06 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5516-joomla-3-2-0-stable-released.html',
	],
	// ID: 99
	[
		'category_id'      => '4',
		'version'          => '3.2.1',
		'alias'            => '3-2-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.2.1 release</p>',
		'created'          => $this->platform->getDate('2013-12-18 14:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5523-joomla-3-2-1-released.html',
	],
	// ID: 100
	[
		'category_id'      => '4',
		'version'          => '3.2.2',
		'alias'            => '3-2-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.2.2 release</p>',
		'created'          => $this->platform->getDate('2014-02-06 16:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5531-joomla-3-2-2-released.html',
	],
	// ID: 101
	[
		'category_id'      => '4',
		'version'          => '3.2.3',
		'alias'            => '3-2-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.2.3 release</p>',
		'created'          => $this->platform->getDate('2014-03-06 14:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5538-joomla-3-2-3-released.html',
	],
	// ID: 102
	[
		'category_id'      => '4',
		'version'          => '3.2.4',
		'alias'            => '3-2-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.2.4 release</p>',
		'created'          => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5546-joomla-3-3-0-released.html',
	],
	// ID: 103
	[
		'category_id'      => '4',
		'version'          => '3.2.5',
		'alias'            => '3-2-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.2.5 release</p>',
		'created'          => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5564-joomla-3-3-4-released.html',
	],
	// ID: 104
	[
		'category_id'      => '4',
		'version'          => '3.2.6',
		'alias'            => '3-2-6',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.2.6 release</p>',
		'created'          => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5567-joomla-3-3-5-released.html',
	],
	// ID: 105
	[
		'category_id'      => '4',
		'version'          => '3.2.7',
		'alias'            => '3-2-7',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.2.7 release</p>',
		'created'          => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5569-joomla-3-3-6-released.html',
	],

	/*
	 * Joomla! 3.3
	 */
	// ID: 106
	[
		'category_id'      => '4',
		'version'          => '3.3.0',
		'alias'            => '3-3-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.3.0 release</p>',
		'created'          => $this->platform->getDate('2014-04-30 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5546-joomla-3-3-0-released.html',
	],
	// ID: 107
	[
		'category_id'      => '4',
		'version'          => '3.3.1',
		'alias'            => '3-3-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.3.1 release</p>',
		'created'          => $this->platform->getDate('2014-06-11 13:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5551-joomla-3-3-1-released.html',
	],
	// ID: 108
	[
		'category_id'      => '4',
		'version'          => '3.3.2',
		'alias'            => '3-3-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.3.2 release</p>',
		'created'          => $this->platform->getDate('2014-07-24 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5555-joomla-3-3-2-released.html',
	],
	// ID: 109
	[
		'category_id'      => '4',
		'version'          => '3.3.3',
		'alias'            => '3-3-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.3.3 release</p>',
		'created'          => $this->platform->getDate('2014-07-25 13:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5557-joomla-3-3-3-released.html',
	],
	// ID: 110
	[
		'category_id'      => '4',
		'version'          => '3.3.4',
		'alias'            => '3-3-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.3.4 release</p>',
		'created'          => $this->platform->getDate('2014-09-23 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5564-joomla-3-3-4-released.html',
	],
	// ID: 111
	[
		'category_id'      => '4',
		'version'          => '3.3.5',
		'alias'            => '3-3-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.3.5 release</p>',
		'created'          => $this->platform->getDate('2014-09-30 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5567-joomla-3-3-5-released.html',
	],
	// ID: 112
	[
		'category_id'      => '4',
		'version'          => '3.3.6',
		'alias'            => '3-3-6',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.3.6 release</p>',
		'created'          => $this->platform->getDate('2014-10-01 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5569-joomla-3-3-6-released.html',
	],

	/*
	 * Joomla! 3.4
	 */
	// ID: 113
	[
		'category_id'      => '4',
		'version'          => '3.4.0',
		'alias'            => '3-4-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.0 release</p>',
		'created'          => $this->platform->getDate('2015-02-24 20:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5586-joomla-3-4-is-here.html',
	],
	// ID: 114
	[
		'category_id'      => '4',
		'version'          => '3.4.1',
		'alias'            => '3-4-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.1 release</p>',
		'created'          => $this->platform->getDate('2015-03-21 22:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5587-joomla-3-4-1-released.html',
	],
	// ID: 115
	[
		'category_id'      => '4',
		'version'          => '3.4.2',
		'alias'            => '3-4-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.2 release</p>',
		'created'          => $this->platform->getDate('2015-06-30 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5589-joomla-3-4-2-released.html',
	],
	// ID: 116
	[
		'category_id'      => '4',
		'version'          => '3.4.3',
		'alias'            => '3-4-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.3 release</p>',
		'created'          => $this->platform->getDate('2015-07-02 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5590-joomla-3-4-3-released.html',
	],
	// ID: 117
	[
		'category_id'      => '4',
		'version'          => '3.4.4',
		'alias'            => '3-4-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.4 release</p>',
		'created'          => $this->platform->getDate('2015-09-08 20:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5628-joomla-3-4-4-released.html',
	],
	// ID: 118
	[
		'category_id'      => '4',
		'version'          => '3.4.5',
		'alias'            => '3-4-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.5 release</p>',
		'created'          => $this->platform->getDate('2015-10-22 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5634-joomla-3-4-5-released.html',
	],
	// ID: 119
	[
		'category_id'      => '4',
		'version'          => '3.4.6',
		'alias'            => '3-4-6',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.6 release</p>',
		'created'          => $this->platform->getDate('2015-12-14 14:25:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5641-joomla-3-4-6-released.html',
	],
	// ID: 120
	[
		'category_id'      => '4',
		'version'          => '3.4.7',
		'alias'            => '3-4-7',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.7 release</p>',
		'created'          => $this->platform->getDate('2015-12-21 21:05:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5643-joomla-3-4-7.html',
	],
	// ID: 121
	[
		'category_id'      => '4',
		'version'          => '3.4.8',
		'alias'            => '3-4-8',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.4.8 release</p>',
		'created'          => $this->platform->getDate('2015-12-24 19:15:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5644-joomla-3-4-8-released.html',
	],
	// ID: 122
	[
		'category_id'      => '4',
		'version'          => '3.5.0',
		'alias'            => '3-5-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.5.0 release</p>',
		'created'          => $this->platform->getDate('2016-03-21 22:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5654-joomla-3-5-is-here.html',
	],
	// ID: 123
	[
		'category_id'      => '4',
		'version'          => '3.5.1',
		'alias'            => '3-5-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.5.1 release</p>',
		'created'          => $this->platform->getDate('2016-04-05 22:45:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5655-joomla-3-5-1-released.html',
	],
	// ID: 124
	[
		'category_id'      => '4',
		'version'          => '3.6.0',
		'alias'            => '3-6-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.6.0 release</p>',
		'created'          => $this->platform->getDate('2016-07-12 21:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5664-joomla-3-6-is-here.html',
	],
	// ID: 125
	[
		'category_id'      => '4',
		'version'          => '3.6.1',
		'alias'            => '3-6-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.6.1 release</p>',
		'created'          => $this->platform->getDate('2016-08-02 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5665-joomla-3-6-1-released.html',
	],
	// ID: 126
	[
		'category_id'      => '4',
		'version'          => '3.6.2',
		'alias'            => '3-6-2',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.6.2 release</p>',
		'created'          => $this->platform->getDate('2016-08-04 23:45:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5667-joomla-3-6-2-released.html',
	],
	// ID: 127
	[
		'category_id'      => '4',
		'version'          => '3.6.3',
		'alias'            => '3-6-3',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.6.3 release</p>',
		'created'          => $this->platform->getDate('2016-10-18 15:30:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5676-joomla-3-6-3-released.html',
	],
	// ID: 128
	[
		'category_id'      => '4',
		'version'          => '3.6.4',
		'alias'            => '3-6-4',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.6.4 release</p>',
		'created'          => $this->platform->getDate('2016-10-25 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5678-joomla-3-6-4-released.html',
	],
	// ID: 129
	[
		'category_id'      => '4',
		'version'          => '3.6.5',
		'alias'            => '3-6-5',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.6.5 release</p>',
		'created'          => $this->platform->getDate('2016-12-13 23:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5693-joomla-3-6-5-released.html',
	],
	// ID: 130
	[
		'category_id'      => '4',
		'version'          => '3.7.0',
		'alias'            => '3-7-0',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.7.0 release</p>',
		'created'          => $this->platform->getDate('2017-04-25 17:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5703-joomla-3-7-is-here.html',
	],
	// ID: 131
	[
		'category_id'      => '4',
		'version'          => '3.7.1',
		'alias'            => '3-7-1',
		'maturity'         => 'stable',
		'description'      => '<p>Joomla! 3.7.1 release</p>',
		'created'          => $this->platform->getDate('2017-05-17 14:00:00', new DateTimeZone('GMT'))->toSql(),
		'announcement_url' => 'https://www.joomla.org/announcements/release-news/5705-joomla-3-7-1-release.html',
	],
];
