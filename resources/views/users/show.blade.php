@section('title')
Users
@endsection

<x-app>
    <div class="container mt-4">
        <div class="row">
            <div class="card mb-4 col-md-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                            <img class="img-fluid rounded my-4" src="../../assets/img/avatars/10.png" height="110"
                                width="110" alt="User avatar" />
                            <div class="user-info text-center">
                                <h5 class="mb-2">{{ $user->first_name }} {{ $user->last_name }}</h5>
                                <span class="badge bg-label-secondary">Author</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                        <div class="d-flex align-items-start me-4 mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded"><i class="bx bx-check bx-sm"></i></span>
                            <div>
                                <h5 class="mb-0">1.23k</h5>
                                <span>Tasks Done</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded"><i
                                    class="bx bx-customize bx-sm"></i></span>
                            <div>
                                <h5 class="mb-0">568</h5>
                                <span>Projects Done</span>
                            </div>
                        </div>
                    </div>
                    <h5 class="pb-2 border-bottom mb-4">Details</h5>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <span class="fw-bold me-2">Username:</span>
                                <span>violet.dev</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Email:</span>
                                <span>{{ $user->email }}</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Status:</span>
                                <span class="badge bg-label-success">Active</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Role:</span>
                                <span>Author</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Tax id:</span>
                                <span>Tax-8965</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Contact:</span>
                                <span>(123) 456-7890</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Languages:</span>
                                <span>French</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">Country:</span>
                                <span>England</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center pt-3">
                            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser"
                                data-bs-toggle="modal">Edit</a>
                            <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md-8">
                <div class="nav-align-top mb-4">
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                        <li class="nav-item">
                            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                data-bs-target="#profile" aria-controls="navs-justified-home" aria-selected="true">
                                <i class="tf-icons bx bx-user"></i> Profile
                            </button>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#billing" aria-controls="navs-justified-profile" aria-selected="false">
                                <i class="tf-icons bx bx-detail"></i> Billing
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="profile" role="tabpanel">
                            <div class="card mb-4 p-4">
                                <p>
                                    Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake
                                    ice
                                    cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry
                                    ice
                                    cream
                                    cheesecake fruitcake.
                                </p>
                                <p class="mb-0">
                                    Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu
                                    halvah
                                    cotton candy liquorice caramels.
                                </p>
                            </div>
                            <div class="card mb-4">
                                <h5 class="card-header">User Activity Timeline</h5>
                                <div class="card-body">
                                    <ul class="timeline">
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-primary"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-0">12 Invoices have been paid</h6>
                                                    <small class="text-muted">12 min ago</small>
                                                </div>
                                                <p class="mb-2">Invoices have been paid to the company</p>
                                                <div class="d-flex">
                                                    <a href="javascript:void(0)" class="me-3">
                                                        <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image"
                                                            width="20" class="me-2" />
                                                        <span class="fw-bold text-body">invoices.pdf</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-warning"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-0">Client Meeting</h6>
                                                    <small class="text-muted">45 min ago</small>
                                                </div>
                                                <p class="mb-2">Project meeting with john @10:15am</p>
                                                <div class="d-flex flex-wrap">
                                                    <div class="avatar me-3">
                                                        <img src="../../assets/img/avatars/3.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div>
                                                        <h6 class="mb-0">Lester McCarthy (Client)</h6>
                                                        <span>CEO of PIXINVENT</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-info"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-0">Create a new project for client</h6>
                                                    <small class="text-muted">2 Day Ago</small>
                                                </div>
                                                <p class="mb-2">5 team members in a project</p>
                                                <div class="d-flex align-items-center avatar-group">
                                                    <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                        data-popup="tooltip-custom" data-bs-placement="top"
                                                        title="Vinnie Mostowy">
                                                        <img src="../../assets/img/avatars/5.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                        data-popup="tooltip-custom" data-bs-placement="top"
                                                        title="Marrie Patty">
                                                        <img src="../../assets/img/avatars/12.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                        data-popup="tooltip-custom" data-bs-placement="top"
                                                        title="Jimmy Jackson">
                                                        <img src="../../assets/img/avatars/9.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                        data-popup="tooltip-custom" data-bs-placement="top"
                                                        title="Kristine Gill">
                                                        <img src="../../assets/img/avatars/6.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                    <div class="avatar pull-up" data-bs-toggle="tooltip"
                                                        data-popup="tooltip-custom" data-bs-placement="top"
                                                        title="Nelson Wilson">
                                                        <img src="../../assets/img/avatars/14.png" alt="Avatar"
                                                            class="rounded-circle" />
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item timeline-item-transparent">
                                            <span class="timeline-point timeline-point-success"></span>
                                            <div class="timeline-event">
                                                <div class="timeline-header mb-1">
                                                    <h6 class="mb-0">Design Review</h6>
                                                    <small class="text-muted">5 days Ago</small>
                                                </div>
                                                <p class="mb-0">Weekly review of freshly prepared design for our new
                                                    app.</p>
                                            </div>
                                        </li>
                                        <li class="timeline-end-indicator">
                                            <i class="bx bx-check-circle"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="billing" role="tabpanel">
                            <div class="card card-action">
                                <div class="card-header align-items-center">
                                    <h5 class="card-action-title mb-0">Billing Address</h5>
                                    <div class="card-action-element">
                                        <button class="btn btn-primary btn-sm edit-address" type="button"
                                            data-bs-toggle="modal" data-bs-target="#addNewAddress">
                                            Edit address
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-7 col-12">
                                            <dl class="row mb-0">
                                                <dt class="col-sm-4 mb-3 text-nowrap">Company Name:</dt>
                                                <dd class="col-sm-8">Frest</dd>

                                                <dt class="col-sm-4 mb-3 text-nowrap">Billing Email:</dt>
                                                <dd class="col-sm-8">user@ex.com</dd>

                                                <dt class="col-sm-4 mb-3 text-nowrap">Tax ID:</dt>
                                                <dd class="col-sm-8">TAX-357378</dd>

                                                <dt class="col-sm-4 mb-3 text-nowrap">VAT Number:</dt>
                                                <dd class="col-sm-8">SDF754K77</dd>

                                                <dt class="col-sm-4 mb-3 text-nowrap">Billing Address:</dt>
                                                <dd class="col-sm-8">
                                                    100 Water Plant <br />Avenue, Building 1303<br />
                                                    Wake Island
                                                </dd>
                                            </dl>
                                        </div>
                                        <div class="col-xl-5 col-12">
                                            <dl class="row mb-0">
                                                <dt class="col-sm-4 mb-3 text-nowrap">Contact:</dt>
                                                <dd class="col-sm-8">+1 (605) 977-32-65</dd>

                                                <dt class="col-sm-4 mb-3 text-nowrap">Country:</dt>
                                                <dd class="col-sm-8">Wake Island</dd>

                                                <dt class="col-sm-4 mb-3 text-nowrap">State:</dt>
                                                <dd class="col-sm-8">Capholim</dd>

                                                <dt class="col-sm-4 mb-3 text-nowrap">Zipcode:</dt>
                                                <dd class="col-sm-8">403114</dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app>
