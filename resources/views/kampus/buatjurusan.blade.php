<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambahkan Data Jurusan') }}
        </h2>
    </x-slot>


    <div class="container py-12 ">


        <div class="card">
            <div class="card-header">
                <h4>Masukkan Data Jurusan {{ $univ_name }}</h4>
            </div>
            <div class="card-body">

                <form action="{{ url('/kampus/jurusan/buatin') }}" method="get">
                    @csrf
                    <input type="hidden" id="univ_id" name="univ_id" value = {{ $univ_id }}>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                            Jurusan</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="name" name="name" required>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Detail</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" id="detail" name="detail" required>
                        </div>
                    </div>

                    <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                            <button type="submit" class="btn btn-primary">Pasang</button>
                        </div>
                    </div>
                </form>

            </div>

        </div>


    </div>

</x-app-layout>