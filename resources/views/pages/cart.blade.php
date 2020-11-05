@extends('layouts.app')

@section('title')
    Store Cart Page    
@endsection

@section('content')
  <div class="page-content page-cart">
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active">
                  Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <section class="store-cart">
      <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <td>Image</td>
                  <td>Name &amp; Seller</td>
                  <td>Price</td>
                  <td>Menu</td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="/images/product-cart-1.jpg" alt="" class="cart-image w-100">
                  </td>
                  <td style="width: 30%;">
                    <div class="product-title">Sofa Ternyaman</div>
                    <div class="product-subtitle">by Lulung Satrio Prayuda</div>
                  </td>
                  <td style="width: 30%;">
                    <div class="product-title">$29,112</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="/images/product-cart-2.jpg" alt="" class="cart-image w-100">
                  </td>
                  <td style="width: 30%;">
                    <div class="product-title">Sepatu Warna Warni</div>
                    <div class="product-subtitle">by Lulung Satrio Prayuda</div>
                  </td>
                  <td style="width: 30%;">
                    <div class="product-title">$80,309</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
                <tr>
                  <td>
                    <img src="/images/product-cart-3.jpg" alt="" class="cart-image w-100">
                  </td>
                  <td style="width: 30%;">
                    <div class="product-title">Lepek Gelas</div>
                    <div class="product-subtitle">by Lulung Satrio Prayuda</div>
                  </td>
                  <td style="width: 30%;">
                    <div class="product-title">$13,492</div>
                    <div class="product-subtitle">USD</div>
                  </td>
                  <td style="width: 20%;">
                    <a href="#" class="btn btn-remove-cart">Remove</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-4">Shipping Details</h2>
          </div>
        </div>
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressOne">Address 1</label>
              <input type="text" id="addressOne" name="addressOne" value="Setra Duta Semara" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="addressTwo">Address 2</label>
              <input type="text" id="addressTwo" name="addressTwo" value="Jalan sumatra" class="form-control">
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
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-1">Details Payment</h2>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">$10</div>
            <div class="product-subtitle">Country Tax</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">$280</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$580</div>
            <div class="product-subtitle">Ship to Jakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">$392,409</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a href="/success.html" class="btn btn-success mt-4 px-4 btn-block">
              Checkout Now
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection