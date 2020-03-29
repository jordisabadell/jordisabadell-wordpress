# Wordpress development environment configuration
**A web of JS Project** :rocket:  
https://www.jordisabadell.com

## Challanges
This repository has been created from the following challenges.

- [x] Configure Wordpress/MySQL local development environment with Docker.
- [x] Enable multisite.
- [ ] Install multilingual plugin.
- [ ] Enable a Custom Post Type and Custom Fields multisite/multilingual functions.
- [x] Read BBDD content through the REST API.
- [ ] Create a CI/CD environment (development-production life cycle).

## Architecture diagram

![Image description](docs/architecture-diagram.png)

## Wordpress plugins
- Akismed (https://wordpress.org/plugins/akismet/)
- iTheme Security (https://wordpress.org/plugins/better-wp-security/)
- Custom Post Type UI (https://wordpress.org/plugins/custom-post-type-ui/)
- Advanced Custom Fields (https://wordpress.org/plugins/advanced-custom-fields/)
- ACF to REST API (https://wordpress.org/plugins/acf-to-rest-api/)
- Polylang (https://wordpress.org/plugins/polylang/)

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

Seguir el procés d'instal·lació de Wordpress.  

Actualitzar plugins. Si no permet executar l'actualització automàtica des del Backoffice de Wordpress, afegir la següent línia a l'arxiu de configuració (referència https://www.digitalocean.com/community/questions/how-to-fix-wordpress-connection-information-on-wp-that-is-running-in-a-docker-container)
```
Editar fitxer /wordpress-files/wp-config.php
    define('FS_METHOD','direct');
```

Habilitar el Multisite  (referència https://gonzalonavarro.es/blog/wordpress-multisite/)
```
- Editar fitxer /wordpress-files/wp-config.php
    define( 'WP_ALLOW_MULTISITE', true );

- Activar el Multisite des de la Configuració de red del Backoffice
- Editar fitxer /wordpress-files/.htaccess
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

Afegir plugins: 
- iTheme Security
- Custom Post Type UI
- Advanced Custom Fields
- ACF to REST API

---

## Crear estructura personalitzada amb camps propis

Per crear una estructura personalitzada (tipus 'Noticia') amb camps propis (tipus Títol, Data de publicació, Autor, Tema, etcètera), cal tenir instal·lats els següents plugins:

- Custom Post Types UI (CPT UI)
- Advances Custom Fields (ACF)

Important recordar exportar la configuració de l'estructura i dels camps propis per poder sincronitzar entre entorns.

Referències utilitzades:
- https://www.wpbeginner.com/wp-tutorials/12-most-useful-wordpress-custom-post-types-tutorials/
- https://www.advancedcustomfields.com/resources/displaying-custom-field-values-in-your-theme/

---

### Configurar multi-idioma

- Plugin *Polylang* per habilitar el multi-idioma.
- Configurar idioma per defecte (permet assignar els continguts actuals a aquest idioma). Crear un segon idioma. 
- Habilitar l'idioma pels CPT (https://polylang.pro/doc/multilingual-custom-post-types-and-taxonomies/). En aquest cas, no permet assignar els continguts actuals a l'idioma per defecte; s'ha de fer 1 a 1 editant el contingut i publicant-lo de nou. ¿¿¿???
- Recuperar a través de la REST API les versions en un únic idioma. "The feature is available only in Polylang Pro" (https://polylang.pro/doc/rest-api/). ¿¿¿???

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
