<?php
    include_once "Controller/controller.php";
?>
<nav class="navbar">
    <ul>
        <li class="active accueil"><a href="/esp-news/index.php?action=accueil"><?php echo $tabCategories[0]['libelle']; ?></a></li>
        <li class="sport"><a href="/esp-news/index.php?action=sport"><?php echo $tabCategories[1]['libelle']; ?></a></li>
        <li class="sante"><a href="/esp-news/index.php?action=education"><?php echo $tabCategories[2]['libelle']; ?></a></li>
        <li class="education"><a href="/esp-news/index.php?action=sante"><?php echo $tabCategories[3]['libelle']; ?></a></li>
        <li class="politique"><a href="/esp-news/index.php?action=politique"><?php echo $tabCategories[4]['libelle']; ?></a></li>
    </ul>
</nav>