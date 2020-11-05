@extends('layouts.dashboard')

@section('title')
    Store Dashboard    
@endsection

@section('content')
<div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">
            <div class="dashboard-heading">
              <h2 class="dashboard-title">Dasboard</h2>
              <p class="dashboard-subtitle">
                Pantau Aktivitas mu hari ini!
              </p>
            </div>
            <div class="dashboard-content">
              <div class="row">
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        Customer
                      </div>
                      <div class="dashboard-card-subtitle">
                        15,2009
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        Revenue
                      </div>
                      <div class="dashboard-card-subtitle">
                        $931,290
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card mb-2">
                    <div class="card-body">
                      <div class="dashboard-card-title">
                        Transaction
                      </div>
                      <div class="dashboard-card-subtitle">
                        22,409,399
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-3">
                <div class="col-12 mt2">
                  <h5 class="mt-3">
                    Riwayat Transaksi
                  </h5>
                  <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img src="/images/dashboard-icon-product-1.png" alt="">
                        </div>
                        <div class="col-md-4">
                          Jasjus Kopi
                        </div>
                        <div class="col-md-3">
                          Lulung Satrio Prayuda
                        </div>
                        <div class="col-md-3">
                          12 Januari, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow-right.svg" alt="">
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img src="/images/dashboard-icon-product-2.png" alt="">
                        </div>
                        <div class="col-md-4">
                          Sepatu Lari
                        </div>
                        <div class="col-md-3">
                          Lulung Satrio Prayuda
                        </div>
                        <div class="col-md-3">
                          11 Januari, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow-right.svg" alt="">
                        </div>
                      </div>
                    </div>
                  </a>
                  <a href="/dashboard-transaction-details.html" class="card card-list d-block">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img src="/images/dashboard-icon-product-3.png" alt="">
                        </div>
                        <div class="col-md-4">
                          Bantal Empuk
                        </div>
                        <div class="col-md-3">
                          Lulung Satrio Prayuda
                        </div>
                        <div class="col-md-3">
                          10 Januari, 2020
                        </div>
                        <div class="col-md-1 d-none d-md-block">
                          <img src="/images/dashboard-arrow-right.svg" alt="">
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
</div>
@endsection