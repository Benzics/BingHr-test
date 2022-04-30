{{-- Document header view --}}
@include('layouts.header')

<div class="col-lg-9">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 mt-5">
                <form action="/" method="get" class="row">
                    <div class="col-3">
                        <h1 class="page-title">Users</h1>
                    </div>
                    <div class="col-3">
                        <select name="year" id="year" class="form-control">
                            <option value="" disabled="" selected="">Year</option>
                            <option value="2022">2022</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <div class="input-group">
                            <input type="search" name="u" id="u" placeholder="Search.." class="form-control border-right-0">
                            <div class="input-group-append">
                                <span class="input-group-text input-g-text" id="basic-addon2"> <i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                        </div>
                    </div>
                </form>

            </div>

            <div class="col-lg-7">
                <div class="row no-gutters">
                    <div class="col-lg-9 mt-5">
                        <div class="row">
                            <div class="col-4">
                                <div class="dropdown show">
                                    <a class="header-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Language
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">English</a>
                                        <a class="dropdown-item" href="#">Spanish</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="dropdown show">
                                    <a class="header-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Reports
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                        <a class="dropdown-item" href="#">Lorem</a>
                                        <a class="dropdown-item" href="#">Ipsum</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="dropdown show">
                                    <a class="header-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Project
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                                        <a class="dropdown-item" href="#">Lorem</a>
                                        <a class="dropdown-item" href="#">Ipsum</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-5">
                        <div class="row">
                            <div class="col-4">
                                <a class="notification-icon" href="#">
                                    <i class="fa-solid fa-envelope"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="notification-icon" href="#">
                                    <i class="fa-solid fa-bell"></i>
                                </a>
                            </div>
                            <div class="col-4">
                                <a class="notification-icon" href="#">
                                    <i class="fa-solid fa-user"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="mt-5 d-flex justify-content-end">
            <a href="#" class="btn btn-primary btn-green" data-toggle="modal" data-target="#addModal">Add User</a>
        </div>
    </div>

    <section class="container mt-5">
        <div class="table-area">

            <div class="d-flex">
                <div class="mr-auto d-flex align-items-end">
                    <h2 class="theader p-2 pl-4">List Users</h2>
                </div>


                <div class="p-2">
                    <form action="/" method="get">
                        <div class="input-group">
                            <input type="search" name="u" id="u" placeholder="Search.." class="form-control border-right-0">
                            <div class="input-group-append">
                                <span class="input-group-text input-g-text" id="basic-addon2"> <i class="fa-solid fa-magnifying-glass"></i></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- The table -->
            <div class="table-responsive">
                <table class="table">
                    <thead class="header-g">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Create Date</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <div class="d-flex">
                                            <img src="{{ asset('/assets/images/avatar.png')}}" alt="" class="avatar">
                                            <div>
                                                <div class="user-name">David Wagner</div>
                                                <div class="user-email">david_wagner@example.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="tags sa">
                                            Super Admin
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td><span class="meta">24 Oct 2015</span></td>
                            <td><span class="meta">CEO and Founder</span></td>
                            <td>
                                <a href="#" class="action-btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="action-btn"><i class="fa-solid fa-trash"></i></a>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <div class="d-flex">
                                            <img src="{{ asset('/assets/images/avatar.png')}}" alt="" class="avatar">
                                            <div>
                                                <div class="user-name">David Wagner</div>
                                                <div class="user-email">david_wagner@example.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="tags a">
                                            Admin
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td><span class="meta">24 Oct 2015</span></td>
                            <td><span class="meta">CEO and Founder</span></td>
                            <td>
                                <a href="#" class="action-btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="action-btn"><i class="fa-solid fa-trash"></i></a>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <div class="d-flex">
                                            <img src="{{ asset('/assets/images/avatar.png')}}" alt="" class="avatar">
                                            <div>
                                                <div class="user-name">David Wagner</div>
                                                <div class="user-email">david_wagner@example.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="tags hr">
                                            HR Admin
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td><span class="meta">24 Oct 2015</span></td>
                            <td><span class="meta">CEO and Founder</span></td>
                            <td>
                                <a href="#" class="action-btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="action-btn"><i class="fa-solid fa-trash"></i></a>

                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="d-flex">
                                    <div class="mr-auto">
                                        <div class="d-flex">
                                            <img src="{{ asset('/assets/images/avatar.png')}}" alt="" class="avatar">
                                            <div>
                                                <div class="user-name">David Wagner</div>
                                                <div class="user-email">david_wagner@example.com</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="tags e">
                                            Employee
                                        </span>
                                    </div>

                                </div>
                            </td>
                            <td><span class="meta">24 Oct 2015</span></td>
                            <td><span class="meta">CEO and Founder</span></td>
                            <td>
                                <a href="#" class="action-btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="#" class="action-btn"><i class="fa-solid fa-trash"></i></a>

                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div class="container mt-4">
        <div class="cc-text">
            &copy; Copyright 2022 <span class="brand">BingHr.io</span>
        </div>
    </div>
</div>

<!-- Add user Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="/" method="post" name="add_user" id="add_user">
                        <div class="form-group">
                            <input type="number" name="id" class="form-control" placeholder="Employee ID*" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name*">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email ID*">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="Mobile No">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="role" id="role" class="form-control">
                                        <option value="" selected="" disabled="">Select Role Type</option>
                                        <option value="1">Admin</option>
                                        <option value="0">Employee</option>
                                        <option value="2">HR Admin</option>
                                        <option value="3">Super Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username*">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password*">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password*">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="container mt-5">
                    <div class="table-responsive">
                        <table class="table perm">
                            <thead class="header-g">
                                <tr>
                                    <th>Module Permission</th>
                                    <th>Read</th>
                                    <th>Write</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Super Admin</td>
                                    <td><i class="fa-solid fa-square-check"></i></td>
                                    <td><i class="fa-solid fa-square-check"></i></td>
                                    <td><i class="fa-solid fa-square-check"></i></td>
                                </tr>

                                <tr>
                                    <td>Admin</td>
                                    <td><i class="fa-solid fa-square-check"></i></td>
                                    <td><i class="fa-regular fa-square"></i></td>
                                    <td><i class="fa-regular fa-square"></i></td>
                                </tr>
                                <tr>
                                    <td>Employee</td>
                                    <td><i class="fa-solid fa-square-check"></i></td>
                                    <td><i class="fa-regular fa-square"></i></td>
                                    <td><i class="fa-regular fa-square"></i></td>
                                </tr>
                                <tr>
                                    <td>HR Admin</td>
                                    <td><i class="fa-solid fa-square-check"></i></td>
                                    <td><i class="fa-solid fa-square-check"></i></td>
                                    <td><i class="fa-solid fa-square-check"></i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" form="add_user" class="btn btn-primary">Add User</button>
                <button type="button" class="btn " data-dismiss="modal">Cancel</button>

            </div>
        </div>
    </div>
</div>

{{-- Document footer view --}}
@include('layouts.footer')