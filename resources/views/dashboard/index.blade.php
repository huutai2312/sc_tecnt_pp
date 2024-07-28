@extends('layouts.app')

@section('content')
    <div class="pc-container">
        <div class="pc-content"><!-- [ Main Content ] start -->
            <div class="row">
                {{--                 <div class="col-12"> --}}
                {{--                     <div class="card welcome-banner"> --}}
                {{--                         <div class="card-body"> --}}
                {{--                             <div class="row"> --}}
                {{--                                 <div class="col-sm-6"> --}}
                {{--                                     <div class="p-4"><h2 class="text-white">Explore SC-TECHNT</h2> --}}
                {{--                                         <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> --}}
                {{--                                         <a href="#" class="btn btn-outline-light">Add your social link</a> --}}
                {{--                                     </div> --}}
                {{--                                 </div> --}}
                {{--                                 <div class="col-sm-6 text-center"> --}}
                {{--                                     <div class="img-welcome-banner"><img --}}
                {{--                                             src="../assets/images/widget/welcome-banner.png" --}}
                {{--                                             alt="img" class="img-fluid"></div> --}}
                {{--                                 </div> --}}
                {{--                             </div> --}}
                {{--                         </div> --}}
                {{--                     </div> --}}
                {{--                 </div> --}}
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8"><h3 class="mb-1">$30200</h3>
                                    <p class="text-muted mb-0">All Earnings</p></div>
                                <div class="col-4 text-end"><i class="ti ti-chart-bar text-secondary f-36"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8"><h3 class="mb-1">145</h3>
                                    <p class="text-muted mb-0">Task</p></div>
                                <div class="col-4 text-end"><i class="ti ti-calendar-event text-danger f-36"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8"><h3 class="mb-1">290+</h3>
                                    <p class="text-muted mb-0">Page Views</p></div>
                                <div class="col-4 text-end"><i class="ti ti-file-text text-success f-36"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-8"><h3 class="mb-1">500</h3>
                                    <p class="text-muted mb-0">Downloads</p></div>
                                <div class="col-4 text-end"><i class="ti ti-download text-primary f-36"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card table-card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3"><h5
                                class="mb-0">
                                Transaction History</h5>
                            <button class="btn btn-sm btn-link-primary">View All</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" id="pc-dt-simple">
                                    <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>Category</th>
                                        <th>Date/Time</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img src="../assets/images/user/avatar-1.jpg"
                                                                                alt="user image"
                                                                                class="img-radius wid-40">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><h6 class="mb-0">Airi Satou</h6></div>
                                            </div>
                                        </td>
                                        <td>Salary Payment</td>
                                        <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                        <td>$950.54</td>
                                        <td><span class="badge text-bg-success">Completed</span></td>
                                        <td class="text-end"><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-eye f-20"></i> </a><a href="#"
                                                                                       class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-edit f-20"></i> </a><a href="#"
                                                                                        class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-trash f-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img src="../assets/images/user/avatar-2.jpg"
                                                                                alt="user image"
                                                                                class="img-radius wid-40">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><h6 class="mb-0">Ashton Cox</h6></div>
                                            </div>
                                        </td>
                                        <td>Project Payment</td>
                                        <td>2023/02/01 <span class="text-muted text-sm d-block">02:14 PM</span></td>
                                        <td>$520.30</td>
                                        <td><span class="badge text-bg-success">Completed</span></td>
                                        <td class="text-end"><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-eye f-20"></i> </a><a href="#"
                                                                                       class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-edit f-20"></i> </a><a href="#"
                                                                                        class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-trash f-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img src="../assets/images/user/avatar-3.jpg"
                                                                                alt="user image"
                                                                                class="img-radius wid-40">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><h6 class="mb-0">Bradley Greer</h6></div>
                                            </div>
                                        </td>
                                        <td>You Tube Subscribe</td>
                                        <td>2023/01/22 <span class="text-muted text-sm d-block">10:32 AM</span></td>
                                        <td>$100.00</td>
                                        <td><span class="badge text-bg-warning">Pending</span></td>
                                        <td class="text-end"><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-eye f-20"></i> </a><a href="#"
                                                                                       class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-edit f-20"></i> </a><a href="#"
                                                                                        class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-trash f-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img src="../assets/images/user/avatar-4.jpg"
                                                                                alt="user image"
                                                                                class="img-radius wid-40">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><h6 class="mb-0">Brielle Williamson</h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Slary Payment</td>
                                        <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                        <td>$760.25</td>
                                        <td><span class="badge text-bg-primary">In Progress</span></td>
                                        <td class="text-end"><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-eye f-20"></i> </a><a href="#"
                                                                                       class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-edit f-20"></i> </a><a href="#"
                                                                                        class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-trash f-20"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0"><img src="../assets/images/user/avatar-5.jpg"
                                                                                alt="user image"
                                                                                class="img-radius wid-40">
                                                </div>
                                                <div class="flex-grow-1 ms-3"><h6 class="mb-0">Airi Satou</h6></div>
                                            </div>
                                        </td>
                                        <td>Spotify Subscribe</td>
                                        <td>2023/02/07 <span class="text-muted text-sm d-block">09:05 PM</span></td>
                                        <td>$60.05</td>
                                        <td><span class="badge text-bg-danger">Canceled</span></td>
                                        <td class="text-end"><a href="#" class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-eye f-20"></i> </a><a href="#"
                                                                                       class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-edit f-20"></i> </a><a href="#"
                                                                                        class="avtar avtar-xs btn-link-secondary"><i
                                                    class="ti ti-trash f-20"></i></a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between"><h5 class="mb-0">Total
                                    Income</h5>
                                <div class="dropdown"><a
                                        class="avtar avtar-s btn-link-secondary dropdown-toggle arrow-none"
                                        href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class="ti ti-dots-vertical f-18"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item"
                                                                                    href="#">Today</a>
                                        <a class="dropdown-item" href="#">Weekly</a> <a class="dropdown-item" href="#">Monthly</a>
                                    </div>
                                </div>
                            </div>
                            <div id="total-income-graph"></div>
                            <div class="row g-3 mt-3">
                                <div class="col-sm-6">
                                    <div class="bg-body p-3 rounded">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0"><span
                                                    class="p-1 d-block bg-primary rounded-circle"><span
                                                        class="visually-hidden">New alerts</span></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2"><p class="mb-0">Income</p></div>
                                        </div>
                                        <h6 class="mb-0">$23,876 </h6></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bg-body p-3 rounded">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0"><span
                                                    class="p-1 d-block bg-warning rounded-circle"><span
                                                        class="visually-hidden">New alerts</span></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2"><p class="mb-0">Rent</p></div>
                                        </div>
                                        <h6 class="mb-0">$23,876 </h6></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bg-body p-3 rounded">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0"><span
                                                    class="p-1 d-block bg-success rounded-circle"><span
                                                        class="visually-hidden">New alerts</span></span>
                                            </div>
                                            <div class="flex-grow-1 ms-2"><p class="mb-0">Download</p></div>
                                        </div>
                                        <h6 class="mb-0">$23,876 </h6></div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="bg-body p-3 rounded">
                                        <div class="d-flex align-items-center mb-2">
                                            <div class="flex-shrink-0"><span
                                                    class="p-1 d-block bg-light-primary rounded-circle"><span
                                                        class="visually-hidden">New alerts</span></span></div>
                                            <div class="flex-grow-1 ms-2"><p class="mb-0">Views</p></div>
                                        </div>
                                        <h6 class="mb-0">$23,876 </h6></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- [ Main Content ] end --></div>
    </div>

@endsection
