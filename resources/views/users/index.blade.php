<x-app>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4">
          {{-- <span class="text-muted fw-light">DataTables /</span>  --}}
          Users
        </h4>

        <!-- Ajax Sourced Server-side -->
        <div class="card">
            <h5 class="card-header">Ajax Sourced Server-side</h5>
            <div class="card-datatable text-nowrap">
                <table class="datatables-ajax table table-bordered">
                <thead>
                    <tr>
                    <th>Full name</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Start date</th>
                    <th>Salary</th>
                    </tr>
                </thead>
                </table>
            </div>
        </div>
        <!--/ Ajax Sourced Server-side -->
    
    
    </div>

    @push('js')
        <!-- Vendors JS -->
        {{-- <script src="{{ asset('assets/vendor/libs/jquery/jquery.js') }}"></script> --}}
        <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
        <!-- Flat Picker -->
        {{-- <script src="{{ asset('assets/vendor/libs/moment/moment.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/flatpickr/flatpickr.js') }}"></script> --}}
        <!-- Page JS -->
        <script src="{{ asset('assets/js/tables-datatables-advanced.js') }}"></script>
    @endpush

</x-app>
