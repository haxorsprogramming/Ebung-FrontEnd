<div class="card card-primarya" id="divOrderList">
  <div class="card-header">
      <h4>List Order</h4>
  </div>

  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <td>No</td><td>Orders Id</td><td>Product</td><td>Customer</td><td>Status</td><td>Action</td>
          </tr>
        </thead>
          @php
          $no = 1;
          @endphp
          @foreach($dataOrder as $order)
          @php
            $kdOrder = $order -> kd_order;
            $kdCap = substr(Str::upper($kdOrder), 0, 5);
            $dataProduk = DB::table('tbl_produk') -> where('kd_produk', $order -> kd_product) -> first();
          @endphp
            <tr>
              <td>{{ $no }}</td>
              <td>{{ $kdCap }}</td>
              <td>{{ $dataProduk -> nama_produk }}</td>
              <td>Order</td>
              <td>Waiting Payment</td>
              <td>
                <a href="{{ env('JSVOID') }}" class="view">Details</a>
              </td>
            </tr>
          @php
          $no++;
          @endphp
          @endforeach
      </table>
    </div>

  </div>

</div>
