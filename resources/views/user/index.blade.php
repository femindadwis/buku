@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')

<div class="page-body">
    <!-- Container-fluid starts-->
        <div class="container-fluid">
<div class="page-header">
<div class="row">

 <!-- Feature Unable /Disable Order Starts-->
 <div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <h5>Tabel User       <a class="fa fa-plus-square-o" href="/user/create" title="Edit"></a>    </h5>
        </div>
        <div class="card-body"style="padding-top: 5px;">
            <div class="table-responsive">
                <table class="display" id="basic-2">
                    <thead>
                        <tr>
                            <?php $no=1; ?>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Role</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $u)
                        {{-- @if ($u->level != 1 && !(Auth::user()->level == 2 && $u->level == 1)) --}}
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $u->name }} </td>
                            <td>{{ $u->username }} </td>
                            <td>{{ $u->role}}</td>

                            <td>
                                <a class="fa fa-edit" href="/user/edit/{{ $u->id }}" title="Edit"></a> &nbsp;&nbsp;
                                <a class="fa fa-trash-o" href="/user/destroy/{{ $u->id }}"  title="Hapus"></a> &nbsp;&nbsp;
                            </td>
                        </tr>
                        @endforeach
                    </tbody>


                    </table>
                </div>
            </div>

</div></div></div></div></div></div></div>

@include('layout.footer')
@include('layout.js')
