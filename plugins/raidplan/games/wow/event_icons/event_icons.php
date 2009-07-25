<?php
 /*
 * Project:     EQdkp RaidPlanner
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-11-03 13:24:11 +0100 (Mo, 03 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     raidplan
 * @version     $Rev: 2963 $
 * 
 * $Id: event_icons.php 2963 2008-11-03 12:24:11Z wallenium $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

// all events must be in lowercase, i'll check it with strtolower. upper case
// event names will not be found!

$instance_picture_arry = array(
            // Old World
						'aq20' 													=> 'aq20',
						'aq40' 													=> 'aq40',
						'aq' 													  => 'aq20',
						'ahn\'qiraj' 										=> 'aq20',
						'ahn qiraj' 										=> 'aq20',
						'ruins of ahn\'qiraj'           => 'aq20',
						'ruinen von ahn\'qiraj'         => 'aq20',
						'ruines d\'ahn\'qiraj'          => 'aq20',
						'tempel von ahn\'qiraj'         => 'aq40',
						'temple of ahn\'qiraj'          => 'aq40',
						'temple d\'ahn\'qiraj'          => 'aq40',
						'bwl'														=> 'bwl',
						'blackwing lair'								=> 'bwl',
						'pechschwingenhort'             => 'bwl',
						'repaire de l\'aile noire'      => 'bwl',
						'molten core'										=> 'mc',
						'geschmolzener kern'						=> 'mc',
						'cœur du magma'                 => 'mc',
						'onyxia'												=> 'onx',
						'naxxramas'											=> 'nax',
						'zulgurub'											=> 'zg',
						'zul\'gurub'										=> 'zg',
						
            // Outdoor Bosses
						'outdoor boss'									=> 'azu',
						'azuregos'											=> 'azu',
						
						//Emerald Dream
						'lethon'												=> 'emd',
						'smariss'												=> 'emd',
						'taerar'												=> 'emd',
						'ysondre'												=> 'emd',
						
						//Burning Crusade Instances
						'magtheridon' 									=> 'mag',
						'magtheridon\'s lair'           => 'mag',
						'black temple'                  => 'bt',
						'schwarzer tempel'              => 'bt',
						'temple noir'                   => 'bt',
						'gruuls unterschlupf'						=> 'gruul',
						'gruul\'s lair'									=> 'gruul',
						'grul\'s lair'									=> 'gruul',
						'gruuls lair'									  => 'gruul',
						'gruul'									        => 'gruul',
						'repaire de gruul'              => 'gruul',
						'tk: the eye'                		=> 'tempest',
						'cr: serpentshrine cavern'    	=> 'coilfang',
						'ssc'                           => 'coilfang',
						'serpentshrine'                 => 'coilfang',
						'serpent'    	                  => 'coilfang',
						'cot: battle for mount hyjal'   => 'cot',
						'tempest keep\: the eye'				=> 'tempest',
						'karazhan' 											=> 'karazhan',
						'zul\'aman'                     => 'zulaman',
						'zul aman'                      => 'zulaman',
						'za'                            => 'zulaman',
						'cot\: battle for mount hyjal'	=> 'cot',
						'mount hyjal'	                  => 'cot',
						'festung der stürme\: das auge'	=> 'tempest',
						'höhlen der zeit\: die schlacht um berg hyjal'	=> 'cot',
						'der echsenkessel\: höhle des schlangenschreins'=> 'coilfang',
						'coilfang reservoir\: serpentshrine cavern'	=> 'coilfang',
						
						// other
						'andere...'											=> 'other',
						'other...'											=> 'other',
						'test'                          => 'other',
					);
?>
