<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asset & Employee Management</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-body {
            text-align: center;
        }
        .btn {
            width: 100%;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Asset & Employee Management</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Assets</h5>
                        <p class="card-text">Manage your company's assets</p>
                        {{-- <a href="{{ route('assets.index') }}" class="btn btn-primary">View Assets</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Employees</h5>
                        <p class="card-text">Manage your company's employees</p>
                        {{-- <a href="{{ route('employees.index') }}" class="btn btn-primary">View Employees</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>