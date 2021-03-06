<?php
/**
 * @package    hubzero-cms
 * @copyright  Copyright 2005-2019 HUBzero Foundation, LLC.
 * @license    http://opensource.org/licenses/MIT MIT
 */

use Hubzero\Content\Migration\Base;

// No direct access
defined('_HZEXEC_') or die();

/**
 * Migration script for adding component entry for com_installer
 **/
class Migration20200731000000ComInstaller extends Base
{
	/**
	 * Up
	 **/
	public function up()
	{
        DROP TABLE IF EXISTS `jos_custom_extensions`;

        CREATE TABLE `jos_custom_extensions` (
          `extension_id` int(11) NOT NULL AUTO_INCREMENT,
          `name` varchar(100) NOT NULL,
          `alias` varchar(100) NOT NULL DEFAULT '',
          `type` varchar(20) NOT NULL,
          `folder` varchar(100) NOT NULL,
          `client_id` tinyint(3) NOT NULL,
          `enabled` tinyint(3) NOT NULL DEFAULT '1',
          `description` text,
          `url` varchar(255) DEFAULT NULL,
          `apikey` varchar(255) DEFAULT NULL,
          `installed_version` int(11) DEFAULT NULL,
          `path` varchar(255) DEFAULT NULL,
          `created` date DEFAULT NULL,
          `created_by` int(11) DEFAULT NULL,
          `modified` datetime DEFAULT NULL,
          `modified_by` int(11) DEFAULT NULL,
          PRIMARY KEY (`extension_id`)
        ) ENGINE=MyISAM DEFAULT CHARSET=utf8;
	}

	/**
	 * Down
	 **/
	public function down()
	{
		DROP TABLE IF EXISTS `jos_custom_extensions`;
	}
}
