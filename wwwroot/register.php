<?php
    require_once $_SERVER["DOCUMENT_ROOT"].'/../core/autoload.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>USER SIGNUP</h3>
        <form action="register_handle.php" method="POST">
            username: <input type="text" name="username"><br>
            Password: <input id="pass" type="password" name="new_password"><br>
            Retype-Password: <input id="pass_cnfrm" type="password" ><br>
            Role: <select name="role">
            <?php
                foreach (explode(',', USER_ROLE) as $value) {
                    $value = trim($value,"' ");
                    echo "<option value='$value'>$value</option>";
                }
            ?>
            
            </select>
            <button id="submit_btn" type="submit">SUBMIT</button>
        </form>
        <script>
            var subBtn = document.getElementById("submit_btn"),
                pass = document.getElementById("pass"),
                pass_cnfrm = document.getElementById("pass_cnfrm");
            subBtn.disabled = true;
            pass.onkeydown = pass.onkeyup = pass_cnfrm.onkeydown = pass_cnfrm.onkeyup = function(evt) {
                evt = evt || window.event;
                if((pass.value === pass_cnfrm.value) && pass.value.length!=0 )
                    subBtn.disabled = false;
                else
                    subBtn.disabled = true;
            };
            
                
        </script>
    </body>
</html>
