
<nav class="top-nav">
    <ul>
        <li>
            <a href="<?php echo URLROOT; ?>/index">Дома</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/about">Актери</a>
        </li>
        <li>
            <a href="<?php echo URLROOT; ?>/projects">Претстави</a>
        </li>
     
        <li class="btn-login">
            <?php 
            session_start();
            if(isset($_SESSION['loggedUser'])) : ?>
                <a href="<?php echo URLROOT; ?>/public/home/logout">Одјави се</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/public/home/login">Најава</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>