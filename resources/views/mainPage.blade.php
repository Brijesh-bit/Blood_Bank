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
    <title>Blood_Main</title>
</head>
<body>
    <div style="display: flex;">
        <img class="left" src="/image/logo.png" alt="">
        <div class="right nav">
            <div style="display: flex;">
                <a class="home" href="/welcome">Home</a>
                <a class="about" href="">About</a>
            </div>
        </div>
    </div >
    <div style="display: flex;">
        <div class="table1">
            <table class="table caption-top table-striped" style="border: 1px solid black">
                <caption class="table-head">Blood Samples Added by Hospitals :</caption>
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Hospital</th>
                    <th scope="col">Blood Group</th>
                    <th scope="col">Available Unit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($viewdata1 as $data )
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
        <div class="form-left">
            <form class="" style="margin-left: 4%; margin-right: 4%" action="add" method="POST">
            @csrf
                <label class="tag">Add Blood Samples :</label>
                <div class="mb-3">
                    <label for="hospital" class="form-label">Hospital Name</label>
                    <input type="text" name="hospital" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$hospitaldata->hospital_name}}" readonly>
                </div>
                <div class="mb-3">
                    <label for="blood_group" class="form-label">Blood Group</label>
                    <select name="blood_group" class="form-select" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="A+">A+</option>
                    <option value="O+">O+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="A-">A-</option>
                    <option value="O-">O-</option>
                    <option value="B-">B-</option>
                    <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="unit" class="form-label">Number of Unit</label>
                    <input type="text" name="unit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="submit-1 btn btn-danger">Add</button>
            </form>
        </div>
    </div>
</body>
</html>