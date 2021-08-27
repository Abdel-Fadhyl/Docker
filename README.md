# Projet : **RTP-SYS2 - DockerWeb**

*Fait par **DJOI Abdel Fadhyl**.*

## **RTP-SYS2 - DockerWeb** : 
Mettre en place une architecture Web utilisant des containers via Docker au moyen de docker-compose. Il vous faudra créer 3 containers.
L'architecture est composée des éléments suivants :

- D'une base de données sous MySQL contenant une table Users (avec au minimum les champs ID, username, email et password)
- D'un serveur PHP
- D'un front (langage libre)

Les 3 containers devront être reliés entre eux : le back sera connecté à la BDD, et les informations devront être affichées sur le front.

### Installation
Afin de réaliser ce projet j'ai utilisé une VM debian(64-bits) puis j'ai effectué les configurations suivantes pour l'installation de Docker :
```
    $ sudo apt-get update 
    $ sudo apt-get install apt-transport-https 
    $ sudo apt-get install ca-certificates 
    $ sudo apt-get install curl 
    $ sudo apt-get install gnupg 
    $ sudo apt-get install lsb-release 
    $ sleep 2 
    $ curl -fsSL https://download.docker.com/linux/debian/gpg | sudo gpg --dearmor -o /usr/share/keyrings/docker-archive-keyring.gpg $
    echo \
  "deb [arch=amd64 signed-by=/usr/share/keyrings/docker-archive-keyring.gpg] https://download.docker.com/linux/debian \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
  $ sleep 2 
  $ sudo apt-get update 
  $ sudo apt-get install docker-ce docker-ce-cli containerd.io 
  $ sudo curl -L "https://github.com/docker/compose/releases/download/1.29.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose 
  $ sudo chmod +x /usr/local/bin/docker-compose 
  $ sudo groupadd docker 
  $ sudo usermod -aG docker $USER 
  $ newgrp docker 
```
### Arboresence
Voici l'arboresence de notre sujet présent dans le dossier rtp-sys2 :
- Tout d'abord, j'ai un dossier **back** qui contient un **Dockerfile** et fichier `connect.php`;
    Puis, un dossier **db** qui contient un **Dockerfile** et un fichier `db.sql`;
    Pour finir, un dossier **front** qui contient un **Dockerfile** et un `index.html`.
    

## Database
Pour cette première partie, j'ai édité un **Dockerfile** pour configurer l'image du container **Database**. De plus j'ai éditer un fichier `.sql` comme demander dans le sujet ou dedans j'ai crée une `Database` ainsi qu'une `Table`. Pour finir, j'ai apeller le fichier `.sql` dans le **Dockerfile**.
    
## Back
Pour cette seconde partie, j'ai édité un **Dockerfile** pour configurer l'image du container **Back**. Ensuite j'ai fait un fichier `.php` qui ce connecte à la base de donnée via `PDO` et pour finir on a inclut le fichier `.php` dans le **Dockerfile**.

## Front
Pour cette troisième partie, j'ai édité un **Dockerfile** pour configurer l'image du container **Front**. De plus j'ai fait un fichier `.php` qui sert ā faire une redirection de port pour afficher le back avec le port **7777** puis l'j'ai importé dans le **Dockerfile**.a

## Docker-Compose
Enfin pour cette derniere partie, j'ai édité un fichier **docker-compose** pour la configuration des container avec un volume ainsi qu'un network.

## Commande
- Voici la commamde pour lancer le projet : `docker-compose up --build`
- Voici la commande pour voir le ou les containers actif : `docker ps`
- Voici la commamde pour entrer dans un container : `docker exec -it <name_container> bash`