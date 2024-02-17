<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::create([
            'name' => 'SCRIPTS CLIENTS',
            'program' => <<<'EOT'
                Programme du cours

                L’étudiant sera capable :

                    Identification des éléments impliquant l’usage d’un script client dans une page web.
                    Analyse d'un script client en termes de :
                        Définition des variables et des objets.
                        Structures conditionnelles et itératives.
                        Fonctions et de procédures.
                        Structures interactives (gestion des évènements,...).
                        ...
                    Exploitation d'un script client dans une page web.
                    Modification et création d'un script et intégration dans une page web.
                    Description et caractérisation d'objets, propriétés et méthodes.
                    Détermination des événements auxquels les éléments de la page doivent réagir.
                    Traduction des éléments nécessaires à la résolution d'un problème posé (structures procédurales, interactives, animations, objets...) sous forme de commentaires, de schémas, de dessins, etc.
                    Mise en œuvre de la résolution d'un problème posé en utilisant le langage client choisi.
                    Exploitation du côté orienté objet du langage choisi :
                        Les classes prédéfinies et leurs composants (window, document, cookie, ...).
                        La définition de classes et leur instanciation.
                        ...
                    Utilisation des variables, des structures conditionnelles, des structures itératives, des tableaux, de l'affichage dans une page web, etc. dans le langage choisi.
                    Exploitation de la notion d'expression régulière (validation de formulaires, ...).
                    Exploitation de données structurées en XML (Extensible Markup Langage), en JSON (JavaScript Object Notation), ... contenues dans un fichier externe.
                    Description et mise en œuvre des technologies utilisées dans le développement d'applications web dynamiques et animées telles que AJAX (Asynchronous Javascript and XML), ...
                    Choix et exploitation d'une bibliothèque tierce telle que jQuery, MooTools, ... pour le développement de scripts spécifiques pour RIA (interfaces riches), transmissions asynchrones, ...
                    Identification et résolution d'erreurs de programmation au moyen d'outils ou de techniques de débogage.
                    Utilisation appropriée de la documentation disponible.

                Acquis d'apprentissage
                Critères de réussite

                Pour atteindre le seuil de réussite, l'étudiant sera capable, et au départ d’un cahier des charges contenant un projet de pages web interactives et animées :

                    Création et exploitation de scripts clients basés sur des classes prédéfinies.
                    Création et exploitation de ses propres classes.
                    Création et exploitation de scripts basés sur une bibliothèque tierce.

                Critères de maîtrise

                Pour la détermination du degré de maîtrise, il sera tenu compte des critères suivants :

                    Design et Ergonomie du Site

                    Contenu

                    Qualité du Code

                    Fonctionnalités supplémentaires

                Évaluation

                    Travaux côtés 40% de la note finale
                    Évaluation finale (projet) 60% de la note finale
                EOT,
        ]);
    }
}
