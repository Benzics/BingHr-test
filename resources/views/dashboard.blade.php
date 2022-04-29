{{-- Document header view --}}
@include('layouts.header')

<div class="col-lg-9">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-5">
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

            </div>
        </div>
    </div>
</div>

{{-- Document footer view --}}
@include('layouts.footer')