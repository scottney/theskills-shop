@extends('admin.layouts.app')

@section('content')

<!-- Main content -->
      <div class="hold-transition sidebar-mini">
          <div class="content-wrapper container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">
                    <p>CUSTOMER BOOKINGS</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <a href=" {{ route('customers_booking_records') }} " class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                  <div class="inner">
                    <p>CUSTOMERS RATINGS</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                  </div>
                  <a href=" {{ route('customers_rating_records') }} " class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <p>SKILLS PERSONS REGISTRATION</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-person-add"></i>
                  </div>
                  <a href=" {{ route('skills_person_registration_records') }} " class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                  <div class="inner">
                    <p>SKILLS PERSONS RATINGS</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href=" {{ route('skills_person_rating_records') }} " class="small-box-footer">GO <i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- ./col -->
            </div>
          </div><!-- /.container-fluid -->
      </div>
<!-- Main content -->

@endsection