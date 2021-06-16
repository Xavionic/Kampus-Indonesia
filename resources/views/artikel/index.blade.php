<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel Perkuliahan') }}
        </h2>
    </x-slot>

    <div class="container py-12">
        <div class="row">

            @foreach($articles as $a)

            <div class="col-12 col-md-4 col-lg-4">
                <article class="article article-style-c">
                    <div class="article-header">
                        <div class="article-image" data-background="/assets/img/bg-itb.jpg"
                            style="background-image: url(&quot;https://demo.getstisla.com/assets/img/news/img13.jpg&quot;);">
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-title">
                            <h2><a href="#">{{ $a->name }}</a></h2>
                        </div>
                        <p>{{ $a->content }}</p>
                        <div class="article-user">
                            <img alt="image" src="assets/img/avatar/avatar-1.png">
                            <div class="article-user-details">
                                <div class="user-detail-name">
                                    @foreach($users as $u)
                                    @if($u->id == $a->user_id)
                                        <a href="#">{{ $u->name }}</a>
                                    @endif
                                    @endforeach
                                </div>
                                <div class="text-job">Mahasiswa</div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            @endforeach

        </div>
    </div>
</x-app-layout>