<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="about.css">
    <link href="css/animate.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AquaCity</title>
</head>
<body>

    
<div class="main-bar">
    <nav>
        <input type="checkbox" name="" id="check">
        <label for="check" class="checkbtn">
            <span></span>
            <span></span>
            <span></span> 
        </label>

        <div class="logo-header">
            <a href=""><span class="title">Aqua</span>City</a>
        </div>

        <ul>
            <li><a href="index.html">Domov</a></li>
            <li class="active"><a href="about.html">Informácie</a></li>
            <li><a href="galery.html">Galéria</a></li>
            <li><a href="">Kontaktuje nás</a></li>
            <li><a href="">Cenník</a></li>
            <li><a href="">Služby</a></li>
        </ul>
    </nav>
</div>


 <main>
    <p>Kontakujte Nás</p>
    <form class="contact-form" action="index.php" method="post">
        <input type="text" name="name" placeholder="Meno">
        <input type="text" name="mail" placeholder="E-mail">
        <input type="text" name="subject" placeholder="Predmet">
        <textarea name="message" placeholder="Správa"></textarea>
        <button type="submit" name="submit">ODOSLAŤ</button>
    </form>
    
 </main>


</body>

</html>