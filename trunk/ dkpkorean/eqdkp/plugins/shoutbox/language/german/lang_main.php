<?php
/*
 * Project:     EQdkp Shoutbox
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:        http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-01-27 08:59:14 +0100 (Di, 27 Jan 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: Dallandros $
 * @copyright   2008 Aderyn
 * @link        http://eqdkp-plus.com
 * @package     shoutbox
 * @version     $Rev: 3657 $
 *
 * $Id: lang_main.php 3657 2009-01-27 07:59:14Z Dallandros $
 */

if (!defined('EQDKP_INC'))
{
    header('HTTP/1.0 404 Not Found');exit;
}

$lang = array(
  'shoutbox'                        => 'Shoutbox',
  'sb_shoutbox'                     => 'Shoutbox',

  // Description
  'sb_short_desc'                   => 'Shoutbox',
  'sb_long_desc'                    => 'Shoutbox ist ein Plugin mit dem User kleine Mitteilungen austauschen k�nnen.',

  // Menu
  'sb_manage'                       => 'Verwalten',

  // Admin -> Settings
  'sb_date_format'                  => 'd.m.Y H:i',  // DD.MM.YYYY HH:mm
  'sb_time_format'                  => 'H:i',        // HH:mm
  'sb_adm_date'                     => 'Datum',
  'sb_adm_name'                     => 'Name',
  'sb_adm_text'                     => 'Text',
  'sb_adm_select_all'               => 'Alle ausw&auml;hlen',
  'sb_adm_select_none'              => 'Auswahl entfernen',

  // Configuration
  'sb_config_saved'                 => 'Einstellungen wurden gespeichert',
  'sb_header_general'               => 'Allgemeine Shoutbox Einstellungen',
  'sb_updatecheck'                  => 'Benachrichtigung bei Plugin-Updates',

  // Portal Modules
  'sb_output_count_limit'           => 'Maximale Anzahl an Shoutbox Eintr�gen.',
  'sb_show_date'                    => 'Zus�tzlich das Datum anzeigen?',
  'sb_show_archive'                 => 'Archiv anzeigen?',
  'sb_input_box_below'              => 'Eingabefeld unterhalb der Eintr�ge?',
  'sb_invisible_to_guests'          => 'F�r G�ste <u>nicht</u> sichtbar?',
  'sb_no_character_assigned'        => 'Es wurde kein Charakter verkn�pft. Es muss ein Charakter verkn�pft sein bevor Eintr�ge gemacht werden k�nnen.',
  'sb_submit_text'                  => 'Absenden',
  'sb_save_wait'                    => 'Speichern, bitte warten...',
  'sb_no_entries'                   => 'Keine Eintr�ge',
  'sb_archive'                      => 'Archiv',
  'sb_shoutbox_archive'             => 'Shoutbox Archiv',
  'sb_footer'                       => "... %1\$d gefunden / %2\$d pro Seite",

  // About/Credits
  'sb_about_header'                 => '�ber Shoutbox',
  'sb_credits_part1'                => 'Shoutbox v',
  'sb_credits_part2'                => ' von Aderyn',
  'sb_copyright'                    => 'Copyright',
);

?>
