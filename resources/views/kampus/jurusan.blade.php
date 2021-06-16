<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi Kampus') }}
        </h2>
    </x-slot>




    <div class="container py-12">

        @if (count($departments) == 0)
        <div class="card">
            <div class="card-body">
                <div class="empty-state" data-height="400" style="height: 400px;">
                    <div class="empty-state-icon">
                        <i class="fas fa-question"></i>
                    </div>
                    <h2>Belum ada data Jurusan</h2>
                    <p class="lead">
                        Maaf, daftar jurusan pada universitas ini belum ada
                    </p>
                    @foreach($university as $u)
                    <form action="/kampus/jurusan/buat" method="get">
                        @csrf
                        <input type="hidden" id="univ_id" name="univ_id" value={{ $u->id }}>
                        <input type="hidden" id="univ_name" name="univ_name" value={{ $u->name }}>

                        <button class="btn btn-primary mt-4">Buatin</button>

                    </form>
                    @endforeach


                    <div class="float-left mt-sm-0 mt-3">
                        <br>
                        <a href="{{url('/kampus')}}" class="btn"><i class="fas fa-chevron-left"></i> Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @else


        <div class="card">
            <div class="card-header">
                <div class="flex-shrink-0 flex items-center mr-4">
                    <a href="{{ url('/kampus') }}">
                        <i class="fas fa-arrow-left fs-3 text-secondary"></i>
                    </a>

                </div>
                @foreach($university as $u)
                <h3>Jurusan pada {{ $u->name }}</h3>
                @endforeach
            </div>
            <div class="card-body">
                <ul class="list-unstyled">

                    @foreach($departments as $d)

                    <li class="media">
                        <img class="mr-3" src="/assets/img/example-image-50.jpg" alt="Generic placeholder image">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">{{ $d->name }}</h5>
                            <p>{{ $d ->detail }}</p>
                        </div>
                    </li>
                    <br>

                    @endforeach
                </ul>

                <ul class="list-unstyled">

                    <form action="/kampus/jurusan/buat" method="get">
                        @csrf
                        <input type="hidden" id="univ_id" name="univ_id" value={{ $u->id }}>
                        <input type="hidden" id="univ_name" name="univ_name" value={{ $u->name }}>

                        <button class="btn btn-primary mt-4 mx-4">
                            <i class="fas fa-edit"></i>
                            Tambahkan</button>

                    </form>

                </ul>
            </div>
        </div>

        @endif



    </div>

</x-app-layout>