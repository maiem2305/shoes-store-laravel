<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <title>Order Shipped</title>
</head>
<body>
    <div class="row justify-content-center my-4">
        <div class="col-md-8 bg-secondary rounded shadow-sm py-4">
            <div class="row">
                <div class="col-md-12">
                    <p>Thank you for your order</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Your order has been received and is currently being processed. Your order details are shown below for your reference:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="float-left">Order #{{ $order->id }}</h4>
                    <h4 class="float-right">Total ${{ $order->total }}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="float-left">Created at {{ $order->created_at }}</p>
                </div>
            </div>
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th scope="col">Items</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Size</th>
                        <th scope="col">Color</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderProducts as $orderProduct)
                    <tr>
                        <td><a href="{{ route('product.show', $orderProduct->pivot->product_id) }}">{{ $orderProduct->name }}</a></td>
                        <td>{{ $orderProduct->pivot->qty }}</td>
                        <td>{{ $orderProduct->pivot->size }}</td>
                        <td>{{ $orderProduct->pivot->color }}</td>
                        <td>${{ $orderProduct->pivot->total }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td class="text-right">{{ $user->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td class="text-right">{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <td class="text-right">{{ $user->phone }}</td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td class="text-right">{{ $user->address }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</body>
</html>