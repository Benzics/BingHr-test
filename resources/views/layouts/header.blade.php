<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BingHr</title>


    <!-- bootstrap css -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- our css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css') }}">
</head>

<body>


    <div class="row">
        <aside class="col-lg-3">
            <div class="row no-gutters full-height">
                <div class="col-lg-2 nav-area">
                    <ul class="first-nav">
                        <a href="#" class="primary-nav">
                            <li class="nav-item"><i class="fa-solid fa-magnifying-glass"></i></li>
                        </a>
                        <a href="#">
                            <li class="nav-item"> <i class="fa-solid fa-table-columns"></i></li>
                        </a>
                        <a href="#">
                            <li class="nav-item"> <i class="fa-solid fa-user"></i></li>
                        </a>
                        <a href="#">
                            <li class="nav-item"> <i class="fa-solid fa-comment"></i></li>
                        </a>
                        <a href="#">
                            <li class="nav-item"> <i class="fa-solid fa-file"></i></li>
                        </a>

                        <li class="end-nav">
                            <ul>
                                <a href="#" class="primary-nav">
                                    <li class="nav-item"> <i class="fa-solid fa-gear"></i></li>
                                </a>
                                <a href="#">
                                    <li class="nav-item"><i class="fa-solid fa-bars-staggered"></i></li>
                                </a>
                            </ul>
                        </li>




                    </ul>
                </div>
                <div class="col-lg-10 bg-white">
                    <nav>
                        <ul class="nav flex-column sidebar">
                            <a href="#">
                                <li class="nav-item"><i class="fa-solid fa-table-columns"></i>Dashboard</li>

                            </a>
                            <a href="#">
                                <li class="nav-item active"><i class="fa-solid fa-table-columns"></i>Dashboard</li>

                            </a>


                        </ul>
                    </nav>
                </div>
            </div>
        </aside>
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-6">
                    <span>Users</span>
                    <form action="/" method="get">
                        <select name="year" id="year">
                            <option value="" disabled="" selected="">Year</option>
                            <option value="2022">2022</option>
                        </select>
                        <input type="search" name="u" id="u" placeholder="Search..">
                    </form>
                </div>

                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </div>