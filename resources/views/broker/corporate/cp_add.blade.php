@extends('layouts/azira')

@section('page')
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        Basic Content Wizard
                    </div>
                    <p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
                    <div id="wizard1">
                        <h3>Corporate Details</h3>
                        <section>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <label class="form-label">Corporate Name<sup class="red">*</sup></label>
                                        <input type="text" name="name" class="form-control required" placeholder="Enter corporate name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <label class="form-label">Corporate Logo <sup >(Resolution 150X50 and upload image only)</sup></label>
                                        <input type="file" name="logo" class="form-control required" placeholder="Attach Logo">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="control-group form-group">
                                        <label class="form-label">Pincode <sup class="red">*</sup></label>
                                        <input type="text" name="pincode" class="form-control required" placeholder="Enter Pincode">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="control-group form-group">
                                        <label class="form-label">City <sup class="red">*</sup></label>
                                        <input type="text" name="city" class="form-control required" placeholder="Enter City">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <label class="form-label">State <sup class="red">*</sup></label>
                                        <input type="text" name="state" class="form-control required" placeholder="Enter State">
                                    </div>
                                </div>


                                <div class="col-md-3">
                                    <div class="control-group form-group">
                                        <label class="form-label">Group Code</label>
                                        <input type="text" name="pincode" class="form-control required" placeholder="Enter Group Code">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="control-group form-group">
                                        <label class="form-label">Make a Claim</label>
                                        <select name="make_a_claim" class="form-control">
                                            <option value="">Please Select</option>
                                            <option value="1">Show</option>
                                            <option value="0">Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="control-group form-group">
                                        <label class="form-label">Corporate Landline</label>
                                        <input type="text" name="landline" class="form-control" placeholder="Enter Landline No.">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="control-group form-group">
                                        <label class="form-label">Industry Type</label>
                                        <input type="text" name="industry_type" class="form-control" placeholder="Enter industry type">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="control-group form-group">
                                        <label class="form-label">Corporate Address <sup class="red">*</sup></label>
                                        <textarea type="text" name="address" class="form-control required" placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <h3>HR Details</h3>
                        <section>
                            <div class="multi-hr">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="control-group form-group">
                                            <label class="form-label">Hr. Name<sup class="red">*</sup></label>
                                            <input type="text" name="name[]" class="form-control required" placeholder="Enter Hr. name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="control-group form-group">
                                            <label class="form-label">HR. Mobile Number</label>
                                            <input type="text" name="mobile_no[]" class="form-control required" placeholder="Enter Hr. Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="control-group form-group">
                                            <label class="form-label">HR. Email Address</label>
                                            <input type="text" name="email[]" class="form-control required" placeholder="Enter Hr. Email Address">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="control-group form-group">
                                            <label class="form-label">Corporate Username<sup class="red">*</sup></label>
                                            <input type="text" name="username[]" class="form-control required" placeholder="Enter Corporate Username">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="control-group form-group">
                                            <label class="form-label">Password<sup class="red">*</sup></label>
                                            <input type="password" name="password[]" class="form-control required" placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="control-group form-group">
                                            <label class="form-label">Confirm Password<sup class="red">*</sup></label>
                                            <input type="password" name="confirm_password[]" class="form-control required" placeholder="Enter Confirm Password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="control-group form-group">
                                        <button id="add_hr_form" class="btn btn-primary">Add</button>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3>Assign Policy Features - GMC</h3>
                        <section>
                            <div class="form-group">
                                <label class="form-label" >CardHolder Name</label>
                                <input type="text" class="form-control" id="name1" placeholder="First Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Card number</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-append">
													<button class="btn btn-info" type="button"><i class="fab fa-cc-visa"></i> &nbsp; <i class="fab fa-cc-amex"></i> &nbsp;
													<i class="fab fa-cc-mastercard"></i></button>
												</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group mb-sm-0">
                                        <label class="form-label">Expiration</label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" placeholder="MM" name="expiremonth">
                                            <input type="number" class="form-control" placeholder="YY" name="expireyear">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 ">
                                    <div class="form-group mb-0">
                                        <label class="form-label">CVV <i class="fa fa-question-circle"></i></label>
                                        <input type="number" class="form-control" required="">
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('assets/js/custom/cp_add.js?ver'. SCRIPT_VERSION)}}"></script>
@endsection
