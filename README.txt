Projet Boutique
===============


BDD
MP3
panier
backoffice
paiement (stripe)
session
mail
front
flux rss
newsletter

FRONT ---------- 
- accueil (promos, news)
1 - inscription : bootstrap - form
- connexion
- catalogue (liste de mp3)
- detail song
- contact
- checkout/paiement
- profil
- 404
-----------

BACK / Admin ------------
admin.php
admin/
CRUD (Create/INSERT Read/SELECT Update Delete) de toutes les entités gérées

-------------------------------
Schema de la BDD Boutique
- clients:
  nom, prenom, adresse, cp, ville, date_naissance, tel, created, newsletter

- albums :
titre, durée, année, pochette, prix

- chansons : titre, durée, année, qualité, prix

- artistes
nom

- categories
libelle

- commandes
total, numero_commande, created, statut

- users
login, password, email, created

- newsletters
titre, contenu, published