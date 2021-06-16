<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Informasi Beasiswa') }}
        </h2>
    </x-slot>


    <div class="container py-12">
        <div class="card">
            <div class="card-body">
              <div class="empty-state" data-height="400" style="height: 400px;">
                <div class="empty-state-icon">
                  <i class="fas fa-question"></i>
                </div>
                <h2>Currently Under Maintenance Service</h2>
                <p class="lead">
                  Mohon maaf fitur ini belum selesai, silahkan coba fitur yang lain.
                </p>
              </div>
            </div>
          </div>
    </div>
    

    
</x-app-layout>