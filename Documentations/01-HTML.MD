
> [!NOTE]
> HTML est un **langage de description** (HyperText Markup Language), pas de programmation. Il ne contient ni boucles, ni conditions, ni variables — uniquement des **balises** qui décrivent la structure et le contenu d'une page web.

---

## Structure d'une balise

Une balise HTML s'écrit en paires : une balise ouvrante et une balise fermante.

```html
<nom-balise> contenu </nom-balise>
```

Certaines balises sont **auto-fermantes** (pas de contenu) :

```html
<br>                        <!-- saut de ligne -->
<img src="image.png">       <!-- image -->
<input type="text">         <!-- champ de saisie -->
```

---

## Les balises essentielles

|Balise|Rôle|Exemple|
|---|---|---|
|`<p>`|Paragraphe de texte|`<p>Mon texte</p>`|
|`<a>`|Lien cliquable|`<a href="url">Texte</a>`|
|`<ul>` / `<li>`|Liste à puces|`<ul><li>Élément</li></ul>`|
|`<ol>` / `<li>`|Liste numérotée|`<ol><li>Étape 1</li></ol>`|
|`<h1>` … `<h6>`|Titres (h1 = grand, h6 = petit)|`<h1>Titre principal</h1>`|
|`<img>`|Afficher une image|`<img src="photo.jpg" alt="...">`|
|`<div>`|Conteneur bloc générique|`<div>...</div>`|
|`<span>`|Conteneur en ligne générique|`<span>mot</span>`|
|`<strong>`|Texte en gras (important)|`<strong>important</strong>`|
|`<em>`|Texte en italique (emphase)|`<em>accentué</em>`|
|`<br>`|Saut de ligne|`Ligne 1<br>Ligne 2`|

---

## Les attributs

Les attributs précisent le comportement d'une balise. Ils s'écrivent dans la balise ouvrante sous la forme `attribut="valeur"`.

**Lien — `<a>`**

```html
<a href="https://google.fr" target="_blank">
  Visiter Google
</a>
```

> `href` = l'URL de destination · `target="_blank"` = ouvrir dans un nouvel onglet

**Image — `<img>`**

```html
<img src="chat.jpg" alt="Un chat roux" width="200">
```

> `src` = chemin du fichier · `alt` = description (accessibilité) · `width` = largeur en pixels

---

## Les listes

**Liste à puces (`<ul>`)**

```html
<ul>
  <li>HTML</li>
  <li>CSS</li>
  <li>JavaScript</li>
</ul>
```

**Liste numérotée (`<ol>`)**

```html
<ol>
  <li>Ouvrir l'éditeur</li>
  <li>Écrire le code</li>
  <li>Sauvegarder</li>
</ol>
```

---

## Structure d'une page complète

Toute page HTML commence par ce squelette de base :

```html
<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <title>Ma première page</title>
  </head>

  <body>
    <h1>Bonjour le monde !</h1>
    <p>Mon premier paragraphe.</p>
  </body>

</html>
```

- **`<head>`** — métadonnées invisibles pour l'utilisateur (titre de l'onglet, liens vers CSS, polices…)
- **`<body>`** — tout ce qui s'affiche dans le navigateur (textes, images, liens, formulaires…)

---

## Les formulaires

Les formulaires permettent de collecter des données saisies par l'utilisateur.

```html
<form action="/envoyer">

  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="prenom">

  <label for="email">Email :</label>
  <input type="email" id="email">

  <button type="submit">Envoyer</button>

</form>
```

Les types d'input courants : `text`, `email`, `password`, `number`, `checkbox`, `radio`, `date`, `file`.

---

## Les commentaires

Un commentaire est ignoré par le navigateur — il sert à annoter le code pour les développeurs.

```html
<!-- Ceci est un commentaire, non affiché -->
<p>Ce texte est visible.</p>
<!-- <p>Ce paragraphe est désactivé.</p> -->
```

---

# Exercice

> [!NOTE]
> Génère un fichier `index.html` afin de créer ton CV, utilise les balises de titres, de paragraphe, importe aussi une photo (même si c'est pas toi). utilise une liste non numéroté pour citer tes compétences.
> 
> Pour ouvrir le fichier HTML tu as juste a aller le chercher dans ton explorateur de fichier et l'ouvrir avec un navigateur
> 
> Une fois que tu as fini, copie colle ces lignes dans ton terminal pour que je puisse facilement voir ce que tu as fais ;)

``` bash
# Uniquement pour la première fois :
cd tonFichier 
git init
git remote add origin https://github.com/axelcharrier/Mentorat.git
git pull origin
git branch -M main

# et ensuite pour chaque rendu tu te met dans le répertoire Code et tu créer un dossier à chaque fois que tu change d'exercice.
mkdir nouveauDossier
cd nouveauDossier

# Une fois que tu as finis de dev tu me l'envoi avec ces commandes
git add . 
git commit -m "ce que tu as fais"
git push -u origin main

