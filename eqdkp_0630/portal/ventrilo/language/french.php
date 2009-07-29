<?php
if ( !defined('EQDKP_INC') ){    
header('HTTP/1.0 404 Not Found');exit;
} 
$plang = array_merge($plang, array(  
'ventrilo'                 => 'Ventrilo',  
'pk_ventrilo_server'   => 'Entrer l\'adresse du serveur ventrilo',  
'pk_ventrilo_port'     => 'Entrer le port du serveur ventrilo',
'pk_ventrilo_backgroundc'     => 'Entrer les 6 chiffres hexa pour la couleur ARRIERE PLAN (TTTTTT = transparent (http://www.computerhope.com/htmcolor.htm))',
'pk_ventrilo_channelc'     => 'Entrer les 6 chiffres hexa pour la couleur CANAL',
'pk_ventrilo_servercolor'     => 'Entrer les 6 chiffres hexa pour la couleur SERVEUR',
'pk_ventrilo_usercolor'     => 'Entrer les 6 chiffres hexa pour la couleur UTILISATEUR',
));
?>