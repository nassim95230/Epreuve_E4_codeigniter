<div class="login_wrapper">
    <?php echo validation_errors(); ?>
    <?php echo form_open('Login/Index'); ?>
    <div class="champ_wrapper">
        <label for="login">Login :</label>
    </div>

    <input type="text" name="login" value="<?php echo $this->input->post('nom'); ?>" id="login"/><br/>
    <div class="champ_wrapper" style="margin-top: 15px;">
        <label for="password">Password :</label>
    </div>

    <input type="password" name="password" id="passowrd"/><br/>
    <div class="btn_wrapper">
        <button class="myButton" type="submit">Connexion</button>
        <?php echo form_close(); ?>
    </div>
</div>