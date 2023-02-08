@section('title')
Users
@endsection

<x-app>   
    @push('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.css"> --}}
    @endpush


    <div class="container-xxl flex-grow-1 container-p-y">
      
        <!--  title and buttons and cards -->
        <div class="card mb-3">
            <div class="card-header d-inline-flex justify-content-between align-items-baseline">
                <h5 > Users</h5>
                <button type="button" class="btn  btn-label-primary">+ user</button>
            </div>           
        </div>
         <!-- Hoverable Table rows -->
         <div class="card ">
            {{-- <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table table-bordered"> --}}
            {{-- <h5 class="card-header">Hoverable rows</h5> --}}
            <div class="table-responsive text-nowrap">
              <table id="this_table" class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>{{__('table.project')}}</th>
                    <th>Client</th>
                    <th>Users</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($users as $user)
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Lilian Fuller"
                            >
                              <img src="../../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Sophia Wilkerson"
                            >
                              <img src="../../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="Christina Parker"
                            >
                              <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                            </li>
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href=""><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-show me-1"></i> show</a>

                              <form method="POST"  action="{{route('dashboard.users.destroy', $user)}}">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="dropdown-item" ><i class="bx bx-trash me-1"></i> Delete</button>                                                
                                </form>
                              {{-- <a class="dropdown-item" href="{{ route('dashboard.users.destroy', $user->id)}}"><i class="bx bx-trash me-1"></i> Delete</a> --}}
                            </div>
                          </div>
                        </td>
                      </tr>
                        
                    @endforeach
                  
                
                </tbody>
              </table>
            </div>
          </div>
          <!--/ Hoverable Table rows -->
    </div>

    @push('js')
   
        {{-- <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script> --}}
        {{-- <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.js"></script>
        <script> 
             $(document).ready( function () {
                        $('#this_table').DataTable();
             } );
        </script>             

    @endpush

</x-app>
