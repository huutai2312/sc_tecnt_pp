@extends('layouts.app')

@section('content')
    <div class="pc-container">
        <div class="pc-content">
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body pc-component">
                                    <div class="accordion card" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#c-basic-info" aria-expanded="true"
                                                        aria-controls="c-basic-info">BASIC INFORMATION
                                                </button>
                                            </h2>
                                            <div id="c-basic-info" class="accordion-collapse collapse show"
                                                 aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Title</label>
                                                                <input type="text" class="form-control"
                                                                       placeholder="Enter title" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Destination</label>
                                                                <input type="url" class="form-control"
                                                                       placeholder="Enter a destination URL" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#c-social-action"
                                                        aria-expanded="false" aria-controls="c-social-action">SOCIAL
                                                    ACTIONS
                                                </button>
                                            </h2>
                                            <div id="c-social-action" class="accordion-collapse collapse"
                                                 aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                            data-bs-target=".bd-example-modal-lg">Add action
                                                    </button>
                                                    <div class="modal fade bd-example-modal-lg" tabindex="-1"
                                                         role="dialog"
                                                         aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title">
                                                                        Select your action
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close">
                                                                    </button>
                                                                </div>

                                                                <div class="modal-body">
                                                                    @include('social-unlock.inc.#modal-socials')
                                                                </div>

                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                            data-bs-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">EXPIRES
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                 aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body pc-component">
                                    Preview
                                    <hr>
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>[[title]]</h5>
                                        </div>
                                        <div class="card-body">
                                            <button type="button" class="btn btn-shadow btn-primary w-100 mb-3">Subscribe to channel</button>
                                            <button type="button" class="btn btn-shadow btn-info w-100">Visit a page</button>
                                        </div>
                                        <div class="card-footer">
                                            <a type="button" class="btn btn-primary me-2 w-100">Unlock link</a>
                                        </div>
                                    </div>
                                    <a type="button" class="btn btn-light-secondary">Clear</a>
                                    <a type="button" class="btn btn-light-success">Create</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
