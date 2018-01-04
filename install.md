//Instalar esqueleto symfony
composer create-project symfony/skeleton symfony

//Instalar barra debug 
composer require debug-pack

//Intalar maker 
composer require maker

//Instalar annotation
composer require annotations

//Instalar twig
composer require twig

//Instalar webpack encore
yarn add @symfony/webpack-encore --dev
composer require encore
yarn add jquery --dev
yarn add materialize-css --dev
yarn add material-design-icons-loader --dev
yarn add --dev sass-loader node-sass
yarn add --dev less-loader less

//Correr webpack
yarn run encore dev
yarn run encore dev --watch
yarn run encore production

//virtual host sin .htaccess

<VirtualHost *:80>
    ServerName symfony
    #ServerAlias www.domain.tld

    DocumentRoot "c:/wamp/www/symfony/public"
    <Directory "c:/wamp/www/symfony/public">
        AllowOverride None
        Order Allow,Deny
        Allow from All

        <IfModule mod_rewrite.c>
            Options -MultiViews
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^(.*)$ index.php [QSA,L]
        </IfModule>
    </Directory>

    # uncomment the following lines if you install assets as symlinks
    # or run into problems when compiling LESS/Sass/CoffeeScript assets
    # <Directory /var/www/project>
    #     Options FollowSymlinks
    # </Directory>

    # optionally disable the RewriteEngine for the asset directories
    # which will allow apache to simply reply with a 404 when files are
    # not found instead of passing the request into the full symfony stack
    <Directory "c:/wamp/www/symfony/public/bundles">
        <IfModule mod_rewrite.c>
            RewriteEngine Off
        </IfModule>
    </Directory>
    ErrorLog C:/wamp/tmp/project_error.log
    CustomLog C:/wamp/tmp/project_access.log combined
</VirtualHost>

//Instalar asset
composer require asset

//Habilitar sessiones
/config/packages/framework.yaml
-descomentar session

// Instalar vue.js
yarn add --dev vue vue-loader vue-template-compiler

// webpack.config.js
// ...

Encore
    // ...
    .addEntry('main', './assets/main.js')

+     .enableVueLoader()
;

npm install --save buefy vue-router

//

//instalar doctrine
composer require orm
composer require security