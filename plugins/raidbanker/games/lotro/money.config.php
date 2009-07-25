<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-11-06 14:54:01 +0100 (Do, 06 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 3003 $
 * 
 * $Id: money.config.php 3003 2008-11-06 13:54:01Z wallenium $
 */

   // The array with the images
   $money_data = array(
      'gold'    => array(
                    'image'       => 'games/wow/images/gold.png',
                    'factor'      => 100000,
                    'size'        => 'unlimited',
                    'language'    => $user->lang['lang_gold'],
                    'short_lang'  => $user->lang['lang_g'],
                  ),
      'silver'  => array(
                    'image'       => 'games/wow/images/silver.png',
                    'factor'      => 100,
                    'size'        => 3,
                    'language'    => $user->lang['lang_silver'],
                    'short_lang'  => $user->lang['lang_s'],
                  ),
      'copper'  => array(
                    'image'       => 'games/wow/images/copper.png',
                    'factor'      => 1,
                    'size'        => 2,
                    'language'    => $user->lang['lang_copper'],
                    'short_lang'  => $user->lang['lang_c'],
                  )
  );

 ?>
