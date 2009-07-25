 * Project:     EQdkp ItemSpecials
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		    http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2005
 * Date:        $Date: 2008-11-09 14:02:22 +0100 (So, 09 Nov 2008) $
 * -----------------------------------------------------------------------
 * @author      $Author: wallenium $
 * @copyright   2005-2008 Simon (Wallenium) Wallmann
 * @link        http://eqdkp-plus.com
 * @package     itemspecials
 * @version     $Rev: 3033 $
 * 
 * $Id: readmefirst.txt 3033 2008-11-09 13:02:22Z wallenium $

README
--------------------------------------------------------------------------------------------------

What is ItemSpecials?
---------------------------------------------
Itemspecials is a toolbase-plugin for eqdkp. It includes SetItems (SetProgress),
SpecialItems and Setright. You can easily setup the Plugin via Admin Panel and much
more.

New Install of Item Specials
---------------------------------------------
1. upload the downloaded itemspecials folder into the plugin folder on your webspace
2. Go to the AdminPanel, Plugins. Install the Itemspecials Plugin.
3. Login as Administrator, go to Global DKP Configuration. There you can setup the Guest Permissions
4. Setup the Permissions for every single user of the DKP
5. Go to ItemSpecials Settings and setup your itemspecials install
6. You're done!

Update from an existing Item Specials installation
---------------------------------------------
ITEMSPECIALS 1.0 or LOWER
1. Uninstall the old Version of ItemSpecials
2. Delete the old itemspecials folder
3. upload the downloaded itemspecials folder into the plugin folder on your webspace
4. Go to the AdminPanel, Plugins. Install the Itemspecials Plugin.
5. Go to ItemSpecials Settings and setup your itemspecials install

ITEMSPECIALS 2.0 or higher
1. go to the itemspecials settings and follow the upgrade steps
2. Thats all ;)

ITEMSPECIALS 

How to use it with a set/nonset dkp?
---------------------------------------------
1. Install it as described above
2. Go to the itemspecials settings in the admin panel
3. enable the setting "Set & Nonset Database difference"
4. insert the two databases in the fields under that option
5. you're done. it should work now


FAQ
---------------------------------------------
Q: I cannot see the settings in the ACP or the links in the header. The
Plugin must be broken

A: No. You have to set the permissions for guests AND every single user registered
in the DKP

Q: Will there be an option to import existing Setitems in a later Version of ItemSpecials?

A: No. I'll never insert such a function. Insert a Raid with 0 DKP, this should work good enough.

Q: I want guests to see the XYZ-plugin
A: Go to the ACP, general settings. There are the global permissions", these are for the guests

Q: i got an error on line 200 or 205
A: This is a template error. Please make shure that all templates are installed right, 
that you uploaded all templates. error 205: delete the template folder and reupload it.
error 200: download the default template, name it like your eqdkp template folder (if you're
using a custom template which is locatet in the folder "blubb", rename the default folder included
in the zip file of this addon to "blubb").

Q: I added a Tier3/TierAQ Setitem. Why is it not listed in Set Progress?
A: You must add the Questitem for that Part of the Set. SetProgress will automatically list the Tier3 
Setitem if the user have the Questitem.
