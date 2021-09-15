@extends("admin.layouts.app")
@section("content")
    <div class="container-fluid">
        <div class="main">
            <table class="table" id="myTable">
                <thead class="text-center">
                    <tr>
                        <th>Merchanant Order</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-Mail</th>
                        <th>Secret</th>
                        <th>Donate Monthly</th>
                        <th>Amount</th>
                        <th>Currency</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                @foreach($orders as $order)
                    <tr>
                        <td>{{ ($order->merchant_order_id) ? $order->merchant_order_id : "Not Paid" }}</td>
                        <td>{{ $order->firstname }}</td>
                        <td>{{ $order->lastname }}</td>
                        <td>{{ $order->email }}</td>
                        <td>{{ ($order->secret) ? "True": "False" }}</td>
                        <td>{{ ($order->donate_monthly) ? "True": "False" }}</td>
                        <td>{{ $order->amount }}</td>
                        <td>{{ ($order->currency == "051") ? "ԴՐ" : (($order->currency == "643") ? "RUB" : (($order->currency == "840") ? "USD" : "EUR"))}}</td>
                        <td>{{ $order->created_at}}</td>
                        <td>{{ $order->updated_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

<script>
    document.addEventListener("DOMContentLoaded", function() {
        $('#myTable').DataTable();
    })
</script>
