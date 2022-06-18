
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
            <?php if(isset($_SESSION['user_id'])) : ?>
                <a href="<?php echo URLROOT; ?>/users/logout">Одјави се</a>
            <?php else : ?>
                <a href="<?php echo URLROOT; ?>/users/login">Најава</a>
            <?php endif; ?>
        </li>
    </ul>
</nav>