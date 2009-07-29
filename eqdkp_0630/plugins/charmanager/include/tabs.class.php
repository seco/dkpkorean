<?php
 /*
 * Project:     EQdkp CharManager 1
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-08-17 01:57:19 +0200 (So, 17 Aug 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     charmanager
 * @version     $Rev: 2561 $
 * 
 * $Id: tabs.class.php 2561 2008-08-16 23:57:19Z wallenium $
 */
 
class wpfTabs {
  
  function wpfTabs($tabfolderpath){
    $this->tabfolderpath = $tabfolderpath;
  }
  
  function initTabs(){
    $output= "<script language='JavaScript' type='text/javascript' src='".$this->tabfolderpath."/tabs/js/tabpane.js'></script>
              <link href='".$this->tabfolderpath."/tabs/css/luna/tab.css' rel='stylesheet' type='text/css' ></link>";
    return $output;
  }
  
  function startPane($id) {
		$tab = "<div class='tab-pane' id='".$id."'>";
		return $tab;
	}

	/**
	* Ends Tab Pane
	*/
	function endPane() {
		$tab = "</div>";
		return $tab;

	}

	/*
	* Creates a tab with title text and starts that tabs page
	* @param tabText - This is what is displayed on the tab
	* @param paneid - This is the parent pane to build this tab on
	*/


	function startTab( $tabText, $paneid ) {
		$tab = "<div class='tab-page'><h2 class='tab' id='".$paneid."'>".$tabText."</h2>";
		return $tab;
	}

	/*
	* Ends a tab page
	*/
	function endTab() {
		$tab = "</div>";
		return $tab;
	}
}
?>
