<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/templates/styles/index.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Student Portal</title>
</head>
<body>
<?php include 'E:\village\base\footer.php'; ?>

<div class="wrapper">
    <div class="menu">
        <nav id="menuVertical">
            <ul>
                <li><a href="#2"><div class="img_n"><img src="/templates/images/categories.png"></div><span>+ Навігація</span></a>
                    <ul>
                        <?php include 'E:\village\app\views\main_page\categories.php'; ?>
                    </ul>
                </li>
                <li><a href="#3"><div class="img_n"><img src="/templates/images/login.png"></div><span>+ Профіль</span></a>
                    <ul>
                        <li><a href="#3-1">Мій профіль</a></li>
                        <li><a href="#3-2">Мої вправи</a></li>
                        <li><a href="#3-2">Мої завдання</a></li>
                    </ul>
                </li>

                <li><a href="#1"><div class="img_n"><img src="/templates/images/question.png"></div><span>Запитати</span></a></li>
                <li><a href="#4"><div class="img_n"><img src="/templates/images/thief.png"></div><span>Шахраї</span></a></li>

                <li><a href="#5"><div class="img_n"><img src="/templates/images/door.png"></div><span>Вихід</span></a></li>
            </ul>
        </nav>
    </div>
<img id="Bear" src="/templates/images/logo.png" alt="Мишка">
</div>

<?php include 'E:\village\base\cellar.php'; ?>
</body>
</html>
