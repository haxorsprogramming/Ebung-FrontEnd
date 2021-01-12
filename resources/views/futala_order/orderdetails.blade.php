@include('futala_layout.header')

<!-- breadcrumb-area start -->
<div class="breadcrumb-area section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="breadcrumb-title">Order Details</h2>
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">Order Details</li>
                </ul>
                <!-- breadcrumb-list end -->
            </div>
        </div>
    </div>
</div>

<div class="container" id="divOrderDetails" style="margin-top:30px;">
    <div class="row">
        <!-- Order details  -->
        <div class="col-lg-6 col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Order Details</h4>
                </div>
                <div class="card-body">
                    <div style="text-align: center;">
                        <h5>Order Id : </h5>
                    </div>
                    <div class="summary">
                        <div class="summary-info">
                            <div style="text-align: center;margin-bottom:10px;">
                                <img id="imgPrevPath" style="border-radius: 5px;width:300px;" src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/{{ $dataProduk -> foto_utama }}">
                            </div>
                            <h4 id="capProdukPreview">{{ $dataProduk -> nama_produk }}</h4>
                            <div class="text-muted">Sold 3 items on 2 customers</div>
                            <div class="d-block mt-2">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </div>

                    <address>
                        Receiver Details :<br>
                        <strong>Ujang Maman<br>
                            1234 Main<br>
                            Apt. 4B<br>
                            Bogor Barat, Indonesia
                        </strong>
                    </address>

                </div>
            </div>
        </div>
        <!-- Order timeline  -->
        <div class="col-lg-6 col-md-6">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Order Status</h4>
                </div>
                <div class="card-body">
                    <div class="activities">
                        <div class="activity">
                            <div class="activity-icon bg-primary text-white shadow-primary">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="activity-detail">
                                <div class="mb-2">
                                    <span class="text-job text-primary">2 min ago</span>
                                    <span class="bullet"></span>
                                    <a class="text-job" href="#">Order Created</a>
                                    <div class="float-right dropdown">
                                        <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-title">Options</div>
                                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-1" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                                        </div>
                                    </div>
                                </div>
                                <p>Have commented on the task of "<a href="#">Responsive design</a>".</p>
                            </div>
                        </div>
                        <div class="activity">
                            <div class="activity-icon bg-primary text-white shadow-primary">
                                <i class="fas fa-arrows-alt"></i>
                            </div>
                            <div class="activity-detail">
                                <div class="mb-2">
                                    <span class="text-job">1 hour ago</span>
                                    <span class="bullet"></span>
                                    <a class="text-job" href="#">View</a>
                                    <div class="float-right dropdown">
                                        <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                                        <div class="dropdown-menu">
                                            <div class="dropdown-title">Options</div>
                                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item has-icon text-danger trigger--fire-modal-2" data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?" data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                                        </div>
                                    </div>
                                </div>
                                <p>Moved the task "<a href="#">Fix some features that are bugs in the master module</a>" from Progress to Finish.</p>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('futala_layout.footer')