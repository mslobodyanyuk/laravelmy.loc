A task:
===================================
Create small site framework Laravel
---
Features version of the framework:
    At the beginning of the study framework Laravel, faced with a shortage of files and folders, and specifically related to the authorization, registration.
    It's all about the version of the framework. In version 5.0 all present.

Check version can command in command line:
---
>`php artisan --version` (_previously_, _go_ _to_ _the_ _project_ _directory_ _using_ _the_ _cd_ _command_).
>To install the required  `version 5.0` in command line must run:
>`composer create-project laravel / laravel ./ 5.0` (_in_ _this_ _case_ _the_ _project_ _folder_ _should_ _be_ _empty_)

Actions on deployment of the project:
=====================================
1. after 1 n composer install laravelmy.loc folder in the Project -> copy the contents of the folder are deleted.

2. domain settings `hosts file`, `httpd.conf`.

3. database settings .env file
>- Rename .env.example -> .env
>- Make a  new database - `laravelmytest` for example,
	
	```
    DB_DATABASE = laravelmytest
    DB_USERNAME = root
    DB_PASSWORD =
	```

4. `> php artisan migrate` ( _perform_ _all_ _migration_ ).

5. `> php artisan db: seed` ( _seeder_ _starts_ _to_ _fill_ _all_ _the_ _database_ _tables_ _in_ _class_ _DatabaseSeeder_ ).

Features menu:
==============
Menu item    			 | short description
-------------------------|--------------------------------------------------------
**RESUME** 				 | - file pdf - can be viewed, if necessary -  downloaded.
**Test task ModeraTest** | - description of the execution of the test task.
**About me**			 | - data is taken from the json-file.
**Contacts**			 | - data is taken from the json-file.