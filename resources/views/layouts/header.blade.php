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
    <!-- jquery -->
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>


    <div class="wrapper">
        {{-- <aside class="nav-aside">
            <div class="row no-gutters full-height"> --}}
                <div class="nav-aside-1 nav-area">
                    <ul class="first-nav">
                        <a href="#" class="primary-nav">
                            <li class="nav-item"><i class="fa-solid fa-magnifying-glass"></i></li>
                        </a>
                        <a href="#">
                            <li class="nav-item"><i class="fa-regular fa-calendar"></i></li>
                        </a>
                        <a href="#">
                            <li class="nav-item"> <i class="fa-regular fa-user"></i></li>
                        </a>
                        <a href="#">
                            <li class="nav-item"> <i class="fa-regular fa-comment"></i></li>
                        </a>
                        <a href="#">
                            <li class="nav-item"> <i class="fa-regular fa-file"></i></li>
                        </a>

                        <li class="e-nav">
                            <ul class="end-nav">
                                <a href="#" class="primary-nav">
                                    <li class="nav-item"> <i class="fa-solid fa-gear"></i></li>
                                </a>
                                <a href="#" class="primary-nav">
                                    <li class="nav-item">  <img src="{{ asset('/assets/images/avatar.png')}}" alt="" class="sidebar-avatar"></li>
                                </a>

                               
                                <a href="#" id="side_toggle">
                                    <li class="nav-item"><i class="fa-solid fa-bars-staggered"></i></li>
                                </a>
                            </ul>
                        </li>




                    </ul>
                </div>
                <nav class="nav-aside bg-white">
                    {{-- <nav> --}}
                        <ul class="nav flex-column sidebar">
                            <a href="#">
                                <li class="nav-item"><i class="fa-solid fa-table-columns"></i>Dashboard</li>

                            </a>
                            <a href="#">
                                <li class="nav-item active"><i class="fa-solid fa-user-group"></i>Users</li>

                            </a>
                            <a href="#">
                                <li class="nav-item"><i class="fa-solid fa-lock"></i>Departments</li>

                            </a>
                            <a href="#">
                                <li class="nav-item">
                                    <i class="fa-solid fa-users"></i>Employee
                                </li>

                            </a>
                            <a href="#">
                                <li class="nav-item">
                                    <i class="fa-solid fa-bolt"></i>Activities
                                </li>

                            </a>
                            <a href="#">
                                <li class="nav-item">
                                    <i class="fa-solid fa-circle-check"></i>Holidays
                                </li>

                            </a>
                            <a href="#">
                                <li class="nav-item">
                                    <i class="fa-solid fa-fire-flame-simple"></i>Events
                                </li>

                            </a>
                            <a href="#">
                                <li class="nav-item">
                                    <i class="fa-solid fa-money-bill"></i>Payroll
                                </li>

                            </a>
                            <a href="#">
                                <li class="nav-item">
                                    <i class="fa-solid fa-user"></i>Accounts
                                </li>

                            </a>
                            <a href="#">
                                <li class="nav-item">
                                    <i class="fa-solid fa-circle-exclamation"></i>Report
                                </li>

                            </a>




                        </ul>
                    {{-- </nav> --}}
                </nav>
            {{-- </div>
        </aside> --}}