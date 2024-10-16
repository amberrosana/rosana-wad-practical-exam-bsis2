<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTION PAGE</title>
</head>
<body>
    <h1>TRANSACTION PAGE</h1>

    <div>Transaction Title: {{ $transaction->transaction_title }}</div>
        <div>Description: {{ $transaction->description }}</div>
        <div>Status: {{ $transaction->status }}</div>
        <div>Total Amount: {{ $transaction->total_amount }}</div>
        <div>Transaction Number: {{ $transaction->transaction_number }}</div>
        <div>Created At: {{ $transaction->created_at }}</div></div>
        <hr>

        <form action="{{ route('deleteTransaction', ['id' => $transaction->id]) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this transaction?')">
        @method("DELETE")
        @csrf 
        <button type="submit">Delete Transaction</button>
        </form>

        <form action="{{ route('getAllTransactions') }}" method="GET">
        <button type="submit">Back to Transactions</button>
        </form>
        
        <form action="{{ route('editTransaction', ['id' => $transaction->id]) }}" method="GET">
        <button type="submit">Edit Transaction</button>
        </form>

</body>
</html>