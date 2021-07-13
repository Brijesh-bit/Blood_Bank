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
    <title>Blood_receiver</title>
    <script>
        function viewdetails(){
            location.href="/viewdetails"
        }
    </script>
</head>
<body>
    <div style="display: flex;">
        <img class="left" src="/image/logo.png" alt="">
        <div class="right nav">
            <div style="display: flex;">
                <a class="home" href="/">Home</a>
                <a class="about" href="/about">About</a>
                <a class="login" href="/">LogOut</a>
            </div>
        </div>
    </div >
    <div style="display: flex;">
        <div class="table1">
            <table class="table caption-top table-striped" style="border: 1px solid black">
                <caption class="table-head">Available Blood Samples :</caption>
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Available Unit</th>
                    <th scope="col">Sample</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($viewdata2 as $data)
                    <tr>
                    <th scope="row">{{ $data->id}}</th>
                    <td >{{ $data->hospital}}</td>
                    <td>{{ $data->blood_group}}</td>
                    <td style="padding-left: 35px">{{ $data->unit}}</td>
                    <td><button style="background-color: red; border-radius: 5px;"><a class="receiver_d" href="/viewdetails/{{$data->id}}">Details</a></button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="form-left">
            <img class="r-image" src="/image/redDonation.png" alt="">
        </div>
    </div>
</body>
</html>