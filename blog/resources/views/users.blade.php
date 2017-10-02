<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>users</title>
  </head>
  <body>
    <h1>User page</h1>

    <p>users register page </p>

    <form class="" action="/register" method="post">
         {{ csrf_field() }}

       <label>Name</label>
        <input type="text" name="name" value=""><br><br>


         <label>Email</label>
          <input type="email" name="email" value=""><br><br>


            <label>Password</label>
            <input type="password" name="password" value=""><br><br>


              <input type="submit" name="" value="register now">

    </form>
  </body>
</html>
