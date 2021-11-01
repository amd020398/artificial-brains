<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="main-container">
        <div class="form-container">
            <div class="space"></div>

            <div class="form-body">
                <!-- SOCIAL LOGIN -->

                <form action="index.php" class="the-form" method="get">
                    <h3 style="font-weight: 600;color: rgb(36, 33, 33); font-size: 22px; margin: 2px; text-align: center;">SIGN IN</h3>
                    <label for="txt">Donor/Consumer Name</label>
                    <input style="height: 50px; font-size: 16px;" type="txt" name="name" id="email" placeholder="  Enter your Name">

                    <label for="password">Donor/Consumer ID</label>
                    <input type="password" name="id" id="password" placeholder="Enter your Id">

                    <input type="submit" value="Sign In">

                </form>
            </div><!-- FORM BODY-->
        </div><!-- FORM CONTAINER -->
    </div>
    
</body>
</html>