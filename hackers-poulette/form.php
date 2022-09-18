<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>H-P Support Contact</title>
</head>
<body>
    <h1>Hackers Poulette support</h1>
    
        <form action="QueryForm.php" method="get" id="contact_support">
            <div>
                <label for="lastname">Enter your last name:</label>
                <input type="text" name="lastname" id="lastname" placeholder="Last name"> 
            </div>

            <div>
                <label for="firstname">Enter your first name:</label>
                <input type="text" name="firstname" id="firstname" placeholder="First name">
            </div>

            <div>
                <label for="mail">Enter your email adress:</label>
                <input type="email" name="mail" id="mail" placeholder="abc@mail.com">
            </div>

            <div>
                <label for="picture">Choose a picture:</label>
                <input type="file" id="picture" name="picture" accept="image/png, image/jpeg, image/gif, image/jpg">
            </div>

            <div>
                <label for="description">Description:</label>
                <input type="text" name="description" id="description" placeholder="Your message">
            </div>
            <input type="submit" name="submitButton" value="Submit">
        </form>

</body>
</html>