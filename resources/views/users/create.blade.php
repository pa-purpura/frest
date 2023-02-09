<x-app>
    @section('title')
        Users
    @endsection

    <div class="container-xxl flex-grow-1 container-p-y">

        <div class="row">
            <div class="col-xl-12">
                <div class="nav-align-top mb-4">

                    {{-- menu --}}
                    <ul class="nav nav-pills mb-3" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" {{-- href="javascript:void(0);" --}} role="tab" type="button"
                                data-bs-toggle="tab" data-bs-target="#navs-pills-top-home"
                                aria-controls="navs-pills-top-home" aria-selected="true">
                                <i class="bx bx-user me-1"></i>
                                Account
                            </button>

                        </li>
                        <li class="nav-item">
                            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-profile" aria-controls="navs-pills-top-profile"
                                aria-selected="false">
                                <i class="bx bx-lock-alt me-1"></i> Security</a>
                            </button>
                        </li>
                    </ul>

                    {{-- scheda principale  --}}
                    <div class="tab-content">

                        {{-- scheda account --}}
                        <div class="tab-pane fade show active" id="navs-pills-top-home" role="tabpanel">
                            <div class="container-xxl flex-grow-1 container-p-y">
                                <div class="row">
                                    <div class="col-md-12">

                                        <h5 class="card-header">Profile Details</h5>
                                        <!-- Account -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                <img src="../../assets/img/avatars/1.png" alt="user-avatar"
                                                    class="d-block rounded" height="100" width="100"
                                                    id="uploadedAvatar" />
                                                <div class="button-wrapper">
                                                    <label for="upload" class="btn btn-primary me-2 mb-4"
                                                        tabindex="0">
                                                        <span class="d-none d-sm-block">Upload new photo</span>
                                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                                        <input type="file" id="upload" class="account-file-input"
                                                            hidden accept="image/png, image/jpeg" />
                                                    </label>
                                                    <button type="button"
                                                        class="btn btn-label-secondary account-image-reset mb-4">
                                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Reset</span>
                                                    </button>

                                                    <p class="mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0" />
                                        <div class="card-body">
                                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6">
                                                        <label for="firstName" class="form-label">First Name</label>
                                                        <input class="form-control" type="text" id="firstName"
                                                            name="firstName" value="John" autofocus />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="lastName" class="form-label">Last Name</label>
                                                        <input class="form-control" type="text" name="lastName"
                                                            id="lastName" value="Doe" />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="email" class="form-label">E-mail</label>
                                                        <input class="form-control" type="text" id="email"
                                                            name="email" value="john.doe@example.com"
                                                            placeholder="john.doe@example.com" />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="organization"
                                                            class="form-label">Organization</label>
                                                        <input type="text" class="form-control" id="organization"
                                                            name="organization" value="PIXINVENT" />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="phoneNumber">Phone
                                                            Number</label>
                                                        <div class="input-group input-group-merge">
                                                            <span class="input-group-text">US (+1)</span>
                                                            <input type="text" id="phoneNumber" name="phoneNumber"
                                                                class="form-control" placeholder="202 555 0111" />
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="address" class="form-label">Address</label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address" placeholder="Address" />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="state" class="form-label">State</label>
                                                        <input class="form-control" type="text" id="state"
                                                            name="state" placeholder="California" />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="zipCode" class="form-label">Zip Code</label>
                                                        <input type="text" class="form-control" id="zipCode"
                                                            name="zipCode" placeholder="231465" maxlength="6" />
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label class="form-label" for="country">Country</label>
                                                        <select id="country" class="select2 form-select">
                                                            <option value="">Select</option>
                                                            <option value="Australia">Australia</option>
                                                            <option value="Bangladesh">Bangladesh</option>
                                                            <option value="Belarus">Belarus</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="China">China</option>
                                                            <option value="France">France</option>
                                                            <option value="Germany">Germany</option>
                                                            <option value="India">India</option>
                                                            <option value="Indonesia">Indonesia</option>
                                                            <option value="Israel">Israel</option>
                                                            <option value="Italy">Italy</option>
                                                            <option value="Japan">Japan</option>
                                                            <option value="Korea">Korea, Republic of</option>
                                                            <option value="Mexico">Mexico</option>
                                                            <option value="Philippines">Philippines</option>
                                                            <option value="Russia">Russian Federation</option>
                                                            <option value="South Africa">South Africa</option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="language" class="form-label">Language</label>
                                                        <select id="language" class="select2 form-select">
                                                            <option value="">Select Language</option>
                                                            <option value="en">English</option>
                                                            <option value="fr">French</option>
                                                            <option value="de">German</option>
                                                            <option value="pt">Portuguese</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="timeZones" class="form-label">Timezone</label>
                                                        <select id="timeZones" class="select2 form-select">
                                                            <option value="">Select Timezone</option>
                                                            <option value="-12">(GMT-12:00) International Date Line
                                                                West</option>
                                                            <option value="-11">(GMT-11:00) Midway Island, Samoa
                                                            </option>
                                                            <option value="-10">(GMT-10:00) Hawaii</option>
                                                            <option value="-9">(GMT-09:00) Alaska</option>
                                                            <option value="-8">(GMT-08:00) Pacific Time (US &
                                                                Canada)</option>
                                                            <option value="-8">(GMT-08:00) Tijuana, Baja California
                                                            </option>
                                                            <option value="-7">(GMT-07:00) Arizona</option>
                                                            <option value="-7">(GMT-07:00) Chihuahua, La Paz,
                                                                Mazatlan</option>
                                                            <option value="-7">(GMT-07:00) Mountain Time (US &
                                                                Canada)</option>
                                                            <option value="-6">(GMT-06:00) Central America</option>
                                                            <option value="-6">(GMT-06:00) Central Time (US &
                                                                Canada)</option>
                                                            <option value="-6">(GMT-06:00) Guadalajara, Mexico
                                                                City, Monterrey</option>
                                                            <option value="-6">(GMT-06:00) Saskatchewan</option>
                                                            <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio
                                                                Branco</option>
                                                            <option value="-5">(GMT-05:00) Eastern Time (US &
                                                                Canada)</option>
                                                            <option value="-5">(GMT-05:00) Indiana (East)</option>
                                                            <option value="-4">(GMT-04:00) Atlantic Time (Canada)
                                                            </option>
                                                            <option value="-4">(GMT-04:00) Caracas, La Paz</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3 col-md-6">
                                                        <label for="currency" class="form-label">Currency</label>
                                                        <select id="currency" class="select2 form-select">
                                                            <option value="">Select Currency</option>
                                                            <option value="usd">USD</option>
                                                            <option value="euro">Euro</option>
                                                            <option value="pound">Pound</option>
                                                            <option value="bitcoin">Bitcoin</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mt-2">
                                                    <button type="submit" class="btn btn-primary me-2">Save
                                                        changes</button>
                                                    <button type="reset"
                                                        class="btn btn-label-secondary">Cancel</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- /Account -->


                                        <h5 class="card-header mt-5 ">Delete Account</h5>
                                        <div class="card-body mt-3">
                                            <div class="mb-3 col-12 mb-0">
                                                <div class="alert alert-warning">
                                                    <h6 class="alert-heading mb-1">Are you sure you want to delete your
                                                        account?</h6>
                                                    <p class="mb-0">Once you delete your account, there is no going
                                                        back. Please be certain.</p>
                                                </div>
                                            </div>
                                            <form id="formAccountDeactivation" onsubmit="return false">
                                                <div class="form-check mb-3">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="accountActivation" id="accountActivation" />
                                                    <label class="form-check-label" for="accountActivation">I confirm
                                                        my account deactivation</label>
                                                </div>
                                                <button type="submit"
                                                    class="btn btn-danger deactivate-account">Deactivate
                                                    Account</button>
                                            </form>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>

                        {{-- scheda security --}}
                        <div class="tab-pane fade" id="navs-pills-top-profile" role="tabpanel">
                            <div class="container-xxl flex-grow-1 container-p-y">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="card-header">Change Password</h5>
                                        <div class="card-body">
                                            <form id="formAccountSettings" method="POST" onsubmit="return false">
                                                <div class="row">
                                                    <div class="mb-3 col-md-6 form-password-toggle">
                                                        <label class="form-label" for="currentPassword">Current
                                                            Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="password"
                                                                name="currentPassword" id="currentPassword"
                                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                            <span class="input-group-text cursor-pointer"><i
                                                                    class="bx bx-hide"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3 col-md-6 form-password-toggle">
                                                        <label class="form-label" for="newPassword">New
                                                            Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="password"
                                                                id="newPassword" name="newPassword"
                                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                            <span class="input-group-text cursor-pointer"><i
                                                                    class="bx bx-hide"></i></span>
                                                        </div>
                                                    </div>

                                                    <div class="mb-3 col-md-6 form-password-toggle">
                                                        <label class="form-label" for="confirmPassword">Confirm
                                                            New Password</label>
                                                        <div class="input-group input-group-merge">
                                                            <input class="form-control" type="password"
                                                                name="confirmPassword" id="confirmPassword"
                                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                                                            <span class="input-group-text cursor-pointer"><i
                                                                    class="bx bx-hide"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <p class="fw-semibold mt-2">Password Requirements:</p>
                                                        <ul class="ps-3 mb-0">
                                                            <li class="mb-1">Minimum 8 characters long - the
                                                                more, the better</li>
                                                            <li class="mb-1">At least one lowercase character
                                                            </li>
                                                            <li>At least one number, symbol, or whitespace character
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-12 mt-1">
                                                        <button type="submit" class="btn btn-primary me-2">Save
                                                            changes</button>
                                                        <button type="reset"
                                                            class="btn btn-label-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>



                                        <h5 class="card-header mt-5">Two-steps verification</h5>
                                        <div class="card-body my-3">
                                            <p class="fw-semibold mb-3">Two factor authentication is not enabled
                                                yet.</p>
                                            <p class="w-75">
                                                Two-factor authentication adds an additional layer of security to
                                                your account by requiring more
                                                than just a password to log in.
                                                <a href="javascript:void(0);">Learn more.</a>
                                            </p>
                                            <button class="btn btn-primary mt-2" data-bs-toggle="modal"
                                                data-bs-target="#enableOTP">
                                                Enable two-factor authentication
                                            </button>
                                        </div>
                                        <!-- Modal -->
                                        <!-- Enable OTP Modal -->
                                        <div class="modal fade" id="enableOTP" tabindex="-1" aria-hidden="true">
                                            <div
                                                class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                                                <div class="modal-content p-3 p-md-5">
                                                    <div class="modal-body">
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                                        <div class="text-center mb-4">
                                                            <h3 class="mb-4">Enable One Time Password</h3>
                                                        </div>
                                                        <h6>Verify Your Mobile Number for SMS</h6>
                                                        <p>
                                                            Enter your mobile phone number with country code and we will
                                                            send you a verification code.
                                                        </p>
                                                        <form id="enableOTPForm" class="row g-3 mt-3"
                                                            onsubmit="return false">
                                                            <div class="col-12">
                                                                <label class="form-label"
                                                                    for="modalEnableOTPPhone">Phone Number</label>
                                                                <div class="input-group input-group-merge">
                                                                    <span class="input-group-text">+1</span>
                                                                    <input type="text" id="modalEnableOTPPhone"
                                                                        name="modalEnableOTPPhone"
                                                                        class="form-control phone-number-otp-mask"
                                                                        placeholder="202 555 0111" />
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-sm-3 me-1">Submit</button>
                                                                <button type="reset" class="btn btn-label-secondary"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ Enable OTP Modal -->

                                        <!-- /Modal -->



                                        <!-- Create an API key -->

                                        <h5 class="card-header mt-5">Create an API key</h5>
                                        <div class="row">
                                            <div class="col-md-5 order-md-0 order-1">
                                                <div class="card-body pt-md-0 my-3">
                                                    <form id="formAccountSettingsApiKey" method="POST"
                                                        onsubmit="return false">
                                                        <div class="row">
                                                            <div class="mb-3 col-12">
                                                                <label for="apiAccess" class="form-label">Choose
                                                                    the Api key type you want to create</label>
                                                                <select id="apiAccess" class="select2 form-select">
                                                                    <option value="">Choose Key Type</option>
                                                                    <option value="full">Full Control</option>
                                                                    <option value="modify">Modify</option>
                                                                    <option value="read-execute">Read & Execute
                                                                    </option>
                                                                    <option value="folders">List Folder Contents
                                                                    </option>
                                                                    <option value="read">Read Only</option>
                                                                    <option value="read-write">Read & Write
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3 col-12">
                                                                <label for="apiKey" class="form-label">Name the
                                                                    API key</label>
                                                                <input type="text" class="form-control"
                                                                    id="apiKey" name="apiKey"
                                                                    placeholder="Server Key 1" />
                                                            </div>
                                                            <div class="col-12">
                                                                <button type="submit"
                                                                    class="btn btn-primary me-2 d-grid w-100">Create
                                                                    Key</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-md-7 order-md-1 order-0">
                                                <div class="text-center mt-md-n5 pt-md-2 mx-3 mx-md-0">
                                                    <img src="../../assets/img/illustrations/boy-working-light.png"
                                                        class="img-fluid" alt="Api Key Image" width="300"
                                                        data-app-light-img="illustrations/boy-working-light.png"
                                                        data-app-dark-img="illustrations/boy-working-dark.png" />
                                                </div>
                                            </div>
                                        </div>

                                        <!--/ Create an API key -->

                                        <!-- API Key List & Access -->
                                        <div class="card mb-4">
                                            <h5 class="card-header">API Key List & Access</h5>
                                            <div class="card-body">
                                                <p>
                                                    An API key is a simple encrypted string that identifies an
                                                    application without any principal.
                                                    They are useful for accessing public data anonymously, and are used
                                                    to associate API requests
                                                    with your project for quota and billing.
                                                </p>
                                                <div class="row">
                                                    <div class="col-md-12 my-4">
                                                        <div class="bg-lighter rounded p-3 mb-3 position-relative">
                                                            <div class="dropdown api-key-actions">
                                                                <a class="btn dropdown-toggle text-muted hide-arrow p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="javascript:;" class="dropdown-item"><i
                                                                            class="bx bx-pencil me-2"></i>Edit</a>
                                                                    <a href="javascript:;" class="dropdown-item"><i
                                                                            class="bx bx-trash me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap mb-3">
                                                                <h4 class="mb-0 me-3">Server Key 1</h4>
                                                                <span class="badge bg-label-primary">Full Access</span>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span
                                                                    class="fw-semibold me-3">23eaf7f0-f4f7-495e-8b86-fad3261282ac</span>
                                                                <span class="text-muted cursor-pointer"><i
                                                                        class="bx bx-copy"></i></span>
                                                            </div>
                                                            <span>Created on 28 Apr 2021, 18:20 GTM+4:10</span>
                                                        </div>
                                                        <div class="bg-lighter rounded p-3 position-relative mb-3">
                                                            <div class="dropdown api-key-actions">
                                                                <a class="btn dropdown-toggle text-muted hide-arrow p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="javascript:;" class="dropdown-item"><i
                                                                            class="bx bx-pencil me-2"></i>Edit</a>
                                                                    <a href="javascript:;" class="dropdown-item"><i
                                                                            class="bx bx-trash me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap mb-3">
                                                                <h4 class="mb-0 me-3">Server Key 2</h4>
                                                                <span class="badge bg-label-primary">Read Only</span>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span
                                                                    class="fw-semibold me-3">bb98e571-a2e2-4de8-90a9-2e231b5e99</span>
                                                                <span class="text-muted cursor-pointer"><i
                                                                        class="bx bx-copy"></i></span>
                                                            </div>
                                                            <span>Created on 12 Feb 2021, 10:30 GTM+2:30</span>
                                                        </div>
                                                        <div class="bg-lighter rounded p-3 position-relative">
                                                            <div class="dropdown api-key-actions">
                                                                <a class="btn dropdown-toggle text-muted hide-arrow p-0"
                                                                    data-bs-toggle="dropdown"><i
                                                                        class="bx bx-dots-vertical-rounded"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <a href="javascript:;" class="dropdown-item"><i
                                                                            class="bx bx-pencil me-2"></i>Edit</a>
                                                                    <a href="javascript:;" class="dropdown-item"><i
                                                                            class="bx bx-trash me-2"></i>Delete</a>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center flex-wrap mb-3">
                                                                <h4 class="mb-0 me-3">Server Key 3</h4>
                                                                <span class="badge bg-label-primary">Full Access</span>
                                                            </div>
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span
                                                                    class="fw-semibold me-3">2e915e59-3105-47f2-8838-6e46bf83b711</span>
                                                                <span class="text-muted cursor-pointer"><i
                                                                        class="bx bx-copy"></i></span>
                                                            </div>
                                                            <span>Created on 28 Dec 2020, 12:21 GTM+4:10</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--/ API Key List & Access -->

                                        <!-- Recent Devices -->

                                        <h5 class="card-header mt-5">Recent Devices</h5>
                                        <div class="table-responsive my-3">
                                            <table class="table border-top">
                                                <thead>
                                                    <tr>
                                                        <th class="text-truncate">Browser</th>
                                                        <th class="text-truncate">Device</th>
                                                        <th class="text-truncate">Location</th>
                                                        <th class="text-truncate">Recent Activities</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-truncate">
                                                            <i class="bx bxl-windows text-info me-3"></i>
                                                            <span class="fw-semibold">Chrome on Windows</span>
                                                        </td>
                                                        <td class="text-truncate">HP Spectre 360</td>
                                                        <td class="text-truncate">Switzerland</td>
                                                        <td class="text-truncate">10, July 2021 20:07</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">
                                                            <i class="bx bx-mobile-alt text-danger me-3"></i>
                                                            <span class="fw-semibold">Chrome on iPhone</span>
                                                        </td>
                                                        <td class="text-truncate">iPhone 12x</td>
                                                        <td class="text-truncate">Australia</td>
                                                        <td class="text-truncate">13, July 2021 10:10</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">
                                                            <i class="bx bxl-android text-success me-3"></i>
                                                            <span class="fw-semibold">Chrome on Android</span>
                                                        </td>
                                                        <td class="text-truncate">Oneplus 9 Pro</td>
                                                        <td class="text-truncate">Dubai</td>
                                                        <td class="text-truncate">14, July 2021 15:15</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">
                                                            <i class="bx bxl-apple me-3"></i> <span
                                                                class="fw-semibold">Chrome on MacOS</span>
                                                        </td>
                                                        <td class="text-truncate">Apple iMac</td>
                                                        <td class="text-truncate">India</td>
                                                        <td class="text-truncate">16, July 2021 16:17</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">
                                                            <i class="bx bxl-windows text-info me-3"></i>
                                                            <span class="fw-semibold">Chrome on Windows</span>
                                                        </td>
                                                        <td class="text-truncate">HP Spectre 360</td>
                                                        <td class="text-truncate">Switzerland</td>
                                                        <td class="text-truncate">20, July 2021 21:01</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-truncate">
                                                            <i class="bx bxl-android text-success me-3"></i>
                                                            <span class="fw-semibold">Chrome on Android</span>
                                                        </td>
                                                        <td class="text-truncate">Oneplus 9 Pro</td>
                                                        <td class="text-truncate">Dubai</td>
                                                        <td class="text-truncate">21, July 2021 12:22</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <!--/ Recent Devices -->
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
</x-app>
