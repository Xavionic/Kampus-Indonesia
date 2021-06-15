<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="hero text-white hero-bg-image hero-bg-parallax"
        style="background-image: url('assets/img/bg-itb.jpg');">
        <div class="hero-inner">
            <div class="container">

                <h2>Halo, {{ auth()->user()->name }}!</h2>
                <p class="lead">Selamat datang di Dashboard Kampus Indonesia! silakan pilih layanan kami =)</p>
                <div class="mt-4">
                    <a href="{{ route('profile.show') }}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                        Lengkapi Akun</a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}

                {{-- <div class="container px-4 px-lg-5"> --}}
                <div class="container">
                    <br>
                    <h2 class="text-center mt-0">Layanan Kami</h2>
                    <hr class="divider" />
                    <br>
                    <div class="row gx-4 gx-lg-5">

                        <div class="btn btn-default btn-xl col-lg-3 col-md-6 text-center">
                            <div class="mb-2"><i class="bi-gem fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Informasi Kampus</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat elementum leo in tristique.</p>
                        </div>
                        <div class="btn btn-default btn-xl col-lg-3 col-md-6 text-center">
                            <div class="mb-2"><i class="bi-laptop fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Info Beasiswa</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat elementum leo in tristique.</p>
                        </div>
                        <div class="btn btn-default btn-xl col-lg-3 col-md-6 text-center">

                            <div class="mb-2"><i class="bi-globe fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Tes Minat dan Bakat</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat elementum leo in tristique.</p>
                        </div>
                        <div class="btn btn-default btn-xl col-lg-3 col-md-6 text-center">

                            <div class="mb-2"><i class="bi-heart fs-1 text-primary"></i></div>
                            <h3 class="h4 mb-2">Artikel</h3>
                            <p class="text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat elementum leo in tristique.</p>
                        </div>
                    </div>
                    <br>
                </div>

                {{-- </div> --}}
            </div>
        </div>


    </div>

    <!-- Services-->
    {{-- <section class="page-section" id="services">
        
    </section> --}}
</x-app-layout>