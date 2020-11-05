@extends('layouts.dashboard')

@section('title')
    Store Dashboard Product Detail
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
              <h2 class="dashboard-title">shirup Marzan</h2>
              <p class="dashboard-subtitle">
                Product Details
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
                              <label for="">Product Name</label>
                              <input type="text" name="" class="form-control" value="Papel La Casa" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="">Price</label>
                              <input type="number" name="" class="form-control" value="100.00" />
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Kategori</label>
                              <select name="category" class="form-control" id="">
                                <option value="" disabled>Select Category</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="">Description</label>
                              <textarea name="editor" cols="30" rows="10"></textarea>
                            </div>
                          </div>

                        </div>
                        <div class="row">
                          <div class="col text-right">
                            <button type="submit" class="btn btn-success px-5 btn-block">Save Now</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <div class="gallery-container">
                            <img src="/images/product-card-1.png" class="w-100" alt="">
                            <a href="#" class="delete-gallery">
                              <img src="/images/icon-delete.svg" alt="">
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="gallery-container">
                            <img src="/images/product-card-2.png" class="w-100" alt="">
                            <a href="#" class="delete-gallery">
                              <img src="/images/icon-delete.svg" alt="">
                            </a>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="gallery-container">
                            <img src="/images/product-card-3.png" class="w-100" alt="">
                            <a href="#" class="delete-gallery">
                              <img src="/images/icon-delete.svg" alt="">
                            </a>
                          </div>
                        </div>
                        <div class="col-12">
                          <input type="file" id="file" style="display: none;" multiple>
                          <button class="btn btn-secondary btn-block mt-3" onclick="thisFileUpload()">
                            Add Photo
                          </button>
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
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace('editor');
  </script>

  <script>
    function thisFileUpload() {
      document.getElementById("file").click();
    }
  </script>
@endpush