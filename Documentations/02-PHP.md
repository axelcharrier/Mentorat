# Guide PHP pour Débutants - Les Bases

## Introduction à PHP

PHP est un langage de programmation côté serveur. Quand tu écris du PHP, tu travailles uniquement avec du code, sans interface visuelle pour le moment.

Pour tester du PHP, tu as besoin d'un serveur. La manière la plus simple est d'utiliser le serveur PHP intégré :

```bash
php -S localhost:8000
```

Crée un fichier `index.php` et accède à `http://localhost:8000` pour voir le résultat.

---

## 1. Les Variables

Une **variable** est un conteneur qui stocke une valeur.

### Déclarer une variable

En PHP, on déclare une variable avec le symbole `$` suivi du nom :

```php
$nom = "Alice";
$age = 25;
$prix = 19.99;
$actif = true;
```

### Types de données de base

```php
$texte = "Bonjour";           // String (chaîne de caractères)
$nombre_entier = 42;          // Integer (nombre entier)
$nombre_decimal = 3.14;       // Float (nombre décimal)
$booleen = true;              // Boolean (vrai ou faux)
$vide = null;                 // NULL (aucune valeur)
```

### Afficher une variable

```php
$message = "PHP c'est cool !";
echo $message;  // Affiche : PHP c'est cool !
```

`echo` envoie le contenu au navigateur.

### Concaténation (fusionner du texte)

```php
$prenom = "Jean";
$nom = "Dupont";

echo "Bonjour " . $prenom . " " . $nom;
// Affiche : Bonjour Jean Dupont
```

Le point `.` sert à joindre du texte.

### Interpolation (insérer une variable dans du texte)

```php
$age = 30;
echo "J'ai $age ans";  // Affiche : J'ai 30 ans
```

À l'intérieur de guillemets doubles, la variable est automatiquement remplacée par sa valeur.

---

## 2. Les Opérateurs Mathématiques

```php
$a = 10;
$b = 3;

$addition = $a + $b;      // 13
$soustraction = $a - $b;  // 7
$multiplication = $a * $b; // 30
$division = $a / $b;      // 3.333...
$modulo = $a % $b;        // 1 (le reste de 10 ÷ 3)
$puissance = 2 ** 3;      // 8 (2 puissance 3)
```

---

## 3. Les Conditions (if, else)

### Structure de base

```php
$age = 18;

if ($age >= 18) {
    echo "Tu es majeur";
}
```

### if... else

```php
$age = 15;

if ($age >= 18) {
    echo "Tu es majeur";
} else {
    echo "Tu es mineur";
}
```

### if... elseif... else

```php
$note = 75;

if ($note >= 90) {
    echo "Excellent";
} elseif ($note >= 70) {
    echo "Bon";
} elseif ($note >= 50) {
    echo "Moyen";
} else {
    echo "Mauvais";
}
```

### Les opérateurs de comparaison

```php
$x = 10;
$y = 20;

$x == $y;   // false (égal)
$x != $y;   // true (différent)
$x < $y;    // true (inférieur)
$x > $y;    // false (supérieur)
$x <= 10;   // true (inférieur ou égal)
$x >= 10;   // true (supérieur ou égal)
```

### Les opérateurs logiques

```php
$age = 25;
$permis = true;

// AND (et)
if ($age >= 18 && $permis == true) {
    echo "Tu peux conduire";
}

// OR (ou)
if ($age < 13 || $age > 60) {
    echo "Tu as une réduction";
}

// NOT (non)
if (!$permis) {
    echo "Tu n'as pas de permis";
}
```

---

## 4. Les Boucles

### Boucle for

La boucle `for` répète du code un nombre défini de fois.

```php
for ($i = 0; $i < 5; $i++) {
    echo "Itération " . $i . "\n";
}
```

Affiche :

```
Itération 0
Itération 1
Itération 2
Itération 3
Itération 4
```

**Explication :**

- `$i = 0` : on commence à 0
- `$i < 5` : on continue tant que i est inférieur à 5
- `$i++` : on augmente i de 1 à chaque itération

### Boucle while

La boucle `while` répète du code tant qu'une condition est vraie.

```php
$compteur = 0;

while ($compteur < 5) {
    echo "Compteur : " . $compteur . "\n";
    $compteur++;  // Important : augmenter, sinon boucle infinie
}
```

Affiche :

```
Compteur : 0
Compteur : 1
Compteur : 2
Compteur : 3
Compteur : 4
```

### Boucle foreach

La boucle `foreach` parcourt chaque élément d'une liste.

```php
$fruits = ["Pomme", "Banane", "Orange", "Raisin"];

foreach ($fruits as $fruit) {
    echo $fruit . "\n";
}
```

Affiche :

```
Pomme
Banane
Orange
Raisin
```

---

## 5. Les Tableaux (Arrays)

### Créer un tableau

```php
$couleurs = ["Rouge", "Vert", "Bleu"];
```

### Accéder à un élément

```php
$couleurs = ["Rouge", "Vert", "Bleu"];
echo $couleurs[0];  // Affiche : Rouge
echo $couleurs[1];  // Affiche : Vert
echo $couleurs[2];  // Affiche : Bleu
```

**Attention :** le comptage commence à 0, pas à 1 !

### Ajouter un élément

```php
$couleurs = ["Rouge", "Vert"];
$couleurs[] = "Bleu";  // Ajoute "Bleu" à la fin
```

### Tableau associatif

```php
$personne = [
    "nom" => "Dupont",
    "age" => 30,
    "ville" => "Paris"
];

echo $personne["nom"];   // Affiche : Dupont
echo $personne["age"];   // Affiche : 30
```

### Boucle sur un tableau associatif

```php
$personne = [
    "nom" => "Dupont",
    "age" => 30,
    "ville" => "Paris"
];

foreach ($personne as $cle => $valeur) {
    echo $cle . " : " . $valeur . "\n";
}
```

Affiche :

```
nom : Dupont
age : 30
ville : Paris
```

---

## 6. Les Fonctions

Une fonction est un bloc de code réutilisable.

### Déclarer une fonction

```php
function bonjour() {
    echo "Bonjour le monde !";
}

// Appeler la fonction
bonjour();  // Affiche : Bonjour le monde !
```

### Fonction avec paramètres

```php
function saluer($prenom) {
    echo "Bonjour " . $prenom . " !";
}

saluer("Alice");  // Affiche : Bonjour Alice !
saluer("Bob");    // Affiche : Bonjour Bob !
```

### Fonction avec plusieurs paramètres

```php
function additionner($a, $b) {
    return $a + $b;
}

$resultat = additionner(5, 3);
echo $resultat;  // Affiche : 8
```

### Fonction avec valeur de retour

```php
function estMajeur($age) {
    if ($age >= 18) {
        return true;
    } else {
        return false;
    }
}

if (estMajeur(20)) {
    echo "Tu es majeur";
}
```

### Fonction avec valeur par défaut

```php
function saluer($prenom = "visiteur") {
    echo "Bonjour " . $prenom;
}

saluer();            // Affiche : Bonjour visiteur
saluer("Marie");     // Affiche : Bonjour Marie
```

---

## 7. Exemple Pratique Complet

Voici un petit programme qui calcule le prix total d'articles :

```php
<?php
// Liste de prix
$articles = [
    "Livre" => 15,
    "Stylo" => 2.50,
    "Cahier" => 5,
    "Règle" => 1.50
];

// Afficher tous les articles
echo "=== LISTE DES ARTICLES ===\n";
foreach ($articles as $nom => $prix) {
    echo $nom . " : " . $prix . "€\n";
}

// Fonction pour calculer le total
function calculerTotal($articles) {
    $total = 0;
    
    foreach ($articles as $prix) {
        $total = $total + $prix;
    }
    
    return $total;
}

// Calculer et afficher le total
$montantTotal = calculerTotal($articles);
echo "\n=== TOTAL ===\n";
echo "Total : " . $montantTotal . "€\n";

// Appliquer une réduction de 10%
$reduction = $montantTotal * 0.10;
$prixFinal = $montantTotal - $reduction;

echo "Réduction (10%) : " . $reduction . "€\n";
echo "Prix final : " . $prixFinal . "€\n";
?>
```

Résultat :

```
=== LISTE DES ARTICLES ===
Livre : 15€
Stylo : 2.5€
Cahier : 5€
Règle : 1.5€

=== TOTAL ===
Total : 24€
Réduction (10%) : 2.4€
Prix final : 21.6€
```

---

## Conseils pour Débuter

1. **Teste tes codes** : Crée un fichier `.php` et exécute-le avec `php -S localhost:8000`
2. **Utilise `echo` ou `var_dump()`** : Pour voir ce que contient une variable
3. **Les erreurs sont tes amies** : Elles te montrent où corriger
4. **Pratique régulièrement** : Essaie de créer de petits programmes
5. **Respecte les majuscules/minuscules** : PHP est sensible à la casse pour les variables

---

## Résumé des Points Clés

|Concept|Exemple|
|---|---|
|Variable|`$nom = "Alice";`|
|Chaîne de caractères|`"Bonjour"` ou `'Bonjour'`|
|Nombre entier|`42`|
|Nombre décimal|`3.14`|
|Booléen|`true` ou `false`|
|if...else|`if (...) { } else { }`|
|Boucle for|`for ($i = 0; $i < 5; $i++)`|
|Boucle while|`while ($condition) { }`|
|Boucle foreach|`foreach ($tableau as $element)`|
|Tableau|`["element1", "element2"]`|
|Fonction|`function nom() { }`|

Bon courage dans ton apprentissage PHP ! 🚀