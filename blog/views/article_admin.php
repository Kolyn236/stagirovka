<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Мой первый блог</title>
        <link rel="stylesheet" href="../style.css">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
          <div class="container">
                <h1>Общая страница</h1>
                <div>
                    <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>"> 
                        <label class="container">
                            Название
                            <input type="text" name="title" value="" class="form-item" autofocus required>
                        </label>
                        <p><label class="container">
                            <input type="date" name="date" value="" class="form-item" required>
                        </label></p>
                        <label class="container">
                            Содержимое
                            <textarea class="form-item" name="content" required></textarea>
                        </label>
                        <input type="submit" value="Сохранить" class="btn">
                    </form>
                </div>
            <footer>
                <p>Мой первый блог
                <br>Copyrihtt &copy; 2016</p>
            </footer>
        </div>
    </body>




</html>