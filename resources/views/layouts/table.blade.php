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
                    @foreach ($users as $row)
                    <tr>
                        <td>
                            <div class="d-flex">
                                <div class="mr-auto">
                                    <div class="d-flex">
                                        <img src="{{ asset('/assets/images/avatar.png')}}" alt="" class="avatar">
                                        <div>
                                            <div class="user-name"> {{ $row->first_name . ' ' . $row->last_name }} </div>
                                            <div class="user-email">{{ $row->email }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="tags tag-{{ $row->role }}">
                                        {{ $row->role_name }}
                                    </span>
                                </div>

                            </div>
                        </td>
                        <td><span class="meta">{{ $row->created_at }}</span></td>
                        <td><span class="meta"> {{ $row->role_name }}</span></td>
                        <td>
                            <a href="#" class="action-btn" data-toggle="modal" data-target="#editModal{{ $row->id }}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="/members/{{ $row->id }}" method="post" style="display: inline-block">
                            @method('DELETE')
                            @csrf
                            <button class="action-btn" onclick="return confirm('Are you sure you want to delete?')"><i class="fa-solid fa-trash"></i></button>
                            </form>
           

                        </td>
                    </tr>

                   

                    @endforeach

                    
                </tbody>
            </table>
        </div>
    </div>
</section>