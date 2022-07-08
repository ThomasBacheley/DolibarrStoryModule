<?php

/**
 * \file    story/lib/story.lib.php
 * \ingroup story
 * \brief   Library files with common functions for Story
 */

/**
 * Prepare admin pages header
 *
 * @return array
 */
function storyAdminPrepareHead()
{
	global $langs, $conf;

	$langs->load("story@story");

	$h = 0;
	$head = array();

	$head[$h][0] = dol_buildpath("/story/admin/setup.php", 1);
	$head[$h][1] = $langs->trans("Settings");
	$head[$h][2] = 'settings';
	$h++;

	/*
	$head[$h][0] = dol_buildpath("/story/admin/myobject_extrafields.php", 1);
	$head[$h][1] = $langs->trans("ExtraFields");
	$head[$h][2] = 'myobject_extrafields';
	$h++;
	*/

	$head[$h][0] = dol_buildpath("/story/admin/about.php", 1);
	$head[$h][1] = $langs->trans("About");
	$head[$h][2] = 'about';
	$h++;

	// Show more tabs from modules
	// Entries must be declared in modules descriptor with line
	//$this->tabs = array(
	//	'entity:+tabname:Title:@story:/story/mypage.php?id=__ID__'
	//); // to add new tab
	//$this->tabs = array(
	//	'entity:-tabname:Title:@story:/story/mypage.php?id=__ID__'
	//); // to remove a tab
	complete_head_from_modules($conf, $langs, null, $head, $h, 'story@story');

	complete_head_from_modules($conf, $langs, $object, $head, $h, 'story@story', 'remove');

	return $head;
}
