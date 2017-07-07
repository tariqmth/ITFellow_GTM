ITFellow GTM
=====================
The extension aims to integrate Google Tag Manager scripts to your Magento 1.7+ site.

Facts
-----
- version: 1.1.0
- extension key: ITFellow_GTM


Description
-----------
Google Tag Manager helps to manage Google Analytics events, remarketing, Google Adwords and many other features in one place. 
For more information please visit http://www.google.com.ua/tagmanager/features.html
The extension add the necessary JS code and event on specific page, build data layer, push analytics or transactional data to Google. 

Requirements
------------
- PHP >= 5.2.0
- Mage_Core
- ...

Compatibility
-------------
- Magento >= 1.7

Installation Instructions
-------------------------
Method 1 - Install via composer [RECOMMENDED]
1. To Install the extension via composer you must already using composer installer.
2. Modify composer.json file and add the following in repositories section:
   {
      "type": "vcs",
      "url": "https://github.com/tariqmth/ITFellow_GTM"
    }
3. Add the following in require section:
	 "itfellow/gtm": "dev-master"

Method 2 - Download extension
1. Download extension from https://github.com/tariqmth/ITFellow_GTM/archive/master.zip
2. Unzip and upload files to magento root i.e public_html

 	     
- Clear the cache, if compilation enabled recompile.
- Configure and activate the extension under System - Configuration - ITFellow - Google Tag Manager.


Uninstallation
--------------
1. Remove all extension files from your Magento installation
2. Remove all configuration entries from database table core_config

Support
-------
If you have any issues with this extension, open an issue on [GitHub](https://github.com/tariqmth/ITFellow_GTM/issues).

Contribution
------------
Any contribution is highly appreciated. The best way to contribute code is to open a [pull request on GitHub](https://help.github.com/articles/using-pull-requests).

Developer
---------
Tariq Hafeez  
[@tariqmth(https://twitter.com/tariqmth)

License
-------
[OSL - Open Software Licence 3.0](http://opensource.org/licenses/osl-3.0.php)

Copyright
---------
(c) 2017 ITFellow
