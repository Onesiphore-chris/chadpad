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
            <form action="php/signup.php" method="post">
                <div class="error-txt">This is an error message !</div>
                <div class="name-details">
                    <div class="field ">
                        <label for="">Frist Name</label>
                        <input id="host" type="text" name="fname" id="" placeholder=" Entrer Frist Name" required>
                    </div>
                    <div class="field ">
                        <label for=""> Last Name</label>
                        <input id="host" type="text" name="lname" id=""  placeholder="Entrer Last Name" required>
                    </div>
                    <div class="field ">
                        <label for=""> Email Adress</label>
                        <input id="host" type="email" name="email" id=""  placeholder="Entrer  Email Adress" required>
                    </div>
                    <div class="field ">
                        <label for="">Password</label>
                        <input id="host" type="password" name="keyfram"   id="" placeholder="New Password" required>
                        <i class="fas fa-eye"></i>
                    <div class="field" id="image">
                        <label for=""> Select image</label>
                        <input type="file" name="image"  accept="image/jep, image/jpeg, image/png" s> 
                    </div>
                    <div class="field">
                        <input type="submit" name="submit" value="Continue le chat" class="btn">
                    </div>
                </div>
            </form>
            <div class="link">Already Signup-up? <a href="login.php">Login now</a></div>
        </section>
    </div>


    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>
</html>