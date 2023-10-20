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
            <h5>Tabel Buku       <a class="fa fa-plus-square-o" href="/buku/create" title="Edit"></a>    </h5>
            @include('components.flash_message')
        </div>
        <div class="card-body"style="padding-top: 5px;">
            <div class="table-responsive">
                <table class="display" id="basic-2">
                    <thead>
                        <tr>
                            <?php $no=1; ?>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Penerbit</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($buku as $key => $b)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $b->buku }} </td>
                            <td>{{ $b->penerbit->name }} </td>
                            <td><img src="{{url(Storage::url($b->foto))}}" alt="" height="100px" width="100px"></td>

                            </td>

                            <td>
                                <a class="fa fa-edit" href="/buku/edit/{{ $b->id }}" title="Edit"></a> &nbsp;&nbsp;
                                <a class="fa fa-trash-o" href="/buku/destroy/{{ $b->id }}"  title="Hapus"></a> &nbsp;&nbsp;
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
