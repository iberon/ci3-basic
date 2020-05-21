<div class="back-container">
    <a class="back-link" href="<?php echo site_url('users/'); ?>"><< Back</a>
</div>
<div class="card">
    <h3><?php echo $title; ?></h3>
    <label for="name">Name</label>
    <input type="text" name="name" value="<?php echo $user['name']; ?>" disabled/>
    <br />
    <label for="email">Email</label>
    <input type="text" name="email" value="<?php echo $user['email']; ?>" disabled/>
    <br />

    <label for="birth_date">Date of Birth</label>
    <input type="date" name="birth_date" value="<?php echo $user['birth_date']; ?>" disabled/>
    <br />

    <label for="favorite_color">Favorite Color</label>
    <input type="color" name="favorite_color" value="<?php echo $user['favorite_color']; ?>" disabled/>
    <br />
</div>