<?php
    include_once "Controller/controller.php";
?>
<nav class="navbar">
    <ul id="liste">
        <li class="accueil active"><a href="/index.php?action=accueil"><?php echo $tabCategories[0]['libelle']; ?></a></li>
        <li class="sport"><a href="/index.php?action=sport"><?php echo $tabCategories[1]['libelle']; ?></a></li>
        <li class="sante"><a href="/index.php?action=education"><?php echo $tabCategories[2]['libelle']; ?></a></li>
        <li class="education"><a href="/index.php?action=sante" onclick="handdleEducation()"><?php echo $tabCategories[3]['libelle']; ?></a></li>
        <li class="politique"><a href="/index.php?action=politique" onclick="handdlePolitique()"><?php echo $tabCategories[4]['libelle']; ?></a></li>
    </ul>
</nav>