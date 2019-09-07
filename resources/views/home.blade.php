<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="Passionné par le web, j'ai acquis des compétences autant de mon parcours professionnel qu'autodidacte. Disponible dès à présent, n'hésitez pas à me contacter.">

    <!-- Facebook Open Graph -->
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', config('app.name'))">
    <meta property="og:description" content="Passionné par le web, j'ai acquis des compétences autant de mon parcours professionnel qu'autodidacte. Disponible dès à présent, n'hésitez pas à me contacter.">

    <meta property="og:image" content="{{ asset('images/social-share-gpl3c.png') }}">
    <meta property="og:image:width" content="1240">
    <meta property="og:image:height" content="930">

    <meta property="og:image" content="{{ asset('images/social-share-f.png') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="900">

    <meta property="og:image" content="{{ asset('images/social-share-pe.png') }}">
    <meta property="og:image:width" content="735">
    <meta property="og:image:height" content="535">

    <meta property="og:image" content="{{ asset('images/social-share-gpl2c.png') }}">
    <meta property="og:image:width" content="726">
    <meta property="og:image:height" content="544">

    <meta property="og:image" content="{{ asset('images/social-share-gpl.png') }}">
    <meta property="og:image:width" content="568">
    <meta property="og:image:height" content="284">

    <meta property="og:image" content="{{ asset('images/social-share-pp.png') }}">
    <meta property="og:image:width" content="235">
    <meta property="og:image:height" content="171">

    <meta property="og:image" content="{{ asset('images/social-share-in.png') }}">
    <meta property="og:image:width" content="180">
    <meta property="og:image:height" content="110">

    <meta property="og:image" content="{{ asset('images/social-share-gps.png') }}">
    <meta property="og:image:width" content="150">
    <meta property="og:image:height" content="150">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@StanislasP">
    <meta name="twitter:creator" content="@StanislasP">
    <meta name="twitter:title" content="@yield('title', config('app.name'))">
    <meta name="twitter:description" content="Passionné par le web, j'ai acquis des compétences autant de mon parcours professionnel qu'autodidacte. Disponible dès à présent, n'hésitez pas à me contacter.">
    <meta name="twitter:image" content="{{ asset('images/social-share-t.png') }}">
    <meta name="twitter:image:src" content="{{ asset('images/social-share-t.png') }}">

    <!-- Google + -->
    <link rel="publisher" href="https://plus.google.com/u/0/+StanislasPoisson">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ config('app.url') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body itemscope itemtype="http://schema.org/Person">
    <nav>
        <ul>
            <li><a href="#about" data-word="À">Propos</a></li>
            <li><a href="#skills" data-word="Mes">Compétences</a></li>
            <li><a href="#experiences" data-word="Mes">Expériences</a></li>
            <li><a href="#achievements" data-word="Mes">Réalisations</a></li>
            <li><a href="#contact" data-word="">Contact</a></li>
        </ul>
    </nav>
    <section id="intro">
        <div class="dMax">
            <div class="row">
                <div class="cell">
                    <h1>
                        <span id="name"><span data-type="givenName">&lt;<span itemprop="givenName">Stanislas</span></span> <span data-type="familyName"><span itemprop="familyName">Poisson</span>/&gt;</span></span>
                    </h1>
                    <span id="jobTitle" itemprop="jobTitle">Full Stack Web Developer</span>
                    <div class="tr">
                        <div class="tc">
                            <a href="#skills" class="hired down" title="Filez sur mes compétences" rel="nofollow">Compétences<i class="material-icons">school</i></a>
                        </div>
                        <div class="tc">
                            <a href="#achievements" class="hired" title="Allez voir mes réalisations" rel="nofollow">Réalisations<i class="material-icons">important_devices</i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <video loop autoplay poster="{{ asset('videos/poster-introduction.jpg') }}">
            <source src="{{ asset('videos/introduction-hd.mp4') }}" type="video/mp4">
            <source src="{{ asset('videos/introduction-hd.webm') }}" type="video/webm">
        </video>
    </section>
    <section id="about">
        <div class="dMax">
            <h2><span class="light">À</span> Propos <span class="light">de moi</span></h2>
            <div class="row ini">
                <div class="cell">
                    <div id="avatar">
                        <img src="{{ asset('images/avatar.jpg') }}" srcset="{{ asset('images/avatar-hd-2x.jpg') }} 540w,{{ asset('images/avatar-2x.jpg') }} 416w,{{ asset('images/avatar-sd-2x.jpg') }} 380w,{{ asset('images/avatar-hd.jpg') }} 270w,{{ asset('images/avatar.jpg') }} 208w,{{ asset('images/avatar-sd.jpg') }} 190w" sizes="(max-width: 376px) 54vw, 40vw" itemprop="image" alt="Ma photo de profil">
                    </div>
                </div>
                <div class="cell">
                    <h3>Vous cherchez un développeur ?</h3>
                    <p>Ça tombe bien ! Passionné par le monde du web, j'ai acquis des compétences au fil de mes expériences pro et autodidacte.<br>
                    J'aime découvrir, apprendre et expérimenter le développement web et web-design au fur et à mesure des projets.</p>
                    <p class="down"><a href="{{ asset('files/stanislas-poisson-cv.pdf') }}" title="Téléchargez mon Curriculum Vitae." target="_blank" rel="nofollow">Télécharger mon cv</a></p>
                </div>
            </div>
            <p class="psst"><em>Psst ! Vous savez quoi ? Si mon profil vous intéresse, <a href="#contact" class="hired" title="Contactez-moi directement pour un poste." rel="nofollow">je suis <strong>disponible</strong> dès maintenant !</a></em></p>
            <div class="row">
                <div class="cell">
                    <h3>Ma recette ?</h3>
                    <p>Prenez des connaissances dans les domaines suivants :<br>
                    <strong>Back-end</strong> <i>95%</i>, <strong>Front-end</strong> <i>75%</i>, <strong>Serveur</strong> <i>50%</i>.<br>
                    Saupoudrer l'ensemble d'une bonne pincée de <strong>curiosité</strong>.<br>
                    Mélanger le tout dans un moule non conventionel et faite chauffer sur un feu créatif et vous obtenez un développeur <strong>Full-Stack</strong>.</p>
                </div>
                <div class="cell">
                    <h3>Pour infos ;)</h3>
                    <p>Agé de <strong><time itemprop="birthDate" datetime="1986-10-06 13:40:00">{{ Carbon\Carbon::parse('1986-10-06 13:40:00')->age }} ans</time></strong>, et heureux père de deux enfants. Habitant sur Tours Sud (37), je suis mobile dans et aux alentours de l'agglomération via transport en commun.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="skills">
        <div class="dMax">
            <h2><span class="light">Mes</span> Compétences</h2>
            <div class="zon" id="languages">
                <h3>Langages</h3>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/html5.jpg') }}" srcset="{{ asset('images/html5-2x.jpg') }} 184w,{{ asset('images/html5.jpg') }} 92w" sizes="92px" alt="Logo de l'html 5">
                        </div>
                    </div>
                    <figcaption>
                        <h4>HTML 5 - SEO</h4>
                        <p>L'<strong>HTML</strong> est un langage pour structurer votre page, à associer à un bon balisage <strong>sémentique</strong> et l'utilisation des micro-datas comme <strong>schema.org</strong>.</p>
                        <div class="progress-bar w90p">
                            <progress value="90" max="100"></progress>
                        </div>
                        <p><span class="italic">"Ce sont les murs du bâtiment."</span></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/css3.jpg') }}" srcset="{{ asset('images/css3-2x.jpg') }} 184w,{{ asset('images/css3.jpg') }} 92w" sizes="92px" alt="Logo du css 3">
                        </div>
                    </div>
                    <figcaption>
                        <h4>CSS 3</h4>
                        <p>Le <strong>CSS</strong> sert à la mise en forme des éléments. Couplé à <strong>Sass</strong> et <strong>Compass</strong>, la rapidité est de mise.</p>
                        <div class="progress-bar w80p">
                            <progress value="80" max="100"></progress>
                        </div>
                        <p><span class="italic">"Mettons de la peinture sur les murs."</span></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/javascript.jpg') }}" srcset="{{ asset('images/javascript-2x.jpg') }} 184w,{{ asset('images/javascript.jpg') }} 92w" sizes="92px" alt="Logo du JavaScript">
                        </div>
                    </div>
                    <figcaption>
                        <h4>JavaScript - ECMAScript 5 / 6</h4>
                        <p>Le <strong>JavaScript</strong> permet d'ajouter une touche d'intéraction avec l'utilisateur. Une touche de <strong>jQuery</strong> ou de <strong>Zepto</strong> suivant les navigateurs cibles accélere le code.</p>
                        <div class="progress-bar w75p">
                            <progress value="75" max="100"></progress>
                        </div>
                        <p><span class="italic">"Mettons des boutons d'éclairage."</span></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/php.jpg') }}" srcset="{{ asset('images/php-2x.jpg') }} 184w,{{ asset('images/php.jpg') }} 92w" sizes="92px" alt="Logo du php">
                        </div>
                    </div>
                    <figcaption>
                        <h4>PHP 5.6 / 7 - POO PDO</h4>
                        <p>Le <strong>PHP</strong> sert à préparer la structure de la page à afficher.</p>
                        <div class="progress-bar w90p">
                            <progress value="90" max="100"></progress>
                        </div>
                        <p><span class="italic">"Un maître d'œuvre pour la construction."</span></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/mysql.jpg') }}" srcset="{{ asset('images/mysql-2x.jpg') }} 184w,{{ asset('images/mysql.jpg') }} 92w" sizes="92px" alt="Logo de mysql">
                        </div>
                    </div>
                    <figcaption>
                        <h4>MySQL 5</h4>
                        <p>Le <strong>MySQL</strong> est la base de donnée servant à stocker les informations.</p>
                        <div class="progress-bar w75p">
                            <progress value="75" max="100"></progress>
                        </div>
                        <p><span class="italic">"Une bilbiothèque nécessaire du maître d'œuvre."</span></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/bash.jpg') }}" srcset="{{ asset('images/bash-2x.jpg') }} 184w,{{ asset('images/bash.jpg') }} 92w" sizes="92px" alt="Logo de bash">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Bash</h4>
                        <p>Le <strong>Bash</strong> est l'utilitaire de ligne de commande de Linux.</p>
                        <div class="progress-bar w50p">
                            <progress value="50" max="100"></progress>
                        </div>
                        <p><span class="italic">"L'un des plans de la construction."</span></p>
                    </figcaption>
                </figure>
            </div>
            <div class="zon" id="outils">
                <h3>Logiciels & Outils</h3>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/sublime-text.jpg') }}" srcset="{{ asset('images/sublime-text-2x.jpg') }} 184w,{{ asset('images/sublime-text.jpg') }} 92w" sizes="92px" alt="Logo du sublime text">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Sublime Text 2 / 3</h4>
                        <p>Editeur de texte sobre et léger, rendu puissant grâce aux plugins.<br>
                        <strong>Visual Studio</strong> ou encore <strong>Atom</strong> sont des <strong>IDE</strong> et par conséquent lourd à manipuler.</p>
                        <div class="progress-bar w90p">
                            <progress value="90" max="100"></progress>
                        </div>
                        <p><span class="italic">"Le préparateur des plans."</span></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/apache-node.jpg') }}" srcset="{{ asset('images/apache-node-2x.jpg') }} 184w,{{ asset('images/apache-node.jpg') }} 92w" sizes="92px" alt="Fusion du logo d'apache et de node.js">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Apache / Node.js</h4>
                        <p><strong>Apache</strong> et <strong>Node.js</strong> sont des logiciels serveur destinés à répondre aux utilisateurs.</p>
                        <div class="progress-bar w70p">
                            <progress value="70" max="100"></progress>
                        </div>
                        <p><span class="italic">"Le cabinet des d'architectes."</span></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/git.jpg') }}" srcset="{{ asset('images/git-2x.jpg') }} 184w,{{ asset('images/git.jpg') }} 92w" sizes="92px" alt="Logo de git">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Git</h4>
                        <p>L'outil <strong>Git</strong> garde toutes les versions d'un projet.</p>
                        <div class="progress-bar w50p">
                            <progress value="50" max="100"></progress>
                        </div>
                        <p><span class="italic">"Des archives toujours utils."</span></p>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/google-drive.jpg') }}" srcset="{{ asset('images/google-drive-2x.jpg') }} 184w,{{ asset('images/google-drive.jpg') }} 92w" sizes="92px" alt="Logo du google drive">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Google Drive / Docs / G-Suite</h4>
                        <p>La <strong>suite Google</strong> permet de s'affranchir des logiciels lourd tel que MS Office ou encore LibreOffice.</p>
                        <div class="progress-bar w60p">
                            <progress value="60" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/serif-affinity-designer.jpg') }}" srcset="{{ asset('images/serif-affinity-designer-2x.jpg') }} 184w,{{ asset('images/serif-affinity-designer.jpg') }} 92w" sizes="92px" alt="Logo de affinity designer de Serif">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Serif Affinity Designer</h4>
                        <p>Le must des éditeurs visuel, gère aussi bien le pixel que le vectoriel et nous fournit des documents utilisable dans nos production en lignes.</p>
                        <div class="progress-bar w60p">
                            <progress value="60" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/adobe-photoshop.jpg') }}" srcset="{{ asset('images/adobe-photoshop-2x.jpg') }} 184w,{{ asset('images/adobe-photoshop.jpg') }} 92w" sizes="92px" alt="Logo de photoshop d'adobe">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Adobe Photoshop</h4>
                        <p>L'outil de création et modification d'images e plus connu et le plus utilisé.</p>
                        <div class="progress-bar w60p">
                            <progress value="60" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/adobe-illustrator.jpg') }}" srcset="{{ asset('images/adobe-illustrator-2x.jpg') }} 184w,{{ asset('images/adobe-illustrator.jpg') }} 92w" sizes="92px" alt="Logo d'illustrator d'adobe">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Adobe Illustrator</h4>
                        <p>Un dessin redimensionnable à réaliser, Illustrator sera le premier reflexe.</p>
                        <div class="progress-bar w30p">
                            <progress value="30" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/adobe-premier.jpg') }}" srcset="{{ asset('images/adobe-premier-2x.jpg') }} 184w,{{ asset('images/adobe-premier.jpg') }} 92w" sizes="92px" alt="Logo de premier d'adobe">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Adobe Premier</h4>
                        <p>Une vidéo à créer, Premier est fait pour la création et manipulation de vidéos.</p>
                        <div class="progress-bar w40p">
                            <progress value="40" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
            </div>
            <div class="zon" id="os">
                <h3>OS & Réseaux</h3>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/linux.jpg') }}" srcset="{{ asset('images/linux-2x.jpg') }} 184w,{{ asset('images/linux.jpg') }} 92w" sizes="92px" alt="Logo de linux représentant un pingouin">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Debian 7 / 8, Ubuntu, Raspbian</h4>
                        <p>L'OS libre utiliser aussi bien en bureau qu'en serveur interne ou web.</p>
                        <div class="progress-bar w75p">
                            <progress value="75" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/windows.jpg') }}" srcset="{{ asset('images/windows-2x.jpg') }} 184w,{{ asset('images/windows.jpg') }} 92w" sizes="92px" alt="Logo de windows 10">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Windows 10 / 8 / 7 / Vista / Xp</h4>
                        <p>L'OS grand public de Windows présent presque partout et en tout temps.</p>
                        <div class="progress-bar w90p">
                            <progress value="90" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/mac-os.jpg') }}" srcset="{{ asset('images/mac-os-2x.jpg') }} 184w,{{ asset('images/mac-os.jpg') }} 92w" sizes="92px" alt="Logo de mac os">
                        </div>
                    </div>
                    <figcaption>
                        <h4>macOS Sierra</h4>
                        <p>L'OS grand public d'Apple présent dans les milieux très orienté graphisme.</p>
                        <div class="progress-bar w25p">
                            <progress value="25" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
                <figure>
                    <div class="cell">
                        <div class="strew">
                            <img src="{{ asset('images/network.jpg') }}" srcset="{{ asset('images/network-2x.jpg') }} 184w,{{ asset('images/network.jpg') }} 92w" sizes="92px" alt="Logo schématique d'un réseau">
                        </div>
                    </div>
                    <figcaption>
                        <h4>Administration système et réseaux</h4>
                        <p>Le paramétrage et la gestion des serveurs, ordinateurs, NAS, Wifi et câblage ainsi que les accès réseaux et la sauvegarde des postes de travail.</p>
                        <div class="progress-bar w30p">
                            <progress value="30" max="100"></progress>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section id="experiences">
        <div class="dMax">
            <h2><span class="light">Mes</span> Expériences</h2>
            <article class="msg" itemscope itemtype="http://schema.org/ProfessionalService">
                <header>
                    <h3>
                        <a href="http://www.my-serious-game.com/" title="Aller voir l'entreprise" target="_blank" rel="nofollow" itemprop="url">
                            <img src="{{ asset('images/my-serious-game-sd.jpg') }}" itemprop="image" srcset="{{ asset('images/my-serious-game-xd-2x.jpg') }} 1850w,{{ asset('images/my-serious-game-hd-2x.jpg') }} 1324w,{{ asset('images/my-serious-game-xd.jpg') }} 991w,{{ asset('images/my-serious-game-hd.jpg') }} 662w,{{ asset('images/my-serious-game-md.jpg') }} 501w,{{ asset('images/my-serious-game-ld.jpg') }} 488w,{{ asset('images/my-serious-game-sd.jpg') }} 315w" sizes="(max-width: 501px) 100vw, (max-width: 1023px) 93vw, 661px" alt="MY‑SERIOUS‑GAME">
                            <span itemprop="name">MY‑SERIOUS‑GAME</span>
                        </a>
                    </h3>
                </header>
                <section>
                    <div itemprop="member" itemscope itemtype="http://schema.org/OrganizationRole">
                        <p class="duree">Depuis <time itemprop="startDate" datetime="2015-08-06">Août 2015</time></p>
                        <meta content="Développeur informatique Full Stack en Recherche et Développement" itemprop="roleName">
                        <div itemprop="description">
                            <h4>Modélisation, conception, création & installation</h4>
                            <ul>
                                <li>De formation présentielle aux normes Expérience-API.</li>
                                <li>De bibliothèques vidéos pour serveur LMS.</li>
                                <li>De plate-formes vidéos internet multilingues et multi-pays.</li>
                                <li>D'un site internet pour un concours sur la sécurité sur les chantiers selon la formule du jeu des 7 erreurs avec calcul du ratio de bonnes réponses.</li>
                            </ul>

                            <h5>Technologies utilisées</h5>
                            <ul>
                                <li>Node.js & Socket.io.</li>
                                <li>HTML 5 avec les api storage et vidéo.</li>
                                <li>CSS 3 afin de rendre le tout responsive-design avec des animations.</li>
                                <li>JavaScript natif ES5 couplé à jQuery et les normes de tracking x-Api ainsi que SCORM 1.2 et 2004.</li>
                                <li>PHP 5.6 poo et pdo.</li>
                                <li>MySQL.</li>
                                <li>Installation et personnalisation poussé de raspbian sur le Raspberry Pi 3.</li>
                                <li>Serveur dédié avec une installation Apache, MySQL, ProFTPD et paramétrage de SSL pour du multi-domaines.</li>
                            </ul>

                            <h4>Gestion du service informatique</h4>
                            <ul>
                                <li>Définition et rédaction des premiers guides (sécurité et outils informatiques)</li>
                                <li>Gestion du parc informatique : ordinateurs (macOS, windows et linux), serveurs NAS, point WiFi, imprimantes, baie de brassage, serveur téléphonique.</li>
                                <li>Infogérance et assistance informatique clientèle.</li>
                            </ul>
                        </div>
                    </div>
                    <div id="view">
                        <img src="{{ asset('images/frederic-kuntzmann.jpg') }}" alt="Frédéric Kuntzmann - CEO de MY‑SERIOUS‑GAME">
                        <a href="https://www.linkedin.com/in/stanislasp/" title="Consultez la Recommandation sur LinkedIn" rel="nofollow" target="_blank">
                            <svg preserveAspectRatio="xMinYMin meet" width="56" height="14">
                                <g class="scaling-icon" style="fill-opacity: 1"><defs><linearGradient id="premium-linkedin-bug-color-gradient" x1="100%" y1="0%" x2="0%" y2="100%"><stop class="stop1" offset="0%" stop-color="#C5B583"></stop><stop class="stop2" offset="50%" stop-color="#AF9B62"></stop></linearGradient></defs><g class="logo-14dp"><g class="dpi-1"><g class="inbug" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M14,1.25 L14,12.75 C14,13.44 13.44,14 12.75,14 L1.25,14 C0.56,14 0,13.44 0,12.75 L0,1.25 C0,0.56 0.56,0 1.25,0 L12.75,0 C13.44,0 14,0.56 14,1.25" class="bug-text-color" fill="#FFFFFF" transform="translate(42.000000, 0.000000)"></path><path d="M56,1.25 L56,12.75 C56,13.44 55.44,14 54.75,14 L43.25,14 C42.56,14 42,13.44 42,12.75 L42,1.25 C42,0.56 42.56,0 43.25,0 L54.75,0 C55.44,0 56,0.56 56,1.25 Z M47,5 L48.85,5 L48.85,6.016 L48.893,6.016 C49.259,5.541 50.018,4.938 51.25,4.938 C53.125,4.938 54,5.808 54,8 L54,12 L52,12 L52,8.75 C52,7.313 51.672,6.875 50.632,6.875 C49.5,6.875 49,7.75 49,9 L49,12 L47,12 L47,5 Z M44,12 L46,12 L46,5 L44,5 L44,12 Z M46.335,3 C46.335,3.737 45.737,4.335 45,4.335 C44.263,4.335 43.665,3.737 43.665,3 C43.665,2.263 44.263,1.665 45,1.665 C45.737,1.665 46.335,2.263 46.335,3 Z" class="background" fill="#0073B0"></path></g><g class="linkedin-text"><path d="M40,12 L38.107,12 L38.107,11.1 L38.077,11.1 C37.847,11.518 37.125,12.062 36.167,12.062 C34.174,12.062 33,10.521 33,8.5 C33,6.479 34.291,4.938 36.2,4.938 C36.971,4.938 37.687,5.332 37.97,5.698 L38,5.698 L38,2 L40,2 L40,12 Z M36.475,6.75 C35.517,6.75 34.875,7.49 34.875,8.5 C34.875,9.51 35.529,10.25 36.475,10.25 C37.422,10.25 38.125,9.609 38.125,8.5 C38.125,7.406 37.433,6.75 36.475,6.75 L36.475,6.75 Z" fill="#000000"></path><path d="M31.7628,10.8217 C31.0968,11.5887 29.9308,12.0627 28.4998,12.0627 C26.3388,12.0627 24.9998,10.6867 24.9998,8.4477 C24.9998,6.3937 26.4328,4.9377 28.6578,4.9377 C30.6758,4.9377 31.9998,6.3497 31.9998,8.6527 C31.9998,8.8457 31.9708,8.9997 31.9708,8.9997 L26.8228,8.9997 L26.8348,9.1487 C26.9538,9.8197 27.6008,10.5797 28.6358,10.5797 C29.6528,10.5797 30.2068,10.1567 30.4718,9.8587 L31.7628,10.8217 Z M30.2268,7.9047 C30.2268,7.0627 29.5848,6.4297 28.6508,6.4297 C27.6058,6.4297 26.9368,7.0597 26.8728,7.9047 L30.2268,7.9047 Z" fill="#000000"></path><polygon fill="#000000" points="18 2 20 2 20 7.882 22.546 5 25 5 21.9 8.199 24.889 12 22.546 12 20 8.515 20 12 18 12"></polygon><path d="M10,5 L11.85,5 L11.85,5.906 L11.893,5.906 C12.283,5.434 13.031,4.938 14.14,4.938 C16.266,4.938 17,6.094 17,8.285 L17,12 L15,12 L15,8.73 C15,7.943 14.821,6.75 13.659,6.75 C12.482,6.75 12,7.844 12,8.73 L12,12 L10,12 L10,5 Z" fill="#000000"></path><path d="M7,12 L9,12 L9,5 L7,5 L7,12 Z M8,1.75 C8.659,1.75 9.25,2.341 9.25,3 C9.25,3.659 8.659,4.25 8,4.25 C7.34,4.25 6.75,3.659 6.75,3 C6.75,2.341 7.34,1.75 8,1.75 L8,1.75 Z" fill="#000000"></path><polygon fill="#000000" points="0 2 2 2 2 10 6 10 6 12 0 12"></polygon></g></g><g class="dpi-gt1" transform="scale(0.2917)"><g class="inbug" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><path d="M44.5235,0 L3.6185,0 C1.6625,0 0.0005,1.547 0.0005,3.454 L0.0005,44.545 C0.0005,46.452 1.6625,48 3.6185,48 L44.5235,48 C46.4825,48 48.0005,46.452 48.0005,44.545 L48.0005,3.454 C48.0005,1.547 46.4825,0 44.5235,0" class="bug-text-color" fill="#FFFFFF" transform="translate(143.000000, 0.000000)"></path><path d="M187.5235,0 L146.6185,0 C144.6625,0 143.0005,1.547 143.0005,3.454 L143.0005,44.545 C143.0005,46.452 144.6625,48 146.6185,48 L187.5235,48 C189.4825,48 191.0005,46.452 191.0005,44.545 L191.0005,3.454 C191.0005,1.547 189.4825,0 187.5235,0 Z M162,18 L168.5,18 L168.5,21.266 C169.437,19.388 171.838,17.7 175.445,17.7 C182.359,17.7 184,21.438 184,28.297 L184,41 L177,41 L177,29.859 C177,25.953 176.063,23.75 173.68,23.75 C170.375,23.75 169,26.125 169,29.859 L169,41 L162,41 L162,18 Z M150,41 L157,41 L157,18 L150,18 L150,41 Z M158,10.5 C158,12.985 155.985,15 153.5,15 C151.015,15 149,12.985 149,10.5 C149,8.015 151.015,6 153.5,6 C155.985,6 158,8.015 158,10.5 Z" class="background" fill="#0073B0"></path></g><g class="linkedin-text"><path d="M136,41 L130,41 L130,37.5 C128.908,39.162 125.727,41.3 122.5,41.3 C115.668,41.3 111.2,36.975 111.2,30 C111.2,23.594 114.951,17.7 121.5,17.7 C124.441,17.7 127.388,18.272 129,20.5 L129,7 L136,7 L136,41 Z M123.25,23.9 C119.691,23.9 117.9,26.037 117.9,29.5 C117.9,32.964 119.691,35.2 123.25,35.2 C126.81,35.2 129.1,32.964 129.1,29.5 C129.1,26.037 126.81,23.9 123.25,23.9 L123.25,23.9 Z" fill="#000000"></path><path d="M108,37.125 C105.722,40.02 101.156,41.3 96.75,41.3 C89.633,41.3 85.2,36.354 85.2,29 C85.2,21.645 90.5,17.7 97.75,17.7 C103.75,17.7 108.8,21.917 108.8,30 C108.8,31.25 108.6,32 108.6,32 L92,32 L92.111,32.67 C92.51,34.873 94.873,36 97.625,36 C99.949,36 101.689,34.988 102.875,33.375 L108,37.125 Z M101.75,27 C101.797,24.627 99.89,22.7 97.328,22.7 C94.195,22.7 92.189,24.77 92,27 L101.75,27 Z" fill="#000000"></path><polygon fill="#000000" points="63 7 70 7 70 27 78 18 86.75 18 77 28.5 86.375 41 78 41 70 30 70 41 63 41"></polygon><path d="M37,18 L43,18 L43,21.375 C43.947,19.572 47.037,17.7 50.5,17.7 C57.713,17.7 59,21.957 59,28.125 L59,41 L52,41 L52,29.625 C52,26.969 52.152,23.8 48.5,23.8 C44.8,23.8 44,26.636 44,29.625 L44,41 L37,41 L37,18 Z" fill="#000000"></path><path d="M29.5,6.125 C31.813,6.125 33.875,8.189 33.875,10.5 C33.875,12.811 31.813,14.875 29.5,14.875 C27.19,14.875 25.125,12.811 25.125,10.5 C25.125,8.189 27.19,6.125 29.5,6.125 L29.5,6.125 Z M26,41 L33,41 L33,18 L26,18 L26,41 Z" fill="#000000"></path><polygon fill="#000000" points="0 7 7 7 7 34 22 34 22 41 0 41"></polygon></g></g></g></g>
                            </svg>
                        </a>
                        <h3>Frédéric Kuntzmann - CEO de MY‑SERIOUS‑GAME</h3>
                        <p>Stanislas est une boite à idée !<br>Il sait relever les défis avec pro-activité, en utilisant différentes technos pour atteindre son objectif.</p>
                    </div>
                    <figure id="customers">
                        <div>
                            <img src="{{ asset('images/Alter-et-Go-md.jpg') }}" srcset="{{ asset('images/Alter-et-Go.jpg') }} 860w,{{ asset('images/Alter-et-Go-hd.jpg') }} 469w,{{ asset('images/Alter-et-Go-md.jpg') }} 364w" sizes="(max-width: 501px) 93vw, (max-width: 614px) 59vw, 364px" alt="Alter et Go">
                            <img src="{{ asset('images/Bouygues-Immobilier-md.jpg') }}" srcset="{{ asset('images/Bouygues-Immobilier.jpg') }} 860w,{{ asset('images/Bouygues-Immobilier-hd.jpg') }} 469w,{{ asset('images/Bouygues-Immobilier-md.jpg') }} 364w" sizes="(max-width: 501px) 93vw, (max-width: 614px) 59vw, 364px" alt="Bouygues Immobilier">
                            <img src="{{ asset('images/Bouygues-Construction-md.jpg') }}" srcset="{{ asset('images/Bouygues-Construction.jpg') }} 860w,{{ asset('images/Bouygues-Construction-hd.jpg') }} 469w,{{ asset('images/Bouygues-Construction-md.jpg') }} 364w" sizes="(max-width: 501px) 93vw, (max-width: 614px) 59vw, 364px" alt="Bouygues Construction">
                            <img src="{{ asset('images/Bouygues-Energies-et-Services-md.jpg') }}" srcset="{{ asset('images/Bouygues-Energies-et-Services.jpg') }} 860w,{{ asset('images/Bouygues-Energies-et-Services-hd.jpg') }} 469w,{{ asset('images/Bouygues-Energies-et-Services-md.jpg') }} 364w" sizes="(max-width: 501px) 93vw, (max-width: 614px) 59vw, 364px" alt="Bouygues Énergies et Services">
                            <img src="{{ asset('images/Groupe-Vinci-md.jpg') }}" srcset="{{ asset('images/Groupe-Vinci.jpg') }} 860w,{{ asset('images/Groupe-Vinci-hd.jpg') }} 469w,{{ asset('images/Groupe-Vinci-md.jpg') }} 364w" sizes="(max-width: 501px) 93vw, (max-width: 614px) 59vw, 364px" alt="Groupe Vinci">
                        </div>
                    </figure>
                    <div>
                        <h4>A propos de MY‑SERIOUS‑GAME:</h4>
                        <p itemprop="description">Studio dédié à la création de formations innovantes sur mesure. Fondé en <time itemprop="foundingDate" datetime="2014-09-11">2014</time> par <span itemprop="founder">Frédéric Kuntzmann</span> et <span itemprop="founder">Aurélie Duclos</span>.</p>
                    </div>
                </section>
                <footer>
                    <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <a href="http://maps.google.com?q=4+rue+Gambetta+37000+Tours" title="Voir l'emplacement sur Google Map" target="_blank" rel="nofollow">
                            <span itemprop="streetAddress">4 rue Gambetta</span>, <span itemprop="postalCode">37000</span> <span itemprop="addressLocality">Tours</span>
                        </a>
                        <meta content="+330245340440" itemprop="telephone">
                    </address>
                </footer>
            </article>
            <div class="row">
                <div class="cell">
                    <article class="sus" itemscope itemtype="http://schema.org/Corporation">
                        <header>
                            <h3>
                                <a href="http://www.sushishop.fr/" title="Aller voir l'entreprise" target="_blank" rel="nofollow" itemprop="url">
                                    <img src="{{ asset('images/sushishop-sd.jpg') }}" itemprop="image" srcset="{{ asset('images/sushishop-xd-2x.jpg') }} 1850w,{{ asset('images/sushishop-hd-2x.jpg') }} 1324w,{{ asset('images/sushishop-xd.jpg') }} 991w,{{ asset('images/sushishop-hd.jpg') }} 662w,{{ asset('images/sushishop-md.jpg') }} 501w,{{ asset('images/sushishop-ld.jpg') }} 488w,{{ asset('images/sushishop-sd.jpg') }} 315w" sizes="(max-width: 501px) 100vw, (max-width: 1023px) 45vw, 315px" alt="SushiSHOP">
                                    <span itemprop="name">SushiSHOP</span>
                                </a>
                            </h3>
                        </header>
                        <section>
                            <meta content="https://fr.wikipedia.org/wiki/Sushi_Shop" itemprop="sameAs">
                            <div itemprop="member" itemscope itemtype="http://schema.org/OrganizationRole">
                                <p class="duree">De <time itemprop="startDate" datetime="2012-05-30">Mai 2012</time> à <time itemprop="endDate" datetime="2015-05-12">Mai 2015</time></p>
                                <meta content="Employé polyvalent" itemprop="roleName">
                                <div itemprop="description">
                                    <p>Employé polyvalent dans la vente et livraison de produits alimentaire Japonais.</p>
                                </div>
                            </div>
                        </section>
                        <footer>
                            <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <a href="http://maps.google.com?q=5+place+Jean+Jaures+37000+Tours" title="Voir l'emplacement sur Google Map" target="_blank" rel="nofollow">
                                    <span itemprop="streetAddress">5 place Jean-Jaurès</span>, <span itemprop="postalCode">37000</span> <span itemprop="addressLocality">Tours</span>
                                </a>
                                <meta content="+33826826628" itemprop="telephone">
                            </address>
                        </footer>
                    </article>
                </div>
                <div class="cell">
                    <article class="ani" itemscope itemtype="http://schema.org/LocalBusiness">
                        <header>
                            <h3>
                                <a href="http://www.lesanimauxdelaferme.com/" title="Aller voir l'entreprise Les Animaux de La Ferme" target="_blank" rel="nofollow" itemprop="url">
                                    <img src="{{ asset('images/la-pierre-sd.jpg') }}" itemprop="image" srcset="{{ asset('images/la-pierre-xd-2x.jpg') }} 1850w,{{ asset('images/la-pierre-hd-2x.jpg') }} 1324w,{{ asset('images/la-pierre-xd.jpg') }} 991w,{{ asset('images/la-pierre-hd.jpg') }} 662w,{{ asset('images/la-pierre-md.jpg') }} 501w,{{ asset('images/la-pierre-ld.jpg') }} 488w,{{ asset('images/la-pierre-sd.jpg') }} 315w" sizes="(max-width: 501px) 100vw, (max-width: 1023px) 45vw, 315px" alt="La Demeure de la Pierre | Les Animaux de La Ferme">
                                    <span itemprop="name">Les Animaux de La Ferme</span>
                                </a>
                            </h3>
                            <meta content="La Demeure de La Pierre" itemprop="alternateName">
                            <meta content="Poisson Fabrice" itemprop="legalName">
                        </header>
                        <section>
                            <div itemprop="member" itemscope itemtype="http://schema.org/OrganizationRole">
                                <p class="duree">De <time itemprop="startDate" datetime="2009-11-17">Nov. 2009</time> à <time itemprop="endDate" datetime="2010-11-16">Nov. 2010</time></p>
                                <meta content="Employé polyvalent" itemprop="roleName">
                                <div itemprop="description">
                                    <p>Création du site internet et communication sur les réseaux sociaux pour le parc animalier.</p>
                                </div>
                            </div>
                            <meta content="http://www.foie-gras-vendee.fr/" itemprop="sameAs">
                        </section>
                        <footer>
                            <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                                <a href="http://maps.google.com?q=la+pierre+85440+avrillé" title="Voir l'emplacement sur Google Map" target="_blank" rel="nofollow">
                                    <span itemprop="streetAddress">La Pierre</span>, <span itemprop="postalCode">85440</span> <span itemprop="addressLocality">Avrillé</span>
                                </a>
                                <meta content="+33251223950" itemprop="telephone">
                            </address>
                        </footer>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section id="achievements">
        <div class="dMax">
            <h2><span class="light">Mes</span> Réalisations</h2>
            <div class="row">
                <div class="cell" itemscope itemtype="http://schema.org/ImageGallery">
                    <h3 class="pro" itemprop="name">Professionnel</h3>
                    <figure itemprop="workExample" itemscope itemtype="http://schema.org/CreativeWork">
                        <img src="{{ asset('images/formations-presentielle-sd.jpg') }}" srcset="{{ asset('images/formations-presentielle-xd-2x.jpg') }} 860w,{{ asset('images/formations-presentielle-hd-2x.jpg') }} 750w,{{ asset('images/formations-presentielle-md-2x.jpg') }} 702w,{{ asset('images/formations-presentielle-ld-2x.jpg') }} 470w,{{ asset('images/formations-presentielle-sd-2x.jpg') }} 456w,{{ asset('images/formations-presentielle-xd.jpg') }} 430w,{{ asset('images/formations-presentielle-hd.jpg') }} 375w,{{ asset('images/formations-presentielle-md.jpg') }} 351w,{{ asset('images/formations-presentielle-ld.jpg') }} 235w,{{ asset('images/formations-presentielle-sd.jpg') }} 228w" sizes="(max-width: 375px) 100vw, (max-width: 501px) 85vw, (max-width: 751px) 46vw, (max-width: 1023px) 23vw, 228px" alt="Vignette d'une formation présentielle" itemprop="thumbnailUrl">
                        <figcaption itemprop="description">
                            <h4 itemprop="name">Formations présentielles</h4>
                            <p>Formations en direct et en temps réel via des outils digitaux, permettant une meilleure imprégnation et implications des participants.<br>Réalisations pour Alter&Go, Bouygues Immobilier ou encore Bouygues Construction.</p>
                            <meta content="Application Web HTML5 - x-API Tin-Can" itemprop="genre">
                            <meta content="2016-09-01" itemprop="datePublished">
                        </figcaption>
                    </figure>
                    <figure itemprop="workExample" itemscope itemtype="http://schema.org/CreativeWork">
                        <img src="{{ asset('images/concours-dcb-2016-sd.jpg') }}" srcset="{{ asset('images/concours-dcb-2016-xd-2x.jpg') }} 860w,{{ asset('images/concours-dcb-2016-hd-2x.jpg') }} 750w,{{ asset('images/concours-dcb-2016-md-2x.jpg') }} 702w,{{ asset('images/concours-dcb-2016-ld-2x.jpg') }} 470w,{{ asset('images/concours-dcb-2016-sd-2x.jpg') }} 456w,{{ asset('images/concours-dcb-2016-xd.jpg') }} 430w,{{ asset('images/concours-dcb-2016-hd.jpg') }} 375w,{{ asset('images/concours-dcb-2016-md.jpg') }} 351w,{{ asset('images/concours-dcb-2016-ld.jpg') }} 235w,{{ asset('images/concours-dcb-2016-sd.jpg') }} 228w" sizes="(max-width: 375px) 100vw, (max-width: 501px) 85vw, (max-width: 751px) 46vw, (max-width: 1023px) 23vw, 228px" alt="Vignette du site Concours DCB 2016" itemprop="thumbnailUrl">
                        <figcaption itemprop="description">
                            <h4 itemprop="name">Concours DCB 2016</h4>
                            <p>Version digital d'un concours pour le Groupe Vinci. Sous le format d'un jeu les participants doivent retrouver les erreurs de sécurités qui se sont glisser sur les planches.</p>
                            <meta content="Website" itemprop="genre">
                            <meta content="2016-08-29" itemprop="datePublished">
                        </figcaption>
                    </figure>
                    <figure itemprop="workExample" itemscope itemtype="http://schema.org/CreativeWork">
                        <img src="{{ asset('images/bytubes-sd.jpg') }}" srcset="{{ asset('images/bytubes-xd-2x.jpg') }} 860w,{{ asset('images/bytubes-hd-2x.jpg') }} 750w,{{ asset('images/bytubes-md-2x.jpg') }} 702w,{{ asset('images/bytubes-ld-2x.jpg') }} 470w,{{ asset('images/bytubes-sd-2x.jpg') }} 456w,{{ asset('images/bytubes-xd.jpg') }} 430w,{{ asset('images/bytubes-hd.jpg') }} 375w,{{ asset('images/bytubes-md.jpg') }} 351w,{{ asset('images/bytubes-ld.jpg') }} 235w,{{ asset('images/bytubes-sd.jpg') }} 228w" sizes="(max-width: 375px) 100vw, (max-width: 501px) 85vw, (max-width: 751px) 46vw, (max-width: 1023px) 23vw, 228px" alt="Vignette du site de partage de vidéo BYtubES" itemprop="thumbnailUrl">
                        <figcaption itemprop="description">
                            <h4 itemprop="name">BYtubES</h4>
                            <p>Plateforme de partage de vidéos online demandée par les compagnons de Bouygues Énergies et Services pour transmettre plus rapidement et facilement les bonnes pratiques.</p>
                            <ul>
                                <li><a href="https://www.bytubes.fr/" title="Voir la bibliothèque BYtubES" target="_blank" itemprop="url">Voir la bibliothèque BYtubES</a></li>
                            </ul>
                            <meta content="Website" itemprop="genre">
                            <meta content="2016-07-18" itemprop="datePublished">
                        </figcaption>
                    </figure>
                    <figure itemprop="workExample" itemscope itemtype="http://schema.org/CreativeWork">
                        <img src="{{ asset('images/les-essentiels-de-la-construction-sd.jpg') }}" srcset="{{ asset('images/les-essentiels-de-la-construction-xd-2x.jpg') }} 860w,{{ asset('images/les-essentiels-de-la-construction-hd-2x.jpg') }} 750w,{{ asset('images/les-essentiels-de-la-construction-md-2x.jpg') }} 702w,{{ asset('images/les-essentiels-de-la-construction-ld-2x.jpg') }} 470w,{{ asset('images/les-essentiels-de-la-construction-sd-2x.jpg') }} 456w,{{ asset('images/les-essentiels-de-la-construction-xd.jpg') }} 430w,{{ asset('images/les-essentiels-de-la-construction-hd.jpg') }} 375w,{{ asset('images/les-essentiels-de-la-construction-md.jpg') }} 351w,{{ asset('images/les-essentiels-de-la-construction-ld.jpg') }} 235w,{{ asset('images/les-essentiels-de-la-construction-sd.jpg') }} 228w" sizes="(max-width: 375px) 100vw, (max-width: 501px) 85vw, (max-width: 751px) 46vw, (max-width: 1023px) 23vw, 228px" alt="Vignette du module de formation des Essentiels de la Construction" itemprop="thumbnailUrl">
                        <figcaption itemprop="description">
                            <h4 itemprop="name">Les Essentiels de la Construction</h4>
                            <p>Plateforme de fiches d'informations au formats vidéo réaliser pour Bouygues Construction afin d'expliquer des choix techniques à un perssonel comptable.<br>Tracking au format SCORM 2004 sur la LRS du client.</p>
                            <meta content="Module HTML5 - SCORM 2004" itemprop="genre">
                            <meta content="2015-10-01" itemprop="datePublished">
                        </figcaption>
                    </figure>
                </div>
                <div class="cell" itemscope itemtype="http://schema.org/ImageGallery">
                    <h3 class="per" itemprop="name">Personnel</h3>
                    <figure itemprop="workExample" itemscope itemtype="http://schema.org/CreativeWork">
                        <img src="{{ asset('images/pptx-enigma-sd.jpg') }}" srcset="{{ asset('images/pptx-enigma-xd-2x.jpg') }} 860w,{{ asset('images/pptx-enigma-hd-2x.jpg') }} 750w,{{ asset('images/pptx-enigma-md-2x.jpg') }} 702w,{{ asset('images/pptx-enigma-ld-2x.jpg') }} 470w,{{ asset('images/pptx-enigma-sd-2x.jpg') }} 456w,{{ asset('images/pptx-enigma-xd.jpg') }} 430w,{{ asset('images/pptx-enigma-hd.jpg') }} 375w,{{ asset('images/pptx-enigma-md.jpg') }} 351w,{{ asset('images/pptx-enigma-ld.jpg') }} 235w,{{ asset('images/pptx-enigma-sd.jpg') }} 228w" sizes="(max-width: 375px) 100vw, (max-width: 501px) 85vw, (max-width: 751px) 46vw, (max-width: 1023px) 23vw, 228px" alt="Logo de pptx-enigma" itemprop="thumbnailUrl">
                        <figcaption itemprop="description">
                            <h4 itemprop="name">PPTX-Enigma</h4>
                            <p>PPTX-Enigma est une librairie PHP destiner à l'extraction de voix-off des zones de commentaires des PowerPoints.</p>
                            <ul>
                                <li>Créer le <time itemprop="dateCreated" datetime="2017-02-18">18 Février 2017</time></li>
                                <li><a href="https://github.com/Stanislas-Poisson/pptx-enigma" title="Voir la librairie sur Github" target="_blank" itemprop="url">Voir la librairie sur Github</a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <figure itemprop="workExample" itemscope itemtype="http://schema.org/CreativeWork">
                        <div class="bgLight">
                            <img src="{{ asset('images/KMark-sd.jpg') }}" srcset="{{ asset('images/KMark-sd.jpg') }} 228w,{{ asset('images/KMark-ld.jpg') }} 235w,{{ asset('images/KMark-md.jpg') }} 351w,{{ asset('images/KMark-hd.jpg') }} 375w,{{ asset('images/KMark-xd.jpg') }} 430w,{{ asset('images/KMark-sd-2x.jpg') }} 456w,{{ asset('images/KMark-ld-2x.jpg') }} 470w,{{ asset('images/KMark-md-2x.jpg') }} 702w,{{ asset('images/KMark-hd-2x.jpg') }} 750w,{{ asset('images/KMark-xd-2x.jpg') }} 860w" sizes="(max-width: 375px) 100vw, (max-width: 501px) 85vw, (max-width: 751px) 46vw, (max-width: 1023px) 23vw, 228px" alt="Logo de kmark" itemprop="thumbnailUrl">
                        </div>
                        <figcaption itemprop="description">
                            <h4 itemprop="name">KMark <em>v<span itemprop="version">0.5 (beta)</span></em></h4>
                            <p>KMark est une librairie PHP ayant permettant d'écrire du MarkDown en ajoutant des <em>id</em> et <em>class</em> au éléments ainsi rédigés.</p>
                            <ul>
                                <li>Créer le <time itemprop="dateCreated" datetime="2013-02-26">26 Février 2013</time></li>
                                <li><a href="https://github.com/Stanislas-Poisson/KMark" title="Voir la librairie sur Github" target="_blank" itemprop="url">Voir la librairie sur Github</a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <figure itemprop="workExample" itemscope itemtype="http://schema.org/CreativeWork">
                        <img src="{{ asset('images/Papillons-au-Clair-de-Lune-sd.jpg') }}" srcset="{{ asset('images/Papillons-au-Clair-de-Lune-xd-2x.jpg') }} 860w,{{ asset('images/Papillons-au-Clair-de-Lune-hd-2x.jpg') }} 750w,{{ asset('images/Papillons-au-Clair-de-Lune-md-2x.jpg') }} 702w,{{ asset('images/Papillons-au-Clair-de-Lune-ld-2x.jpg') }} 470w,{{ asset('images/Papillons-au-Clair-de-Lune-sd-2x.jpg') }} 456w,{{ asset('images/Papillons-au-Clair-de-Lune-xd.jpg') }} 430w,{{ asset('images/Papillons-au-Clair-de-Lune-hd.jpg') }} 375w,{{ asset('images/Papillons-au-Clair-de-Lune-md.jpg') }} 351w,{{ asset('images/Papillons-au-Clair-de-Lune-ld.jpg') }} 235w,{{ asset('images/Papillons-au-Clair-de-Lune-sd.jpg') }} 228w" sizes="(max-width: 375px) 100vw, (max-width: 501px) 85vw, (max-width: 751px) 46vw, (max-width: 1023px) 23vw, 228px" alt="Vignette de l'artwork Papillons au clair de lune" itemprop="thumbnailUrl">
                        <figcaption itemprop="description">
                            <h4 itemprop="name">Papillons au clair de lune</h4>
                            <p>Un fond d'écran créer pour un site internet, lune et décor se reflétant dans l'eau légèrement trouble de la vie, agrémenter de papillons lunaires.</p>
                            <ul>
                                <li><i>Genre:</i> <span itemprop="genre">ArtWork</span></li>
                                <li><i>Publier:</i> <time itemprop="dateCreated" datetime="2011-10-21">21 Octobre 2011</time></li>
                                <li><a href="http://zairakai.deviantart.com/art/Papillons-au-Clair-de-Lune-264493399" title="Voir l'œuvre sur DeviantArt" target="_blank" itemprop="url">Voir l'œuvre sur DeviantArt</a></li>
                            </ul>
                        </figcaption>
                    </figure>
                    <figure itemprop="workExample" itemscope itemtype="http://schema.org/CreativeWork">
                        <img src="{{ asset('images/Id-Fight-sd.jpg') }}" srcset="{{ asset('images/Id-Fight-xd-2x.jpg') }} 860w,{{ asset('images/Id-Fight-hd-2x.jpg') }} 750w,{{ asset('images/Id-Fight-md-2x.jpg') }} 702w,{{ asset('images/Id-Fight-ld-2x.jpg') }} 470w,{{ asset('images/Id-Fight-sd-2x.jpg') }} 456w,{{ asset('images/Id-Fight-xd.jpg') }} 430w,{{ asset('images/Id-Fight-hd.jpg') }} 375w,{{ asset('images/Id-Fight-md.jpg') }} 351w,{{ asset('images/Id-Fight-ld.jpg') }} 235w,{{ asset('images/Id-Fight-sd.jpg') }} 228w" sizes="(max-width: 375px) 100vw, (max-width: 501px) 85vw, (max-width: 751px) 46vw, (max-width: 1023px) 23vw, 228px" alt="Vignette de l'artwork Id Fight" itemprop="thumbnailUrl">
                        <figcaption itemprop="description">
                            <h4 itemprop="name">Id Fight</h4>
                            <p>Colorisation en aplat d'un dessin au trait en noir et blanc tirée d'un manhwa.</p>
                            <ul>
                                <li><i>Genre:</i> <span itemprop="genre">ArtWork</span></li>
                                <li><i>Publier:</i> <time itemprop="dateCreated" datetime="2011-03-15">15 Mars 2011</time></li>
                                <li><a href="http://zairakai.deviantart.com/art/Id-Fight-200981455" title="Voir l'œuvre sur DeviantArt" target="_blank" itemprop="url">Voir l'œuvre sur DeviantArt</a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="dMax">
            <h2>Contact</h2>
            <div class="row">
                <address itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                    <p class="tel" itemprop="telephone">06.38.32.83.63</p>
                    <p class="home">
                        <span itemprop="streetAddress">Quartier des Fontaines</span>, <span itemprop="postalCode">37200</span> <span itemprop="addressLocality">Tours</span>
                        <meta content="Centre, France" itemprop="addressCountry">
                    </p>
                    <p class="vcard"><a href="{{ asset('files/stanislas-poisson-vcard.vcf') }}" title="Télécharger ma vCard" target="_blank" rel="nofollow">Ajouter moi à vos contacts</a></p>
                </address>
                {{ Form::open(['route' => ['home.store'], 'method' => 'post', 'autocomplete' => 'off']) }}

                    <div class="field">
                        {{ Form::text('name', old('name', null), ['id' => 'name', 'required', 'class' => ($errors->has('name') ? 'wrong' : '')]) }}
                        {{ Form::label('name', 'Votre nom') }}
                        <i class="material-icons">person</i>
                    </div>

                    <div class="field">
                        {{ Form::email('email', old('email', null), ['id' => 'email', 'required', 'class' => ($errors->has('email') ? 'wrong' : '')]) }}
                        {{ Form::label('email', 'Votre e-mail') }}
                        <i class="material-icons">email</i>
                    </div>

                    <div class="field">
                        {{ Form::textarea('msg', old('msg', null), ['id' => 'msg', 'class' => ($errors->has('msg') ? 'wrong' : '')]) }}
                        {{ Form::label('msg', 'Votre message') }}
                        <i class="material-icons">create</i>
                    </div>

                    @if (count($errors) > 0)
                        <div id="status" class="wrong">
                    @else
                        <div id="status">
                    @endif
                        @if ($errors->has('name'))
                            <span class="helper">{{ $errors->first('name') }}</span>
                        @elseif ($errors->has('email'))
                            <span class="helper">{{ $errors->first('email') }}</span>
                        @elseif ($errors->has('msg'))
                            <span class="helper">{{ $errors->first('msg') }}</span>
                        @else
                            <p>Tous les champs sont requis.</p>
                        @endif
                    </div>
                    <div class="field txr">
                        <button type="submit">Envoyer<i class="material-icons">send</i></button>
                    </div>
                {{ Form::close() }}
                <aside>
                    <h3>Retrouvez-moi sur :</h3>
                    <ul>
                        <li>
                            <a itemprop="sameAs" target="_blank" href="https://github.com/Stanislas-Poisson/">
                                <img src="{{ asset('images/github.svg') }}" alt="Github">
                            </a>
                        </li>
                        <li>
                            <a itemprop="sameAs" target="_blank" href="https://plus.google.com/+StanislasPoisson">
                                <img src="{{ asset('images/google_plus.svg') }}" alt="Google plus">
                            </a>
                        </li>
                        <li>
                            <a itemprop="sameAs" target="_blank" href="https://twitter.com/StanislasP">
                                <img src="{{ asset('images/twitter.svg') }}" alt="Twitter">
                            </a>
                        </li>
                        <li>
                            <a itemprop="sameAs" target="_blank" href="https://fr.linkedin.com/in/stanislasp">
                                <img src="{{ asset('images/linkedin.svg') }}" alt="Linkedin">
                            </a>
                        </li>
                        <li>
                            <a itemprop="sameAs" target="_blank" href="https://open.spotify.com/user/poisson-stanislas">
                                <img src="{{ asset('images/spotify.svg') }}" alt="Spotify">
                            </a>
                        </li>
                    </ul>
                    <link itemprop="sameAs" href="https://www.grafikart.fr/profil/8304">
                    <link itemprop="sameAs" href="https://www.chooseyourboss.com/users/67991">
                    <link itemprop="sameAs" href="https://remixjobs.com/cv/Stanislas-Poisson/578a08a1e7901">
                    <link itemprop="sameAs" href="https://www.facebook.com/P0issonStanislas">
                    <link itemprop="sameAs" href="http://www.commentcamarche.net/profile/user/Stanislas%20Poisson">
                </aside>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <meta content="Stanislas Poisson" itemprop="name">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-29685268-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-29685268-1');
    </script>
</body>
</html>
