<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Это первый блог</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
      <body bgcolor="#000" background="background.jpg">
        <div>
            
            <div class="container">
                <h1 align="center">Интересная информация</h1>
                <h3><?php foreach($articles as $a): ?></h3>
                    <div class="article">
                        <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                        <em>Наша дата: <?=$a['date']?></em>
                        <p><?=$a['content']?></p>
                    </div>
                    <?php endforeach ?>
            </div>
            
            <footer>
               
                 <address>
                              <strong>ДычковЪ, Inc.</strong><br>
                              Ульяновская обл. г.Ульяновск<br>
                              Радищева 10А<br>
                              <abbr title="Phone">P:</abbr> 8 987-637-0893
                            </address>

                    <address>
                      <strong>Мой адрес электронной почты:</strong><br>
                      <a href="mailto:#">kolyn236@mail.ru</a>
                    </address>
                 
            </footer>
            <h5 align="right"><a href="admin" >Панель администратора</a></h5>
                
        </div>
    </body>




</html>