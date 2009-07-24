<?php
 /*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-05-19 13:21:43 +0200 (Di, 19 Mai 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: osr-corgan $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 4909 $
 *
 * $Id: index.php 4909 2009-05-19 11:21:43Z osr-corgan $
 */

if ( !defined('EQDKP_INC') )
{
    header('HTTP/1.0 404 Not Found');
    exit;
}

class Manage_Game
{
  var $gamename = 'WoW';
  var $maxlevel = 80;
  var $version  = '3.0';

  function do_it($install,$lang)
  {
    global $db;
   	$aq =  array();

   	if($lang == 'de')
    {
      $classes = array(
      	array('Druide', 'Leder',0,80,7),
      	array('Hexenmeister', 'Stoff',0,80,10),
      	array('J�ger', 'Schwere R�stung',0,80,4),
      	array('Krieger', 'Platte',0,80,12),
      	array('Magier', 'Stoff',0,80,11),
      	array('Paladin', 'Platte',0,80,13),
      	array('Priester', 'Stoff',0,80,6),
      	array('Schamane', 'Schwere R�stung',0,80,9),
      	array('Schurke', 'Leder',0,80,2),
      	array('Todesritter', 'Platte',0,80,20),
      	array('Unknown', 'Platte',0,80,0)
      );

      $races = array(
        'Unknown',
        'Gnom',
        'Mensch',
        'Zwerg',
        'Nachtelf',
        'Troll',
        'Untoter',
        'Ork',
        'Taure',
        'Draenei',
        'Blutelf'
      );

      $factions = array(
        'Allianz',
        'Horde'
      );


    //Itemstats
    array_push($aq, "UPDATE __plus_config SET config_value = 'armory_wowhead' WHERE config_name = 'pk_is_webdb' ;");   
    array_push($aq, "UPDATE __plus_config SET config_value = 'http://wowdata.buffed.de/img/icons/wow/32/' WHERE config_name = 'pk_is_icon_loc' ;");
    }
    elseif($lang == 'ru')
    {
      $classes = array(
        array('����������', '����',0,80,0),
        array('���������', '����',0,80,2),
        array('�������', '��������',0,80,4),
        array('����', '�����',0,80,6),
        array('�����', '����',0,80,7),
        array('�����', '��������',0,80,9),
        array('������', '�����',0,80,10),
        array('���', '�����',0,80,11),
        array('����', '����',0,80,12),
        array('�������', '����',0,80,13),
        array('Todesritter', 'Platte',0,80,20)
        );

      $races = array(
        '����������',
        '����',
        '�������',
        '�����',
        '������ ����',
        '�����',
        '������',
        '���',
        '������',
        '������',
        '�������� ����'
      );

      $factions = array(
        '������',
        '����'
      );

    //Itemstats
    array_push($aq, "UPDATE __plus_config SET config_value = 'armory_wowhead' WHERE config_name = 'pk_is_webdb' ;");
    }
    elseif($lang == 'fr')
    {
      $classes = array(
        array('Chevalier de la mort', 'Plaque',0,80,20),
      	array('Druide', 'Cuir',0,80,7),
      	array('Chasseur', 'Maille',0,80,4),
      	array('Mage', 'Tissu',0,80,11),
      	array('Paladin', 'Plaque',0,80,13),
      	array('Pr�tre', 'Tissu',0,80,6),
      	array('Voleur', 'Cuir',0,80,2),
      	array('Chaman', 'Maille',0,80,9),
      	array('Inconnue', 'Plaque',0,80,0),
        array('D�moniste', 'Tissu',0,80,10),
        array('Guerrier', 'Plaque',0,80,12)
        );

      $races = array(
        'Inconnue',
        'Gnome',
        'Humain',
        'Nain',
        'Elfe de la nuit',
        'Troll',
        'Mort-vivant',
        'Orc',
        'Tauren',
        'Draene�',
        'Elfe de sang'
     );

      $factions = array(
        'Alliance',
        'Horde'
      );

    //Itemstats
    array_push($aq, "UPDATE __plus_config SET config_value = 'armory_wowhead' WHERE config_name = 'pk_is_webdb' ;");
    }
    elseif($lang == 'es')
    {
      $classes = array(
        array('Caballero de la muerte', 'Placas',0,80,20),
      	array('Druida', 'Cuero',0,80,7),
      	array('Cazador', 'Malla',0,80,4),
      	array('Mago', 'Tela',0,80,11),
      	array('Palad�n', 'Placas',0,80,13),
      	array('Sacerdote', 'Tela',0,80,6),
      	array('P�caro', 'Cuero',0,80,2),
      	array('Chaman', 'Malla',0,80,9),
      	array('Desconocida', 'Placas',0,80,0),
        array('Brujo', 'Tela',0,80,10),
        array('Guerrero', 'Placas',0,80,12)
      );

      $races = array(
        'Desconocida',
        'Gnomo',
        'Humano',
        'Enano',
        'Elfo de la noche',
        'Trol',
        'No-muerto',
        'Orco',
        'Tauren',
        'Draenei',
        'Elfo de sangre'
      );

      $factions = array(
        'Alianza',
        'Horda'
      );

    //Itemstats
    array_push($aq, "UPDATE __plus_config SET config_value = 'armory_wowhead' WHERE config_name = 'pk_is_webdb' ;");
    }
    else
    {
      $classes = array(
        array('Death Knight', 'Plate',0,80,20),
      	array('Druid', 'Leather',0,80,7),
      	array('Hunter', 'Mail',0,80,4),
      	array('Mage', 'Cloth',0,80,11),
      	array('Paladin', 'Plate',0,80,13),
      	array('Priest', 'Cloth',0,80,6),
      	array('Rogue', 'Leather',0,80,2),
      	array('Shaman', 'Mail',0,80,9),
      	array('Unknown', 'Plate',0,80,0),
        array('Warlock', 'Cloth',0,80,10),
        array('Warrior', 'Plate',0,80,12)
      );

      $races = array(
        'Unknown',
        'Gnome',
        'Human',
        'Dwarf',
        'Night Elf',
        'Troll',
        'Undead',
        'Orc',
        'Tauren',
        'Draenei',
        'Blood Elf'
      );

      $factions = array(
        'Alliance',
        'Horde'
      );

    //Itemstats
     array_push($aq, "UPDATE __plus_config SET config_value = 'armory_wowhead' WHERE config_name = 'pk_is_webdb' ;");
    }

    // The Class colors
    $classColorsCSS = array(
          'Druid'      		=> '#FF7C0A',
          'Warlock'    		=> '#9382C9',
          'Hunter'     		=> '#AAD372',
          'Warrior'    		=> '#C69B6D',
          'Paladin'    		=> '#F48CBA',
          'Mage'       		=> '#68CCEF',
          'Priest'     		=> '#FFFFFF',
          'Shaman'     		=> '#1a3caa',
          'Rogue'      		=> '#FFF468',
          'Death Knight'  	=> '#C41F3B',
        );

	#Classes Fix
    #Hunter
    array_push($aq, "UPDATE __members SET 	member_class_id = 4 WHERE member_class_id='3' ;");
    #Schaman
    array_push($aq, "UPDATE __members SET 	member_class_id = 9 WHERE 	member_class_id='8' ;");
    #Warrior
    array_push($aq, "UPDATE __members SET 	member_class_id = 12 WHERE 	member_class_id='1' ;");
    #Paladin
    array_push($aq, "UPDATE __members SET 	member_class_id = 13 WHERE 	member_class_id='5' ;");

    //lets do some tweak on the templates dependent on the game
    array_push($aq, "UPDATE __style_config SET logo_path='/logo/logo_wow.gif' WHERE style_id = 14  ;");
    array_push($aq, "UPDATE __style_config SET logo_path='logo_wow.gif' WHERE style_id = 15  ;");
    array_push($aq, "UPDATE __style_config SET logo_path='logo_wow.gif' WHERE style_id = 16  ;");
    array_push($aq, "UPDATE __style_config SET logo_path='bc_header3.gif' WHERE (style_id > 16) and (style_id < 30)  ;");
    array_push($aq, "UPDATE __style_config SET logo_path='/logo/logo_wow.gif' WHERE style_id = 30  ;");
    array_push($aq, "UPDATE __style_config SET logo_path='bc_header3.gif' WHERE style_id = 31  ;");
    array_push($aq, "UPDATE __style_config SET logo_path='bc_header3.gif' WHERE style_id = 32  ;");
    array_push($aq, "UPDATE __style_config SET logo_path='/logo/logo_wow.gif' WHERE style_id = 33  ;");
    array_push($aq, "UPDATE __style_config SET logo_path='wowlogo3.png' WHERE style_id = 35  ;");

    //Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
    if($install)
    {
	    #Set Itemstats
	   	array_push($aq, "UPDATE __plus_config SET config_value = '1' WHERE config_name = 'pk_itemstats' ;");
	    array_push($aq, "UPDATE __plus_config SET config_value = '0' WHERE config_name = 'pk_is_autosearch' ;");
    }

    // this is the fix stuff.. instert the new information
    // into the database. moved it to a new class, its easier to
    // handle
    $gmanager = new GameManagerPlus();
    $game_config = array(
      'classes'       => $classes,
      'races'         => $races,
      'factions'      => $factions,
      'class_colors'  => $classColorsCSS,
      'max_level'     => $this->maxlevel,
      'add_sql'       => $aq,
      'version'       => $this->version,
    );

    $gmanager->ChangeGame($this->gamename, $game_config, $lang);
   }
}

?>