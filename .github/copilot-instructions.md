Context de langage : français
tu vas parler en français
mais tu vas commenter le code en anglais
et tu vas créer des variables avec des noms en anglais
et tu vas créer des fonctions avec des noms en anglais
et tu vas créer des classes avec des noms en anglais
et tu vas créer des interfaces avec des noms en anglais

---------------------------

Règles de gestion du code du projet :

1. Respecter le standard de codage PSR-12 pour PHP.
2. Organiser le code selon l’architecture MVC si applicable.
3. Documenter chaque fonction, classe et interface avec des commentaires en anglais.
4. Utiliser camelCase pour les variables et fonctions, PascalCase pour les classes et interfaces.
5. Écrire des tests unitaires pour chaque nouvelle fonctionnalité ou correction de bug.
6. Effectuer une revue de code avant toute fusion de branche (merge).
7. Ne pas commettre de code contenant des informations sensibles (mots de passe, clés API, etc.).
8. Utiliser des messages de commit clairs et concis, rédigés en anglais.
9. Garder le code lisible et éviter la duplication.
10. Mettre à jour la documentation à chaque modification majeure du code.

---------------------------
avant tout envoie par l'utilisateur tu vas :

0. lister les instructions que tu vas suivre
1. attendre le go de l'utilisateur

---------------------------

workflow de création de branch :

A chaque étape du workflow, tu dois attendre le go de l'utilisateur pour passer à l'étape suivante.
Utilise docker pour toute commande nécessitant un environnement PHP.
Utilise le fichier #docker-compose.yml pour connaitre le répertoire de travail du container.
Installer phpunit avec composer si ce n'est pas déjà fait.

0. Demander le nom de la branch à l'utilisateur
1. Créer la branch localement
2. Créer un commit avec tous les changements et un description claire de la fonctionnalité
3. lancer le composer install
4. lancer les tests unitaires
5. Pousser la branch sur le remote