<div>
    <h3 id="titlePanel">List of my branch</h3>
</div>

<div class="row" id="divTambahBranch">
    <div class="col-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label>Name Branch</label>
            <input type="text" class="form-control" id="txtNameBranch">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" id="txtEmailBranch">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" id="txtPhoneBranch">
        </div>
    </div>
    <div class="col-6 col-md-6 col-lg-6">
        <div class="form-group">
            <label>Country</label>
            <select class="form-control" onchange="checkCountry()" id="txtKdCountry">
                    <option value="none">--- Choose country ---</option>
                @foreach($countrySupport as $cs)
                    <option value="{{ $cs -> kd_country }}">{{ $cs -> name_country }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group" id="txtRegionIndonesia">
          Region indonesia
        </div>
        <div class="form-group" id="txtRegionMalaysia">
          Region malaysia
        </div>
    </div>
    <div style="margin-top:12px;">
        <a href="#!" class="view"><i class="fas fa-file-upload"></i> Apply for a new branch</a>
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
                @foreach($dataBranch as $branch)
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
