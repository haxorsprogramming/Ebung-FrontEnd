<div>
    <h3>List of my branch</h3>
</div>

<div class="row" id="divTambahBranch">

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