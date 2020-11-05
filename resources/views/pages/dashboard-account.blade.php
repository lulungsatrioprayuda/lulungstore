@extends('layouts.dashboard')

@section('title')
    My Account    
@endsection

@section('content')
      <div id="page-content-wrapper">
        <nav class="navbar navbar-store navbar-expand-lg navbar-light fixed-top" data-aos="fade-down">
          <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle">
            &laquo; Menu
          </button>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto d-none d-lg-flex">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <img src="/images/icon-user.png" alt="" class="rounded-circle mr-2 profile-picture" />
                  Hi, Alung
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/index.html">Back to Store</a>
                  <a class="dropdown-item" href="/dashboard-account.html">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/">Logout</a>
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link d-inline-block mt-2">
                  <img src="/images/icon-cart-filled.svg" alt="">
                  <div class="cart-badge">3</div>
                </a>
              </li>
            </ul>
            <!-- Mobile Menu -->
            <ul class="navbar-nav d-block d-lg-none mt-3">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Hi, Angga
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-inline-block" href="#">
                  Cart
                </a>
              </li>
            </ul>
          </div>
        </nav>

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