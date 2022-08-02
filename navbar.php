<?php
    include_once "Controller/controller.php";
?>
<nav class="navbar">
    <ul>
        <li class="active accueil"><a href="index.php?action=accueil"><?php echo $tabCategories[0]['intitule']; ?></a></li>
        <li class="sport"><a href="index.php?action=sport"><?php echo $tabCategories[1]['intitule']; ?></a></li>
        <li class="sante"><a href="index.php?action=education"><?php echo $tabCategories[2]['intitule']; ?></a></li>
        <li class="education"><a href="index.php?action=sante"><?php echo $tabCategories[3]['intitule']; ?></a></li>
        <li class="politique"><a href="index.php?action=politique"><?php echo $tabCategories[4]['intitule']; ?></a></li>
    </ul>
</nav>