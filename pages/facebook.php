<!DOCTYPE html>
<!-- Inclusion des variables d'initialisation -->
<?php require_once 'includes/init.php'; ?>
<html>
    <head>
        <title>Facebook insoumis - Portail insoumis</title>
        <!-- Inclusion des headers communs -->
        <?php require_once 'includes/common-headers.php'; ?>
    </head>
    <body>
        <div class="column">
            <a name="top"></a>
            <h1>Facebook insoumis</h1>
            <hr />
            <?php
            // Integre la gestion du formulaire, désactivé en attente d'un captcha
            include('contact/send.php');
            ?>
            <!-- ----------------------------- -->
            <!-- --  Inclusion du top menu  -- -->
            <!-- ----------------------------- -->
            <?php
            $activeTab = [];
            $activeTab['facebook'] = true;
            require_once 'includes/top-menu.php';
            ?>
            <!-- ----------------------------- -->
            <!-- ---  Contenu de la page  ---- -->
            <!-- ----------------------------- -->
            <div class="header facebook">
                <div class="fi"></div>
            </div>
            <hr />
            <div class="content">
                <h2>Facebook</h2>
                <p class="description">Abonnez-vous aux comptes Facebook des personnalités liées au programme de la France Insoumise ou aux pages administrées par des collectifs indépendants d'insoumis.</p>
                <div class="list">
                    <ul>
                        <?php
// Initialise les contenus a afficher
                        $file = '../contents/facebook.xml';
// Si le fichier existe
                        if (file_exists($file)) {
                            // Charge le fichier
                            $file = simplexml_load_file($file);
                            // Compte les contenus
                            $contents = count($file->content);
                            // Pour chaque contenu
                            for ($index = 0; $index < $contents; $index++) {
                                ?>
                                <li<?php if ($index % 3 == 0) { ?> class="break"<?php } ?>>
                                    <a href="<?php echo $file->content[$index]->url; ?>" title="<?php echo $file->content[$index]->title; ?>" target="_blank">
                                        <img src="<?php echo $root.$illustrations; ?>/<?php echo $file->content[$index]->img; ?>" alt="<?php echo $file->content[$index]->title; ?>" width="250" height="200" />
                                        <h3><?php echo $file->content[$index]->title; ?></h3>
                                        <p><?php echo $file->content[$index]->description; ?></p>
                                    </a>
                                </li>					
                                <?php
                            }
                        }
                        ?>
                    </ul>
                    <hr />
                </div>
                <div class="end">
                    <p><a href="<?php echo $root; ?>" title="Revenir à l'accueil">Revenir à l'accueil</a></p>
                </div>
            </div>
            <hr />
            <?php
            // Integre le formulaire de contact, désactivé en attente d'un captcha
            include('contact/form.php');
            ?>
        </div>
    </body>
</html>