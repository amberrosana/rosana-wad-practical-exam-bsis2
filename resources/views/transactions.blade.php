<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTIONS PAGE</title>
</head>
<body>
    <h1>TRANSACTIONS PAGE</h1>

    <form action="{{ route('createTransaction')}}" method="GET">
        @method('GET')
        <button type="submit">Create Transaction</button>
        <hr>
    </form>
    @foreach ($transactions as $transaction)
        <div>ID: {{ $transaction->id }} </div>
        <div>Transaction Title: {{ $transaction->transaction_title }}</div>
        <div>Description: {{ $transaction->description }}</div>
        <div>Status: {{ $transaction->status }}</div>
        <div>Total Amount: {{ $transaction->total_amount }}</div>
        <div>Transaction Number: {{ $transaction->transaction_number }}</div>
        <div>Created At: {{ $transaction->created_at }}</div></div>

        <form action="{{ route('editTransaction', ['id' => $transaction->id]) }}" method="GET">
            <button type="submit">Edit Transaction</button>
        </form>

        <form action="{{ route('viewTransaction', ['id' => $transaction->id])}}" method="GET">
            <button type="submit">View Transaction</button>
        </form>
        <hr>
    @endforeach
</body>
</html>