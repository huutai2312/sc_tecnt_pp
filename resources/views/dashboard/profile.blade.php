@extends('layouts.app')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body py-0">
                            <ul class="nav nav-tabs profile-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="profile-tab-1" data-bs-toggle="tab"
                                       href="#profile-1" role="tab" aria-selected="true"><i
                                            class="ti ti-user me-2"></i>Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-2" data-bs-toggle="tab"
                                       href="#profile-2" role="tab" aria-selected="true"><i
                                            class="ti ti-file-text me-2"></i>Personal Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab-3" data-bs-toggle="tab"
                                       href="#profile-3" role="tab" aria-selected="true"><i
                                            class="ti ti-id me-2"></i>Login History</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="profile-1" role="tabpanel"
                             aria-labelledby="profile-tab-1">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body position-relative">
                                            <div class="position-absolute end-0 top-0 p-3"><span
                                                    class="badge bg-primary">Pro</span>
                                            </div>
                                            <div class="text-center mt-3">
                                                <div class="chat-avtar d-inline-flex mx-auto"><img
                                                        class="rounded-circle img-fluid wid-70"
                                                        src="../assets/images/user/avatar-5.jpg" alt="User image"></div>
                                                <h5 class="mb-0">{{ Auth::user()->name ?? 'Name' }}</h5>
                                                <hr class="my-3 border border-secondary-subtle">
                                                <div class="row g-3">
                                                    <div class="col-4"><h5 class="mb-0">86</h5><small
                                                            class="text-muted">Links</small>
                                                    </div>
                                                    <div class="col-4 border border-top-0 border-bottom-0"><h5
                                                            class="mb-0">
                                                            40</h5><small class="text-muted">Total Visits</small></div>
                                                    <div class="col-4"><h5 class="mb-0">4.5K</h5><small
                                                            class="text-muted">Visit</small>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-header"><h5>Personal Details</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="row">
                                                        <div class="col-md-6"><p class="mb-1 text-muted">Full Name</p>
                                                            <p class="mb-0">Anshan Handgun</p></div>
                                                        <div class="col-md-6"><p class="mb-1 text-muted">Username</p>
                                                            <p class="mb-0">Mr. Deepen Handgun</p></div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row">
                                                        <div class="col-md-6"><p class="mb-1 text-muted">Phone</p>
                                                            <p class="mb-0">(+1-876) 8654 239 581</p></div>
                                                        <div class="col-md-6"><p class="mb-1 text-muted">Country</p>
                                                            <p class="mb-0">New York</p></div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row">
                                                        <div class="col-md-6"><p class="mb-1 text-muted">Email</p>
                                                            <p class="mb-0"><a
                                                                    href="https://ableproadmin.com/cdn-cgi/l/email-protection"
                                                                    class="__cf_email__"
                                                                    data-cfemail="6f0e011c070e01410b07575e2f08020e0603410c0002">[email&#160;protected]</a>
                                                            </p></div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-header"><h5>Personal Information</h5></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-12 text-center mb-3">
                                                    <div class="user-upload wid-75"><img
                                                            src="../assets/images/user/avatar-4.jpg" alt="img"
                                                            class="img-fluid"> <label for="uplfile"
                                                                                      class="img-avtar-upload"><i
                                                                class="ti ti-camera f-24 mb-1"></i> <span>Upload</span></label>
                                                        <input type="file" id="uplfile" class="d-none"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3"><label class="form-label">Display Name</label>
                                                        <input
                                                            type="text" class="form-control" value="Anshan"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3"><label class="form-label">Username</label> <input
                                                            type="text" class="form-control" value="Handgun"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3"><label class="form-label">Country</label> <input
                                                            type="text" class="form-control" value="Viet Nam"></div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="mb-3"><label class="form-label">Gender</label>
                                                        <select
                                                            class="form-control">
                                                            <option selected>Male</option>
                                                            <option>Female</option>
                                                            <option>Other</option>
                                                        </select></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-end btn-page">
                                            <div class="btn btn-outline-secondary">Cancel</div>
                                            <div class="btn btn-primary">Update Profile</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card">

                                        <div class="card-header"><h5>Change Password</h5></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="mb-3"><label class="form-label">Old
                                                            Password</label> <input
                                                            type="password" class="form-control"></div>
                                                    <div class="mb-3"><label class="form-label">New
                                                            Password</label> <input
                                                            type="password" class="form-control"></div>
                                                    <div class="mb-3"><label class="form-label">Confirm
                                                            Password</label> <input
                                                            type="password" class="form-control"></div>
                                                </div>
                                                <div class="col-sm-6"><h5>New password must contain:</h5>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item"><i
                                                                class="ti ti-circle-check text-success f-16 me-2"></i>
                                                            At least
                                                            8
                                                            characters
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-end btn-page">
                                            <div class="btn btn-outline-secondary">Cancel</div>
                                            <div class="btn btn-primary">Update Profile</div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header"><h5>Active Sessions</h5></div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="me-2"><p class="mb-2">Celt Desktop</p>
                                                            <p class="mb-0 text-muted">4351 Deans Lane</p></div>

                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0 pb-0">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="me-2"><p class="mb-2">Moon Tablet</p>
                                                            <p class="mb-0 text-muted">4185 Michigan Avenue</p></div>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- [ sample-page ] end --></div><!-- [ Main Content ] end --></div>
    </div>
@endsection
