<!doctype html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="wrapper d-flex align-items-stretch justify-between">

        @include('layout.sidebar')

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <h2 class="mb-4">Dashboard</h2>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-body">
                                <h5 class="card-title">Total Number of Employees</h5>
                                <p class="card-text " style="font-size: 1.25rem;">{{ $employees->count() }}</p>
                            </div>
                        </div>
                    </div>

                    @foreach ($status as $stat)
                        <div class="col-md-4">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title">{{ ucfirst($stat->name) }} Employees</h5>
                                    <p class="card-text " style="font-size: 1.25rem;">{{ $employees->where('status_id', $stat->id)->count() }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
