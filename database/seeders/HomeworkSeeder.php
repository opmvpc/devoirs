<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class HomeworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $course = Course::find(1);

        $course->homeworks()->create([
            'name' => 'Création d\'un Pokédex avec IA',
            'instructions' => <<<'EOT'
                Création d'un Pokédex avec IA
                Objectifs

                Concevez un Pokédex dynamique peuplé de Pokémon créés par IA. Vous consoliderez vos compétences en utilisant :

                    Nuxt.js : pour orchestrer votre projet.
                    TailwindCSS : pour sublimer l'interface.
                    GraphQL : pour interagir avec les données.
                    Hygraph : pour structurer le contenu.

                Modélisation des données

                Enrichissez votre base de Pokémon avec des attributs détaillés et créez de nouvelles entités pour une expérience complète :

                    Pokémon
                        Points de vie (Pv)
                        Genre
                        Poids
                        Taille
                        Couleur
                        Type

                    Types
                        Image
                        Nom
                        Couleur

                    Attaques
                        Nom
                        Image
                        Dégats
                        Description
                        Type

                    …

                Design avec TailwindCSS et Nuxt

                Appliquez les principes de TailwindCSS pour une esthétique soignée. Utilisez ses classes pour une interface intuitive et réactive. Affichez toutes les données de votre Api dans les pages de votre application.
                Données avec GraphQL et Hygraph

                Maîtrisez GraphQL pour requêter vos données et enrichissez votre Pokédex avec au moins 10 créatures via Hygraph.
                Déploiement

                Partagez votre travail en le publiant sur GitHub et en le déployant sur Vercel, rendant ainsi votre Pokédex accessible en ligne.
                Critères de réussite

                    L’étudiant a remis un projet répondant au cahier des charges
                    Le code remis par l’étudiant répond aux différents critères de qualité attendus (code fonctionnel, pas de bug critique)
                    L’étudiant a utilisé un logiciel de contrôle de version (git)
                    L’étudiant a hébergé son projet sur Vercel.

                Critères de Notation Supplémentaires

                Pour obtenir des points supplémentaires, vous devez démontrer les compétences suivantes :

                    Design et Ergonomie du Site : Utilisez TailwindCSS et Nuxt pour créer un design attrayant et une interface utilisateur intuitive et réactive.

                    Contenu : Le site contient des images, des noms et des descriptions originales et de qualité.

                    Qualité du Code : Votre code doit être propre, bien structuré, commenté et suivre les principes de développement solides.

                    Fonctionnalités supplémentaires : Recherche dans la liste des pokémons, tri par catégories, carte …

                Livrables

                À la fin de ces exercices, vous devrez fournir un lien vers votre repository. Hébergez aussi le projet avec Vercel. Fournissez le lien d'hébergement.

                Envoyez les liens par email à l’adresse thibault.six@ifosup.wavre.be

                Le sujet de votre email respectera le format suivant : pokedex_[nom]_[prenom] (exemple : pokedex_menfroid_gerard)

                Date de remise : dimanche 7 janvier à 23 h 59.

                Bonne chance et bon travail !
                Ressources

                Voici des liens pour approfondir vos connaissances :

                    Nuxt.js
                    TailwindCSS
                    GraphQL
                    Hygraph

                Inspirez-vous de ce Pokédex existant : Bulbasaur sur Pokémon Fandom
                EOT,
            'scoring_grid' => <<<'EOT'
                | **Critère**                               | **Points** | **Sous-critères**                                                                                                                                                               |
                |-------------------------------------------|------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
                | Design et Ergonomie du Site               | 20         | - Respect des principes d'UI/UX (5)<br>- Utilisation efficace de TailwindCSS (5)<br>- Adaptabilité (responsive design) (5)<br>- Originalité et esthétique (5)                   |
                | Fonctionnalité et Intégration Technologique| 30         | - Intégration correcte de Nuxt.js (5)<br>- Utilisation adéquate de GraphQL et Hygraph (5)<br>- Fonctionnalités de base implémentées (10)<br>- Fonctionnalités supplémentaires (10)|
                | Qualité du Contenu                        | 20         | - Originalité des images et descriptions (10)<br>- Qualité et diversité des données Pokémon (10)                                                                                 |
                | Qualité du Code                           | 20         | - Propreté et structuration du code (5)<br>- Commentaires et documentation (5)<br>- Respect des principes de développement (SOLID, DRY, etc.) (10)                              |
                | Déploiement et Utilisation de Git         | 10         | - Projet correctement hébergé sur GitHub et Vercel (5)<br>- Utilisation efficace de git (branches, commits) (5)                                                                 |

                **Note Finale** : La note finale est calculée sur la base de la somme des points obtenus dans chaque critère, pondérée sur 100 points.
                EOT,
        ]);
    }
}
