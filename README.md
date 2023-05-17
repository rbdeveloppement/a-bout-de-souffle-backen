# a-bout-de-souffle-backend

**Description**: [API de la filmothèque]

## Configuration requise

    - PHP 8
    - GIT
    - Composer
    - MySQL
    - OpenSSL
    - TLS

### Configuration optionnelle

    - Symfony CLI
    - PHPMyAdmin
    - MySQL Workbench

## Installation et configuration

    Pour installer et configurer le projet, veuillez suivre les étapes suivantes :

    - `git clone https://github.com/INCUBATEUR-M2i-AFPA/a-bout-de-souffle-backend.git`
    ou
    - `git clone git@github.com:INCUBATEUR-M2i-AFPA/a-bout-de-souffle-backend.git`

    - `git switch dev`

    - `git pull origin dev`

    - `composer install`

    - Le projet a plusieurs fichiers de configuration, voir notamment le dossier config et ses sous-dossiers
        Ces fichiers de configuration viennent chercher des valeurs dans les fichiers de configuration.
        Nous pouvons notamment voir le fichier .env qui est disponible dès le clone du projet et qui est un
        template de ce que nous devons fournir. Veuillez lire les explications du fichier .env pour plus
        d'informations. Voici un exemple de configuration que l'on peut mettre dans un fichier d'environment local :

    - Connexion à la base de données:
        `DATABASE_URL="mysql://databaseUsername:password@localhost:portNumber/databaseName"`

    - Pour la suite, si vous n'avez pas installé Symfony CLI, vous pouvez remplacer `symfony` par `bin/console`

    - Création de la base de données :
        `symfony console doctrine:database:create`

    - Vérifier que le mapping est correct (vérifier que les Entity sont bien transformables en schéma de base de données par l'ORM )
        `symfony console doctrine:mapping:info`

    - Avec cette commande, nous voyons que l'Entity Product a une erreur, il est indiqué dans la console qu'il y a un problème avec la clé primaire. Il faudra le résoudre afin que l'ORM puisse créer le schéma de la base de données.

    ```
    [OK]   App\Entity\Order

    [OK] App\Entity\OrderDetails
    [FAIL] App\Entity\Product
    No identifier/primary key specified for Entity "App\Entity\Product". Every Entity must have an identifier/primary key.

    [OK] App\Entity\Promo
    [OK] App\Entity\Rate
    ```

    - Vérifier que la base de données est bien synchronisée avec le mapping des Entity:
        `symfony console doctrine:schema:validate`


    - `symfony console doctrine:schema:create`

    - Lancez la commande suivante afin de générer un fichier migration que l'on pourra utiliser pour créer les tables dans la base de données.
        Cela permet aussi de revenir en arrière et de rejouer une ou plusieurs migrations.
        `symfony console doctrine:migrations:dump-sql`

    - La commande suivante permet de mettre les données dans la base de données.
        `symfony console doctrine:fixtures:load`

    - Cette commande permet de générer les clés qui sont utilisés pour créer les tokens d'accés.
        `symfony console lexik:jwt:generate-keypair`

    - Etant donné que le projet est accesssible via HTTPS, il faut générer le certificat via cette commande:
        `symfony server:ca:install`

    - Pour lancer le projet, il faut faire:
        `symfony server:start`

[
Nous conseillons d'utiliser l'executable symfony afin de lancer les commandes nécessaires au bon fonctionnement du projet ainsi que pour lancer le serveur.
Pour la configuration, veuillez vous référer au fichier .env et au dossier config à la racine du projet.
]

## Utilisation

### Git Flow

Ce projet utilise Git Flow pour une gestion de branches simplifiée et structurée. Voici une brève explication de Git Flow et les principales étapes à suivre :

- `main` : branche principale pour les versions stables de votre projet
- `dev` : branche principale pour le développement de votre projet
- `feature/<numTicket>` : branche de fonctionnalité pour ajouter une nouvelle fonctionnalité
- `release/<nom>` : branche de préparation pour la prochaine version stable de votre projet
- `hotfix/<nom>` : branche de correction pour corriger une version stable de votre projet

### Étapes de Git Flow

#### Initialisation

Une fois que Git Flow est installé, vous pouvez initialiser Git Flow pour votre projet en vous positionnant dans le répertoire du projet et en exécutant la commande suivante :

`git flow init -d`

Si cela ne fonctionne pas, lancez `git flow init` et choisissez la branch dev en tant que branch de travail

Cette commande vous guidera à travers les étapes de configuration pour votre projet, y compris la définition des noms de vos branches principales et de vos branches de fonctionnalités, de version, de correction de bug, etc.

#### Ajout d'une nouvelle fonctionnalité

Pour ajouter une nouvelle fonctionnalité à votre projet, vous pouvez exécuter la commande suivante :

`git flow feature start <featureName>`

Cela créera automatiquement une nouvelle branche de fonctionnalité basée sur la branche `dev`. Une fois que vous avez terminé de travailler sur votre fonctionnalité, vous pouvez la fusionner dans la branche `develop` en exécutant la commande suivante :

`git flow feature finish <featureName>`

#### Préparation d'une nouvelle version

Pour préparer une nouvelle version stable de votre projet, vous pouvez exécuter la commande suivante :

`git flow release start <releaseName>`

Cela créera automatiquement une nouvelle branche de préparation basée sur la branche `dev`. Vous pouvez alors effectuer des modifications et des corrections mineures avant de fusionner la branche de préparation dans la branche `mein` et `dev` en exécutant les commandes suivantes :

`git flow release finish <releaseName>`
`git push --tags`

#### Correction d'une version stable

Si vous devez corriger une version stable de votre projet, vous pouvez exécuter la commande suivante pour créer une nouvelle branche de correction basée sur la branche `main` :

`git flow hotfix start <hotfixName>`

Une fois que vous avez terminé de corriger le bogue, vous pouvez fusionner la branche de correction dans la branche `main` et `dev` en exécutant les commandes suivantes :

`git flow hotfix finish <hotfixName>`
`git push --tags`

# a-bout-de-souffle-backend

initialisation du mailer:

pour mettre en place le mailer, utilisez la commande "composer require symfony/mailer " qui mettra en place les composant du mailer. 
Ensuite, créez le controller avec php bin/console make:controller  et appelez-le mailerControler (ou ici:"ContactController vu qu'il permet l'envoi d'un mail pour un formualaire de contact).
Pour le DSN, allez sur "Mailtrap.io" créez votre compte. 
Ensuite allez sur "Inboxes", puis "My iinbox".
sous "integrations", dans l'onglet "cURL" choisir le langage et framework que vous utilisés ici "PHP", "Symfony 5+", vous allez obtenir le DSN qu'il faudra copier.
Allez dans ".env" et décommantez 
  <!-- ###> symfony/mailer ###
     # MAILER_DSN=null://null
    ###< symfony/mailer ### -->
collez le "MAILER_DSN" copier sur mailtrap et collez le entre les deux "### symfony/mailer ###" (Ligne 158 ici).

Pour rappel ne JAMAIS mettre sur GIT le .env !!!!  
Dans ce cas, utilisez ".en.local" cela permmettra de faire les commits mais sans que vos données soient divulguées. (ici le dsn est sur un site de test, mais si vous mettez vos infos de boite mail perso, vous serez piraté.)
Dans le ".gitignore", ajoutez 
" /.env.local
/.env.local.php
/.env.*.local "
cela indique à GIT de ne pas publier les données.

**Description**: [Filmothèque API]

## System Requirements

[
To ensure the proper execution of the API, please make sure to have PHP version 8.* installed.
You will find configuration information in the .env file, as well as in the config folder.
]

## Installation

[We recommend using the Symfony executable to run the necessary commands for the proper functioning of the project as well as to launch the server.]

## Git Flow

This project uses Git Flow as its branching model. Git Flow provides a set of guidelines for how to manage Git branches in a structured and organized way. It defines specific branch names and rules for how and when to create, merge, and delete branches. The model consists of two main branches, "main" and "dev", and four supporting branches, "feature", "release", "hotfix", and "support".

### Installation

To use Git Flow with this project, you must first install it. For exempl in linux you can do this using the following command:

`sudo apt-get install git-flow`

### Branches

- `main`: This branch contains the production-ready code. It should always be stable and should only be updated with finished code that has been thoroughly tested.

- `dev`: This branch contains the latest development code. It is the main branch for ongoing development work and should always be stable, but may have less testing than the "main" branch.

- `feature`: Feature branches are used to develop new features for the project. They are created off the "dev" branch and should only contain changes related to that feature. When the feature is complete, it is merged back into the "dev" branch.

- `release`: Release branches are used to prepare a new production release. They are created off the "dev" branch and should only contain bug fixes, documentation, and other minor changes. When the release is ready, it is merged into both the "dev" and "main" branches.

- `hotfix`: Hotfix branches are used to quickly patch issues in the production code. They are created off the "main" branch and should only contain changes related to that fix. When the hotfix is complete, it is merged back into both the "dev" and "main" branches.

### Configuration and utilization

After installing Git Flow, you must configure it for this project. To do this, navigate to your project directory in the terminal and run the following command:

`git flow init -d`

If this doesn't works remove the -d options and choose the dev branch as the working branch

This will initialize Git Flow with the default branch names, "main" for the production branch and "dev" for the development branch.

After installing Git Flow, you must configure it for this project. To do this, navigate to your project directory in the terminal and run the following command:

`git flow feature start <feature-name>`

Once you have made the changes to your feature branch and it is ready to be merged back into the "dev" branch, run the following command:

`git flow feature finish <feature-name>`

This will merge your feature branch back into "dev" and delete the feature branch.

- `release`: To create a new release branch, run the following command:

`git flow release start <release-version>`

Once you have made the necessary changes to your release branch and it is ready to be merged into both "dev" and "main", run the following command:

`git flow release finish <release-version>`

This will merge your release branch into "dev" and "main", create a new tag for the release, and delete the release branch.

- `hotfix`: To create a new hotfix branch, run the following command:

`git flow hotfix start <hotfix-version>`

Once you have made the necessary changes to your hotfix branch and it is ready to be merged into both "dev" and "main", run the following command:

`git flow hotfix finish <hotfix-version>`

This will merge your hotfix branch into "dev" and "main", create a new tag for the hotfix, and delete the hotfix branch.
