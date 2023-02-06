@section('title') HomePage @endsection

<x-app>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-xl-3">
                test traduzione
            </div>
            <div class="col-sm-6 col-xl-3">
                {{ __('messages.welcome')}}
            </div>
            <div class="col-sm-6 col-xl-3">

            </div>
            <div class="col-sm-6 col-xl-3">

            </div>
        </div>
    </div>
    <!-- / Content -->
</x-app>
