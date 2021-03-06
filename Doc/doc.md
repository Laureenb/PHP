# PHP

[Doc M-A](https://github.com/bouchat-marieange/PHP/blob/master/Documents%20MD/memento_PHP.md)

# Mémento PHP

PHP = Hypertext Preprocessor

C'est un logiciel backend (coté serveur web) à l'inverse du frontend qui se déroule coté client (dans son navigateur)

PHP permet au serveur web de calculer et de manipuler des informations avant de les retourner au Client via son navigateur. Les informations sont retournées le plus souvent en HTML, XML, JSON, texte simple, CSS, javascript, ...)

## Pourquoi utiliser PHP

PHP permet de créer des pages de manière dynamique plutôt que statique.

Cela permet par exemple de créer une seule page html qui générera un texte d'accueil de type 

"Bonjour Nom de ton visiteur !" sans devoir créer une page différentes pour chacun des visiteurs.

Grâce à la création d'un seul fichier (script php) à qui on envoie le nom de l'humain via l'adresse url (méthode GET) , le message d'acceuil sera créer dynamiquement.

````php
<html>
<head>...</head>
<body><h1>Bonjour <?php echo $_GET['nom']; ?>!</h1></body>
</html>
````

## Installation serveurs en local

Quand on développe, non ne travaille pas directement sur le serveur hébergeant le site ou l'application, on travaille d'abord en local (sur sont propre ordinateur) pour développer et on évite ainsi toutes erreurs qui pourrait rendre inaccessible le site stocké sur le serveur.

Cela permet également de pouvoir travailler sans connexion internet. C'est ce qu'on appelle un environnement de développement local ou simplement un serveur de développement. Le serveur final est appelé serveur de production. C'est le serveur de production qui est accessible à tout le monde. Il peut également arriver de travailler dans un environnement de staging présentant du code à faire valider avant sa mise en production.

La première étape pour travailler en PHP sur son ordinateur est donc d'installer un serveur de développement local. Pour cela suivre la procédure suivante:

## Installer Apache et MySQL

Taper dans la racine de la console

**sudo apt install apache2 php mysql-server libapache2-mod-php php-mysql**


## Installer xampp sur ubuntu

* Télécharger Xampp à l'adresse suivantes

https://www.apachefriends.org/fr/download.html

* Choisir Xampp pour Linux et choisir la version la plus récente de PHP. Actuellement 7.1.1./ PHP 7.1.10 (64 bits) 137 Mb

* Un fois le téléchargement terminé, aller dans le dossier download de votre ordinateur et faire clic droit "Open in terminal"

* Dans la console ouverte dans Download taper la commande suivante: 

**sudo chmod 755 xampp-linux-*-installer.run**

* L'installation de Xampp démarre, cliquer sur les boutons "Next" jusqu'à la fin de l'installation.

* XAMPP est maintenant installé dans le répertoire /opt/lampp 

## Comment lancer l'application lampp 

Dans la console taper:

**sudo /opt/lampp/lampp start**


## Pour donner l'accès en écriture au dossier html, et éviter le message permission denied, il faut suivre le chemin suivant:

Cd / --> cd var --> cd www --> sudo Chmod 777 html

* Dans la console
**
user@nb25:/var/www$ sudo chmod 777 html**


* Aller ensuite avec l'explorateur de fichier de l'ordi dans le dossier var/www/html

* Créer un fichier index.php

* L'ouvrir dans Atom et inscrire à l'intérieur le code suivant:

````php
<?php
  echo "bonjour";
?>
````

* Enregistrer le fichier index.php

*Aller dans le navigateur (Chrome ou firefox) et taper dans la barre d'adresse **localhost**

Si la page affiche bonjour c'est ok tout fonctionne.

* Maintenant que le test à fonctionner, vous pouvez supprimer le fichier index.html placer directement dans html et créer un nouveau dossier à cet endroit appelé PHP pour y réaliser les exercices. C'est ce dossier qui devra être créer et mis en ligne sur GitHub. Donc commencer par le créer sur GitHub puis ensuite cloner le dans le dossier html.

## Pour créer et ouvrir un nouveau projet

* Dans le dossier html, créer un nouveau sous-dossier PHP qui contiendra nos exercices. C'est ce dossier qui devra être mis sur github. C'est à cet endroit que l'on créera nos différents fichiers d'exercices.

* Pour afficher nos exercices, aller sur notre navigateur et taper dans la barre d'adresse localhost/PHP ou localhost/mon_dossier_exercice.

* Astuce:  lorsque l'on tape seulement localhost dans la barre d'adresse, la liste des sous-dossiers se situant dans html apparait et on peut selectionner le dossier contenant nos exercices.

## Lorsque qu'un fichier apparait vérouillé en écriture et renvoie une erreur de permission, il faut le chmoder via la console. 

* Se rendre dans le dossier ou se trouve le fichier vérouiller (il apparait avec un cadena sur son icone)
* Ouvrir la console avec clic droit "Open in Terminal" dans le dossier où se trouve le fichier problèmatique.
* Dans la console taper sudo chmod 777 nom_du_fichier.php:
**user@nb25:/var/www/html/PHP$ sudo chmod 777 index.php**

**********************************************************************************************

## Introduction, Variables et Conditions

Programmer = manipuler de l'information

````php
$nom_de_la_variable = 'Valeur de la variable';
$president_usa = 'Donald Trump';
$annee_naissance = 1973; 
$is_raining = false;
$team_players = array('john','Jeanne','Julien');
````

### Premier script php

1. Lance ton serveur local

2. Dans ton dossier de travail servi par PHP, crée un dossier "variable" et crée à l'intérieur un fichier humans.php contenant le code suivant:

````php
<html>
  <head><title>Hi!</title></head>
  <body>
    <h1>Bonjour <?php echo $_GET['nom']; ?>!</h1>
  </body>
</html>
````

3. Une fois cette opération faite et le fichier enregistrer va visiter les adresses suivantes

*http://localhost/PHP/variable/humans.php?nom=Alexandre
*http://localhost/PHP/variable/humans.php?nom=Pierre
*http://localhost/PHP/variable/humans.php?nom=Jennifer

4. La page affiche le nom de la personne qui a été transmise par la méthode GEt dans l'url de la page dans la parite suivant l'adresse de celle-ci ?nom=Alexandre, ?nom=Pierre, etc...

5. Le code de la page est principalement composé de html  avec une petit bout de code en php. Le code php est délimité par les balises 

**<?php** ----votre code ici------ **?>**

Examinons le bout de code PHP

````php
 <?php echo $_GET['nom']; ?>!
````

* $_GET est une variable.
* en PHP, une variable commence toujours par le sigle $
* echo est une fonction fournie par PHP, qui sert à afficher quelque chose (ce qui est à droite de la fonction).
* la ligne se termine par ;

### Les variables (première sutructure logique)

Les variables nous permettent de retenir temporairement des informations en mémoire. Grâce à elle, nous allons par exemple pouvoir retenir le pseud d'un visiteur ou effectuer des calculs etc...

Une variable est donc une petite information stockée en mémoire temporairement. Elle n'a pas une grande durée de vie. En PHP, la variable ou plutôt l'information qu'elle contient n'existe que durant le temps que la page est en cours de génération. Dès que la page PHP est générée, toutes les variables sont supprimées de la mémoire car elles ne servent plus à rien. Ce n'est donc pas un fichier qui reste stocké sur le disque dur, mais une petite information temporaire présente dans la mémoire vive.

On peut donc créer des variables quand on a besoins de retenir des informations.

#### Un nom et une valeur

Une variable est toujours constituée de deux éléments:

* son **nom** : pour pouvoir la reconnaître, vous devez donner un nom à votre variable.
 
Par exemple: $age_du_visiteur;

* sa **valeur* :  c'est l'information qu'elle contient, et qui peut changer. 

Par exemple: 17

Si on considère que $age_du_visiteur = 17;

la variable age_du_visiteur à une valeur de 17. On peut modifier cette valeur quand on veut. On peut également faire des opérations dessus, etc...

Quand on a besoin de la variable, on l'appelle (par son nom) et elle nous renvoie la valeur qu'elle contient.

#### Différents types de variables

On peut stocker toutes sortes de choses très différentes dans les variables: age, prix, quantité de produit, du texte (ex: prénom, nom d'une pizza, modèle d'une chaussure,...)

Il existe différentes types de variables que l'on choisi en fonction de ce que l'on  a besoin dans notre script et de la nature des informations à traiter.

Voici les principaux types de variables/

**Les chaînes de caractères (string)**

c'est du texte. Tout texte est appelé chaîne de caractères. En PHP ce type de données est appelée string.On peut stocker des textes courts ou très long au besoin.
Une chaîne de caractère doit être écrite entre guillemets ou entre apostrophes (guillemets simples).

**Les nombres entiers (int)**

Ce sont les nombres du type 1.2.3, 4,45, etc... On compte aussi les parmi eux les entiers relatifs: -1.-2, -3, ... En PHP on les appelle integer.

**Les nombres décimaux (float)**

Ce sont les nombre à virgule, comme 14.738. Attention, les nombres doivent être écrits avec un point au lieu de la virgule (notation anglaise)

**Les booléens (bool)**

C'est un type de variable qui permet de stocker soit vrai(true) soit faux(false). On les utilise très fréquemment. 

**Rien (NULL)**

On a parfois besoin de dire qu'une variable ne contient rien. Rien du tout. On indique alors que sa valeur est NULL. Ce n'est pas vraiment un type de données mais plutôt un absence de type.

**Les tableaux (Array)**

Les tableaux permettent de contenir un ensemble de valeurs, que l'on peut retrouver grâce à un clef unique. C'est une structure logique très puissante mais qui nécessite un chapitre en soi.

Exemple:

````php
$classe= array(0 => 'Cindy', 1 => 'Jean', 2 => 'Mustapha', 3 => 'Pierre', 4 => '', 5=>'Eric'); 
````
Ce tableau contient 6 éléments. Chaque élément a une clef (le chiffre) et uen valeur (la partie à droit du signe =>)


#### Définir une variable

Voici comment initialiser une nouvelle variable:

````php
$age_du_visiteur = 17;
````
*************************************************************************************************

## Les conditions

Dans la vie de tout les jours, nous avons appris à penser les évènements qui nous entoure sous forme d'hypothèse. Si telle condition est respespectée alors nous feront ceci , si ce n'est pas le cas alors nous feront cela. 

En programmation, on appelle ces hypothèses des conditions. La forme la plus utilisée est le if/else

````php
if( condition ) {
   // code à n'exécuter que si la condition est TRUE
  echo "La condition est vraie.";
 } else {
   // code à n'exécuter que si la condition est FALSE
   echo "La condition est fausse.";
 }
````

Pour exprimer tes conditons, tu as à ta disposition plusieurs types d'opérateurs

== : égal à
!= : différent de
> : plus grand que 
< : plus petit que
>= : plus grand ou égal à 
>= : plus petit ou égal à 

Voici un exemple concret avec les vêtements à porter selon la météo (la température)

````php
if( $temperature > 21 ) {
  // code à exécuter si la condition est TRUE
  $vetement_du_jour = "T-shirt";
 } else {
   // code à exécuter si la condition est FALSE
   $vetement_du_jour = "Pull-over";
 }
````

### Combiner des conditions

#### Condition 1 ET/OU condition 2

On peut vérifier des conditions mutliples (plusieurs conditions combinées) , en utilisant les mots-clef AND (et) ou OR (ou)

Exemeple:

````php
if ( $age <= 12 AND $langue == "français" )
````

### Conditions hiérarchiques

On peut également imbriquer des conditions les unes dans les autres. Attention à bien placer les accolades.


**Astuce:** Utilise l'indentation du code pour t'aider à t'y retrouver visuelement.

````php
if ($genre == 'femme'){

	// Ici, du code à exécuter si le genre est "femme"

	if ( $age <= 12 and $langue == "français" ) {
		// Ici, du code à exécuter si le genre est "femme",  que l'âge est inférieur à 13 et que la langue est "français"
		...
	} else{
		// Ici, du code à exécuter si le genre est "femme",  et que l'âge est supérieur à 13 ou que la langue n'est pas "français"
		...
	}

} else {
	// Ici, du code à exécuter si le genre n'est pas "femme"

	if ( $age <= 12 and $langue == "français" ) {
		// Ici, du code à exécuter si le genre n'est pas "femme", que l'âge est inférieur à 13 et que la langue est "français"
		...
	}
}
````


### La structure "Switch"

Dans le switch, on indique qu début sur quelle variable on travaille. On dit à PHP par exemple, je vais tester la variable $note. Ensuite on va utiliser des **case** pour comparer la valeur de la variable avec différentes valeurs présentent dans chaque case (exemple : case 0, case 10), ce qui peut se traduire par si la valeur == 0, si la valeur == 10, etc ...

**Avantages : **On na plus besoin de mettre le double égal.
**Défaut : **Ca ne marche pas avec les autres symboles (< > <= >= !=). Le switch ne peut tester que l'égalité.

#### Version if/else

````php
<?php
if ($i == 0) {
    echo "i égal 0";
} elseif ($i == 1) {
    echo "i égal 1";
} elseif ($i == 2) {
    echo "i égal 2";
}
?>
````


#### Version switch

````php
<?php
switch ($i) {
    case 0:
        echo "i égal 0";
        break;
    case 1:
        echo "i égal 1";
        break;
    case 2:
        echo "i égal 2";
        break;
}
?>
````


**Un autre exemple avec une chaîne de caractère**

````php
<?php
switch ($i) {
    case "apple":
        echo "i est une pomme";
        break;
    case "bar":
        echo "i est une barre";
        break;
    case "cake":
        echo "i est un gateau";
        break;
}
?>
````

**Très important:** 

L'instruction switch exécute chacune des clauses dans l'ordre. L'instruction switch est exécutée ligne par ligne. Au début, aucun code n'est exécuté. Seulement lorqu'un case est vérifié, PHP exécute alors les instructions correspondantes.PHP continue d'exécuter les instructions jusqu'à la fin du bloc d'instruction du switch, ou bien dès qu'il trouve l'instruction break.Si vous ne pouvez pas utiliser l'instruction break à la fin de l'instruction case, PHP continuera à exécuter toutes les instructions qui suivents.

Par exemple:

````php
<?php
switch ($i) {
    case 0:
        echo "i égal 0";
    case 1:
        echo "i égal 1";
    case 2:
        echo "i égal 2";
}
?>
````
Dans cet exemple, si $i est égal à 0, PHP va exécuter quand même toutes les instructions qui suivent! Si $i est égal à 1, PHP exécutera les deux dernières instructions. Et seulement si $i est égal à 2, vous obtiendrez le résultat escompté, c'est-à-dire, l'affichage de "i égal 2". Donc, l'important est de ne pas oublier l'instruction break (même s'il est possible que vous l'omettiez dans certaines circonstances).


Dans une commande switch, une condition n'est évaluée qu'une fois, et le résultat est comparé à chaque case. Dans une structure elseif, les conditions sont évaluées à chaque comparaison. Si votre condition est plus compliquée qu'une simple comparaison, ou bien fait partie d'une boucle, switch sera plus rapide.

La liste de commandes d'un case peut être vide, auquel cas PHP utilisera la liste de commandes du cas suivant.


````php
<?php
switch ($i) {
case 0:
case 1:
case 2:
    echo "i est plus petit que 3 mais n'est pas négatif";
    break;
case 3:
    echo "i égal 3";
}
?>
````


Un cas spécial est default. Ce cas est utilisé lorsque tous les autres cas ont échoué. Par exemple :

````php
<?php
switch ($i) {
    case 0:
        echo "i égal 0";
        break;
    case 1:
        echo "i égal 1";
        break;
    case 2:
        echo "i égal 2";
        break;
    default:
       echo "i n'est ni égal à 2, ni à 1, ni à 0.";
}
?>
````

Une autre chose à mentionner est que la valeur du case peut être toute expression de type scalaire, c'est-à-dire nombre entier, nombre à virgule flottante et chaîne de caractères. Les tableaux sont sans intérêt dans ce contexte-là.

Syntaxe alternative avec endswitch

````php
<?php
switch ($i):
    case 0:
        echo "i égal 0";
        break;
    case 1:
        echo "i égal 1";
        break;
    case 2:
        echo "i égal 2";
        break;
    default:
        echo "i n'est ni égal à 2, ni à 1, ni à 0";
endswitch;
?>
````

Il est possible d'utiliser un point-virgule plutôt que deux points après un case, comme ceci :

````php
<?php
switch($beer)
{
    case 'leffe';
    case 'grimbergen';
    case 'guinness';
        echo 'Bon choix';
    break;
    default;
        echo 'Merci de faire un choix...';
    break;
}
?>
````

## Structure "ternaire"

La structure ternaire est une manière rapide de déterminer la valeur d'une variable en fonction d'une condition.


**Exemple d'écriture avec une structure ternaire**

````php
$age = 24;
$majeur = ($age >= 18) ? true : false;

````


**Ce qui revient à écrire de manière traditionnelle**

````php
<?php
$age = 24;
if ($age >= 18)
{

	$majeur = true;

} else {

	$majeur = false;
}

````

### Autre manière d'expliquer l'opérateur ternaire pour pour mieux comprendre

**Exemple d'utilisation pour l'opérateur ternaire**

<?php
 $action = (empty($_POST['action'])) ? 'défaut' : $_POST['action'];
?>
````

**La ligne ci-dessus est identique à la condition suivante :**

<?php
 if (empty($_POST['action'])) {
     $action = 'défaut';
 } else {
     $action = $_POST['action'];
 }
?>

````

L'expression (expr1) ? (expr2) : (expr3) est évaluée à expr2 si expr1 est évalué à TRUE ,
et expr3 si expr1 est évalué à FALSE .

**Note**

Notez que l'opérateur ternaire est une instruction,
et il n'est pas évalué en tant que variable, mais en tant que résultat de l'instruction.
Il est important de savoir si vous voulez retourner une variable par référence.
L'instruction return $var == 42 ? $a : $b; dans une fonction retournée par référencene
fonctionnera donc pas et une alerte est émise dans les versions supérieures de PHP.


**Attention :** Il est recommandé de ne pas "empiler" les expressions ternaires.
Le comportement de PHP lors de l'utilisation de plus d'un opérateur ternaire
dans une seule instruction n'est pas évident


## Bonne pratique : Le PHP avant HTML

On peut mélanger du html et du php dans un fichier .php. 

Cela étant, il vaut mieux mettre le plus possible de code PHP AVANT de commencer à faire du html, càd, de retourner la réponse du serveur au navigateur.

## Validation d'un champ de formulaire

Quand on construit un script qui doit traiter un formulaire, on doit effectuer une serie de vérifications pour éviter les erreur humaine (entrer chiffre au lieu de chaine de caractère dans un champ se formulaire, ...) ou tentative de hacking (essai par l'utilisateur d'entrer volontairement des balise de code html ou javascript dans le champ du formulaire) on remplace alors automatiquement les caractère du type < > = ! etc... par des caractères qui ne seront pas interpreter comme du code mais comme une chaine de caractère.C'est ce qu'on appelle une protection contre la faille XSS. 

Ce texte entré par l'utilisateur dans un champ du formulaire 

<strong>Texte en gras</strong>

sera alors automatiquement nettoyée et remplacée par du (x)HTML qui n'est pas dangereux

&#60;strong&#62;gras&#60;/strong&#62;

Ces filtres enlèvent les caractères non autorisés comme les espaces et les caractères accentués.

````php
<?php

$valeur = '<strong>Texte en gras</strong>';

$valeurNettoyee = filter_var($valeur, FILTER_SANITIZE_STRING); //Supprimer les balises.

echo $valeurNettoyee;
?>
````


Cette fois, nous avons utilisé filter_var(), mais sachez que nous pouvons toujours utiliser filter_input() :


````php
<?php

<?php

echo filter_input(INPUT_GET, 'texte', FILTER_SANITIZE_STRING);

?>
````

Il existe une variante de FILTER_SANITIZE_STRING , c'est FILTER_SANITIZE_SPECIAL_CHARS qui affiche les balises telles quelles (c'est-à-dire qu'elle remplace les <, > et & en leur entité XML correspondante).

````php
<?php

echo filter_input(INPUT_GET, 'texte', FILTER_SANITIZE_SPECIAL_CHARS);

?>
````

Si on regarde le code source (x)HTML, nous voyons ceci :

    &#60;strong&#62;gras&#60;/strong&#62;



On peut également devoir vérifier qu'une variable obligatoire à bien été remplie, ce que l'on pourrait exprimer ainsi : "Si le nombre de caractère contenus dans l'email est inférieur à 1", alors on affiche un message demandant à l'utilisateur d'encoder son nom.


````php
<?php
$fullname = $_GET['fullname'];

if ( strlen($fullname) == 0 ){
  echo "Vous avez oublié d'indiquer votre nom.";
}

?>
````

Voici différentes manière de tester des variables en PHP

**strlen() :** retourne la taille de la chaîne string, elle prend en paramètre la châine de caractère à mesure. La taille de la chaîne string est 0 si le paramètre string est vide

**Exemple**

````php
<?php
$str = 'abcdef';
echo strlen($str); // 6

$str = ' ab cd ';
echo strlen($str); // 7
?>
````

**empty():** détermine si une variable est vide. Une variable est considérée comme vide si elle n'existe pasn ou si sa valeur équivaut à FALSE.La fonction empty() ne génère pas d'alerte si la varialbe n'existe pas. Retourne FALSE si var existe et est non-vide. 

Aucune alerte n'est générée si la variable n'existe pas. Cela signifie que empty() est strictement équivalent à !isset($var) || $var == false.

Attention est considéré comme étant vide: 

* "" (une chaîne vide)
* 0 (0 en tant qu'entier)
* 0.0 (0 en tant que nombre à virgule flottante)
* "0" (0 en tant que chaîne de caractères)
* NULL
* FALSE
* array() (un tableau vide)
* $var; (une variable déclarée, mais sans valeur)


**Exemple : comparaison simple entre empty() et isset()**

````php
<?php
$var = 0;
                   
// Evalué à vrai car $var est vide
if (empty($var)) {
  echo '$var vaut soit 0, vide, ou pas définie du tout';
}
                   
// Evalué à vrai car $var est défini
if (isset($var)) {
  echo '$var est définie même si elle est vide';
}
?>
````

**filter_var() : ** filtre une variable avec un filtre spécifique. Prend en paramètre variable, filter et options. Retourne les données filtrées, ou FALSE si le filtre échoue.

Paramètres

variable: Valeur à filtrer. Notez que les valeurs scalaires sont converties en chaîne de caractères en interne avant qu'elles ne soient filtrées.

filter: L'ID du filtre à appliquer. Il existe différents type de filtres (filtres de validation, filtres de nettoyage, autres filtres et drapeaux des filtres). Cfr : [http://php.net/manual/fr/filter.filters.php]

options: Tableau associatif d'options ou des drapeaux.

**Exemples**

````php
<?php
var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));
var_dump(filter_var('http://example.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
?>
````

L'exemple ci-dessus va afficher: 

    string(15) "bob@example.com"
    bool(false)



## Les Tableaux

En PHP on peut utiliser différents types de variables:

1. Les chaines de caractères (string, ex: "Hello")
2. les nombres entiers (int, ex: 11 )
3. les nombres décimaux (float, ex: 3.141518)
4. les booléens (true ou false)
5. rien (null)
6. les tableaux (array)

Les arrays sont un des types de variables que l'on peut utiliser en PHP. Ils sont particuliers car il ne contiennent pas comme une variable classique un nom et une valeur mais bien peuvent contenir plusieurs valeurs.

Les tableaux sont très tulise pur représenter des groupes:

* tout les pays du monde
* les membres d'une famille
* les composants d'un système
* les ingrédients d'une recette
* etc...

On peut comparer les arrays à des armoires.

Si on déclare ceci:

````php
$pronoms_personnels = array( 'je' , 'tu' , 'il' , 'nous' , 'vous' , 'ils' );
````

PHP met en mémoire ceci:

````php
Array
(
    [0] => je
    [1] => tu
    [2] => il
    [3] => nous
    [4] => vous
    [5] => ils
)
````

Les chiffres (0 à 5) ont été automatiquement ajoutés par PHP. Ce sont des clefs (key) qui nous permettent ensuite d'aller chercher la valeur correspondante. Attention, la première clef vaut 0 et pas 1.

````php
echo $pronoms_personnels[2];
// Affiche "il"
´´´´

### Comment créer un tableau ?

On peut déclarer un tableau avec la fonction array()

````php
$team = array(); 
````

Ou de manière plus brève, on peut également déclarer un tableau comme ceci

````php
$team = []; 
````

On peut mettre des éléments à l'intérieur dès sa création en séparant les éléments par des virgules

````php
$team = [ 'Vincent Company', 'Eden Hazard', 'Manneken Pis' ]; 
````

On peut aussi créer manuellement un tableau étage par étage:

````php
$team[0] = 'Vincent Company';
$team[1] = 'Eden Hazard';
$team[2] = 'Manneken Pis';
````

## Afficher le contenu d'une variable print_r() et var_dump()

**print_r()**: permet d'afficher le contenu lisible d'une variable. 

return :
Si vous voulez obtenir le résultat de print_r() dans une chaîne, utilisez le paramètre return. Lorsque ce paramètre vaut TRUE, print_r() retournera l'information plutôt que de l'afficher.

Si une chaîne de caractères, un entier ou un nombre décimal est fournie, sa valeur sera affichée. Si un tableau est fourni, les valeurs seront affichées dans un format permettant de voir les clés et les éléments. Un format similaire sera également utilisé pour les objets.

Lorsque le paramètre return vaut TRUE, cette fonction retournera une chaîne de caractères. Autrement, la valeur de retour sera TRUE.

````php
<?php
<pre>
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
</pre>
?>
````

L'exemple ci-dessus va afficher

````php
<pre>
Array
(
    [a] => apple
    [b] => banana
    [c] => Array
        (
            [0] => x
            [1] => y
            [2] => z
        )
)
</pre>
````

Exemple avec le paramètre return

````php
<?php
$b = array ('m' => 'monkey', 'foo' => 'bar', 'x' => array ('x', 'y', 'z'));
$results = print_r($b, true); // $results contient l'affichage de print_r
?>
````

print_r()
La fonction print_r() affiche le contenu d'une variable en général. Lorsqu'il s'agit d'une bête variable, elle affiche son contenu, tout bêtement, mais quand il s'agit d'un tableau, elle affiche sous une forme plus ou moins lisible le contenu de chaque poste du tableau avec ses indices ou ses clés (les étiquettes des casiers, pour les tableaux associatifs).
Le résultat s'affiche tout seul à l'écran et ressemble à ça:

````php
Array ( [0] => Lou [1] => Chris [2] => Marie )
````

Pour obtenir un resultat plus lisible on peut utiliser l'astuce qui consiste à inclure le code PHP dans une apge HTMK en encadrant l'instruction print_r($array) par des balises <pre> et </pre>

On obtient alors un directement un affichage beaucoup plus lisible (qui est identique à celui que l'on peut voir lorsque l'on affiche le code source de la page affichant le code précédent)

````php
      <?php
        $famille = ['Lou','Chris','Marie'];
        echo '<pre>';
          print_r($famille);
        echo '</pre>';
      ?>
````

Donnera comme affichage

````php
Array
(
    [0] => Lou
    [1] => Chris
    [2] => Marie
)
````


**var_dump()** est une fonction native de PHP. Elle affiche les informations d'une variable. Elle prend en paramètre la variable que l'on veut afficher. Aucune valeur n'est retournée, le contenu de la variable est simplement affiché

````php
<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>
````

Affichera ceci

````php
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  array(3) {
    [0]=>
    string(1) "a"
    [1]=>
    string(1) "b"
    [2]=>
    string(1) "c"
  }
}

````

## Supprimer le contenu d'une variable

unset() est une fonction native de PHP qui permet de détruire une variable. Bref une fois appliqué sur une variable, celle-ci n'existera plus.

unset($variable);

### Opérations courantes


#### Afficher valeur dans array associatif


````php
echo $person['firstname'];
echo $person['papa']['firstname']; 
// Retourne la valeur de la clef 'firstname' du sous-tableau 'papa' du tableau $person.
````

#### Afficher valeur dans array numérique

````php
echo $pays[2]; // Retourne la 3ème clef du tableau $pays
echo $person['papa']['hobbies'][1]; // retourne le 2ème hobby du papa de la $person.
````

#### Ajouter un élément

Deux manières de faire:

````php
array_push($person['hobbies'], 'Football');
````

ou bien

````php
// Si une clef numérique te suffit;
$person['hobbies'][] = 'Football';

// Si tu veux que la clef soit associative:
$person['papa']['firstname'] = 'Georgio';
´´´´

#### Remplacer la valeur d'un clef

Si on désire changer la valeur d'une clef, il suffit de l'écraser comme ceci (on change le prénom)

````php
$person['papa']['firstname'] = 'Georgio';
echo $person['papa']['firstname'];
$person['papa']['firstname'] = 'Sebastano';
echo '<br>';
echo $person['papa']['firstname']; // retourne "Sebastano"
````

### Tableaux associatifs

Les tableaux que nous avons utiliser jusqu'à présent utisent uen clef numérique (un chiffre)

Les tableaux associatifs fonctionnent sur le même principe, mais au lieu d'utiliser des chiffres comme clef, on utilise des "étiquettes" , des noms différents correspondant chacun à une valeur.

Par exemple pour enregistre les coordonnées de quelqu'un (nom, prénom, adresse, ville, etc,...). Si l'array est numéroté, comment savoir que le 0 est la clef qui correspond au nom, le 1 au prénom, ...
C'est dans ce type de situation que les tableaux sont utiles.


#### Construire un tableau associatif

On utilise la fonction array ou sa version raccourcie [] mais on va mettre l'étiquette (la clef) devant chaque information.

````php
$utilisateur = array (
    'prenom' => 'Juan',
    'nom' => 'Pablo',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Bruxelles'
    );
````

Note: Il n'y a qu'une seule instruction (un seul point virgule à la fin). On aurait pu tout mettre sur une seule ligne mais le retour à la ligne rend l'ensemble plus facile à lire.

Note: On écrit une flèche (=>) pour dire "associé". "Ville" associé à "Bruxelles", cette notation rend l'affichage de contenu plus intuitif.


#### Tableaux multi-dimensionnels

On peut stocker des valeurs de type "texte", "int", "boolean" dans un tableau. Mais on peux aussi stocker des valeurs sous forme de tableau. Ton tableau devient alors une tableau multi-dimensionnnel (multi-dimensional array)

Voici un exemple si tu dois également stocker tes hobbys dans le tableau $moi.

````php
$moi = array(
	'naissance'	=> 1973 , 
	'prenom' 	=> 'Alexandre' ,
	'nom' 	  	=> 'Plennevaux' ,
	'hobbies' 	=> array(
				'lecture' => 'Policier',
				'musique' => 'Batterie',
				'art' => 'Graph',
				),
);

echo '<pre>';
print_r($moi);
echo '</pre>';
````


#### Manipuler des arrays

**Compter**

count() : permet de compter tous les éléments d'un tableau ou quelque chose d'un objet.


**Ajouter**

array_push() : permet d'ajouter des celement a un tableau

````php
<?php
$stack = array("", "");
array_push($stack, "apple", "raspberry");
print_r($stack);
?>
````

va afficher

````php
<?php
Array
(
	[0] => orange
	[1] => banana
	[2] => apple
	[3] => rasberry
)
?>
````

**Effacer**

**unset()** détruit la ou les variables dont le nom a été passé en argument var.

Le comportement de unset() à l'intérieur d'une fonction peut varier suivant le type de variable que vous voulez détruire.

Si une variable globale est détruite avec unset() depuis une fonction, seule la variable locale sera détruite. La variable globale gardera la valeur acquise avant l'appel à unset().

````php
unset($arr[5]); // Ceci efface l'élément du tableau
````


````php
<?php
function destroy_foo() 
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;
?>
````

Affichera

bar

Pour détruire une variable globale à l'intérieur d'une fonction, vous pouvez utiliser le tableau $GLOBALS :

````php
<?php
function foo() 
{
    unset($GLOBALS['bar']);
}

$bar = "truc";
foo();
?>
````




**Remplacer**

Pour remplacer une valeur liée à une clef dans un tableau, il faut utiliser le code suivant: 
On se contente de ciblé la bonne clef et de lui attribué une nouvelle valeur.

````php
<?php
$array['key'] = 'Nouvelle valeur'; 
?>
````

**Créer un tableau à partir de deux tableaux (ou plus)**

**array_combine**  : créer un tableau à partir de deux autres tableaux. Crée un tableau dont les clés sont les valeurs de keys, et les valeurs sont les valeurs de values. Retourne un tableau combiné ou False si le nombre d'éléments de chaque tableau n'est pas identique.

````php
<?php
array array_combine ( array $keys , array $values )
?>
````

keys : Tableau de clés à utiliser. Les valeurs illégales pour les clés seront converties en chaîne de caractères.

values : Tableau de valeurs à utiliser

````php
<?php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);

print_r($c);
?>
````

Affichera

````php
<?php
Array
(
    [green]  => avocado
    [red]    => apple
    [yellow] => banana
)
?>
````



**array_intersect** : Calcule l'intersection de tableaux. Retourne un tableau contenant toutes les valeurs de array1 qui sont présentes dans tous les autres arguments array 2, etc... . Les clefs sont préservées. Retourne un tableau contenant toutes les valeurs du tableau array1 dont les valeurs existent dans tous les arguments.

array1 : Le tableau contenant les valeurs maîtres à vérifier.

array2 : Un tableau contenant les valeurs à comparer.

... : Une liste variable de tableaux à comparer.


````php
<?php
array array_intersect ( array $array1 , array $array2 [, array $... ] )
?>
````

````php
<?php
$array1 = array("a" => "green", "red", "blue");
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
print_r($result);
?>
````

Affichera:

````php
Array
(
    [a] => green
    [0] => red
)
````

Attention : Deux éléments sont considérés comme égaux si et seulement si (string) $elem1 === (string) $elem2. En clair : lorsque la représentation en chaîne de caractères est identique



**array_merge** : Fusionne plusieurs tableaux en un seul. array_merge() rassemble les éléments d'un ou de plusieurs tableaux en ajoutant les valeurs de l'un à la fin de l'autre. Le résultat est un tableau.

Si les tableaux d'entrées ont des clés en commun, alors, la valeur finale pour cette clé écrasera la précédente. Cependant, si les tableaux contiennent des clés numériques, la valeur finale n'écrasera pas la valeur originale, mais sera ajoutée.

Les clés numériques des tableaux d'entrées seront renumérotées en clés incrémentées partant de zéro dans le tableau résultat.


````php
<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);
?>
````

Affichera

````php
<?php
Array
(
    [color] => green
    [0] => 2
    [1] => 4
    [2] => a
    [3] => b
    [shape] => trapezoid
    [4] => 4
)
?>
````

Autre exemple

````php
<?php
$array1 = array();
$array2 = array(1 => "data");
$result = array_merge($array1, $array2);
?>
````

Affichera

````php
<?php
Array
(
    [0] => data
)
?>
````

Autre exemple

Si vous voulez ajouter des éléments du second tableau au premier sans pour autant écraser ou ré-indexer les éléments du premier, utilisez l'opérateur d'union + :


````php
<?php
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
$result = $array1 + $array2;
var_dump($result);
?>
````

Les clés du premier tableau sont préservées. Si une clé existe dans les 2 tableaux, alors l'élément du premier sera utilisé et la clé correspondante du second sera ignorée.

````php
<?php
array(5) {
  [0]=>
  string(6) "zero_a"
  [2]=>
  string(5) "two_a"
  [3]=>
  string(7) "three_a"
  [1]=>
  string(5) "one_b"
  [4]=>
  string(6) "four_b"
}
?>
````

## Les boucles (loops)

Les boucles servent à effectuer des tâches répétitives avec un minimum de code.

````php
<?php
foreach( $assiettes as $assiette){
	trempe($assiette);
	frotte($assiette);
	mets_a_secher($assiette);
}
?>
````

Ce foreach est une structure logique appelée boucle.Il s'agit en fait d'une boucle spécialement adaptée pour les tableaux.Foreach va passer en revue chaque ligne du tableau, et lors de chaque passage, elle va mettre la valeur de cette ligne dans une variable temporaire (par exemple $element). 

Une boucle permet de répéter une (ou plusieurs) opération(s) autant de fois que nécessaire.

L'instruction se lit: 

Pour chaque élément de l'array $assiettes, appelle-le $assiette et opère sur lui ces opérations: trempe(), frotte(), puis mets_a_secher().

**Exemple pratique**

Si on a un tableau (array) appelé $name contenant une liste de noms et que l'on doivent vérifier que la première lettre de ces noms sont bien en majuscules, on peut utiliser la fonction PHP ucfirst($nom); avec une boucle. De cette manière la fonction sera appliqué à chaque élément du tableau.

````php
<?php
foreach ($names as $n){
	echo ucfirst($n);
}
?>
````

L'instruction se lit:

Pour chaque élément du tableau$name, met la première lettre en majuscule puis affiche-là.

### Variation avec l'index

Parfois on a besoin de savoir quelle rangée exactement est en train d'être manipulée. Voici la syntaxe correcte pour s'en sortir:

````php
<?php
foreach ($names as $index => $n){
	echo "Prénom numéro $index : ";
	echo ucfirst($n);
}
?>
````

Cette syntaxe utilise => comme dans les tableaux associatifs. C'est logique puisque qu'une boucle permet notamment de traverser un tableau de part en part. Donc quand tu penses tableau, pense boucle car les deux vont très souvent ensemble.

### Boucler sur une chaîne de caractères

**Construction While**

On peut générer avec une boucle while une chaine de caractère qui se répète un nombre défini de fois. Voici comment faire:

````php
<?php
$nombre_de_lignes = 1;

while ($nombre_de_lignes <= 100)
{
    echo $nombre_de_lignes . ': Je ne dois pas regarder les mouches voler quand j'apprends le PHP.<br />';
    $nombre_de_lignes++; // équivaut à écrire $nombre_de_lignes = $nombre_de_lignes +1;
}
?>
````

L'instruction se lit: 

La boucle pose la condition: "TANT QUE" $nombre_de_ligne est inférieur ou égal à 100, effectue ces opérations.

Dans cette boucle, il y a deux instructions:

* le echo : qui permet d'afficher du texte en PHP. On y ajouter la balise html <br/> à la fin pour retourner à la ligne à chaque fois.

* L'instruction $nombre_de_lignes++. Cela signifie que l'on ajoute 1 à la variable ($nombre_de_lignes + 1). C'est l'incrémentation (on ajoute 1 à la variable). Chaque fois que l'on fait un tour de boucle, la valeur de la variable augmente: 1,2,3,4, ..., 99, 100. Dès que la variable atteint 101, on arrête la boucle. Et voilà, on a écrit 100 lignes en un clein d'oeil.

**Construction for**

````php
<?php
for ($nombre_de_lignes = 1; $nombre_de_lignes <= 100; $nombre_de_lignes++)
{
    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
}
?>
````

Une boucle for prends 3 paramètres séparés par des points-virgules

* premier paramètre: c'est **l'initialisation**. C'est la valeur que l'on donne au départ à la variable (ici, elle vaut 1)
* second paramètre : c'est la **condition** . Comme pour le while, tant que la condition est remplie, la boucle est réexécutée. Dès que la condition n'est plus remplie, la boucle s'arrête et on en sort.
* Troisième paramètre: c'est l'**incrémentation** , qui permet d'ajouter 1 (ou plus) à la variable à chaque tour de boucle.


### Conclusion

Les boucles sont des structures logiques permettant de répéter une ou plusieurs opérations autant de fois que nécessaire. Foreach, while et for sont 3 manières de faire des boucles. 


## Les Fonctions

En programmation il faut éviter de faire du DRY : "Don't Repeat Yourself".
Ce qui signifie qu'il faut éviter de répéter inutilement un code lorsqu'il peut être écrit de manière plus concise.

Par exemple

````php
$name = "Maurice";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Alice";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Jésus";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
$name = "Judas";
echo "<p>Bonjour $name!</p>";
echo '<hr>';
````

Qui affichera

Bonjour Maurice!
_______________________________
Bonjour Alice!
_______________________________
Bonjour Jésus!
_______________________________
Bonjour Judas!

Ce code fonctionne mais on repète 4 fois le même code. Lorsque l'on devra modifier ce programme, il faudra le modifier à 4 endroits ce qui augmente d'autant le risque d'introduire un bug.

Voici un code optimisé et concis réalisant exactement la même chose

````php
// Déclaration de la fonction
function dis_bonjour($nom){
	echo "<p>Bonjour $nom!</p>";
	echo '<hr>';
}

// appels de la fonction 
dis_bonjour("Maurice")
dis_bonjour("Alice");
dis_bonjour("Jésus");
dis_bonjour("Judas");
````

Ce qui affichera également:

Bonjour Maurice!
_______________________________
Bonjour Alice!
_______________________________
Bonjour Jésus!
_______________________________
Bonjour Judas!
_______________________________


Le code est ainsi plus propre et plus facilement modifiable si on désire y apporter des améliorations. Il suffira alors de modifier la fonction et tous les endroits où la fonction est utilisées bénéficieront automatiquement de la mise à jour de la fonction.

### Definition

Une fonction est comme un robot intelligent qui s'adapte en fonction de ce que je veux faire et automatise la plupart des tâches courantes. Elles prennent souvent (mais pas obligatoirement) en paramètre un ou plusieurs input. Ceux-ci sont appellés les arguments de la fonction. La fonction les transforment puis les retourne via la fonction return. Et oui, on peut utiliser des fonctions dans les fonctions !!!

On peut créer ses propres fonctions ou utiliser les nombreuses fonctions fournies par PHP

[http://php.net/manual/fr/funcref.php]

Nous en utilisons déja quelques unes, comme array() qui est une fonction qui sert à créer des variables de type array.

````php
$team = array('Elvis', 'Johnny');
````

Ici, les arguments 'Elvis', 'Johnny' vont être capturé dans la variable $team et devenir les éléments qui vont constitués l'array.

#### D'autres exemples**

**print_r($array)** : sert à afficher le contenu d'un array.

**die("message")** : sert à arrêter l'exécution du script après avoir affiché le message indiqué en argument de la fonction.

**echo("texte à afficher");** : sert à afficher les arguments. Cette fonction ne nécessite pas les parenthèses.

**phpinfo();** affiche la configuration de PHP sur ton serveur.

**date('d M Y')** pour récupérer la date courante.


### Exemple concret : transformer un bout de texte

La fonction str_shuffle()(lire : "shuffle string") permet de mélanger les caractères d'une chaîne (autrement dit: un bout de texte).

````php
$chaine = 'Cette chaîne va être mélangée !';
$chaine = str_shuffle($chaine);
 
echo $chaine;
````

Ce qui donnera ce type de résultat:

ne tCeevaetcna rlih eme!geate

### Syntaxe

L'usage d'une fonction se fait en deux temps:

1. **Créer la fonction :** 

On appelle cela "définir" ou "déclarer" une fonction. Voici comment faire:

````php
function nom_de_la_fonction( $argument1, $argument2,...){
	//	une série d'opérations manipulant les arguments
}
````

La série d'instruction qui devra être effectuer par la fonction est placer entre {} accolades. Typiquement (mais pas forcément) une fonction va retourner le résultat.

Voici une fonction qui permet de sanitizer un input:(sanitization signifie désinfection, elle modifie l'entrée pour s'assurer qu'elle est valide.

````php
function sanitize( $input ){
	//	une série d'opérations manipulant les arguments
	return strip_tags( trim( $input) );
	
}
````

strip_tags : va supprimer les balises HTML et PHP d'une chaîne
trim: va supprimer les espaces (ou d'autres caractères) en début et fin de chaîne.

L'argument (ici appelé $input) est envoyé à la fonction trim() qui retourne son résultat à la fonction strip_tags() qui retourne le résultat à la fonction return qui ... retourne le résultat hors de la fonction que j'ai baptisée sanitize() et qui me permet de fiare à la fois trip et strip_tags d'un seul coup.

2. **Utiliser la fonction**

On dit "appeler la fonction.
Une fois la fonction déclarée quelque part dans ton code, tu peux l'utiliser où tu le souhaites, et autant de fois que nécessaire.

Par exemple avec la fonction sanitize(), voici un exemple d'utilisation

````php
// Si le formulaire a été soumis...
if (isset($_POST) && !empty($_POST) ){

	// sanitisation des inputs
	$name = sanitize( $_POST['name'] );
	$email = sanitize( $_POST['email'] );

	// validation...
	...
}
````

Dans cet exemple, on vérifie les données envoyée par un formulaire html par la méthode POST. On vérifie que le formulaire n'est pas vide (!empty) puis on vérifie (on nettoie) les input en enlevant les caractères spéciaux et les balises html et PHP qui auraient pu être introduites par l'utilisateur

