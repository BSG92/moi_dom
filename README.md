# moi_dom
Construction Company Web Site

MVC architecture

--------------------------------
Prerequisites
1. Enable .htaccess file modifications in the virtualhost's <Directory> section
 
2. Enable mod_rewrite
 a2enmod rewrite

 -------------------------------
 Examples

    1. Add the following to /etc/apache2/apache.conf
        <Directory /var/www/>
            Options Indexes FollowSymLinks
            AllowOverride All
            Require all granted
        </Directory>
    
    2. Add the following to /etc/apache2/conf-available/moi-dom.conf
    This will allow .htaccess file modifications

        DocumentRoot /var/www/html/moi-dom
        <Directory "/var/www/html/moi-dom">
            AllowOverride All
        </Directory>



Session management should be in app/helpers
