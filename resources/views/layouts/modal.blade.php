<div class="modal fade" id="editModal{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="editModal{{ $row->id }}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="/members/{{ $row->id }}" method="post" name="edit_user{{ $row->id }}" id="edit_user{{ $row->id }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <input type="number" name="id" class="form-control" placeholder="Employee ID*" value="{{ $row->id }}" required="" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name*" value="{{ $row->first_name }}" required="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name*" value="{{ $row->last_name }}" required="" />
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email ID*" value="{{ $row->email }}" required="" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="tel" name="phone" class="form-control" placeholder="Mobile No" value="{{ $row->phone }}" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select name="role" id="role" class="form-control" required="">
                                        <option value="" selected="" disabled="">Select Role Type</option>
                                        <option value="1" @if( $row->role == '1' ) {{ 'selected' }} @endif>Admin</option>
                                        <option value="0" @if( $row->role == '0' ) {{ 'selected' }} @endif>Employee</option>
                                        <option value="2" @if( $row->role == '2' ) {{ 'selected' }} @endif>HR Admin</option>
                                        <option value="3" @if( $row->role == '3' ) {{ 'selected' }} @endif>Super Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control" placeholder="Username*" value="{{ $row->user_name }}" required="" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password*" required="" />
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password*" required="" />
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
                <button type="submit" form="edit_user{{ $row->id }}" class="btn btn-primary">Edit User</button>
                <button type="button" class="btn " data-dismiss="modal">Cancel</button>

            </div>
        </div>
    </div>
</div>