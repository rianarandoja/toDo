
<main>
    <div class="container">
        <div class="col s12">
            <h3><?php echo lang('settings')?></h3>
        </div>

        <div class="row">
            <div class="col s12 m4 l4">
                <form id = "changePass" method="post" action="<?php echo site_url('Settings/changePassword') ?>">
                    <?php echo validation_errors(); ?>
                    <div class="input-field">
                        <input type="password" name="oldpswd" id="oldpassword">
                        <label for="oldpassword"><?php echo lang('old_password')?></label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="pswd" id="password">
                        <label for="password"><?php echo lang('password')?></label>
                    </div>
                    <div class="input-field">
                        <input type="password" name="pswd2" id="password2" onkeyup="checkPassword()">
                        <label for="password2"><?php echo lang('password_again')?></label>
                    </div>
                    <button type="submit" name="submit" class="col s12 btn btn-large waves-effect"><?php echo lang('change_password')?></button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col s12 m4 l4">
                <form id = "changeEmail" method="post" action="<?php echo site_url('Settings/changeEmail') ?>">
                    <div class="input-field">
                        <input type="email" title="Email" name="email" id="email">
                        <label for="email"><?php echo lang('email')?></label>
                    </div>
                    <button type="submit" name="submit" class="col s12 btn btn-large waves-effect"><?php echo lang('change_email')?></button>
                </form>
            </div>

        </div>


        <div class="row">
            <div class="col s12 m4 l4">
                <form id = "deleteAccount" method="post" action="<?php echo site_url('Settings/deleteAccount') ?>">
                    <button type="submit" name="submit" class="col s12 btn btn-large waves-effect"><?php echo lang('deleteAccount')?></button>
                </form>
            </div>
        </div>



    </div>
</main>