lolnbla
=======

lolnbla (lol never be late again) is a small php project to inform your lol friends when you will come online.

== HOW TO

First you need a lol account.

If you do have one you want to use for sending lolnbla messages you have to add all summenors you want to send messages as a friend.

Next edit the config.php the .htusers, and the .htaccess.
The .htusers file manages the access to your site, via .htaccess (de.selfhtml.org/servercgi/server/htaccess.htm) the test user is "test" with the password "test".

Now add all summenors you want so send messages via this program. Use the interface provided via the index.php.
You have to use the following format:

name1;sum123456@pvp.net

name2;sum234455@pvp.net

etc.
Each summenor has his own number. To get the numbers you may use lolking.

Now your able to send messages to your friends with the content "User XYZ is in 15 min online".

This program uses a modified version of the XMPPHP libary ( http://code.google.com/p/xmpphp/ ).

Have fun.

== ENABLE MYSQL

To use MySql to save your targets, you have to comment the file stuff in the includes.php and to uncomment the mysql stuff.

Configure your server in the config_mysql.php

This will enable MySql and user seperate saving of the summenors.
