# Grimbergen-motors

php artisan page-cache:clear


RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{www.example.com}%{REQUEST_URI} [L,R=301]
