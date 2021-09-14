<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Login</title>
                <!-- bootstrap -->
        <link href="../framework/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="shortcut icon" href="../icon.jpg" type="image/x-icon" />
        <script src="../framework/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    </head>
    <body class="bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col text-center mx-auto">
                    <h1 class="text-info mt-2">Login</h1>
                    <form class="clearfix form-control" action="../remover.php" method="post" accept-charset="utf-8">
                        <label class="input-group" for="username">username :</label><input required class="form-control my-2" type="text" name="username" id="username" value="" />
                        <label class="input-group" for="pass">password :</label><input required class="form-control my-2" type="password" name="pass" id="pass" value="" />
                        <button class="btn btn-outline-info float-start" type="submit">send</button>
                        <label for="pass" id="btn-see" class="text-primary float-end">view password</label>
                    </form>
                </div>
            </div>
        </div>
         <script src="../framework/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
         <script type="text/javascript" charset="utf-8">
             $("#btn-see").on("click",function(){
                 $("#pass").attr("type","text");
                 $("#btn-see").html("hide password");
                 $(".text").attr("type","password");
                 $("#pass").toggleClass("text");
                 
                 $(".text-btn").html("view password");
                 
                 $("#btn-see").toggleClass("text-btn");
             })
         </script>
    </body>
</html>