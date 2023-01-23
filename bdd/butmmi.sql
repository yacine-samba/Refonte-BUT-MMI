-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 19 jan. 2023 à 19:06
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `butmmi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `login`, `password`) VALUES
(19, 'Samba', 'Yacine', 'yacine.samba', '$2y$10$TByrDm15ZNta2Z/SastEheLyDVzav/SzmTtfZ4F962MGIdTUaCso.'),
(20, 'Mahri', 'Belkacem', 'belkacem.mahri', '$2y$10$Th8ih9nIhQsJO.ElN6KMY.k30guC9iVSFFvTWRi8rsHPACPUnf8Y2'),
(21, 'Compte', 'Administrateur', 'admin', '$2y$10$zDDxLYBFyo/kWPD2B5.tTemWih4TB6N7xF.AOJNCIk11FOCdiTl4i');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id_enseignant` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `linkedin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id_enseignant`, `id_matiere`, `nom`, `prenom`, `role`, `linkedin`) VALUES
(1, 1, 'Leroy', 'Alexandre', 'Enseignant', 'https://www.linkedin.com/in/alexandre-leroy-75661b198/'),
(2, 2, 'Jaoued-Abassi', 'Leyla', 'Maître de conférence', 'https://www.linkedin.com/in/leyla-jaoued-abassi-0325a435/'),
(3, 3, 'Chabane', 'Karim-Pierre', 'Enseignant, Rédacteur', 'https://www.linkedin.com/in/karim-pierre-chabane-52216635/'),
(4, 3, 'Niel', 'Odile', 'Professeur agrégé', 'https://www.linkedin.com/in/odile-niel-0b114a70/'),
(5, 3, 'Dallet', 'Sylvie', 'Professeur d\'univeresité', 'https://www.linkedin.com/in/sylviedallet/'),
(7, 4, 'Gambette', 'Philippe', 'Enseignant Chercheur', 'https://www.linkedin.com/in/philippe-gambette-88759153/'),
(8, 4, 'Eppstein', 'Renaud', 'Enseignant Chercheur', 'https://www.linkedin.com/in/renaud-eppstein-a7789573/'),
(9, 4, 'Dang', 'Thanh Long', 'Responsable S.I.', 'https://www.linkedin.com/in/thanhlongdang/'),
(10, 5, 'Charpentier', 'Gaëlle', 'Enseignant front-end', 'https://www.linkedin.com/in/ga%C3%ABlle-charpentier-10783a45/'),
(11, 5, 'Cléry', 'Jean-Marie', 'Développeur JavaScript', 'https://www.linkedin.com/in/jean-marie-cl%C3%A9ry-8bab2348'),
(12, 6, 'Poisson', 'Frédéric', 'Directeur Artistique', 'https://www.linkedin.com/in/fredfishdesign/'),
(13, 6, 'Llopis', 'Robien', 'Freelance et formateur en UX design / Dev front en', 'https://www.linkedin.com/in/robin-llopis'),
(14, 6, 'Poisson', 'Frédéric', 'Directeur Artistique', 'https://www.linkedin.com/in/fredfishdesign/'),
(15, 6, 'Llopis', 'Robin', 'Freelance et formateur en UX Dev front end', 'https://www.linkedin.com/in/robin-llopis'),
(16, 7, 'Tasso', 'Anne', 'Maître de conférence', 'https://www.linkedin.com/in/anne-tasso-a8ab2a48'),
(17, 7, 'Houziaux', 'Tony', 'Sound designer', 'https://www.linkedin.com/in/tony-houziaux-4a97521/'),
(18, 7, 'Soussi', 'Lahcen', 'Chargé de production', 'https://www.linkedin.com/in/lahcen-soussi-66310b60/'),
(19, 8, 'Dallet', 'Sylvie', 'Professeur d\'université', 'https://www.linkedin.com/in/sylviedallet/'),
(20, 12, 'Berthet', 'Matthieu', 'Professeur agrégé', 'https://www.linkedin.com/in/matthieu-berthet-386656101/'),
(21, 13, 'Bister', 'Florence', 'Professeur agrégé', 'https://www.linkedin.com/in/bister-florence-29162370/'),
(22, 14, 'Herve', 'Lo', 'Directeur stratégie - Opsone', 'https://www.linkedin.com/404/'),
(23, 14, 'Bister', 'Florence', 'Professeur agrégé', 'https://www.linkedin.com/in/bister-florence-29162370/');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id_image` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id_image`, `id_projet`, `file_name`, `created_at`) VALUES
(7, 1, 'skyline-pilot.png', '0000-00-00 00:00:00'),
(8, 1, 'skyline-pilot1.png', '0000-00-00 00:00:00'),
(9, 1, 'skyline-pilot2.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `matieres`
--

CREATE TABLE `matieres` (
  `id_matiere` int(11) NOT NULL,
  `id_module` int(11) NOT NULL,
  `nom_matiere` varchar(50) NOT NULL,
  `image_matiere` text NOT NULL,
  `image` text NOT NULL,
  `description_matiere` text NOT NULL,
  `resume_equipe` text NOT NULL,
  `resume_matiere` text NOT NULL,
  `details_s1` text NOT NULL,
  `details_s2` text NOT NULL,
  `icon_matiere` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `matieres`
--

INSERT INTO `matieres` (`id_matiere`, `id_module`, `nom_matiere`, `image_matiere`, `image`, `description_matiere`, `resume_equipe`, `resume_matiere`, `details_s1`, `details_s2`, `icon_matiere`) VALUES
(1, 1, 'ANGLAIS', 'image_anglais.jpg', 'imageanglais.png', 'In Champs-sur-Marne, English is taught through two different courses, ‘General and professional English’ and ‘English for the web’.', 'In Champs-sur-Marne, English is taught through two different courses, \'General and professional English\' and \'English for the web\'.', 'To put it in a nutshell, the aim of the two courses is twofold: <br>helping students<br>\n\ngrasp the basics of technical and professional English,\ngain confidence in their ability to use English spontaneously, especially when talking.<br><br>\nProject-based learning encourages the students to develop their autonomy and team work skills with the help of tool worksheets and grammar reminders. <br>Role-playing games help the students speak in a friendly atmosphere and class debates often spring from the students’ press reviews.<br><br>\n\nCreativity is highly valued and individual feedback is given after each activity.<br><br>\n\nGeneral and professional English: <br>30h/student (from Semester 1 to Semester 4),\n\nEnglish for the web: 20h/student (course available from S1 to S3).', 'General and professional English:<br>\nPress reviews; <br>\nnon verbal communication\nEnglish for the web: The Web 2.0; <br>\nAccounting for the main elements in a web page;<br>\nPromoting the creative web', 'General and professional English: <br>Analysing newspaper articles and the main newspapers’ political slants;<br> article writing workshop;<br> Small talk; CVs;<br> covering letters<br><br>\n\nEnglish for the web: The New Media;<br> Jobs in Information and Communication Technology (ICT)', '<i class=\"fa-light fa-earth-americas\"></i>'),
(2, 1, 'MARKETING', 'image_marketing.png', 'image_marketing.jpg', 'Étudier les différentes phases de la démarche marketing à travers des exercices, des études de cas, des exposés et des projets.', 'Les entreprises accordent aujourd’hui une grande importance au marketing et donnent la priorité à la clientèle en essayant de satisfaire ses besoins. <br>L’objectif du marketing est non seulement de comprendre les besoins des clients afin de développer des produits et des services capables de leur apporter de la valeur, mais aussi de mener une réflexion sur le prix, la distribution et la communication des produits et des services développés.', 'Tout au long de ce module, vous étudierez les différentes phases de la démarche marketing à travers des exercices, des études de cas, des exposés et des projets individuels ou de groupe.\r\n\r\n', 'Etudier le fonctionnement des organisations en mettant l’accent sur le Marketing, sa place au sein des organisations et son lien avec les autres fonctions des organisation.', 'Les études Marketing et leur importance pour la création d’entreprise et les décisions stratégiques de l’entreprise. Réalisation d’un mini projet d’étude sur une problématique choisie par les étudiants et à laquelle ils répondent en suivant une méthodologie qualitative et quantitative.\r\n\r\n', '<i class=\"fa-light fa-bullseye-arrow\"></i>'),
(3, 1, 'INFO-COM', 'image_infocom.png', '', 'Multimédia et communication vont de pair et c’est un volet important du DUT MMI.', 'Multimédia et communication vont de pair et c\'est un volet important du DUT MMI.', '\n', 'Cela commence au premier semestre avec la théorie de la communication que l’on applique en permanence à des cas pratiques.', 'Au deuxième semestre, on se centre sur la communication des organisations avec par exemple la communication externe des TPE à très petit budget ou celle sur les réseaux sociaux', '<i class=\"fa-light fa-newspaper\"></i>'),
(4, 2, 'PROGRAMMATION', 'image_programmation.png', 'image_programmation.jpg', 'Etudier les bases de la programmation et de l’algorithmie au travers de langages tels que Javascript ou Php.', 'Le module est conçu pour être accessible aux personnes n\'ayant jamais codé, et pour faire progresser davantage celles et ceux qui savent déjà programmer.', 'Ce module présente les bases de la programmation, l’algorithmique, travaillée surtout en TD. La mise en pratique en TP se fait avec les langages de programmation Java et PHP, et avec SQL pour la gestion des bases de données.\n\n', 'Au cours du semestre 1, les bases de l’algorithmique sont étudiées à partir des méthodes de résolution de problèmes. Nous utilisons le langage de programmation Java, qui, contrairement à certains langages web, permet d’écrire un code clair et plus facile à débuguer.\r\n\r\nThèmes abordés en travaux pratiques :\r\n\r\nCompilation, variables, types, tests, boucles, fonctions, dessins en deux dimensions', 'Au semestre 2, nous abordons la programmation orientée objet, toujours avec Java, et la programmation orientée serveur avec une introduction à PHP. Associé aux bases de données, ce langage est utilisé pour ajouter des fonctionnalités dynamiques aux sites web.\r\n\r\nAu semestre 3, le PHP est étudié de façon plus approfondie. Les étudiants développe une application web avec des contraintes telles que la création de comptes personnels, l’utilisation d’expressions régulières, …\r\n\r\nThèmes abordés en travaux pratiques :\r\n\r\nSemestre 2 : Récursivité (dessin automatique d’un cerisier), structures de données (réalisation d’un lecteur de vidéos ASCII), programmation orientée objets (programmation d’un jeu), conception et utilisation d’une base de données.', '<i class=\"fa-light fa-rectangle-code\"></i>'),
(5, 2, 'DÉVELOPPEMENT FRONT-END', 'image_frontend.png', 'image_frontend.jpg', 'Culture Web et apprentissage des langages HTML, CSS et Javascript vont de paire !', 'HTML, CSS et Javascript sont des langages indispensables à la création de sites web. Nous les abordons de manière progressive, dans le cadre de Travaux Pratiques en salle informatique, sans oublier d’approfondir votre culture du web en Cours Magistral !', 'Les semestres 1 et 2 sont consacrés à l’apprentissage des fondamentaux HTML/CSS.  Ces langages, simples d’apparence, doivent être abordés avec beaucoup de rigueur, dans le respect des normes et des standards internationaux. Nous prenons donc le temps de maîtriser les notions clés afin de coder selon « les bonnes pratiques web » (performances, accessibilité, sémantique, …).\r\n\r\nAu cours du semestre 2, les étudiants créent un site web simple. Ce projet complet permet de travailler tous les aspects de la création de site : contenus texte, web design, ergonomie et développement HTML/CSS.', '', '', '<i class=\"fa-light fa-table-layout\"></i>'),
(6, 3, 'DESIGN', 'image_design.png', 'image_design.jpg', 'Maîtriser les moyens d’expression graphique pour toujours mettre la forme au service du fond.', 'Vous familiariser avec les principes et outils de la création graphique et maîtriser les moyens d’expression pour mettre la forme au service du fond.', 'Couleurs, formes, typographie, signes et symboles, grilles, rapports d’échelles, ergonomie, pixels et vecteurs… sont autant de composantes de la mise en page et du design graphique. Au fil des semestres nous allons donc nous familiariser avec ces différents codes visuels en revenant sur certains fondamentaux tout en utilisant les outils logiciels.', 'Au semestre 1, découverte des grands principes de mise en page, du travail typographique, réalisation des premiers photomontages et traitements d’images.\r\n\r\nEXEMPLES DE PROJETS PROPOSÉS :\r\nRéalisation d’une affiche pour la promotion du département MMI de Champs sur Marne.\r\nConception de maquette web en lien avec le cours d’intégration.', 'Au semestre 2, création de maquettes et prototypes de sites ou applications web. Application des principes ergonomiques fondamentaux, mise en place d’une démarche UX avec pour objectif de proposer des produits centrés utilisateurs.\r\n\r\n\r\nEXEMPLES DE PROJETS PROPOSÉS :\r\nConception d’une interface graphique pour une application mobile et un site internet.\r\nRecherches graphiques pour un logotype avec développement d’une charte graphique.\r\nCréation d’éléments graphiques personnalisés (brush, formes, textures et polices)…', '<i class=\"fa-light fa-wand-magic-sparkles\"></i>'),
(7, 3, 'VIDÉO', 'image_audiovisu.jpg', 'image_montage.jpg', 'Synopsis, storyboard, tournage, montage, incrustation, post-prod, … sont des techniques que vous apprendrez à maitriser tout au long de la formation.', 'La pédagogie mise en place en Production Audiovisuelle est essentiellement basée sur des projets réalisés en équipe.', '', 'Au semestre 1, vous  découvrirez les règles de l’écriture cinématographique grâce à l’étude d’un extrait de film sous forme de story-board. Vous apprendrez également à utiliser une caméra, à mettre en place la lumière. Vous vous initierez aux techniques de prise de son.', 'Après une étude approfondie des mouvements de caméra, le semestre 2 est consacré à la réalisation d’un petit court-métrage (synopsis, storyboard, tournage, montage) dont le sujet et les contraintes techniques évoluent au fils des ans. ', '<i class=\"fa-light fa-video-plus\"></i>'),
(8, 3, 'ESTHÉTIQUE', 'image_esthe.png', 'image_esthe.jpg', 'Développer votre culture et votre sensibilité artistique pour les mettre à profit de votre créativité.', 'L’objectif du module est de développer votre culture et votre sensibilité artistique pour les mettre à profit de votre créativité.', 'Vous découvrez, ici, le langage de l’Art en général et des arts plastiques en particulier.   Les cours magistraux sont un support pour vous familiariser avec les différentes expressions esthétiques contemporaines (particulièrement arts plastiques et musique).  La pratique personnelle, grâce aux exercices individuels et aux ateliers de création mixtes (dessin, peinture, collage, etc.) vous offre la possibilité de relier la théorie à la pratique. Votre expression esthétique, s’élabore au travers de votre personnalité et d’une réflexion conjuguée sur les matériaux, l’éthique, l’environnement, l’esthétique et votre culture artistique.', 'Exemples d’exercices créatifs :\r\n\r\nLes dialogues des arts avec le vivant et la mémoire irriguent les expériences créatives des semestres, comme la conception de récits illustrés ou encore la confection de cartes-blasons et de livres papier selon un cahier des charges collectif orienté vers une exposition publique.\r\nLes pratiques artistiques, dans leurs enjeux philosophiques et leurs relations au monde, seront questionnées historiquement, mais aussi selon les empreintes de la nature et du vivant.', '', '<i class=\"fa-light fa-pen-paintbrush\"></i>'),
(12, 4, 'RÉSEAU', 'image_reseaux.png', '', 'Décortiquer un ordinateur, apprendre à administrer un serveur, paramétrer un réseau …', 'Dans ce module, vous décortiquez un ordinateur, apprenez à administrer un serveur, et paramétrez un réseau comme Internet avec des routeurs, des switchs, ...\r\nGrâce aux Cours Magistraux, vous découvrez le vocabulaire propre à cette matière. Vous vous entraînez, en Travaux Dirigés, sur les points les plus calculatoires de la matière. Enfin, vous apprenez à configurer des réseaux et des services, grâce aux nombreux Travaux Pratiques.', '', 'Au semestre 1, nous étudions l’architecture des ordinateurs et des systèmes d’exploitations, puis nous abordons l’architecture de l’Internet et son système d’adresses IP. Pour finir, la transmission par paquets n’a plus de secret pour vous.', 'Vous apprenez au semestre 2, comment constituer des liaisons entre des ordinateurs avec des switchs Ethernet ou du WIFI.\r\n\r\nLe semestre 3 traite des protocoles et des services qui ont fait le succès de l’Internet actuel (Mail, Transfert de fichiers, …).', '<i class=\"fa-light fa-chart-network\"></i>'),
(13, 4, 'SCIENCES', 'image_sciences.png', '', 'Découvrir et de comprendre les concepts scientifiques qui se cachent derrière les objets usuels du multimédia.', 'L’objectif de ce module est de découvrir et de comprendre les concepts scientifiques qui se cachent derrière les objets usuels du multimédia.\r\n', 'Dans ce module, la pédagogie fait une large place à l’expérimentation du travail en groupe, la responsabilisation, la gestion de petits projets d’études scientifiques, la conception et l’écriture de livrets d’étude et leurs présentations à l’oral\r\n\r\n', 'Le premier semestre est l’occasion de découvrir ou de revoir des notions scientifiques préalables aux thèmes abordées aux semestres suivants, au rythme de chacun', 'Au cours du second semestre, vous découvrez la numérisation des signaux audio et vidéo, leurs stockages et leurs transmissions sur réseaux', '<i class=\"fa-light fa-calculator\"></i>'),
(14, 4, 'GESTION DE PROJET', 'image_gestiondeprojet.png', 'image_gestiondeprojet.jpg', 'Donner les clés pour travailler en équipe dans un cadre d’écoute des attentes et des compétences de chacun.\r\n\r\n', 'Disposer des bons ingrédients ne vous garantit pas de réussir votre gâteau !\r\n', 'Réaliser un projet multimédia (site internet, application mobile, jeu vidéo…) demande de partager des compétences au sein d’une équipe composée de savoir-faire, de cultures et de sensibilités très variées – allant du développeur au designer, en passant par le chargé de marketing web…\r\n\r\nGrâce ou à cause de la diversité des membres du groupe, disposer de la meilleure équipe ne garantie pas la réussite du projet multimédia.\r\n\r\nLa mission centrale de la gestion de projet est de remédier à ces difficultés.\r\n\r\nC’est pourquoi, l’objectif du module Gestion de Projet est de donner les clés pour travailler en équipe dans un cadre d’écoute des attentes et des compétences de chacun.\r\n\r\n', 'Au semestre 1, les étudiants sont sensibilisés à la place centrale des projets en MMI, et donc de leur gestion, en insistant sur l’impact des facteurs humains et de la responsabilisation de chacun et en  proposant quelques outils.\r\n\r\n', 'Au semestre 2, les fondamentaux de la gestion de projet sont abordés : caractéristiques d’un projet, étapes d’un projet multimédia, découpage et planification d’un projet.\r\n\r\nPour finir, l’apprentissage de toutes les techniques et notions abordées en cours, est mis en application de façon très concrète, à travers le projet tutoré où chaque équipe étudiante est coachée et soutenue par l’équipe enseignante afin de livrer un produit de qualité.\r\n\r\n', '<i class=\"fa-light fa-diagram-project\"></i>');

-- --------------------------------------------------------

--
-- Structure de la table `modules`
--

CREATE TABLE `modules` (
  `id_module` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `icon_module` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `modules`
--

INSERT INTO `modules` (`id_module`, `nom`, `description`, `icon_module`) VALUES
(1, 'COMMUNICATION & MARKETING', 'Déscription', '/img/modules'),
(2, 'INFORMATIQUE', 'Déscription', '/img/modules'),
(3, 'CULTURE ARTISTIQUE', 'Déscription', '/img/modules'),
(4, 'CULTURE SCIENTIFIQUE', 'Déscription', '/img/modules');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id_projet` int(11) NOT NULL,
  `id_matiere` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `date_creation` varchar(4) NOT NULL,
  `description` text NOT NULL,
  `objectifs` varchar(510) NOT NULL,
  `outils` varchar(255) NOT NULL,
  `competences` text NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id_projet`, `id_matiere`, `titre`, `auteur`, `date_creation`, `description`, `objectifs`, `outils`, `competences`, `lien`) VALUES
(1, 4, 'SkylinePilot', 'Yacine Samba', '', 'Site web réalisé dans le cadre d\'un projet individuel d\'étudiant de 1ère année, dont l\'objectif était de développer un site web utilisant une base de données et permettant quelques interactions simples pour le client (liste, recherche, ajout...).\r\n\r\n', 'Réalisation de maquettes avec Figma\r\nIntégration et interactions en JavaScript, HTML/CSS\r\nAffichage et envoi d\'informations avec les langages PHP et SQL, par mail et accessibles via phpMyAdmin\r\n', 'Figma Photoshop Visual Studio Code PhpMyAdmin Checklists Opquast', 'HTML JS PHP CSS', 'http://skylinepilot.samba.butmmi.o2switch.site/');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id_enseignant`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `image_` (`id_projet`);

--
-- Index pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD PRIMARY KEY (`id_matiere`),
  ADD KEY `matiere_1` (`id_module`);

--
-- Index pour la table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id_module`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id_projet`),
  ADD KEY `projet_1` (`id_matiere`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id_enseignant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `matieres`
--
ALTER TABLE `matieres`
  MODIFY `id_matiere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `modules`
--
ALTER TABLE `modules`
  MODIFY `id_module` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `equipe_1` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id_matiere`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `image_` FOREIGN KEY (`id_projet`) REFERENCES `projets` (`id_projet`);

--
-- Contraintes pour la table `matieres`
--
ALTER TABLE `matieres`
  ADD CONSTRAINT `matiere_1` FOREIGN KEY (`id_module`) REFERENCES `modules` (`id_module`);

--
-- Contraintes pour la table `projets`
--
ALTER TABLE `projets`
  ADD CONSTRAINT `projet_1` FOREIGN KEY (`id_matiere`) REFERENCES `matieres` (`id_matiere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
