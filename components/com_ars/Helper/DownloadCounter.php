<?php
/**
 * @package   AkeebaReleaseSystem
 * @copyright Copyright (c)2016 Open Source Matters, Inc.
 * @license   GNU General Public License version 3, or later
 * @note      This class is NOT part of the Akeeba Release System package and is implemented specifically for the Joomla! Downloads website
 */

namespace Akeeba\ReleaseSystem\Site\Helper;

defined('_JEXEC') or die;

abstract class DownloadCounter
{
	/**
	 * Execute the queries to get the count of downloads for a category
	 *
	 * @param   integer  $categoryId
	 *
	 * @return  integer
	 *
	 * @deprecated  Will be removed when the site is upgraded to Joomla! 3.7 and will be inlined as a lambda function in getCountForCategory
	 */
	public static function executeCategoryCountQueries($categoryId)
	{
		$db = \JFactory::getDbo();

		// Step 1 - Grab the release IDs for this category
		try
		{
			$releaseIds = $db->setQuery(
				$db->getQuery(true)
					->select('id')
					->from('#__ars_releases')
					->where('category_id = ' . (int) $categoryId)
			)->loadColumn();
		}
		catch (\JDatabaseExceptionExecuting $e)
		{
			return 0;
		}

		// Step 2 - Get the downloads for all items in this category
		try
		{
			$downloadCount = $db->setQuery(
				$db->getQuery(true)
					->select('SUM(hits)')
					->from('#__ars_items')
					->where('release_id IN (' . implode(', ', $releaseIds) . ')')
			)->loadResult();

			return (int) $downloadCount;
		}
		catch (\JDatabaseExceptionExecuting $e)
		{
			return 0;
		}
	}

	/**
	 * Execute the queries to get the count of downloads for a visual group
	 *
	 * @param   integer  $vgroupId
	 *
	 * @return  integer
	 *
	 * @deprecated  Will be removed when the site is upgraded to Joomla! 3.7 and will be inlined as a lambda function in getCountForVgroup
	 */
	public static function executeVgroupCountQueries($vgroupId)
	{
		$db = \JFactory::getDbo();

		// Step 1 - Grab the category IDs for this vgroup
		try
		{
			$categoryIds = $db->setQuery(
				$db->getQuery(true)
					->select('id')
					->from('#__ars_categories')
					->where('vgroup_id = ' . (int) $vgroupId)
			)->loadColumn();
		}
		catch (\JDatabaseExceptionExecuting $e)
		{
			return 0;
		}

		// Step 2 - Grab the release IDs for this vgroup
		try
		{
			$releaseIds = $db->setQuery(
				$db->getQuery(true)
					->select('id')
					->from('#__ars_releases')
					->where('category_id IN (' . implode(', ', $categoryIds) . ')')
			)->loadColumn();
		}
		catch (\JDatabaseExceptionExecuting $e)
		{
			return 0;
		}

		// Step 3 - Get the downloads for all items in this vgroup
		try
		{
			$downloadCount = $db->setQuery(
				$db->getQuery(true)
					->select('SUM(hits)')
					->from('#__ars_items')
					->where('release_id IN (' . implode(', ', $releaseIds) . ')')
			)->loadResult();

			return (int) $downloadCount;
		}
		catch (\JDatabaseExceptionExecuting $e)
		{
			return 0;
		}
	}

	/**
	 * Get the count of downloads for a category
	 *
	 * @param   integer  $categoryId
	 *
	 * @return  integer
	 */
	public static function getCountForCategory($categoryId)
	{
		// If possible, get this from the cache
		/** @var \JCacheControllerCallback $cache */
		$cache = \JFactory::getCache('com_ars', 'callback');

		return $cache->get(
			['\Akeeba\ReleaseSystem\Site\Helper\DownloadCounter', 'executeCategoryCountQueries'],
			[$categoryId],
			'ars_download_count_category_' . (string) $categoryId
		);
	}

	/**
	 * Get the count of downloads for a visual group
	 *
	 * @param   integer  $vgroupId
	 *
	 * @return  integer
	 */
	public static function getCountForVgroup($vgroupId)
	{
		// If possible, get this from the cache
		/** @var \JCacheControllerCallback $cache */
		$cache = \JFactory::getCache('com_ars', 'callback');

		return $cache->get(
			['\Akeeba\ReleaseSystem\Site\Helper\DownloadCounter', 'executeVgroupCountQueries'],
			[$vgroupId],
			'ars_download_count_vgroup_' . (string) $vgroupId
		);
	}
}
