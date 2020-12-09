<div>
    <h3 id="titlePanel">List of my branch</h3>
</div>

<div class="row" id="divTambahBranch">
    <div class="col-6 col-md-6 col-lg-6">
        <label>Name Branch</label>
        <input type="text" class="form-control" id="txtNameBranch">
        <label>Email</label>
        <input type="text" class="form-control" id="txtEmail">
        <label>Phone Number</label>
        <input type="text" class="form-control" id="txtPhoneNumber">
    </div>
    <div class="col-6 col-md-6 col-lg-6">
        sss
    </div>
    <div style="margin-top:12px;">
        <a href="#!" class="view"><i class="fas fa-plus-circle"></i> Add new branch</a>
    </div>
</div>

<div class="row" id="divBranch">

    <div class="" style="margin-bottom:12px;">
        <a href="#!" class="view" @click="tampilFormTambahAtc"><i class="fas fa-plus-circle"></i> Add branch</a>
    </div>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Branch</th>
                    <th>Status</th>
                    <th>Total Orders</th>
                    <th>Revenue</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($databranch as $branch)
                <tr>
                    <td>{{ $branch -> nama_branch }}</td>
                    <td>May 10, 2018</td>
                    <td>Processing</td>
                    <td>$25.00 for 1 item </td>
                    <td><a href="#!" class="view">Details</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<script src="{{ asset('ladun/account_asset/js_custom/seller/branch.js') }}"></script>