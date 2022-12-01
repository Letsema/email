<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mail.class.php">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 mail-form">
                <h2 class="text-center">Send Message</h2>
                <p class="text-center">Send to anyone from localhost</p>
                <!---PHP code----->
                
                <!--End php code--->
                <form action="mail.php" method="POST" autocomplete="off">
                    <div c  lass="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Recepients">
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                    </div>
                    <div class="from-group">
                        <textarea name="message" id="" cols="35s" rows="10" placeholder="Compose message">
                        </textarea>
                    </div>
                    <input type="submit" name="submit" class="form-control button btn-primary" value="send">
                </form>
            </div>
        </div>
    </div>
</body>
</html>