{{-- @extends('layouts.admin')

@section('content')
<div id="wrapper">
    <div class="content-area">
      <div class="container-fluid admin-dashboard">

           <!-- Dashboard Overview -->
    <div class="row">
        <div class="col-lg-12">
            <h2>Dashboard Overview</h2>
        </div>
    </div>

    
  <!-- Insight Section -->
  <div class="row">
    <div class="col-lg-6 insight">
        <h6>Here is an insight of what's going on.</h6>
    </div>
    <div class="col-lg-6 text-right">
        <div class="mt-2 ml-8 view-app">
            <a href="#" class="btn btn-primary">View Applications</a>
        </div>
    </div>
</div> --}}

@extends('layouts.admin')

@section('content')
<div id="wrapper">
    <div class="content-area">
        <div class="container-fluid admin-dashboard">

            <!-- Dashboard Overview -->
            <div class="row">
                <div class="col-lg-12">
                    <h2>Dashboard Overview</h2>
                </div>
            </div>

            <!-- Insight Section -->
            <div class="row">
                <div class="col-lg-6 insight">
                    <h6>Here is an insight of what's going on.</h6>
                </div>
                <div class="col-lg-6 text-lg-right text-md-left">
                    <!-- Adjusted the alignment for different screen sizes -->
                    <div class="mt-2 ml-lg-0 ml-md-2 mr-md-3 view-app">
                        <!-- Added mr-md-3 to add right margin on medium screens -->
                        <a href="#" class="btn btn-primary btn-sm">Applications</a>
                        <!-- Added btn-sm class to make the button smaller -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




    
        <div class="main"> 

          <div class="row sparkboxes mt-4 mb-4">

            <div class="col-md-4">
              <div class="box box1">
                <div id="spark1"></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="box box2">
                <div id="spark2"></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="box box3">
                <div id="spark3"></div>
              </div>
            </div>
          </div>

          <div class="row mt-5 mb-4">
            <div class="col-md-6">
              <div class="box">
                <div id="bar"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <div id="donut"></div>
              </div>
            </div>
          </div>

          <div class="row mt-4 mb-4">
            <div class="col-md-6">
              <div class="box">
                <div id="area"></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <div id="line"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
