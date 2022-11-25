<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chatpad</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="">
</head>
<body>           
    <div class="wrapper">
        <section class="form signup_up">
            <header>Realtime chat apk</header>
            <form action="php/signin.php" method="post" enctype="multipart/form-data">
                <div class="error-txt">This is an error message !</div>
                <div class="name-details">
                    <div class="field ">
                        <label for=""> Email Adress</label>
                        <input id="host" type="email" name="email" id=""  placeholder="Entrer  Email Adress">
                    </div>
                    <div class="field ">
                        <label for="">Password</label>
                        <input id="host" type="password" name="keyfram" id=""  placeholder="Your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field">
                        <input type="submit" name="submit" value="Continue le chat" class="btn">
                    </div>
                </div>
            </form>
            <div class="link">Not ye Signup-up? <a href="index.php">Signup now</a></div>
        </section>
    </div>
</body>
</html>