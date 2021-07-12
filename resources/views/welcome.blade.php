<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/blood.css">
    <title>Blood Bank</title>
<style>

</style>
<body>
    <div style="display: flex;">
        <img class="left" src="/image/logo.png" alt="">
        <div class="right nav">
            <div style="display: flex;">
                <a class="home" href="">Home</a>
                <a class="about" href="">About</a>
                <!-- <a class="login" href="/login">Login</a> -->
                <li class="nav-item dropdown">
                    <a class="login nav-link dropdown-toggle" href="/registration" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    LogIn
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/login_hospital">As a Hospital</a></li>
                      <li><a class="dropdown-item" href="/login">As a Receiver</a></li>
                    </ul>
               </li>
                <li class="nav-item dropdown">
                    <a class="login nav-link dropdown-toggle" href="/registration" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Register
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/registration_hospital">As a Hospital</a></li>
                      <li><a class="dropdown-item" href="/registration">As a Receiver</a></li>
                    </ul>
               </li>
            </div>
        </div>
    </div>
    <div style="display: flex;">
        <div class="table1">
            <table class="table caption-top table-striped" style="border: 1px solid black">
          <caption class="table-head">Blood Units Available :</caption>
          <div class="tag1">Please Register or Login for Blood Samples Details And Hospital Details :</div>
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Hospital</th>
              <th scope="col">Blood Group</th>
              <th scope="col">Available Unit</th>
            </tr>
          </thead>
          <tbody>
            @foreach($viewdata as $data)
            <tr>
              <th scope="row">{{ $data->id}}</th>
              <td >{{ $data->hospital}}</td>
              <td>{{ $data->blood_group}}</td>
              <td style="padding-left: 35px">{{ $data->unit}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
        </div>
        <div style="width: 50% float: right; margin-top: 40px;">
            <img src="/image/donation.jpg" class="image" alt="">
        </div>
    </div>

</body>
</html>