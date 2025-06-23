## Partie 2 : Plusieurs champs et validation simple

- Ajoute dans le formulaire :
  - un champ texte `nom` (`name="nom"`)
  - un champ nombre `age` (`name="age"`)
- En PHP, vérifie que les 3 champs (`prenom`, `nom`, `age`) existent avant d’afficher un message complet :
  > Bonjour [prenom] [nom], vous avez [age] ans.
- Si un champ est manquant, affiche un message d’erreur clair.

💡 **Concepts utilisés** :  
`isset()`, conditions `if`, formulaire à plusieurs champs.

---

# 🧪 TP PHP — Formulaires POST Avancés

## 🧩 Partie 1 : Formulaire de couleur favorite avec changement de fond

### 🎯 Objectif :

Afficher un message personnalisé **et** changer dynamiquement la **couleur de fond** de la page selon le choix de
l’utilisateur.

### 🔧 Instructions :

Crée un fichier `formulaire-couleur.php`.

#### 👨‍🎨 Formulaire HTML

Dans ce fichier, ajoute un formulaire contenant :

- Un champ texte :
  ```html
  <input type="text" name="prenom" placeholder="Votre prénom">
  ```
- Une liste déroulante (`select`) pour choisir une couleur favorite :
  ```html
  <select name="couleur">
    <option value="white">Blanc</option>
    <option value="lightblue">Bleu clair</option>
    <option value="lightgreen">Vert clair</option>
    <option value="lightpink">Rose clair</option>
    <option value="beige">Beige</option>
  </select>
  ```
- Un bouton de soumission :
  ```html
  <button type="submit">Valider</button>
  ```

#### 🧠 Partie PHP

- Vérifie que `$_POST['prenom']` et `$_POST['couleur']` existent avec `isset()`.
- Si oui :
  - Sécurise l’affichage avec `htmlspecialchars`.
  - Affiche :
    > Bonjour, [prenom] !  
    > Ta couleur préférée est [couleur].

  - Change dynamiquement la couleur de fond de la page selon le choix de l’utilisateur (
    `<body style="background-color: ...">`).

- Sinon :
  - Affiche un message d’accueil générique, comme :
    > Bienvenue ! Choisis ta couleur préférée.

---

### 💡 Concepts travaillés :

- Formulaire HTML POST
- `select` / listes déroulantes
- `$_POST`
- `isset()`, `htmlspecialchars()`
- Intégration PHP/HTML (modifier dynamiquement le `style` du `<body>`)

# 🧪 TP PHP — Formulaires POST Avancés

## 🧩 Partie 2 : Formulaire d’inscription avec préférences et règles

### 🎯 Objectif :

Créer un formulaire d’inscription plus complet avec des champs de types différents, vérifier les données reçues et
afficher un résumé personnalisé.

---

### 🔧 Instructions :

Dans un fichier `inscription.php`, crée un formulaire contenant les champs suivants :

#### 📝 Champs à inclure :

- **Nom complet** (champ texte)
  > Un champ texte simple pour écrire son nom.

- **Genre** (boutons radio)
  > Trois boutons radio : Femme, Homme, Autre.

- **Langages de programmation préférés** (checkbox multiples)
  > Une liste de cases à cocher : PHP, JavaScript, Python, C#.

- **Une courte biographie** (textarea)
  > Une zone de texte multi-lignes pour écrire quelques phrases.

- **Bouton de soumission**
  > Un bouton pour envoyer le formulaire.

---

### 🧠 Traitement en PHP :

1. Vérifie que les champs essentiels sont remplis : `nom`, `genre`, `langages[]`, `bio`.
2. Si un champ est vide, affiche un message d’erreur clair.
3. Si tout est OK :
  - Sécurise les données avec `htmlspecialchars()`.
  - Affiche un message du type :

   > Bonjour [nom] !  
   > Vous êtes [genre] et vous aimez coder en : [PHP, Python, etc.].  
   > Voici ce que vous avez écrit à propos de vous :  
   > *"[bio]"*

---

### 💡 Concepts travaillés :

- Champs `radio` (choix unique)
- Champs `checkbox` (choix multiples dans un tableau)
- `textarea` (zone de texte multi-lignes)
- Validation de champs obligatoires
- `htmlspecialchars()` pour sécuriser les affichages
- Parcours d’un tableau (`$_POST['langages']`)



# TP Partie 3 : Recherche d’informations pays avec une API externe

## Objectif

- Créer un formulaire HTML simple avec un champ texte pour saisir le nom d’un pays.
- Envoyer ce formulaire en POST vers un script PHP qui va traiter la recherche.
- Dans le script PHP, récupérer la valeur envoyée, construire une requête vers l’API Rest Countries, récupérer la réponse JSON.
- Décoder le JSON et afficher des informations essentielles sur le pays (nom officiel, capitale, population, région, drapeau).
- Gérer les erreurs (champ vide, pays non trouvé, problème de connexion).
- Sécuriser les données affichées avec `htmlspecialchars()`.

---

## Preview du formulaire HTML (dans un fichier `form-country.php`)

Le formulaire doit contenir :
- Un champ texte nommé `country` pour saisir le nom du pays
- Un bouton de soumission

---

## Consignes pour le traitement (`form-treatment.php`)

1. Vérifier que la donnée `country` est bien reçue en POST et non vide.
2. Nettoyer la donnée reçue avec `trim()`.
3. Construire l’URL d’API pour rechercher le pays :  
   `https://restcountries.com/v3.1/name/[country]?fullText=true`
4. Faire la requête HTTP GET avec `file_get_contents()` (ou `curl` si vous préférez).
5. Décoder la réponse JSON avec `json_decode()`.
6. Vérifier que la réponse contient au moins un pays valide.
7. Afficher ces informations du pays :
  - Nom officiel
  - Capitale
  - Population
  - Région
  - Drapeau (affiché en image HTML)
8. Sécuriser toutes les données affichées avec `htmlspecialchars()` pour éviter toute injection HTML.
9. Gérer les erreurs en affichant un message clair si :
  - Le champ est vide
  - Le pays n’est pas trouvé
  - La requête a échoué

---

## Exemple d’affichage attendu en cas de succès

Nom officiel : République française  
Capitale : Paris  
Population : 67 000 000  
Région : Europe  
Drapeau : (image)

---

## Concepts clés abordés

- Manipulation des données POST en PHP
- Validation et nettoyage des données utilisateur
- Appel d’API externe via HTTP
- Traitement de données JSON en PHP
- Affichage dynamique et sécurisé des données
- Gestion d’erreurs et retours utilisateurs clairs

---

## Bonus

- Permettre la recherche même si le pays est mal capitalisé (ex : "france", "FRANCE", "FraNce")
- Afficher plusieurs résultats si l’API retourne plusieurs pays (ex : recherche sur "United" donne USA, United Kingdom…)

---


# ------ LAST TP ---------
## Exercice : Upload et stockage de fichiers en PHP

Votre mission est de réaliser un système simple pour envoyer (uploader) un fichier depuis un formulaire HTML vers votre serveur PHP. (prenez votre temps c'est difficile)

### Objectifs à atteindre :

- Avec vos propres recherches, découvrez comment envoyer un fichier via un formulaire HTML et le stocker sur votre serveur (dans le même dossier que votre `index.php`).
- Acceptez uniquement les fichiers au format **JPEG** (`.jpg`) et **PNG** (`.png`).
- Pour éviter les conflits, donnez un **nom unique** à chaque fichier enregistré, par exemple en utilisant la fonction PHP `uniqid()`.
- indice quand même : ce sera un formulaire en POST et vous aurez besoin de la superglobale PHP : `$_FILES`

---

L’idée est que vous compreniez comment gérer un upload sécurisé et éviter d’écraser un fichier existant.

N’hésitez pas à tester plusieurs fichiers et à bien vérifier les types acceptés !