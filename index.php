<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css?">
</head>
<body>
    <div id="reg">
        <h2>Registration</h2>
        <input type="text" name="log" id="loginp"/>
        <input type="password" name="pass" id="passinp"/>
        <input type="submit" value="Send" id="btnreg"/>
    </div>
    <div id="log">
    <h2>Login</h2>
        <input type="text" name="login" id="loginp2"/>
        <input type="password" name="password" id="passinp2"/>
        <input type="submit" value="Send" id="btnlog"/>
    </div>

    <script>
        $("#btnreg").click(function(){
            let login=document.getElementById("loginp").value
            let password=document.getElementById("passinp").value
           $.post("reg.php",
           {login:login,password:password},
           function(ard){
            
           })
        })
        $("#btnlog").click(function(){
            let login=document.getElementById("loginp2").value
            let password=document.getElementById("passinp2").value
           $.post("log.php",
           {login:login,password:password},
           function(ard){
                if(ard=="1"){
                    	window.location="urish.php"
                }else{

                }
           })
        })
    </script>
</body>
</html>