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
                    <h5>Edit Buku</h5>
                    @include('components.flash_message')
                </div>
                <form class="form theme-form" action="{{ route('buku.update', $buku->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <input type="hidden" name="id" value="{{ $buku->id }}">
                                    <label class="form-label" for="exampleFormControlInput1">Judul</label>
                                    <input class="form-control" name="buku" id="buku" type="text" placeholder="Judul" value="{{ $buku->buku }}" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlSelect9">Penerbit</label>
                                    <select class="form-select digits" name="penerbit_id" id="penerbit_id" placeholder="Penerbit" required="required" value="{{ $buku->penerbit_id }}">
                                        @foreach ($penerbit as $p)
                                        <option value="{{$p->id}}" >{{$p->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label" for="exampleFormControlInput1">Foto</label>
                                    @if($buku->foto != null)
                                    <br>
                                               <img class="" width="105px"
                                               src="{{url(Storage::url($buku->foto))}}" alt=""><br><br>
                                              @endif
                                    <input class="form-control" name="foto" id="foto" type="file" placeholder="Foto" accept="image/*">
                                </div>
                            </div>
                        </div>
                        </div>

                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <input class="btn btn-light" type="reset" value="Cancel" onclick="window.history.back();" />
                    </div>
                </form>

            </div>

        </div></div>
    </div></div>
</div></div>
</div></div>
</div></div>

        @include('layout.footer')
        @include('layout.js')
