<?php echo $data['title'];
?>

<form action="<?php echo URLROOT; ?>/app/controllers/home" method ="POST">
<input type="text" placeholder="Username *" name="username">
<span class="invalidFeedback">
    <?php echo $data['usernameError']; ?>
</span>

<input type="password" placeholder="Password *" name="password">
<span class="invalidFeedback">
    <?php echo $data['passwordError']; ?>
</span>

<button id="submit" type="submit" value="submit">Submit</button>

</form>