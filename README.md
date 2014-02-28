IdeasND
======================

Installation
------------

Using Git



    git clone git://github.com/yahyaouifaouzi/ideasnd.git
	
or  download  zip file  and  copy it  in your  www folder

we use 
-------
zend framework 
MySQL data base 
PHP5
js, jQuery, CSS frontend


Creation d'un hôte virtuel
--------------------------

    <VirtualHost *:80>
        ServerName ideasnd.dev
        DocumentRoot /path/to/www/folder/ideasND/public
     
        SetEnv APPLICATION_ENV "development"
     
        <Directory /path/to/www/folder/ideasND/public>
            DirectoryIndex index.php
            AllowOverride All
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>	
	
 Finalement, vous devrez ajouter une entrée au DNS ou au fichier d'hôtes (hosts) pour la valeur de ServerName. Sur les systèmes *nix, il s'agit de /etc/hosts; sur Windows, vous trouverez normalement ce fichier sous C:\WINDOWS\system32\drivers\etc. Quel que soit le système, l'entrée sera de la forme:

    127.0.0.1 ideasnd.dev	
	
