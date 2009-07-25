<?php
 /*
 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2006
 * Date:        $Date: 2008-12-05 09:04:42 +0100 (Fr, 05 Dez 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3318 $
 * 
 * $Id: tier2.php 3318 2008-12-05 08:04:42Z wallenium $
 */
 
if ( !defined('EQDKP_INC') ){
  header('HTTP/1.0 404 Not Found');exit;
} 

// Tier Data
$tier_config["tier2"] = array(
      'language'      => 'de',
      'real_name'     => 'Tier 2',
      'pieces_total'  => 7,
      'name'          => array(
                          '6'   => 'Rüstung des Spaltverteidigers',
                          '4'   => 'Rüstung aus der Altvorderenzeit',
                          '3'   => 'Rüstung des Untergangsjägers',
                          '1'   => 'Rüstung des umherziehenden Musikanten',
                          '7'   => 'Rüstung des Düsterfluchs',
                          '2'   => 'Rüstung des Nordsterns',
                          '5'   => 'Rüstung des Tollkühnen',
                          '8'   => 'Rüstung des bedeutenden Worts',
                          '9'   => 'Rüstung des Stadtretters',
                        ),
      'head_names'    => array(
                          1 => $user->lang['is_Head'],
                          2 => $user->lang['is_Shoulders'],
                          3 => $user->lang['is_Chest'],
                          4 => $user->lang['is_Legs'],
                          5 => $user->lang['is_Boots'],
                          6 => $user->lang['is_Hands'],
                          7 => $user->lang['is_Weapon'],
                        ),
      'data'          => array(
                          '6' => array(
                                  'Makelloser Opal'               => 'Helm des Spaltverteidigers',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Spaltverteidigers',
                                  'Glühend roter Rubin'           => 'Brustpanzer des Spaltverteidigers',
                                  'Flimmernder Amethyst'          => 'Überhose des Spaltverteidigers',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Spaltverteidigers',
                                  'Funkelnder Diamant'            => 'Handschuhe des Spaltverteidigers',
                                  'Feuriger Quarz'                => 'Congrist',
                          ),
                          '4' => array(
                                  'Makelloser Opal'               => 'Hut aus der Altvorderenzeit',
                                  'Strahlender Smaragd'           => 'Schulterpolster aus der Altvorderenzeit',
                                  'Glühend roter Rubin'           => 'Robe aus der Altvorderenzeit',
                                  'Flimmernder Amethyst'          => 'Überhose aus der Altvorderenzeit',
                                  'Nahezu perfekter Saphir'       => 'Stiefel aus der Altvorderenzeit',
                                  'Funkelnder Diamant'            => 'Handschuhe aus der Altvorderenzeit',
                                  'Feuriger Quarz'                => 'Noris',
                          ),
                          '3' => array(
                                  'Makelloser Opal'               => 'Helm des Untergangsjägers',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Untergangsjägers',
                                  'Glühend roter Rubin'           => 'Brustpanzer des Untergangsjägers',
                                  'Flimmernder Amethyst'          => 'Überhose des Untergangsjägers',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Untergangsjägers',
                                  'Funkelnder Diamant'            => 'Handschuhe des Untergangsjägers',
                                  'Feuriger Quarz'                => 'Cumaen',
                          ),
                          '1' => array(
                                  'Makelloser Opal'               => 'Helm des umherziehenden Musikanten',
                                  'Strahlender Smaragd'           => 'Schulterpolster des umherziehenden Musikanten',
                                  'Glühend roter Rubin'           => 'Robe des umherziehenden Musikanten',
                                  'Flimmernder Amethyst'          => 'Überhose des umherziehenden Musikanten',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des umherziehenden Musikanten',
                                  'Funkelnder Diamant'            => 'Handschuhe des umherziehenden Musikanten',
                                  'Feuriger Quarz'                => 'Goldram',
                          ),
                          '7' => array(
                                  'Makelloser Opal'               => 'Helm des Düsterfluchs',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Düsterfluchs',
                                  'Glühend roter Rubin'           => 'Brustpanzer des Düsterfluchs',
                                  'Flimmernder Amethyst'          => 'Überhose des Düsterfluchs',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Düsterfluchs',
                                  'Funkelnder Diamant'            => 'Handschuhe des Düsterfluchs',
                                  'Feuriger Quarz'                => 'Othdring',
                          ),
                          '2' => array(
                                  'Makelloser Opal'               => 'Helm des Nordsterns',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Nordsterns',
                                  'Glühend roter Rubin'           => 'Brustpanzer des Nordsterns',
                                  'Flimmernder Amethyst'          => 'Überhose des Nordsterns',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Nordsterns',
                                  'Funkelnder Diamant'            => 'Handschuhe des Nordsterns',
                                  'Feuriger Quarz'                => 'Torchathol',
                          ),
                          '5' => array(
                                  'Makelloser Opal'               => 'Helm des Tollkühnen',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Tollkühnen',
                                  'Glühend roter Rubin'           => 'Jacke des Tollkühnen',
                                  'Flimmernder Amethyst'          => 'Überhose des Tollkühnen',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Tollkühnen',
                                  'Funkelnder Diamant'            => 'Handschuhe des Tollkühnen',
                                  'Feuriger Quarz'                => 'Aeglang',
                          ),
                          '8' => array(
                                  'Makelloser Opal'               => 'Hut des bedeutenden Worts',
                                  'Strahlender Smaragd'           => 'Schulterpolster des bedeutenden Worts',
                                  'Glühend roter Rubin'           => 'Robe des bedeutenden Worts',
                                  'Flimmernder Amethyst'          => 'Beinlinge des bedeutenden Worts',
                                  'Nahezu perfekter Saphir'       => 'Schuhe des bedeutenden Worts',
                                  'Funkelnder Diamant'            => 'Handschuhe des bedeutenden Worts',
                                  'N/A'                           => 'N/A',
                          ),
                          '9' => array(
                                  'Makelloser Opal'               => 'Helm des Stadtretters',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Stadtretters',
                                  'Glühend roter Rubin'           => 'Jacke des Stadtretters',
                                  'Flimmernder Amethyst'          => 'Überhose des Stadtretters',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Stadtretters',
                                  'Funkelnder Diamant'            => 'Panzerhandschuhe des Stadtretters',
                                  'Feuriger Quarz'                => 'Kriegsschild des Wächters',
                          )
                        )
);                     
?>
