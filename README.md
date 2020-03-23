## Configuració entorn de treball

Crear el directori arrel i l'arxiu de configuració de Docker Compose.
```
mkdir worpdress  
cd wordpress
echo ''  > docker-compose.yml
```

Editar l'arxiu de configuració.
```
Fer un copy-paste de l'arxiu docker-compose.yml (https://github.com/jordisabadell/kilometresolidari-wordpress-docker/blob/master/docker-compose.yml)
```

Iniciar l'entorn.
```
docker-compose up -d
```


## Comandes bàsiques Docker 
Per executar les comandes en entorn Window usar **PowerShell**.

Veure les imatges.
```
docker images -a
```

Eliminar una imatge.
```
docker rmi -f {IMAGE ID}
```

Veure els contenidors.
```
docker ps -a
```

Eliminar un contenidor.
```
docker container rm {CONTAINER ID}
```