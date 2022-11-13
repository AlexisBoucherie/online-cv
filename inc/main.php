<?php

//calcul de l'age
$currentDate = Date('Y');
$yearOfBirth = 1988;
$age = $currentDate - $yearOfBirth;

//calcul des pv
$healthDie = 10;
$constitutionBonus = 2;
$hp = ($healthDie + $constitutionBonus) + (($age - 1) * ($healthDie / 2 + 1)) + (($age - 1) * $constitutionBonus);

?>

<main>
    <h1>Feuille de Personnage</h1>
    <p class="about">CV perso. fun et fantaisiste, inspiré des feuilles de personnages de type Donjons & Dragons.</p>
    <div class="containerMain">
        <div class="block pict"></div>
        <div class="block profile">
            <p><span class="label">Prénom :</span> Alexis</p>
            <p><span class="label">Nom :</span> Boucherie</p>
            <p><span class="label">Race :</span> Humain</p>
            <p><span class="label">Classe :</span> Développeur Web</p>
            <p><span class="label">Niveau :</span> <?= $age ?></p>
            <p><span class="label">Sexe :</span> Homme</p>
            <p><span class="label">Adresse :</span> Puynormand (33)</p>
            <p><span class="label">Téléphone :</span> 06.74.32.51.87</p>
        </div>
        <div class="block stats">
            <h2>Caractéristiques</h2>
            <div class="flex">
                <p><span class="label">FOR</span><br>12</p>
                <p><span class="label">DEX</span><br>10</p>
                <p><span class="label">CON</span><br>14</p>
                <p><span class="label">INT</span><br>13</p>
                <p><span class="label">SAG</span><br>10</p>
                <p><span class="label">CHA</span><br>12</p>
            </div>
            <h2>Combat</h2>
            <div class="flex">
                <p><span class="label">INIT</span><br>+2</p>
                <p><span class="label">CA</span><br>14</p>
                <p><span class="label">PV</span><br><?= $hp ?></p>
            </div>
        </div>
        <div class="block skills">
            <h2>Compétences</h2>
            <div class="flex">
                <section>
                    <p class="label">Informatique</p>
                    <ul>
                        <li>HTML5/CSS3</li>
                        <li>Bootstrap</li>
                        <li>JavaScript</li>
                        <li>CLI</li>
                        <li>Git/GitHub</li>
                        <li>MySQL</li>
                        <li>PHP / Symfony</li>
                        <li>Twig</li>
                        <li>Wordpress</li>
                        <li>Heroku</li>
                    </ul>
                </section>
                <section>
                    <p class="label">Design</p>
                    <ul>
                        <li>Maquetter une application, un site</li>
                        <li>Trello</li>
                        <li>GIMP</li>
                        <li>Figma</li>
                        <li>Adobe XD</li>
                    </ul>
                </section>
                <section>
                    <p class="label">Langues</p>
                    <ul>
                        <li>Français</li>
                        <li>Anglais</li>
                        <li>Italien</li>
                        <li>Espagnol</li>
                    </ul>
                </section>
                <section>
                    <p class="label">Gestion</p>
                    <ul>
                        <li>Méthode Agile Scrum</li>
                        <li>Administration forum</li>
                        <li>Standard téléphonique</li>
                        <li>Courriels</li>
                        <li>Caisse, recettes du jour</li>
                    </ul>
                </section>
                <section>
                    <p class="label">Représentation</p>
                    <ul>
                        <li>Visites guidées</li>
                        <li>Animation radio</li>
                        <li>Théâtre</li>
                        <li>Chant</li>
                        <li>Danse (rock)</li>
                    </ul>
                </section>
                <section>
                    <p class="label">Discussion</p>
                    <ul>
                        <li>Enseignement des langues</li>
                        <li>Renseignements</li>
                        <li>Promotion d'un produit, d'une destination</li>
                        <li>Ventes de billets, de produits</li>
                    </ul>
                </section>
                <section>
                    <p class="label">Conduite</p>
                    <ul>
                        <li>Voiture</li>
                        <li>Minibus</li>
                    </ul>
                </section>
                <section>
                    <p class="label">Sport</p>
                    <ul>
                        <li>Marche</li>
                        <li>Vélo</li>
                        <li>Natation</li>
                    </ul>
                </section>
            </div>
        </div>
        <div class="block training">
            <h2>Formations</h2>
            <p class="pretty">2022/2023
                <br><strong>Développeur Web, spé. PHP/Symfony</strong>
                <br>Wild Code School, Bordeaux, présentiel
            </p>
            <p class="pretty">2021/2022
                <br><strong>Graduate DWWM</strong>
                <br>Groupe STUDI, formation autonome en remote
            </p>
            <p class="pretty">2017
                <br><strong>Techniques du Tourisme Culturel</strong>
                <br>CCI Udine, Italie
            </p>
            <p class="pretty">2016
                <br><strong>Développement Web et Database</strong>
                <br>Enaip, Pasian di prato, Italie
            </p>
            <p class="pretty">2011/2012
                <br><strong>Diplôme National de Guide Conférencier</strong>
                <br>Pôle Universitaire d'Angers, Saumur
            </p>
            <p class="pretty">2007/2010
                <br><strong>Licence Langues Étrangères Appliquées</strong>
                <br>UFR Lettres et Langues, Poitiers
            </p>
        </div>
        <div class="block xp">
            <h2>Expériences professionnelles</h2>
            <div class="flex">
                <section>
                    <p class="pretty">Oct. 2022
                        <br><strong>Réalisation d'un portfolio, PHP natif, modèle MVC</strong>
                        <br>Wild Code School, Bordeaux
                        <br>(Projet annexe individuel)
                    </p>
                </section>
                <section>
                    <p class="pretty">Sept. 2022
                        <br><strong>Réalisation d'un CV en ligne, mobile first</strong>
                        <br>Wild Code School, Bordeaux
                        <br>(Projet annexe individuel)
                    </p>
                </section>
                <section>
                    <p class="pretty">Fév. 2022
                        <br><strong>Réalisation d'un jeu de dés, JS Vanilla</strong>
                        <br>Studi, en remote
                        <br>(Projet d'étude individuel)
                    </p>
                </section>
                <section>
                    <p class="pretty">2010/2014 - 2018/2021
                        <br><strong>Guide touristique et agent d'accueil</strong>
                        <br>Office du Tourisme du Grand Saint-Émilionnais
                        <br>(CDD et CDI, 9 ans au total)
                    </p>
                </section>
                <section>
                    <p class="pretty">2017/2018
                        <br><strong>Professeur de français</strong>
                        <br>Enaip, Pasian du Prato, Italie
                        <br>(CDD, 11 mois)
                    </p>
                </section>
                <section>
                    <p class="pretty">2017
                        <br><strong>Employé vente/marketing</strong>
                        <br>Villaverde Hotel&SPA*****S, Fagagna, Italie
                        <br>(stage, 1 mois)
                    </p>
                </section>
                <section>
                    <p class="pretty">2016/2017
                        <br><strong>Professeur d'anglais</strong>
                        <br>K-For, Padoue, Italie
                        <br>(CDD, 1an)
                    </p>
                </section>
                <section>
                    <p class="pretty">2016
                        <br><strong>Maître de chai assistant</strong>
                        <br>Mont'Albano Agricola, Savorgnano del Torre, Italie
                        <br>(stage, 4 mois)
                    </p>
                </section>
                <section>
                    <p class="pretty">2015
                        <br><strong>Guide touristique freelance</strong>
                        <br>Département de la Gironde
                        <br>(autoentreprise, 8 mois)
                    </p>
                </section>
            </div>
        </div>
        <div class="block gear">
            <h2>Équipement</h2>
            <p>Costume de templier</p>
            <p>Bottes médiévales en cuir</p>
            <p>Vraie fausse épée de templier +4, 1d12, tranchant</p>
            <p>Anneau magique</p>
            <p>Destrier blanc à quatre roues, 120m, terrestre</p>
            <br>
            <p>Sac à dos :</p>
            <ul>
                <li>Laptop ASUS - TUF GAMING</li>
                <li>Matériel de modélisme</li>
                <li>Pistolet à colle +2, 1d4, feu</li>
                <li>Manuel du Dungeon Master</li>
                <li>Livres d’Asimov, Tolkien et Bernard Werber</li>
                <li>Livre de cuisine</li>
                <li>Appâts pour chien</li>
                <li>Rations de survie x 3</li>
            </ul>
            <br>
            <p></p>Bourse remplie de dés
            <p></p>(beaucoup de dés !)
        </div>
    </div>
</main>