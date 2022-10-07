<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Voting System</title>

    
</head><!-- BootStrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<body class="bg-dark">
    <h1 class="text-info text-center p-3">Voting system</h1>
     <div class="bg-info py-4">
       <h2 class="text-center">Login</h2>
        <div class="container text-center">
         <form action="./actions/login.php" method="POST">
          <div class="mb-3">
             <input type="text" class="form-control w-50 m-auto" name="Username" placeholder="Enter your Username"
              required="required">
          </div>

          <div class="mb-3">
             <input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your mobile number"
              required="required" maxLength="10" minLength="10">
          </div>

          <div class="mb-3">
             <input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password"
              required="required">
          </div>

          <div class="mb-3">
              <select name="std" class="form-select w-50 m-auto">
                  <option value="group">Group</option>
                  <option value="voter">Voter</option>
              </select>
          </div>

          <button type="submit" class="btn btn-dark my-4">Login</button>
          <p>Don't have an account? <a href="./partials/registration.php" class="text-white">Register here</a></p>
          

         </form>

        </div>

     </div>
</body>
</html>