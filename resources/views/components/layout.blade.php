<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body class="app sidebar-mini rtl">

    <x-partials.header></x-partials.header>
    <x-partials.sidebar></x-partials.sidebar>
    
    <main class="app-content">

      <div hidden>
        @if (Session::has('status'))
          {{$status = Session::all()['status']}}
          {{$messagge = Session::all()['messagge']}}
        @else
          {{ $status = '' }}
          {{ $messagge = ''}}          
        @endif
      </div>       

      @if (Session::has('status'))        
        <x-partials.flash  type={{$status}} > {{$messagge}} </x-partials.flash>
      @endif

      {{ $slot }}

    </main>

    <!-- generic script js -->
    <script src="{{ asset('admin/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/pace.min.js') }}"></script>
    <!-- INTERNAL quill js -->
		<script src="{{asset('admin/plugins/quill/quill.min.js')}}"></script>
		<script src="{{asset('admin/js/form-editor2.js')}}"></script>
    <!-- INTERNAL WYSIWYG Editor js -->
    <script src="{{asset('admin/plugins/wysiwyag/jquery.richtext.js')}}"></script>
    <script src="{{asset('admin/js/form-editor.js')}}"></script>
</body>

</html>