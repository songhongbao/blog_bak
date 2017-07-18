<?php
// Direct calls to this file are Forbidden when core files are not present 
if ( ! current_user_can('manage_options') ) { 
		header('Status: 403 Forbidden');
		header('HTTP/1.1 403 Forbidden');
		exit();
}
	
	$bps_general_help_info = '<strong>'.__('General Help Info', 'bulletproof-security').'</strong><br>'.__('The Setup Wizard automatically sets up and activates all BulletProof Modes and all other BPS settings with default settings. The Setup Wizard can be re-run at any time. If you change any BPS default settings, your custom settings will not be changed/reset by re-running the Setup Wizard. The manual Security Modes option settings are for doing things like changing default settings, adding custom htaccess code to BPS Custom Code, testing and troubleshooting by deactivating (turning Off) BulletProof Modes.', 'bulletproof-security').'<br><br>';

	/**	Root Folder BulletProof Mode & Other Help Info **/
	$bps_rbm_content = '<strong>'.__('Activate|Deactivate Root Folder BulletProof Mode (RBM)', 'bulletproof-security').'</strong><br>'.__('Clicking the Activate button turns On Root Folder BulletProof Mode (RBM) by creating a BPS htaccess file in your WordPress root installation folder (same folder as the wp-config.php file). Clicking the Deactivate button turns Off Root Folder BulletProof Mode (RBM) by creating a generic/default WordPress htaccess file in your WordPress root installation folder. Deactivating Root Folder BulletProof Mode (RBM) is used for testing and troubleshooting. Click the BPS Troubleshooting Steps link at the top of this Read Me help file for BPS troubleshooting steps.', 'bulletproof-security').'<br><br><strong>'.__('Notes:', 'bulletproof-security').'</strong><br><strong>'.__('Viewing, Editing, Modifying, Creating, Saving and Testing htaccess Code/Files', 'bulletproof-security').'</strong><br>'.__('To check, view or edit BPS htaccess files/code manually/directly for testing you can use the htaccess File Editor. Click the htaccess File Editor Read Me help button for more detailed help information. To save htaccess code permanently use BPS Custom Code. Click the Custom Code Read Me help button for more detailed help information.', 'bulletproof-security').'<br><br>'.__('BPS has built-in troubleshooting capability - all features/options can be turned Off/On independently for troubleshooting. Deactivating/activating or uninstalling/reinstalling the BPS plugin is not the correct way to troubleshoot issues or problems. See the BPS Troubleshooting Steps link at the top of this Read Me help file.', 'bulletproof-security').'<br><br>'.__('The BPS Security Log logs all 403 errors and anything that BPS is blocking - hackers, spammers or something legitimate in another plugin or theme. If you think BPS is blocking something legitimate in another plugin or theme click the BPS Pro Troubleshooting Steps link at the top of this Read Me help file.', 'bulletproof-security').'<br><br>'.__('If you activate BulletProof Mode for your Root folder you should also activate BulletProof Mode for your wp-admin folder. On some Hosts that is required and on other Hosts that is not required for everything to work correctly.', 'bulletproof-security').'<br><br>'.__('The current status of BulletProof Modes is displayed in-page. The BPS Inpage Status Display also shows the current status of RBM and WBM.', 'bulletproof-security').'<br><br><strong>'.__('WordPress Network (Multisite) Sites Info','bulletproof-security').'</strong><br>'.__('BPS will automatically detect whether you have a subdomain or subdirectory Network (Multisite) installation and create the correct htaccess code for your website type. The BPS plugin can be Network Activated or you can allow the BPS plugin to be activated individually on each Network/Multisite subsite or of course you can choose not to Network Activate BPS or allow the BPS plugin on subsites. Super Admins will see BPS Dashboard Alerts and other Status displays on the Primary Site only. Administrators can activate or deactivate BPS on subsites, if you allow this on your Network/Multisite.', 'bulletproof-security').'<br><br><strong>'.__('BPS Video Tutorial links can be found in the Help & FAQ pages.','bulletproof-security').'</strong>'; 
	
	/**	wp-admin Folder BulletProof Mode **/
	$bps_wbm_content = '<strong>'.__('Activate|Deactivate wp-admin Folder BulletProof Mode (WBM)', 'bulletproof-security').'</strong><br>'.__('Clicking the Activate button turns On wp-admin Folder BulletProof Mode (WBM) by creating a BPS htaccess file in your WordPress wp-admin folder. Clicking the Deactivate button turns Off wp-admin Folder BulletProof Mode (WBM) by deleting the BPS htaccess file in your WordPress wp-admin folder. Deactivating wp-admin Folder BulletProof Mode (WBM) is used for testing and troubleshooting. Click the BPS Troubleshooting Steps link at the top of this Read Me help file for BPS troubleshooting steps.', 'bulletproof-security').'<br><br><strong>'.__('Notes: ', 'bulletproof-security').'</strong><br><strong>'.__('Viewing, Editing, Modifying, Creating, Saving and Testing htaccess Code/Files', 'bulletproof-security').'</strong><br>'.__('To check, view or edit BPS htaccess files/code manually/directly for testing you can use the htaccess File Editor. Click the htaccess File Editor Read Me help button for more detailed help information. To save htaccess code permanently use BPS Custom Code. Click the Custom Code Read Me help button for more detailed help information.', 'bulletproof-security').'<br><br>'.__('BPS has built-in troubleshooting capability - all features/options can be turned Off/On independently for troubleshooting. Deactivating/activating or uninstalling/reinstalling the BPS plugin is not the correct way to troubleshoot issues or problems. See the BPS Troubleshooting Steps link at the top of this Read Me help file.', 'bulletproof-security').'<br><br>'.__('The BPS Security Log logs all 403 errors and anything that BPS is blocking - hackers, spammers or something legitimate in another plugin or theme. If you think BPS is blocking something legitimate in another plugin or theme click the BPS Pro Troubleshooting Steps link at the top of this Read Me help file.', 'bulletproof-security').'<br><br>'.__('If you activate BulletProof Mode for your Root folder you should also activate BulletProof Mode for your wp-admin folder. On some Hosts that is required and on other Hosts that is not required for everything to work correctly.', 'bulletproof-security').'<br><br>'.__('The current status of BulletProof Modes is displayed in-page. The BPS Inpage Status Display also shows the current status of RBM and WBM.', 'bulletproof-security').'<br><br><strong>'.__('BPS Video Tutorial links can be found in the Help & FAQ pages.', 'bulletproof-security').'</strong>'; 
	
	/** Hidden Plugin Folders|Files (HPF) Cron **/
	$bps_hpf_content = '<strong>'.__('Hidden Plugin Folders|Files (HPF) Cron General Info', 'bulletproof-security').'</strong><br>'.__('A hidden or empty plugin folder is a plugin the exists in your /plugins/ folder, but is not displayed on the WordPress Plugins page. A hidden plugin can be used as a hacker backdoor to gain access to your WP Dashboard, hosting account, create user accounts, completely control your website and hosting account, etc. A non-standard WP file or modified/altered file in your /plugins/ folder can also do all of the things a hidden plugin can do.', 'bulletproof-security').'<br><br>'.__('The HPF Cron is setup automatically by running the Setup Wizard. The HPF Cron checks the WordPress /plugins/ folder for hidden or empty plugin folders and any non-standard WP files or altered files in the /plugins/ folder. This is a lightweight Cron check that uses an insignificant amount of resources/memory. So 4 checks per hour (check every 15 minutes) will not cause any significant resource/memory issues whatsoever. Even choosing Run Check Every 1 Minute would not cause any significant resource/memory issues whatsoever.', 'bulletproof-security').'<br><br><strong>'.__('What to do if a hidden plugin folder or file is detected', 'bulletproof-security').'</strong><br>'.__('If a hidden or empty plugin folder is detected or a non-standard WP file is detected then you would use FTP to check the folder or file. If the folder or file contains hacker code or is a hidden plugin or is a non-standard WP file then make a copy of it and delete it. If the plugin folder is just an empty plugin folder then delete it. If you recognize the folder or file you can use the Ignore Hidden Plugin Folders & Files textarea box option to ignore/not check this folder or file.', 'bulletproof-security').'<br><br><strong>'.__('Dashboard Alerts & Email Alerts:', 'bulletproof-security').'</strong><br>'.__('If a hidden or empty plugin folder is detected or a non-standard WP file is detected then a BPS Dashboard Alert will be displayed and Email Alert will be sent to you. ', 'bulletproof-security').'<strong><font color="blue">'.__('BPS Pro Only:', 'bulletproof-security').'</font></strong>'.__(' The HPF Email Alert setting is in S-Monitor: HPF: Hidden Plugin Folders|Files (HPF) Cron and the option settings are: Send Email Alerts or Do Not Send Email Alerts.', 'bulletproof-security').'<br><br><strong>'.__('HPF Cron Check Frequency:', 'bulletproof-security').'</strong><br>'.__('Available Cron Check Frequency Settings are: 1, 5, 10, 15, 30 or 60 minutes. The default HPF Cron Frequency is: Run Check Every 15 Minutes, which is setup automatically by running the Setup Wizard. Click the Save HPF Cron Options button to save your settings.', 'bulletproof-security').'<br><br><strong>'.__('HPF Cron On|Off:', 'bulletproof-security').'</strong><br>'.__('To turn on the HPF Cron choose HPF Cron On. To turn off the HPF Cron choose HPF Cron Off. Click the Save HPF Cron Options button to save your settings.', 'bulletproof-security').'<br><br><strong>'.__('Ignore Hidden Plugin Folders & Files:', 'bulletproof-security').'</strong><br>'.__('This option is for adding ignore rules for Hidden or Empty Plugin Folders Detected by BPS or Non-standard WP files detected by BPS in your /plugins/ folder. This is an independent option setting that does not require clicking any other buttons. Example Usage: If you intentionally have an empty plugin folder in your /plugins/ folder or you have a custom file in your /plugins/ folder then you can add the plugin folder or custom file name in the Ignore Hidden Plugin Folders & Files textarea box so that the HPF Cron check will ignore any folder or file names that you add. Add Ignore rules using plugin folder names or file names. Use a comma and a space between folder and/or file names. Example Ignore Rules: plugin-folder-name, example-file-name.php', 'bulletproof-security').'<br><br><strong>'.__('BPS Video Tutorial links can be found in the Help & FAQ pages.','bulletproof-security').'</strong>';

	/** Master htaccess Folder BulletProof Mode (MBM) **/
	$bps_mbm_content = '<strong>'.__('Activate Master htaccess BulletProof Mode', 'bulletproof-security').'</strong><br>'.__('Your BPS Master htaccess folder should already be automatically protected by BPS Pro, but if it is not then activate BulletProof Mode for your BPS Master htaccess folder. Activating Master htaccess BulletProof Mode copies and renames the deny-all.htaccess file located in the /bulletproof-security/admin/htaccess/ folder and renames it to just .htaccess to protect this folder. This Deny All htaccess file blocks everyone, except for you, from accessing and viewing the BPS Master htaccess files folder.','bulletproof-security').'<br><br><strong>'.__('BPS Video Tutorial links can be found in the Help & FAQ pages.','bulletproof-security').'</strong>';
	
	/** BPS Backup Folder BulletProof Mode (BBM) **/
	$bps_bbm_content = '<strong>'.__('Activate BPS Backup BulletProof Mode', 'bulletproof-security').'</strong><br>'.__('Your BPS Backup folder should already be automatically protected by BPS Pro, but if it is not then activate BulletProof Mode for your BPS Backup folder. Activating BPS Backup BulletProof Mode copies and renames the deny-all.htaccess file located in the /bulletproof-security/admin/htaccess/ folder to the BPS Backup folder /','bulletproof-security').$bps_wpcontent_dir.__('/bps-backup and renames it to just .htaccess to protect this folder. This Deny All htaccess file blocks everyone, except for you, from accessing and viewing your BPS Backup folder.','bulletproof-security').'<br><br><strong>'.__('BPS Video Tutorial links can be found in the Help & FAQ pages.','bulletproof-security').'</strong>';	

	/** htaccess File Backup & Restore **/	
	$bps_backup_restore_content = __('The Backup and Restore tools can be used to quickly backup and restore the root and wp-admin htaccess files. Example usage: You are testing some code and want to save copies of your working root and wp-admin htaccess files so that you can quickly restore them. It is not necessary to create backups of the root and wp-admin htaccess files. These tools should just be used as stated above.', 'bulletproof-security').'<br><br><strong>'.__('Note:', 'bulletproof-security').'</strong><br>'.__('Typically if invalid/bad htaccess code is added in an htaccess file then most likely your site will crash. The quick and simple solution if your website crashes is to use FTP or your web host control panel file manager and delete the htaccess file that has the invalid/bad htaccess code in it so you can log back into your site and correct or delete the invalid/bad htaccess code. So using Backup & Restore will not work in a scenario where invalid/bad htaccess code has caused your website to crash.','bulletproof-security').'<br><br><strong>'.__('Tip:', 'bulletproof-security').'</strong><br>'.__('A more practical method of temporarily testing new htaccess code is to use the htaccess File Editor. Example: You add your new htaccess code using the htaccess File Editor, save it and activate BulletProof Mode instead of using these Backup & Restore options. Or you can use Custom Code. Example: You add your new htaccess code using BPS Custom Code, save it and activate BulletProof Mode.', 'bulletproof-security').'<br><br><strong>'.__('Reminder:', 'bulletproof-security').'</strong><br>'.__('Any htaccess code that you add using the htaccess File Editor is not saved permanently. To save any new htaccess code permanently use BPS Custom Code.', 'bulletproof-security').'<br><br><strong>'.__('BPS Video Tutorial links can be found in the Help & FAQ pages.', 'bulletproof-security').'</strong>';
	
	/** htaccess File Editing **/
	$bps_hfe_content = '<strong>'.__('This Read Me Help window is draggable (top) and resizable (bottom right corner)', 'bulletproof-security').'</strong><br><br><strong>'.__('The File Editor is designed to open all of your htaccess files simultaneously and allow you to copy and paste from one window (file) to another window (file), BUT you can ONLY save your edits for one file at a time. Whichever file you currently have opened (the tab that you are currently viewing) when you click the Update File button is the file that will be updated/saved.', 'bulletproof-security').'</strong><br><br><strong>'.__('Important Notes: ', 'bulletproof-security').'</strong><br>'.__('You can edit all of your htaccess files directly using the htaccess File Editor, but to save your edits permanently for the "Your Current Root htaccess File" tab, which is your Root htaccess file and the "Your Current wp-admin htaccess File" tab, which is your wp-admin folder htaccess file, use BPS Custom Code to save your editing changes permanently.', 'bulletproof-security').'<br><br><font color="blue"><strong>'.__('default.htaccess File Exception: ', 'bulletproof-security').'</strong></font>'.__('You can create a Custom default.htaccess file that will be saved permanently by editing the default.htaccess file using the htaccess File Editor. Your Custom default.htaccess file will be saved permanently to this folder: /bps-backup/master-backups/default.htaccess. If you have created a Custom default.htaccess file then it will be automatically copied from the /bps-backup/master-backups/ folder during a BPS plugin upgrade and will replace the default BPS default.htaccess Master file.', 'bulletproof-security').'<br><br>'.__('The secure.htaccess (Root htaccess Master htaccess file), default.htaccess (Default WP Master htaccess file) and wpadmin-secure.htaccess (wp-admin folder Master htaccess file) tabs are Master htaccess files that will be replaced when you upgrade BPS. You can edit these files directly, but these files will not be saved permanently, with the exception of the default.htaccess file - See the ', 'bulletproof-security').'<font color="blue"><strong>'.__('default.htaccess File Exception', 'bulletproof-security').'</strong></font>'.__(' help information above.', 'bulletproof-security').'<br><br><strong>'.__('Lock|Unlock .htaccess Files', 'bulletproof-security').'</strong><br>'.__('If your Server API is using CGI then you will see Lock and Unlock buttons to lock your Root htaccess file with 404 Permissions and unlock your root htaccess file with 644 Permissions. If your Server API is using CLI - DSO/Apache/mod_php then you will not see lock and unlock buttons. 644 Permissions are required to write to/edit the root htaccess file. Once you are done editing your root htaccess file use the lock button to lock it with 404 Permissions. 644 Permissions for DSO are considered secure for DSO because of the different way that file security is handled with DSO.', 'bulletproof-security').'<br><br>'.__('If your Root htaccess file is locked and you try to save your editing changes you will see a pop message that your Root htaccess file is locked. You will need to unlock your Root htaccess file before you can save your changes.', 'bulletproof-security').'<br><br><strong>'.__('Turn On AutoLock|Turn Off AutoLock', 'bulletproof-security').'</strong><br>'.__('AutoLock is designed to automatically lock your root .htaccess file to save you an additional step of locking your root .htaccess file when performing certain actions, tasks or functions and AutoLock also automatically locks your root .htaccess during BPS Pro upgrades. This can be a problem for some folks whose Web Hosts do not allow locking the root .htaccess file with 404 file permissions and can cause 403 errors and/or cause a website to crash. For 99.99% of folks leaving AutoLock turned On will work fine. If your Web Host ONLY allows 644 file permissions for your root .htaccess file then click the Turn Off AutoLock button. This turns Off AutoLocking for all BPS actions, tasks, functions and also for BPS Pro upgrades.', 'bulletproof-security').'<br><br><strong>'.__('BPS Video Tutorial links can be found in the Help & FAQ pages.','bulletproof-security').'</strong>';

	/** Custom Code - Network/Multisite specific **/
	if ( is_multisite() ) {
	$network_cc_help = '<br><br><strong>'.__('CUSTOM CODE WP REWRITE LOOP END: Add WP Rewrite Loop End code here','bulletproof-security').'</strong><br>'.__('This is a Special Network/Multisite Custom Code text box that should ONLY be used if the correct WP REWRITE LOOP END code is not being created in your root .htaccess file. If you have a Network/Multisite site that is installed in an unusual way/has an unusual folder structure then what seems to work best in these cases is to delete any folder paths/names and the trailing slash: "delete-this-folder-name/" that you see in these 2 example RewriteRules: ', 'bulletproof-security').'RewriteRule ^[_0-9a-zA-Z-]+/(wp-(content|admin|includes).*) delete-this-folder-name/$1 [L] RewriteRule ^[_0-9a-zA-Z-]+/(.*\.php)$ delete-this-folder-name/$1 [L] '.__('Typically this problem is caused by not being able to get the correct folder/directory structure for the website. This is very rare, but can happen on unusual Network/Multisite setups with unusual folder structures.', 'bulletproof-security');	
	} else {
	$network_cc_help = '';	
	}

	/** Custom Code **/
	$bps_customcode_content = '<strong>'.__('Reset|Recheck Dismiss Notices:', 'bulletproof-security').'</strong><br>'.__('Clicking this button resets ALL Dismiss Notices such as Bonus Code Dismiss Notices and ALL other Dismiss Notices. If you previously dismissed a Dismiss Notice and want to display it again at a later time click this button.', 'bulletproof-security').'<br><br><strong>'.__('Export Tool', 'bulletproof-security').'</strong><br>'.__('The Custom Code Export tool exports (copies) all of your Root and wp-admin custom htaccess code into the cc-master.zip file, which you can then download to your computer by clicking the Download Zip Export button displayed in the Custom Code Export success message. You can unzip the cc-master.zip file on your computer to extract the cc-master.txt file for editing - see the Import Tool help info below.', 'bulletproof-security').'<br><br><strong>'.__('Import Tool', 'bulletproof-security').'</strong><br>'.__('The Custom Code Import tool imports all of your Root and wp-admin Custom Code from the cc-master.zip file on your computer into the Custom Code text boxes and saves your imported custom htaccess code to your WordPress Database. You can unzip the cc-master.zip file on your computer to extract the cc-master.txt file for editing to add/change any custom htaccess code in the cc-master.txt file. Do NOT delete any of the BEGIN and END placeholder lines of code in the cc-master.txt file. You can add/edit/change any code in-between the BEGIN and END lines of code. After editing the cc-master.txt file you will need to zip the cc-master.txt file in order to be able to import the cc-master.zip file using the Custom Code Import tool. The zip file MUST be named cc-master.zip in order to be able to Import it to BPS Custom Code. Important Note: Use Notepad, Notepad++ or another ASCII text editor to edit the cc-master.txt file. Do NOT use Word or WordPad to edit the cc-master.txt file.', 'bulletproof-security').'<br><br><strong>'.__('Delete Tool', 'bulletproof-security').'</strong><br>'.__('The Custom Code Delete tool deletes all of your Root and wp-admin Custom Code from all of the Custom Code text boxes and your WordPress Database. The Delete tool can be used for troubleshooting possible invalid/bad custom htaccess code issues/problems or simply just to delete all custom htaccess code in all of the Custom Code text boxes.', 'bulletproof-security').'<br><br><strong>'.__('Custom Code General Help Information', 'bulletproof-security').'</strong><br>'.__('ONLY add valid htaccess code into these text areas/text boxes. If you want to add regular text instead of .htaccess code then you will need to add a pound sign # in front of the text to comment it out. If you do not do this then the next time you activate BulletProof Mode for your Root folder or your wp-admin folder your website WILL crash.', 'bulletproof-security').'<br><br>'.__('For Custom Code text boxes the require that you copy the entire section of code that you want to edit and modify you will see this blue help text - ', 'bulletproof-security').'<strong><font color="blue">'.__('"You MUST copy and paste the entire xxxxx section of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes."', 'bulletproof-security').'</font></strong><br><br><strong>'.__('If you do not copy the entire section of code into a text box that requires this then the next time activate BulletProof Mode for your Root folder or your wp-admin folder your website WILL crash.', 'bulletproof-security').'</strong><br><br><strong>'.__('If your website crashes after adding custom code: Use FTP or use your web host control panel file manager and delete the root .htaccess file or the wp-admin file or both files if necessary. Log back into your website and correct/fix the invalid/incorrect custom htaccess code that was added in any of the Custom Code text boxes, save your changes, go to the Security Modes page and click the Activate button for the Root or wp-admin Folder BulletProof Mode or both if necessary.', 'bulletproof-security').'</strong><br><br><strong>'.__('Your Custom Code is saved permanently until you delete it and will not be removed or deleted when you upgrade BPS.','bulletproof-security').'</strong><br><br><strong>'.__('Root htaccess File Custom Code Setup Steps', 'bulletproof-security').'</strong><br>'.__('1. Add your custom code in the appropriate Root Custom Code text box.', 'bulletproof-security').'<br>'.__('2. Click the Save Root Custom Code button to save your Root custom code.', 'bulletproof-security').'<br>'.__('3. Go to the Security Modes page and click the Root Folder BulletProof Mode Activate button.', 'bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE TOP PHP/PHP.INI HANDLER/CACHE CODE:', 'bulletproof-security').'<br>'.__('Add php/php.ini handler code, cache code and/or Speed Boost Cache Code here', 'bulletproof-security').'</strong><br>'.__('ONLY add valid php/php.ini handler htaccess code and/or cache htaccess code or text commented out with a pound sign #.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE TURN OFF YOUR SERVER SIGNATURE:', 'bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire TURN OFF YOUR SERVER SIGNATURE section of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE DO NOT SHOW DIRECTORY LISTING/DIRECTORY INDEX:','bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire DO NOT SHOW DIRECTORY LISTING and DIRECTORY INDEX sections of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE BRUTE FORCE LOGIN PAGE PROTECTION:','bulletproof-security').'</strong><br>'.__('This Custom Code text box is for optional/Bonus code. To get this code see the Forum Help Links at the top of this Read Me help window. CAUTION! This code has a 95%/5% success/fail ratio meaning that this code will not work on 5% of websites. If you see a 403 error when logging out and logging into your website then you cannot use this code on your website and will need to delete this code to correct the 403 error when logging out and logging into your website.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE ERROR LOGGING AND TRACKING:','bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire ERROR LOGGING AND TRACKING section of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE DENY ACCESS TO PROTECTED SERVER FILES AND FOLDERS:', 'bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire DENY ACCESS TO PROTECTED SERVER FILES AND FOLDERS section of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes.', 'bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE WP-ADMIN/INCLUDES: DO NOT add wp-admin .htaccess file code here', 'bulletproof-security').'</strong><br>'.__('Add one pound sign # in this text box to prevent the WP-ADMIN/INCLUDES section of code from being created in your root .htaccess file.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE WP REWRITE LOOP START: Add www to non-www/non-www to www code here', 'bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire WP REWRITE LOOP START section of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE REQUEST METHODS FILTERED: Whitelist User Agents and allow HEAD Requests', 'bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire REQUEST METHODS FILTERED section of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes. If you see this code: ','bulletproof-security').'RewriteRule ^(.*)$ - [R=405,L]'.__('. To Allow HEAD Requests, comment out these 2 lines of code with # signs: ', 'bulletproof-security').'#RewriteCond %{REQUEST_METHOD} ^(HEAD) [NC] and #RewriteRule ^(.*)$ - [R=405,L].'.__(' If you see this code: ','bulletproof-security').'RewriteRule ^(.*)$ /wp-content/plugins/bulletproof-security/405.php [R,L]'.__('. To Allow HEAD Requests, comment out these 2 lines of code with # signs: ', 'bulletproof-security').'#RewriteCond %{REQUEST_METHOD} ^(HEAD) [NC] and #RewriteRule ^(.*)$ /wp-content/plugins/bulletproof-security/405.php [R,L].<br><br><strong>'.__('CUSTOM CODE PLUGIN/THEME SKIP/BYPASS RULES:','bulletproof-security').'</strong><br>'.__('ONLY add valid htaccess code or text commented out with a pound sign #. This text area is for plugin fixes that are specific to your website. BPS already has some plugin skip/bypass rules included in the Root htaccess file by default. Adding additional plugin skip/bypass rules for your plugins on your website goes in this text box. There are 12 default skip rules in the standard BPS root htaccess file already. Skip rules MUST be in descending consecutive number order: 15, 14, 13... If you add one plugin skip/bypass rule in this text box it should be skip rule #13. For each additional plugin skip rule that you add the S= skip number is increased by one. Example: if you add 3 plugin skip rules in this text box they would be Skip rules #15, #14 and #13 - RewriteRule . - [S=15] and RewriteRule . - [S=14] and RewriteRule . - [S=13] in descending consecutive order', 'bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE TIMTHUMB FORBID RFI and MISC FILE SKIP/BYPASS RULE:','bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire TIMTHUMB FORBID RFI section of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE BPSQSE BPS QUERY STRING EXPLOITS:','bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire BPSQSE QUERY STRING EXPLOITS section of code from your root .htaccess file from # BEGIN BPSQSE BPS QUERY STRING EXPLOITS to # END BPSQSE BPS QUERY STRING EXPLOITS into this text box first. You can then edit and modify the code in this text window and save your changes.', 'bulletproof-security').$network_cc_help.'<br><br><strong>'.__('CUSTOM CODE DENY BROWSER ACCESS TO THESE FILES:','bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire DENY BROWSER ACCESS section of code from your root .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes.', 'bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE BOTTOM HOTLINKING/FORBID COMMENT SPAMMERS/BLOCK BOTS/BLOCK IP/REDIRECT CODE: Add miscellaneous code here','bulletproof-security').'</strong><br>'.__('This Custom Code text box is for any/all personal custom code that you have created or want to use that is not standard BPS htaccess code. ONLY add valid htaccess code below or text commented out with a pound sign # You can save any miscellaneous custom htaccess code here as long as it is valid htaccess code or if it is just plain text then you will need to comment it out with a pound sign # in front of the text.', 'bulletproof-security').'<br><br><strong>'.__('wp-admin htaccess File Custom Code Steps','bulletproof-security').'</strong><br>'.__('1. Add your custom code in the appropriate wp-admin Custom Code text box.', 'bulletproof-security').'<br>'.__('2. Click the Save wp-admin Custom Code button to save your wp-admin custom code.', 'bulletproof-security').'<br>'.__('3. Go to the Security Modes page and click the wp-admin Folder BulletProof Mode Activate button.', 'bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE BPS WPADMIN DENY ACCESS TO FILES:','bulletproof-security').'<br>'.__('Add additional wp-admin files that you would like to block here','bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire WPADMIN DENY BROWSER ACCESS TO FILES section of code from your wp-admin .htaccess file into this text box first. You can then edit and modify the code in this text window and save your changes. Add one pound sign # below to prevent the WPADMIN DENY BROWSER ACCESS TO FILES section of code from being created in your wp-admin .htaccess file.', 'bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE WPADMIN TOP:','bulletproof-security').'<br>'.__('Add wp-admin password protection, IP whitelist allow access & miscellaneous custom code here','bulletproof-security').'</strong><br>'.__('ONLY add valid htaccess code below or text commented out with a pound sign # You can save any miscellaneous custom htaccess code here as long as it is valid htaccess code or if it is just plain text then you will need to comment it out with a pound sign # in front of the text.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE WPADMIN PLUGIN/FILE SKIP RULES:','bulletproof-security').'<br>'.__('Add wp-admin plugin/file skip rules code here','bulletproof-security').'</strong><br>'.__('ONLY add valid htaccess code below or text commented out with a pound sign #. There is currently one default skip rule [S=1] in the standard BPS wp-admin htaccess file already. Skip rules MUST be in descending consecutive number order: 4, 3, 2... If you add one plugin skip/bypass rule in this text box it will be skip rule #2. For each additional plugin skip rule that you add the S= skip number is increased by one. Example: if you add 3 plugin skip rules in this text box they would be Skip rules #4, #3 and #2 - RewriteRule . - [S=4] and RewriteRule . - [S=3] and RewriteRule . - [S=2] in descending consecutive order.','bulletproof-security').'<br><br><strong>'.__('CUSTOM CODE BPSQSE-check BPS QUERY STRING EXPLOITS AND FILTERS:','bulletproof-security').'<br>'.__('Modify wp-admin Query String Exploit code here','bulletproof-security').'</strong><br>'.__('You MUST copy and paste the entire BPS QUERY STRING EXPLOITS section of code from your wp-admin .htaccess file from # BEGIN BPSQSE-check BPS QUERY STRING EXPLOITS AND FILTERS to # END BPSQSE-check BPS QUERY STRING EXPLOITS AND FILTERS into this text box first. You can then edit and modify the code in this text window and save your changes.','bulletproof-security').'<br><br><strong>'.__('BPS Video Tutorial links can be found in the Help & FAQ pages.','bulletproof-security').'</strong>';

?>