<!DOCTYPE html>
<!--
This code is provided free of charge by Coolin.co.uk as is. Any unauthorised use is prohibited.
Thanks for choosing Coolin to build your app.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       echo "Sample text";
        ?>
       <form action="POST" method="post">
            <p>Email: <br /><input type="email" name="register_email" size="35" maxlength="255" /></p>
            <p>Full name: <br /><input type="text" name="register_name" maxlength="35" /></p>
            <p>Password: <br /><input type="password" name="register_password" maxlength="35" /></p>
            <p><input type="submit" value="Register" />
        </form>
    </body>
</html>
