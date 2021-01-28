@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box">
        <span class="info-box-icon bg-info elevation-1"><i class="fa fa-gear"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">تمامی درگاه ها</span>
          <span class="info-box-number">
            {{ $statistics->totalGetways }}
            <small>%</small>
          </span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-google-plus"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">تراکنش های انجام شده امروز</span>
          <span class="info-box-number">{{ $statistics->todayTotalTransactions }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-success elevation-1"><i class="fa fa-shopping-cart"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">تمامی برداشتی های امروز</span>
          <span class="info-box-number">{{ $statistics->todayTotalWithdrawals }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-12 col-sm-6 col-md-3">
      <div class="info-box mb-3">
        <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">درگاه‌های در انتطار تایید</span>
          <span class="info-box-number">{{ $statistics->pendingGateways }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
@endsection
