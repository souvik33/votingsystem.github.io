<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system -Registration page</title>

    <!-- BootStrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-dark">
  <h1 class="text-center text-info p-3">Voting system</h1>
    <div class="bg-info py-4">
       <h2 class="text-center">Register Account</h2>
       <div class="container text-center">
          <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" placeholder="Enter your Username"
                required="required" name="Username">
              </div>

              <div class="mb-3">
                <input type="text" class="form-control w-50 m-auto" placeholder="Enter your mobile number"
                required="required" name="mobile">
              </div>

              <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" placeholder="Enter your password"
                required="required" name="password">
              </div>

              <div class="mb-3">
                <input type="password" class="form-control w-50 m-auto" placeholder="Confirm password"
                required="required" name="cpassword">
              </div>

              <div class="mb-3">
                <input type="file" class="form-control w-50 m-auto" 
                 name="photo">
              </div>

              <div class="mb-3">
                <select name="std" class="form-select w-50 m-auto">
                    <option value="group">Group</option>
                    <option value="voter">Voter</option>
                </select>
              </div>
            
              <button type="submit" class="btn btn-dark my-3">Register</button>
              <p>Already have an account? <a href="../home.php" class="text-white">Login here</a></p>

          </form>

       </div>

    </div>
    
</body>
</html>
