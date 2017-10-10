// ---------------------------
// --- fonctions à écrire ----
// ---------------------------

/* ----- fonction n°1 -----
Cette fonction doit définir, puis retourner la combinaison secrète.
Les arguments d'entrée:
  - "nbTrous" est un entier qui contient le nombre de trous à découvrir, et donc la taille de la combinaison secrète.
  - "nbCouleurs" est un entier qui contient le nombre de couleurs possibles. Les couleurs sont représentées par des entiers compris entre 0 et (nbCouleurs-1)
La valeur de sortie:
  - un tableau contenant "nbTrous" entiers aléatroires compris entre 0 et (nbCouleurs-1)
Vous devez utiliser les fonctions JavaScript
  - "Math.Random()" qui génère une valeur numérique aléatoire supérieure ou égale à 0 et strictement inférieure à 1
  - "Math.floor(x)" retourne la partie entière de "x".
 */

var combinaisonSecrete = function (nbTrous, nbCouleurs) {
    let combinaison = [];
    //for (let i = ??; i < ??; i++) {
    //    ?? = Math.floor(Math.random() * ??);
    //}
    return combinaison;
};

/* -- fonction déjà écrite -----
Cette fonction effectue plusieurs actions en utilisant les deux fonctions qui suivent et que vous devez écrire.
Les arguments :
  - "nbTrous" et "nbCouleurs" sont des entiers.
  - "proposition" et "solution" sont des tableaux d'entiers de longueur "nbTrous" contenant des valeurs comprises entre 0 et "nbCouleurs"-1
La fonction "jeu.montrerSolution()" permet de dévoiler la combinaison secrète et d'arrêter la partie
La fonction "jeu.coupSuivant()" permet de passer au coup suivant en mettant à jour quelques variables internes au jeu.
Vérifiez que vous comprenez bien les actions qu'elle effectue.
*/
var valider = function (proposition, solution, nbTrous, nbCouleurs) {
    if (!estValide(proposition, nbTrous, nbCouleurs)) return;
    if (solutionTrouvee(proposition, solution, nbTrous)) {
        jeu.montrerSolution();
    } else {
        jeu.coupSuivant();
    }
};

/* ----- fonction n°2 -----
Cette fonction vérifie si la proposition du joueur (l'argument "proposition") est correctement formé.
Pour être correct, cet argument doit vérifier les conditions suivantes:
  - il doit être un tableau contenant exactement "nbTrous" valeurs entières, dont les indices vont de zéro à "nbTrous-1"
  - les valeurs entières qu'il contient doivent toutes être comprises entre 0 et "nbCouleurs-1"
Cette fonction doit retourner true si l'argument "proposition" est correctement formé, et false sinon.
 */
var estValide = function (proposition, nbTrous, nbCouleurs) {
    //for (let i = ??; i < ??; ??) {
    //    if (proposition[i] === undefined || proposition[i] < ?? || proposition[i] >= ??) {
    //        return false;
    //    }
    //}
    return true;
};

/* ----- fonction n°3 -----
Cette fonction retourne true si la combinaison proposée par le joueur (l'argument "proposition") est égale à la combinaison cachée (l'argument "solution")
et false sinon.
Les arguments "proposition" et "solution" sont des tableaux d'entiers de longueur "nbTrous"
 */
var solutionTrouvee = function (proposition, solution, nbTrous) {
    //for (??;??;??) {
    //    if (??) {
    //        return false;
    //    }
    //}
    return true;
};

/* -- fonction déjà écrite -----
Cette fonction effectue plusieurs actions en utilisant les deux fonctions qui suivent et que vous devez écrire.
Vérifiez que vous comprenez bien les actions qu'elle effectue, ainsi que le rôle des fonctions "positionsExactes" et "positionsInexactes"
*/
var calculerIndications = function (proposition, solution, nbTrous) {
    let indications = positionsExactes(proposition, solution, nbTrous);
    return positionsInexactes(proposition, solution, indications, nbTrous);
};

/* ----- fonction n°4 -----
Cette fonction doit retourner le tableau "indications" pour donner des indications au joueur.
Le tableau "indications" est de longueur "nbTrou" et peut contenir les constantes suivantes:
  - la constante NOIR dans la case i du tableau "indications" signale que la couleur en position i dans le tableau "proposition" correspond à celle de la solution
  - la constante BLANC dans la case i du tableau "indications" signale que la couleur en position i est présente dans la solution, mais à une autre place
Cette fonction, ne place que les constantes NOIR.
 */
var positionsExactes = function (proposition, solution, nbTrous) {
    let indications = [];
    //for (??;??;??) {
    //    if (??) {
    //        indications[i] = NOIR;
    //    }
    //}
    return indications;
};

/* ----- fonction n°5 -----
Cette fonction complète la précédente en plaçant les constantes BLANC.
Elle possède un argument supplémentaire : le tableau "indications" qui a été partiellement rempli par la fonction précédente.
 */
var positionsInexactes = function (proposition, solution, indications, nbTrous) {
    //let marque = [];
    //for (let i = 0;??;??) {
    //    if (indications[i] === NOIR) {
    //        ??
    //    }
    //}
    //for (let i = 0;??;??) {
    //    if (indications[i] === NOIR) continue;
    //    for (let j = 0; ??; ??) {
    //        if (??) {
    //            indications[i] = BLANC;
    //            marque[j] = 1;
    //            break;
    //        }
    //    }
    //}
    return indications;
};

/* ----- fonction n°6 -----
Cette fonction traite l'option de jeu "informations désordonnée": elle agrège les données du tableau "indications" pour retourner le nombre
d'indications noires et blanches à fournir sous forme d'un objet JavaScript "{noirs:x,blancs:y}" où x et y correspondent aux nombres de cases noires et blanches.
 */
var aggegerIndications = function (indications, nbTrous) {
    let nbNoirs = 0;
    let nbBlancs = 0;
    //for (??;??;??) {
    //    if (??) {
    //        nbNoirs++;
    //    }
    //    if (??) {
    //        nbBlancs++;
    //    }
    //}
    return {noirs: nbNoirs, blancs: nbBlancs}
};

/* ----- fonction n°7 -----
Cette fonction prend 2 arguments:
  - "proposition qui est un tableau d'entiers comme défini précédemment
  - "historique qui est un tableau qui contient toutes les propositions précédentes. C'est donc un tableau de tableaux
Cette fonction doit retourner un entier (appelons-le "numLigne").
Si la proposition passée en argument est présente dans l'historique, en ligne "numLigne" alors la fonction doit retourner la valeur de "numLigne".
Sinon, elle retourne -1.
Lorsque cette fonction est au point, il n'est pas possible de tenter deux fois la même proposition.
 */
var dejaJoue = function (proposition, historique) {
    //for (??) {
    //    let numLigne = i;
    //    for (??) {
    //        if (?? !== ??) {
    //            numLigne = -1;
    //            break;
    //        }
    //    }
    //    if (numLigne > -1) {
    //        return numLigne;
    //    }
    //}
    //return ??;
};

/* ----- fonction n°8 -----
Cette fonction permet de générer des combinaisons secrètes sans répétition, pour des joueurs débutants.
Elle prend 2 arguements "nbTrous" et "nbCouleurs", définis comme précédemment, et retourne un tableau d'entiers qui contient les code de couleurs
d'une combinaison secrète aléatoire, sans répétition.
*/
var combinaisonSecreteSansDoublons = function (nbTrous, nbCouleurs) {
    //let choix = [];
    //let x = nbCouleurs;
    //for (??;??;??) {
    //    choix[??] = ??;
    //}
    //let combinaison = [];
    //for (??;??;??) {
    //    let indice = Math.floor(Math.random() * ??);
    //    combinaison[??] = choix[??];
    //    x--;
    //    choix.splice(indice, 1);
    //}
    //return combinaison;
};

/* ----- fonction n°9 -----
Cette suite de fonctions permet de générer une combinaison que l'on peut proposer au joueur.
 */

// -- 9a : tester si la combinaison passée en argument possède un (ou plusieurs) doublons
var contientDoublon = function (combinaison) {
    //for (let i = 0; ??;??)
    //    for (let j = 0; ??;??) {
    //        if (??) return true;
    //    }
    return false;
};

// -- 9b : générer toutes les combinaisons possibles pour nbTrous et nbCouleurs et les stocker dans la variable globale "toutesCombinaisons"
// cette fonction est récursive
// elle doit être appelée au tout début de la fonction "combinaisonSecreteSansDoublons"
var toutesCombinaisons = [];
var genererCombinaisons = function (nbTrous, nbCouleurs, combinaison, position) {
    //for (let i = 0; ??; ??) {
    //    combinaison[??] = ??;
    //    if (position === ??) {
    //            toutesCombinaisons.push(combinaison.slice());
    //    } else {
    //        genererCombinaisons(??, ??, ??, ??);
    //    }
    //}
};

// --9c : étant donné une combinaison sans doublon et ses indications, vérifier qu'une autre autre combinaison (candidate sans doublon) génèrerait les même indications
var verifier = function (combinaison, indications, candidat) {
    //let compatible = false;
    //for (??;??;??) {
    //    if (??) compatible = true;
    //}
    //for (let i = 0; ??;??) {
    //    switch (indications[i]) {
    //        case NOIR:
    //            if (??) compatible = false;
    //            break;
    //        case BLANC:
    //            compatible = false;
    //            for (let j = 0; ??;??) {
    //                if (??) {
    //                    compatible = true;
    //                }
    //            }
    //            break;
    //        default:
    //            for (let j = 0; ??;??) {
    //                if (??) {
    //                    compatible = false;
    //                }
    //            }
    //    }
    //}
    //return compatible;
};

// 9d : étant donné une combinaison et ses indications, enlever les combinaisons non compatibles de la liste des combinaisons
var enlever = function (combinaison, indications) {
    //let combis = [];
    //for (??;??; ??) {
    //    if (verifier(??, ??, ??)) combis.push(??.slice());
    //}
    //toutesCombinaisons = combis;
};

// 9e : la fonction "aider"
var aider = function () {
    return [0,1,2,3];
};


