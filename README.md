# Wordpress development environment configuration
**A web of JS Project** :rocket:  
https://www.jordisabadell.com

## Challanges
This repository has been created from the following challenges.

- [x] Configure Wordpress/MySQL local development environment with Docker.
- [ ] Install multisite/multilanguage Wordpress.
- [ ] Install basic plugins.
- [ ] Create a Custom Post Type and Custom Fields.
- [ ] Create a CI/CD environment (development-production life cycle).

## Architecture diagram

![Image description](docs/architecture-diagram.png)

## Wordpress plugins
- Akismed (https://wordpress.org/plugins/akismet/)
- iTheme Security (https://wordpress.org/plugins/better-wp-security/)
- Custom Post Type UI (https://wordpress.org/plugins/custom-post-type-ui/)
- Advanced Custom Fields (https://wordpress.org/plugins/advanced-custom-fields/)

## Wordpress tools
- Post Type Generator (https://generatewp.com/post-type/)

---

## Passos configuració entorn local

Crear directori
```
mkdir jsproject-wordpress
cd jsproject-wordpress
```

Connectar amb el repositori de Github (inicialment buit, només amb la configuració de docker-compose.yml i l'arxiu .gitignore)
```
git init
git remote add origin https://github.com/jordisabadell/jsproject-wordpress
git pull origin master
```

Iniciar els contenidors
```
docker-compose up -d
```

Habiliar el volum del contenidor de Kitematic. Pestanya ***Volumes*** > Change Local Folder. Per exemple: docker-wordpress_1

Seguir el procés d'instal·lació de Wordpress.  

Actualitzar plugins. Si no permet executar l'actualització automàtica des del Backoffice de Wordpress, afegir la següent línia a l'arxiu de configuració (referència https://www.digitalocean.com/community/questions/how-to-fix-wordpress-connection-information-on-wp-that-is-running-in-a-docker-container)
```
Editar fitxer wp-config.php
    define('FS_METHOD','direct');
```

Habilitar el Multisite  (referència https://gonzalonavarro.es/blog/wordpress-multisite/)
```
- Editar fitxer wp-config.php
    define( 'WP_ALLOW_MULTISITE', true );

- Activar el Multisite des de la Configuració de red del Backoffice.

- Editar fitxer wp-config.php
    define('MULTISITE', true);
    define('SUBDOMAIN_INSTALL', false);
    define('DOMAIN_CURRENT_SITE', 'localhost');
    define('PATH_CURRENT_SITE', '/');
    define('SITE_ID_CURRENT_SITE', 1);
    define('BLOG_ID_CURRENT_SITE', 1);

- Editar fitxer .htaccess
    RewriteEngine On
    RewriteBase /
    RewriteRule ^index\.php$ - [L]

    # add a trailing slash to /wp-admin
    RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]

    RewriteCond %{REQUEST_FILENAME} -f [OR]
    RewriteCond %{REQUEST_FILENAME} -d
    RewriteRule ^ - [L]
    RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]
    RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]
    RewriteRule . index.php [L]
```

Afegir un nou Site (opció Add New Site).  

Afegir plugin iTheme Security. Configurar. A ***WordPress Tweaks*** modificar la configuració de la REST API a 'Default Access' perquè pugui rebre peticions de qualsvol orígen.

---

## Crear estructura personalitzada

Referència https://www.wpbeginner.com/wp-tutorials/12-most-useful-wordpress-custom-post-types-tutorials/

- Plugin *CTP UI* per facilitar la creació del CTP
- Plugin *Advances Custom Fields* per crear els metaboxes

---

## Comandes bàsiques Docker 
Per executar les comandes en entorn Window usar **PowerShell**.

Veure les imatges.
```
docker images -a
```

Eliminar una imatge/totes les imatges.
```
docker rmi -f {IMAGE ID}
docker rmi -f $(docker images -a -q)
```

Veure els contenidors.
```
docker ps -a
```

Eliminar un contenidor/tots els contenidors.
```
docker container rm {CONTAINER ID}
docker rm -vf $(docker ps -a -q)
```

Parar contenidors.
```
docker-compose stop
```
