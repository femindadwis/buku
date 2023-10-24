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
            <h5>Tabel Penerbit       <a class="fa fa-plus-square-o" href="{{ route('penerbit.create') }}" title="Edit"></a>    </h5>
        </div>
        <div class="card-body"style="padding-top: 5px;">
            @include('components.flash_message')
            {{ $dataTable->table(['class' => ['table table-bordered dt-responsive nowrap table-striped align-middle'], 'id' => 'example']) }}
        </div>

</div></div></div></div></div></div></div>

@include('layout.footer')
@include('layout.js')
{{ $dataTable->scripts() }}
