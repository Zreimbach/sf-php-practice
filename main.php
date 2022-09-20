<!DOCTYPE html>
<html lang="ru">
<head>
    <meta character="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP Practice</title>
</head>

<body>
    <div class="flex-container">
        
        <div class="header">
            <?php include 'logo.php' ?>
            <?php include 'menu.php' ?>
        </div>

        <div class="about_me">
            <?php include 'index.php'; ?>

            <h1>  <?php  echo $p  ?> </h1>
                
            <div class="data">
                
                <div>
                    <?php  echo '<img src="img/photo.jpg">'; ?>                    
                </div>

                <div class="fullname">
                    <p> Меня зовут: 
                    <?php echo $name, ' ', $surname . '<br>'; 
                            echo 'Город:', ' ', $city; ?>                                      
                    </p> 
            
                    <p> Мне
                    <?php  echo $age;   ?>          
                    года </p>
                    <p> У меня есть небольшой опыт работы с PHP и SQL. </p>
                    <p> Когда-то я чуть не стал PHP программистом. Бог отвел... </p>
                </div>
            </div>
        </div>

        <div class="knowledge">                      
            <?php  include 'knowledge.php'; ?>
            <?php   echo $a, ' ', $b, ' ', $c; ?> <br>
                                
            <?php
                $a = 30;
                $b = 20;
                $c = $a + $b;
                echo 'Переменная с = ', $c;
            ?>   <br>                
                <?php
                echo $d;
            ?> 
        </div>

        <div class="article">
            <p class="text">
                Не удалось заинклюдить <strong>main.php</strong> в файле <strong>index.php</strong>.
                Появлялись ошибки и невозможно было обратиться к переменным. Поэтому заинклюдил наоборот - 
                <strong>index.php</strong> в файле <strong>main.php</strong>. Это выглядит даже как-то логичнее.
            </p>
        </div>

        <?php include 'footer.php' ?>

    </div>
</body>
</html>
