

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


<div class="mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card border border-secondary">
                <div class="card-body">

                  <div class="imgcontainer">
                    <form class="mb-3 " 
                    method="POST" action="{{ route('login') }}">
                            @csrf
                      
                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                    </div>
                    <div class="mb-3  ">
                            <label for="username" class="form-label">Email</label>
                            <input type="text" class="form-control border border-secondary " id="username" name="email" required> 
                        </div>

                            <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control border border-secondary" id="password" name="password" required>
                        </div>

                     <div class="md-5 mb-4">
                        <button type="submit" class="btn btn-outline-info rounded-5 col-5 text-dark justify-content-center " style="margin-left: 12%;">Login</button>
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class=" btn btn-outline-dark rounded-5 col-4 "table-dark">Cancel</button>
                
                      </div>
                      
                        <input type="checkbox" style="margin-left: 16%;" checked="checked" name="remember"> <label>Remember me </label>
  
                        <span class="psw p-4"></span> </span>Forgot <a href="#">password?</a></span>
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>