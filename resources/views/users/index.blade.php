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
</x-app>
