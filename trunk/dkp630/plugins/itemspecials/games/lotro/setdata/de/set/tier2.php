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
                          '6'   => 'R�stung des Spaltverteidigers',
                          '4'   => 'R�stung aus der Altvorderenzeit',
                          '3'   => 'R�stung des Untergangsj�gers',
                          '1'   => 'R�stung des umherziehenden Musikanten',
                          '7'   => 'R�stung des D�sterfluchs',
                          '2'   => 'R�stung des Nordsterns',
                          '5'   => 'R�stung des Tollk�hnen',
                          '8'   => 'R�stung des bedeutenden Worts',
                          '9'   => 'R�stung des Stadtretters',
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
                                  'Gl�hend roter Rubin'           => 'Brustpanzer des Spaltverteidigers',
                                  'Flimmernder Amethyst'          => '�berhose des Spaltverteidigers',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Spaltverteidigers',
                                  'Funkelnder Diamant'            => 'Handschuhe des Spaltverteidigers',
                                  'Feuriger Quarz'                => 'Congrist',
                          ),
                          '4' => array(
                                  'Makelloser Opal'               => 'Hut aus der Altvorderenzeit',
                                  'Strahlender Smaragd'           => 'Schulterpolster aus der Altvorderenzeit',
                                  'Gl�hend roter Rubin'           => 'Robe aus der Altvorderenzeit',
                                  'Flimmernder Amethyst'          => '�berhose aus der Altvorderenzeit',
                                  'Nahezu perfekter Saphir'       => 'Stiefel aus der Altvorderenzeit',
                                  'Funkelnder Diamant'            => 'Handschuhe aus der Altvorderenzeit',
                                  'Feuriger Quarz'                => 'Noris',
                          ),
                          '3' => array(
                                  'Makelloser Opal'               => 'Helm des Untergangsj�gers',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Untergangsj�gers',
                                  'Gl�hend roter Rubin'           => 'Brustpanzer des Untergangsj�gers',
                                  'Flimmernder Amethyst'          => '�berhose des Untergangsj�gers',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Untergangsj�gers',
                                  'Funkelnder Diamant'            => 'Handschuhe des Untergangsj�gers',
                                  'Feuriger Quarz'                => 'Cumaen',
                          ),
                          '1' => array(
                                  'Makelloser Opal'               => 'Helm des umherziehenden Musikanten',
                                  'Strahlender Smaragd'           => 'Schulterpolster des umherziehenden Musikanten',
                                  'Gl�hend roter Rubin'           => 'Robe des umherziehenden Musikanten',
                                  'Flimmernder Amethyst'          => '�berhose des umherziehenden Musikanten',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des umherziehenden Musikanten',
                                  'Funkelnder Diamant'            => 'Handschuhe des umherziehenden Musikanten',
                                  'Feuriger Quarz'                => 'Goldram',
                          ),
                          '7' => array(
                                  'Makelloser Opal'               => 'Helm des D�sterfluchs',
                                  'Strahlender Smaragd'           => 'Schulterpolster des D�sterfluchs',
                                  'Gl�hend roter Rubin'           => 'Brustpanzer des D�sterfluchs',
                                  'Flimmernder Amethyst'          => '�berhose des D�sterfluchs',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des D�sterfluchs',
                                  'Funkelnder Diamant'            => 'Handschuhe des D�sterfluchs',
                                  'Feuriger Quarz'                => 'Othdring',
                          ),
                          '2' => array(
                                  'Makelloser Opal'               => 'Helm des Nordsterns',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Nordsterns',
                                  'Gl�hend roter Rubin'           => 'Brustpanzer des Nordsterns',
                                  'Flimmernder Amethyst'          => '�berhose des Nordsterns',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Nordsterns',
                                  'Funkelnder Diamant'            => 'Handschuhe des Nordsterns',
                                  'Feuriger Quarz'                => 'Torchathol',
                          ),
                          '5' => array(
                                  'Makelloser Opal'               => 'Helm des Tollk�hnen',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Tollk�hnen',
                                  'Gl�hend roter Rubin'           => 'Jacke des Tollk�hnen',
                                  'Flimmernder Amethyst'          => '�berhose des Tollk�hnen',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Tollk�hnen',
                                  'Funkelnder Diamant'            => 'Handschuhe des Tollk�hnen',
                                  'Feuriger Quarz'                => 'Aeglang',
                          ),
                          '8' => array(
                                  'Makelloser Opal'               => 'Hut des bedeutenden Worts',
                                  'Strahlender Smaragd'           => 'Schulterpolster des bedeutenden Worts',
                                  'Gl�hend roter Rubin'           => 'Robe des bedeutenden Worts',
                                  'Flimmernder Amethyst'          => 'Beinlinge des bedeutenden Worts',
                                  'Nahezu perfekter Saphir'       => 'Schuhe des bedeutenden Worts',
                                  'Funkelnder Diamant'            => 'Handschuhe des bedeutenden Worts',
                                  'N/A'                           => 'N/A',
                          ),
                          '9' => array(
                                  'Makelloser Opal'               => 'Helm des Stadtretters',
                                  'Strahlender Smaragd'           => 'Schulterpolster des Stadtretters',
                                  'Gl�hend roter Rubin'           => 'Jacke des Stadtretters',
                                  'Flimmernder Amethyst'          => '�berhose des Stadtretters',
                                  'Nahezu perfekter Saphir'       => 'Stiefel des Stadtretters',
                                  'Funkelnder Diamant'            => 'Panzerhandschuhe des Stadtretters',
                                  'Feuriger Quarz'                => 'Kriegsschild des W�chters',
                          )
                        )
);                     
?>
