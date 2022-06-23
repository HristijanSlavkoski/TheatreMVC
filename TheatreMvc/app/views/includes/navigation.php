<div class="navbar">
    <nav class="top-nav">
        <ul>
            <li>
                <a href="<?php echo URLROOT; ?>/public/home/dashboard">Дома</a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/public/actors/show">Актери</a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/public/shows/show">Претстави</a>
            </li>
            <li>
                <a href="<?php echo URLROOT; ?>/public/shows/buyticket">Купи билет</a>
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
</div>