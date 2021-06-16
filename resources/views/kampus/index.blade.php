<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi Kampus') }}
        </h2>
    </x-slot>


    <div class="container py-12 ">


        <div class="row">

            @foreach($universities as $u)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article">
                    <div class="article-header">
                        <div class="article-image" data-background="assets/img/news/img08.jpg"
                            style="background-image: url(&quot;https://demo.getstisla.com/assets/img/news/img08.jpg&quot;);">
                        </div>
                        <div class="article-title">
                            <h2><a href="#">{{$u->name}}</a></h2>
                        </div>
                    </div>
                    <div class="article-details" maxlength="20">
                        <p>{{$u->detail}}</p>
                        <div class="article-cta">

                            <form action="{{url('/kampus/jurusan')}}" method="get">
                                @csrf
                                <input type="hidden" id="univ_id" name="univ_id" value={{ $u->id }}>
                                <button type="submit" class="btn btn-primary">Detail Jurusan</a>

                            </form>
                        </div>
                    </div>
                </article>
            </div>
            @endforeach

        </div>




    </div>

</x-app-layout>