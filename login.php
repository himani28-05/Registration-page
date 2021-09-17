<!DOCTYPE html>
<html lang="en">
<head>
    

    <title></title>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>



</head>
<body>
    <div class="container">
        <div class="row">


            <div class="col-lg-6">
                <h2>Login Form</h2>

                <form action="validation.php " method="post">

                    <div class="form-group">
                        <label for="">username</label>
                         <input type="text" name="user" class="form-control"></input>
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                         <input type="password" name="password" class="form-control"></input>
                    </div>

                    <button type="submit" class="btn btn-primary">submit</button>

          </div>



                <div class="col-lg-6">
                <h2>signin page</h2>

                <form action="registration.php " method="post">

                    <div class="form-group">
                        <label for="">username</label>
                         <input type="text" name="user" class="form-control"></input>
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                         <input type="password" name="password" class="form-control"></input>
                    </div>

                    <button type="submit" class="btn btn-primary">signin</button>

                </form>
                </div>


        </div>
    </div>
</body>
</html>