# Définir l'image de base à utiliser
FROM ubuntu:latest

# Mettre à jour les paquets de l'image de base
RUN apt-get update && apt-get upgrade -y

# Installer Apache et PHP
RUN apt-get install -y apache2 php libapache2-mod-php

# Copier les fichiers de configuration Apache dans l'image
COPY ./apache2.conf /etc/apache2/apache2.conf
COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

# Exposer le port 80 pour accéder au serveur web
EXPOSE 80

# Démarrer le serveur Apache au lancement du conteneur
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]