@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')

<div class="page-body">
        <div class="container-fluid">
<div class="page-header">
<div class="row">

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Edit Data User</h5>
                </div>@foreach($user as $u)
                <form class="form theme-form" action="/user/update " method="post">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <input type="hidden" name="id" value="{{ $u->id }}">
                                    <label class="form-label" for="exampleFormControlInput1">Nama</label>
                                    <input class="form-control" name="name" id="name" type="text" placeholder="Nama" value="{{ $u->name }}" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Username</label>
                                    <input class="form-control" id="username" name="username" type="username" placeholder="username" value="{{ $u->username }}" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Email</label>
                                    <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" value="{{ $u->email }}" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleInputPassword2">Password</label>
                                    <input class="form-control" id="password" name="password" type="text" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect9">Role</label>
                                    <select class="form-select digits" name="role" id="role" value="{{ $u->role }}" placeholder="Role" required="required">

                                        <option value="admin" >Admin </option>

                                        <option value="user" >User </option>


                                    </select>
                                </div>
                            </div>
                        </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <input class="btn btn-light" type="reset" value="Cancel" />
                    </div>
                </form>
                @endforeach
            </div>

        </div></div>
    </div></div>
</div></div>
</div></div>
</div></div>

        @include('layout.footer')
        @include('layout.js')
