Application Bancaire – Gestion des Comptes et Opérations

Ce dépôt contient une application bancaire développée en POO. 
L'application permet d'afficher les informations sur les bénéficiaires et leurs comptes bancaires, ainsi que de réaliser diverses opérations telles que les virements, les approvisionnements et les débits.

Objectifs

Gestion des entités bancaires : Manipuler des objets représentant les bénéficiaires et leurs comptes.

Opérations bancaires : Mettre en place des fonctionnalités pour réaliser des virements entre comptes, des approvisionnements et des débits.

Approche orientée objet : Utiliser les concepts de la POO pour structurer le code (classes, héritage, encapsulation, etc.).

Fonctionnalités

Affichage des bénéficiaires :

Visualisation des informations personnelles des bénéficiaires.

Affichage détaillé de leurs comptes bancaires ( solde, type de compte, etc.).

Opérations sur les comptes :

Virement : Transférer des fonds d'un compte à un autre.

Approvisionnement : Ajouter des fonds à un compte.

Débit : Retirer des fonds d'un compte.

Messages d'erreur et de réussite :

Affichage de messages pour indiquer le succès ou l'échec d'une opération (fonds insuffisants, opération réussie, etc.).

Mise à jour en temps réel du nombre de transactions ou du solde des comptes.


Structure du Dépôt
index.php : Point d'entrée de l'application affichant la liste des bénéficiaires et leurs comptes.

Beneficiaire.php : Classe représentant un bénéficiaire.

CompteBancaire.php : Classe représentant un compte bancaire.
