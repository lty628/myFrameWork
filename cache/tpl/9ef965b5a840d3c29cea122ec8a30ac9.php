
<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>注册</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="static/userRL/css/reset.css">
        <link rel="stylesheet" href="static/userRL/css/supersized.css">
        <link rel="stylesheet" href="static/userRL/css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body>

        <div class="page-container">
            <h1>管理员后台注册</h1>
            <form action="<?=$sr;?>?c=User&a=registerUser" method="post">
                <input type="text" name="username" class="username" placeholder="管理员账号">
                <input type="password" name="password" class="password" placeholder="管理员密码">
                <input type="password" name="repassword" class="repassword" placeholder="管理员密码确认">
                <button type="submit">注册</button>
                <div class="error"><span>+</span></div>
            </form>
          <!--   <div class="connect">
                <p>Or connect with:</p>
                <p>
                    <a class="facebook" href=""></a>
                    <a class="twitter" href=""></a>
                </p>
            </div> -->
        </div>
     <!--    <div align="center">Collect from <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></div> -->

        <!-- Javascript -->
        <script src="static/userRL/js/jquery-1.8.2.min.js"></script>
        <script src="static/userRL/js/supersized.3.2.7.min.js"></script>
        <script src="static/userRL/js/supersized-init.js"></script>
        <script src="static/userRL/js/scripts.js"></script>

    </body>

</html>

