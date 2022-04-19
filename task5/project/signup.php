<?php
$title = "signup";
include_once "layouts/header.php";
include_once "App/Http/Middlewares/guest.php";
include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";
?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> <?= $title ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <?= getError('something'); ?>
                                    <?= getError('mail'); ?>
                                    <form action="App/Http/Post/signup.php" method="post">
                                        <div class="form-group">
                                            <label for="first_name">first name</label>
                                            <input type="text" name="first_name"  id="first_name" value="<?= old('first_name');?>">
                                            <?= getError('first_name'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="last_name">last name </label>
                                            <input type="text" name="last_name"  id="last_name" value="<?= old('last_name');?>">
                                            <?= getError('last_name'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">email address</label>
                                            <input type="email" name="email"  id="email" value="<?= old('email');?>">
                                            <?= getError('email'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">phone</label>
                                            <input type="number" name="phone" value="<?= old('phone');?>">
                                            <?= getError('phone'); ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="password">password</label>
                                            <input type="password" name="password" id="password">
                                            <?= getError('password'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="password_confirmation">password confirmation</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation">
                                            <?= getError('password_confirmation'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">gender</label>
                                            <select name="gender" class="form-control" id="gender">
                                                <option <?= old('gender') == 'm' ? 'selected' : '' ?> value="m">male</option>
                                                <option <?= old('gender') == 'f' ? 'selected' : '' ?>  value="f">female</option>
                                            </select>
                                            <?= getError('gender'); ?>
                                        </div>
                                        <div class="button-box mt-5">
                                            <button type="submit"><span><?= $title ?></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once "layouts/footer.php";
include_once "layouts/footer-scripts.php";
?>