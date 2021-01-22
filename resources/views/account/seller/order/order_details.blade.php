@php

@endphp
<div class="card card-primarya">
    <div class="card-header">
        <h4>Order Details # {{ substr($kdOrder, 0, 5) }} - at {{ $waktu }}</h4>
        <div class="card-header-action">
            <a href="{{ env('JSVOID') }}" class="btn btn-primary" style="border:0px solid white;color:#fff;"><i class="fas fa-poll"></i> Back</a>
        </div>
    </div>
    <div class="cart-page-total">
        <div style="text-align: center;">
            <img src="https://s3-id-jkt-1.kilatstorage.id/ebunga/product/main-product/EBUNGA4280.jpg" style="width: 300px;">
            <h3>{{ $dataProduct -> nama_produk }}</h3>
        </div>
        <div>
            Item details
            <ul>
                <li>Harga (@) <span>Rp. {{ number_format($dataProduct -> harga) }}</span></li>
                <li>Qt <span>{{ $dataOrder -> qt }}</span></li>
                <li>Total <span>Rp. {{ number_format($dataOrder -> total) }}</span></li>
            </ul>
        </div>
        <div style="margin-top:20px;">
            Order details
            <ul>
                <li>Sender name <span>{{ $detailOrder -> sender_name }}</span></li>
                <li>Receiver Name <span>{{ $detailOrder -> receiver_name }}</span></li>
                <li>Receiver Email <span>{{ $detailOrder -> receiver_email }}</span></li>
                <li>Receiver Phone <span>{{ $detailOrder -> receiver_phone }}</span></li>
                <li>Caption on board <span><i>"{{ $detailOrder -> greeting_card_note }}"</i></span></li>
                <li>Delivery Date <span>{{ date("F jS, Y", strtotime($detailOrder -> delivery_date)) }}</span></li>
            </ul>
        </div>

        <div style="margin-top:20px;">
            Order status
            <ul>
                <li>Payment confimation <span></span></li>
                <li>Approve by seller<span></span></li>
                <li>Send to customer<span></span></li>
                <li>Delivered & confirmation with customer<span></span></li>
                <li>E-Cash transfer to account <span></span></li>
            </ul>
        </div>
        <div style="margin-top:20px;">
        <a href="{{ env('JSVOID') }}" class="btn btn-primary">Approve this order</a>
        </div>
    </div>

</div>