# GTH3

### Intro

GTH3 Permet d'organiser et de participer à des courses sur Gran Turismo 7
Le projet est une application web en PHP, avec Symfony et MySQL pour gérer les utilisateurs et l'organisation des courses.

### Symfony :
Symfony fournit des fonctionnalités qui offre un gain de temps pour créer un site. On utilse des bundles tels que Security-Bundle, qui va être utiliser pour gérer l'inscription, la connexion des utilisateurs et leurs rôles.

### MySQL :
On utilise MySQL pour gérer les utilisateurs, les courses qui arrivent, et aussi un histoirique des anciennes courses.
A l'avenir, le joueur pourra voir ses statistques, son nombre de victoires, de poles position, de meilleurs temps au tour etc...

![image](https://github.com/Tahyme/GTH3/assets/68480140/3355737e-b803-4f25-a8b8-422c7666dd59)


### Docker :
Deux Dockerfile sont utilisés, un pour symfony (gth3) et l'autre pour la base de données (mysql-gth3).
Docker permet d'orchestrer les conteneurs pour ainsi permette une configuration et un deploiement plus facile.
