3 MATTRIK - LARAVEL SITE

1. Upload everything to a folder on the server (e.g. /home/USER/mattrik).
2. Point the domain's document root to the "public" folder.
3. Server needs PHP 8.3 or newer. In SSH, inside the folder run:
     composer install --no-dev --optimize-autoloader
4. Make sure these are writable: storage, bootstrap/cache, database, public/uploads
5. Admin panel: https://3mattrik.com/admin
   Login: admin@3mattrik.com   (password sent separately). Change it in Settings > Admin login.

Data lives in database/database.sqlite. Back it up together with public/uploads.
