@extends('layouts.backend')
@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box --> 
                    <div class="small-box bg-info">
                        <div class="inner"> 
                        <h3>0</h3>
                            <p>OPERATOR / USER</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-stalker"></i>
                        </div>
                        <a href="{{url('personals')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                        <h3>0</h3>
                            <p>DOKUMEN</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-copy"></i>
                        </div>
                        <a href="{{url('personals')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>0</h3>
                            <p>LUAS WILAYAH (KM2)</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                {{-- Left --}}
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="row card-body">
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="box-head text-center">
                                                    <span class="info-box-icon bg-warning">
                                                        <img src="{{ asset('assets/images/male.png') }}">
                                                    </span>
                                                    <div class="info-box-content">
                                                        <div class="info-box-number">
                                                            
                                                        </div>
                                                        <div class="info-box-text">Laki-laki</div>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="box-head text-center">
                                                    <span class="info-box-icon bg-warning">
                                                        <img src="{{ asset('assets/images/female.png') }}">
                                                    </span>
                                                    <div class="info-box-content">
                                                        <div class="info-box-number">
                                                            
                                                        </div>
                                                        <span class="info-box-text">Perempuan</span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="row card-body">
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="box-head text-center">
                                                    <span class="info-box-icon bg-warning">
                                                        <img src="{{ asset('assets/images/male.png') }}">
                                                    </span>
                                                    <div class="info-box-content">
                                                        <div class="info-box-number">
                                                            
                                                        </div>
                                                        <div class="info-box-text">Laki-laki</div>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="box-head text-center">
                                                    <span class="info-box-icon bg-warning">
                                                        <img src="{{ asset('assets/images/female.png') }}">
                                                    </span>
                                                    <div class="info-box-content">
                                                        <div class="info-box-number">
                                                            
                                                        </div>
                                                        <span class="info-box-text">Perempuan</span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="row card-body">
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="box-head text-center">
                                                    <span class="info-box-icon bg-warning">
                                                        <img src="{{ asset('assets/images/male.png') }}">
                                                    </span>
                                                    <div class="info-box-content">
                                                        <div class="info-box-number">
                                                            
                                                        </div>
                                                        <div class="info-box-text">Laki-laki</div>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-12">
                                                <div class="box-head text-center">
                                                    <span class="info-box-icon bg-warning">
                                                        <img src="{{ asset('assets/images/female.png') }}">
                                                    </span>
                                                    <div class="info-box-content">
                                                        <div class="info-box-number">
                                                            
                                                        </div>
                                                        <span class="info-box-text">Perempuan</span>
                                                    </div>
                                                    <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>  
                    {{-- endrow --}}
                </div>
                {{-- End Left --}}
                {{-- Right --}}
                
            </div>
            <!-- /.row (main row) -->



        </div><!-- /.container-fluid -->
    </section>
@endsection
@section('scripts')

@stop
