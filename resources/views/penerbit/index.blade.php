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
            <h5>Tabel Penerbit       <a class="fa fa-plus-square-o" href="/penerbit/create" title="Edit"></a>    </h5>
        </div>
        <div class="card-body"style="padding-top: 5px;">
            <div class="table-responsive">
                <table class="display" id="basic-2">
                    <thead>
                        <tr>
                            <?php $no=1; ?>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($penerbit as $p)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $p->name }} </td>

                            </td>

                            <td>
                                <a class="fa fa-edit" href="/penerbit/edit/{{ $p->id }}" title="Edit"></a> &nbsp;&nbsp;
                                <a class="fa fa-trash-o" href="/penerbit/destroy/{{ $p->id }}"  title="Hapus"></a> &nbsp;&nbsp;
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
