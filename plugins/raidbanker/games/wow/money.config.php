<?php
 /*
 * Project:     EQdkp RaidBanker
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-12-30 14:20:40 +0100 (Di, 30 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidbanker
 * @version     $Rev: 3545 $
 * 
 * $Id: money.config.php 3545 2008-12-30 13:20:40Z wallenium $
 */

   // The array with the images
   $money_data = array(
      'gold'    => array(
                    'image'       => 'games/wow/images/gold.png',
                    'factor'      => 10000,
                    'size'        => 'unlimited',
                    'language'    => $user->lang['lang_gold'],
                    'short_lang'  => $user->lang['lang_g'],
                  ),
      'silver'  => array(
                    'image'       => 'games/wow/images/silver.png',
                    'factor'      => 100,
                    'size'        => 2,
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
