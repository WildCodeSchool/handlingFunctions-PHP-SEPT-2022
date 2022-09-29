# handlingFunctions-PHP-SEPT-2022
Workshop solution on PHP functions. September 2022 session.

**PHP 8.0 release**

### Commence par regarder "Watchmen : Les gardiens" si tu ne l'as pas vu.

## Démarrage

* Crée un nouveau dossier basics3.
* Crée deux répertoires à la racine de ton projet. src et public
* Crée un fichier : index.php dans ton répertoire public.
* Crée un fichier : function.php dans ton répertoire src.
* Inclus ton fichier function.php dans index.php.
* Démarre un serveur HTTP, sa racine doit être dans le répertoire public.

## Function
Crée une fonction nommée sayHello permettant d'écrire "Hello Nite Owl".

Une fonction ne doit jamais (sauf cas rare) afficher directement quelque chose (echo, print_r, var_dump...).
Une fonction doit retourner une valeur d'un type bien défini.

En ré-utilisant notre fonction "sayHello()":

* Modifie la fonction pour qu'elle retourne "Hello Nite Owl" plutôt que de l'afficher directement.
* Cette fonction ne doit pouvoir retourner que des chaînes.
### Paramètres

Toujours à partir de ta fonction "sayHello()":

* Modifie la en lui ajoutant un paramètre nommé "name" de type string
* Modifie la fonction pour qu'elle retourne "Hello
{name}
"
* Rend le paramètre "name" optionnel. Si rien n'est précisé, ta fonction devra retourner "Hello Dr. Manhattan"

### Fin

* Crée une nouvelle fonction nommée "whoAmI", cette fonction retournera une chaîne (ou null).
* Elle prendra deux paramètres : name de type string et watchmen de type array.
* watchmen contiendra la liste de tous les watchmen ('Dr. Manhattan', 'Ozymandias', 'Silk Spectre', 'Rorschach', 'The comedian', 'Nite Owl')
* Algo : Retourne "{name} est un watchmen" uniquement si {name} est un watchmen :
Retourne "c'est un intrus" si {name} n'en est pas un.
