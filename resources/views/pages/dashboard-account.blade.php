@extends('layouts.dashboard')

@section('title')
    My Account    
@endsection

@section('content') 
        <!-- section content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">My Account</h2>
              <p class="dashboard-subtitle">
                Update your current profile
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-12">
                  <form action="">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="name">Your Name</label>
                              <input type="text" id="name" name="name" value="Lulung Satrio Prayuda"
                                class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" id="email" name="email" value="alungsatrio12@gmail.com"
                                class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressOne">Address 1</label>
                              <input type="text" id="addressOne" name="addressOne" value="Setra Duta Semara"
                                class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="addressTwo">Address 2</label>
                              <input type="text" id="addressTwo" name="addressTwo" value="Jalan sumatra"
                                class="form-control">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="province">City</label>
                              <select name="province" id="province" class="form-control">
                                <option value="Jawa Timur">Jawa Timur</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="city">City</label>
                              <select name="city" id="city" class="form-control">
                                <option value="Jawa Timur">Jawa Timur</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="postalCode">Postal Code</label>
                              <input type="text" id="postalCode" name="postalCode" value="98312" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="country">Country</label>
                              <input type="text" id="country" name="country" value="Indonesia" class="form-control">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="moblie">Mobile</label>
                              <input type="text" id="moblie" name="moblie" value="+628 2020 11111" class="form-control">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success px-5">Save Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection