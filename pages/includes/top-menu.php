

<ul class="menu">
    <li class="home <?= isset($activeTab['home']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['home']) ? $root : '#top'; ?>" title="Accueil">Accueil</a>
    </li>
    <li class="websites <?= isset($activeTab['websites']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['websites']) ? $root.'sites-internet' : '#top'; ?>" title="Sites Internet">Sites Internet</a>
    </li>
    <li class="youtube <?= isset($activeTab['youtube']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['youtube']) ? $root.'youtube' : '#top'; ?>" title="YouTube">YouTube</a>
    </li>
    <li class="twitter <?= isset($activeTab['twitter']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['twitter']) ? $root.'twitter' : '#top'; ?>" title="Twitter">Twitter</a>
    </li>
    <li class="facebook <?= isset($activeTab['facebook']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['facebook']) ? $root.'facebook' : '#top'; ?>" title="Facebook">Facebook</a>
    </li>
    <li class="others <?= isset($activeTab['others']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['others']) ? $root.'autres-ressources' : '#top'; ?>" title="Autres ressources">Autres ressources</a>
    </li>
    <li class="contact <?= isset($activeTab['contact']) ? 'active' : null; ?>">
        <a href="<?= !isset($activeTab['contact']) ? '#nous-contacter' : '#top'; ?>" title="Nous contacter">Nous contacter</a>
    </li>
</ul>