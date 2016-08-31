<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Test work</title>

    <script src="/template/jquery-3.1.0.js"></script>
    <link href="/template/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link href="/template/css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header">
            <div id="logo">
                <h1><a href="#">COMMENTS</a></h1>
            </div>
        </div>
    </div>
    <!-- end #header -->
    <div id="page">
        <div id="page-bgtop">
            <div id="page-bgbtm">
                <div id="content">
                    <?php foreach ($commentsList as $commentsItem):?>
                        <div class="post">
                            <h2 class="title"><a href='/comments/<?php echo $commentsItem['id'] ;?>'><?php echo $commentsItem['author_name'].' # '.$commentsItem['id'];?></a></h2>
                            <p class="meta">Posted on <?php echo $commentsItem['date'];?></p>
                            <p class="meta">E-mail: <?php echo $commentsItem['email'];?></p>
                                <div class="entry">
                                    <p><img src="<?php echo $commentsItem['preview'];?>" width="320" height="240" alt="" /></p>
                                    <p><?php echo $commentsItem['text_message'];?></p>
                                </div>
                        </div>
                    <?php endforeach;?>
                    <div style="clear: both;">&nbsp;</div>
                </div>
                <!-- end #content -->
                <div style="clear: both;">&nbsp;</div>
            </div>
        </div>
    </div>
<!-- Содержимое контейнера -->
<div class="panel-body">
    <!-- Сообщение, отображаемое в случае успешной отправки данных -->
    <div class="alert alert-success hidden" role="alert" id="successMessage">
        <strong>Внимание!</strong> Ваш комментарий отправлено.
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <!-- Контейнер, содержащий форму обратной связи -->
                <div class="panel panel-info">
                    <!-- Заголовок контейнера -->
                    <div class="panel-heading">
                        <h3 class="panel-title">Форма отправки комментариев</h3>
                    </div>
                    <!-- Содержимое контейнера -->
                    <div class="panel-body">
                        <!-- Сообщение, отображаемое в случае успешной отправки данных -->
                        <div class="alert alert-success hidden" role="alert" id="successMessage">
                            <strong>Внимание!</strong> Ваше сообщение успешно отправлено.
                        </div>
                        <!-- Форма отправки -->
                        <form id="contactForm">
                            <div class="row">
                                <div id="error" class="col-sm-12" style="color: #ff0000; margin-top: 5px; margin-bottom: 5px;"></div>
                                <!-- Имя и email пользователя -->
                                <div class="col-sm-6">
                                    <!-- Имя пользователя -->
                                    <div class="form-group has-feedback">
                                        <label for="name" class="control-label">Введите Ваше имя:</label>
                                        <input type="text" id="name" name="name" class="form-control" required="required" value="" placeholder="Например, Иван Иванович" minlength="2" maxlength="30">
                                        <span class="glyphicon form-control-feedback"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <!-- Email пользователя -->
                                    <div class="form-group has-feedback">
                                        <label for="email" class="control-label">Введите адрес email:</label>
                                        <input type="email" id="email" name="email" class="form-control" required="required"  value="" placeholder="Например, ivan@mail.ru" maxlength="30">
                                        <span class="glyphicon form-control-feedback"></span>
                                    </div>
                                </div>
                            </div>
                            <!-- Сообщение пользователя -->
                            <div class="form-group has-feedback">
                                <label for="message" class="control-label">Введите сообщение:</label>
                                <textarea id="message" class="form-control" rows="3" placeholder="Введите сообщение (до 500 символов)"  maxlength="500" required="required"></textarea>
                            </div>
                            <!-- Кнопка, отправляющая форму -->
                            <button type="submit" class="btn btn-primary pull-left">Предварительный просмотр</button>
                            <button type="submit" class="btn btn-primary pull-right">Оставить комментарий</button>
                        </form><!-- Конец формы -->
                    </div>
                </div><!-- Конец контейнера -->
            </div>
        </div>
    </div>
    <!-- end #page -->
</div>
<div id="footer">
    <p>Test work company <a href="http://beejee.ru/">BeeJee</a></p>
</div>
<!-- end #footer -->
</body>
</html>
