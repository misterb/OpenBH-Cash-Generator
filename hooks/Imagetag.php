<?php 
/******** Syndk8's OpenBH *********
 *
 * This program is free software
 * licensed under the GPLv2 license.
 * You may redistribute it and/or
 * modify it under the terms of
 * the GPLv2 license (see license.txt)
 *
 * Warning:
 * OpenBH is for educational use
 * Use OpenBH at your own risk !
 *
 * Credits:
 * https://www.syndk8.com/openbh/people.html
 *
 ********************************/


/**
 *   adhooks/Imagetag.php
 *   Adds an ImageTag to $content
 * 
 *   @author Neek
 */

class Imagetag implements HookBase
{
	function EnrichContent($content,$keyword,$args)
	{
		$filename = str_replace(" ","-",$keyword);
		$content .= "<img src='$filename'/>";
		return $content;
	}
}

?>