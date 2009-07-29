<?php
 /*
 * Project:     eqdkpPLUS Libraries: pluginCore
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2009-02-06 18:41:57 +0100 (Fr, 06 Feb 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     libraries:pluginCore
 * @version     $Rev: 3756 $
 * 
 * $Id: english.php 3756 2009-02-06 17:41:57Z wallenium $
 */

$lang = array(
  
  // JS Short Language
  'cl_shortlangtag'           => 'es',
    
  // Update Check
  'cl_update_box'             => 'New Version available',
  'cl_changelog_url'          => 'Changelog',
  'cl_timeformat'             => 'd/m/Y',
  'cl_noserver'               => 'Se ha producido un error al intentar ponerse en contacto con el servidor de actualización, ya sea que su servidor no permite conexiones salientes
                                  o el error fue causado por un problema de red..
                                  Por favor visite el foro de plugins en la web de EQdkp plus para asegurarse de que está ejecutando la última versión de plugin.',
  'cl_update_available'       => "Por favor, actualice el Plugin <i>%1\$s</i> .
                                  Su versión actual es <b>%2\$s</b> y la ultima versión es <b>%3\$s (Publicado en: %4\$s)</b>.<br/><br/>
                                  [fecha: %5\$s]%6\$s%7\$s",
  'cl_update_url'             => 'A la página de descarga',

  // Plugin Updater
  'cl_update_box'             => 'Actualización de la base de datos necesaria',
  'cl_upd_wversion'           => "La actual base de datos ( Versión %1\$s ) no se ajusta a la version instalada del plugin %2\$s.
                                  Por favor, utilice el botón de 'Actualizar base de datos' para realizar las actualizaciones automáticamente.",
  'cl_upd_woversion'          => 'Una instalación anterior fue encontrada. Los Datos de versión fallan. 
                                  Por favor, elija la anterior versión instalada de la lista desplegable, para realizar todos los cambios en la base de datos.',
  'cl_upd_bttn'               => 'Actualizar base de datos',
  'cl_upd_no_file'            => 'El archivo de actualización falla',
  'cl_upd_glob_error'         => 'Se ha producido un error durante el proceso de actualización.',
  'cl_upd_ok'                 => 'La actualización de la base de datos se ha realizado correctamente.',
  'cl_upd_step'               => 'Paso',
  'cl_upd_step_ok'            => 'Conseguido',
  'cl_upd_step_false'         => 'Fallado',
  'cl_upd_reload_txt'         => 'Recargando ajustes, por favor espere...',
  'cl_upd_pls_choose'         => 'Por favor, elija...',
  'cl_upd_prev_version'       => 'Versión anterior',

  // HTML Class
  'cl_on'                     => 'On',
  'cl_off'                    => 'Off',
);
?>
