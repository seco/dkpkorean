 /*
 * Project:     EQdkp Newsletter
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2007
 * Date:        $Date: 2009-03-04 00:28:05 +0100 (Mi, 04 Mrz 2009) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     newsletter
 * @version     $Rev: 4087 $
 * 
 * $Id: newsletter_plugin_class.php 4087 2009-03-03 23:28:05Z wallenium $
 */

INSTALLATION

* Den Ordner "ticket" in den Plugin Ordner Kopieren
* Im Administrationsbereich unter Plugins verwalten auf Installieren klicken
* Rechte f�r die Nutzer und Administratorenvergeben
* Einstellungen f�r das Plugin bearbeiten

\\::\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//:://////////////////////////////////////////////

BENUTZUNG / FEATURES

* Benutzer k�nnen Tickets verfassen auf die alle berechtigten Admins antworten k�nnen
* Es k�nnen mehrere Antworten zu einem Ticket erstellt werden
* Die Benutzer k�nnen Antworttickets auf die Antworten der Admins erstellen.
* Email Benachrichtigungen f�r Admins und Nutzer sind m�glich (f�r Nutzer default on)
* Visuelle Anzeige im Menu gibt an, ob neue Tickets/Antworten existieren
* L�schen der Tickets ist m�glich

\\::\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
//:://////////////////////////////////////////////

CHANGELOG:

to 0.02
* Admin: Bei Antwort ohne Ticket wird nun bei nicht findens den Nutzernamens ein Fehler ausgegeben doch der Text bleibt erhalten
* Kleiner Bug bei Variablenzuweisung

to 0.03
* Adminbereich: Es werden nun alle Tickets angezeigt, auch wenn der Admin selbst noch keins verfasst hat (Bug Report von titan_flippi)
* Der "mit weiterem Ticket antworten" Link ist nun zentriert ausgerichtet und hat ein icon

to 0.04
* Adminbereich: Antworten werden korrekt angezeit (Bug Report von titan_flippi)
* Sprache etwas �berarbeitet

to 0.05
* Adminbereich: bei vom Admin gel�schten Tickets kann nun das L�schen r�ckg�ngig gemacht werden
* Adminbereich: Das "Antworten auf Ticket" hat nun auch ein Icon
* Userbereich: L�scht ein Nutzer ein Ticket ohne die Antwort als gelesen markiert zu haben werden diese automatisch markiert
* Beim permanenten L�schen von Tickets werden nun tats�chlich die gesamten Sessions gel�scht 
* "Ticket"-Link nun in MainMenu2, da es eher eine Benutzersache ist, als eine Membersache

to 0.06
* Installation: Fehler bei erstellen des Feldes f�r firstreplydates versucht zu beheben durch l�schen des Default Wertes
* Neuer Link f�r Admins in MainMenu2

to 0.07
* Email Benachrichtigungen haben nun einen Link zur entsprechenden Seite
* Die Zahl der offenen Tickets f�r die Admins steht nun auch rechts beim Link

to 0.08
* Bug behoben, wobei User die noch nie f�r sich settings erstellt hatten, nach erstmaligen Abschicken der Einstellungen immer noch die Standards sahen.
* Wenn man nicht eingeloggt ist, sieht man nicht den "Ticket" Link auch wenn die Standardberechtigungen dies erlauben w�rden. Hintergrund ist der, dass die Standardberechtigungen sowohl f�r neue Nutzer wie auch f�r G�ste gelten - einige Admins m�chten, dass neue Nutzer standardm��ig das Plugin sehen k�nnen (ohne erst noch extra die Rechte zu vergeben) aber G�ste nicht. Demnach ist nun auch die Standardberechtigung f�r das Versenden von tickets gesetzt. Dazu geh�rt nun auch eine weitere Abfrage, dass nicht eingeloggte Nutzer auch nicht die Plugin-Seite anzeigen, wenn sie die genaue adresse kennen.
* Auf der Admin-Seite wird bei angezeigten gel�schten Tickets das L�schen Symbol nicht mehr angezeigt

to 0.1
* Updated Readme files

to 0.101
* Wenn ein Ticket gel�scht wird, wird es nun auch als beantwortet markiert, damit es nicht mehr als neues Ticket angezeigt wird

to 0.102
* L�uft nun unter 1.3.1 und auch unter 1.3.2

to 0.103
* Einige Anzeige Bugs gefixed u.a. auch das nicht auftauchen von
* Folgetickets (screentech bugreport)

to 0.104
* Mini-Darstellungsver�nderung und Typo

to 0.105
* Der Admin der das Plugin installiert bekommt nun automatisch alle Rechte f�r das Plugin
