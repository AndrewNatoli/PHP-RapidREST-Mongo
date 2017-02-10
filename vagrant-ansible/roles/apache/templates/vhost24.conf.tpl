<VirtualHost *:{{apache.serverport}}>
    ServerName {{apache.servername}}
    DocumentRoot {{ apache.docroot }}

    <Directory {{ apache.docroot }}>
    AllowOverride All
    Options -Indexes +FollowSymLinks
    Require all granted
    </Directory>
</VirtualHost>