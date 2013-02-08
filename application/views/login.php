    <?php echo validation_errors(); ?>
    <? echo form_open('login/index');?>
    <label>Usuario</label><br>
    <input type="text" id="username" name="username"><br><br>
    <label>Password</label><br>
    <input type="password" id="password" name="password">
    <br><br>
    <input type="submit" value="Enviar">
    <? echo form_close();?>
