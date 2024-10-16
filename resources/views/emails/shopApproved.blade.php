<!-- resources/views/emails/shopApproved.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Shop Approved</title>
</head>
<body>
    <h1>Congratulations!</h1>
    <p>Your shop, <strong>{{ $shop->name }}</strong>, has been approved.</p>
    <p>Details:</p>
    <ul>
        <li>Shop ID: {{ $shop->id }}</li>
        <li>Shop Name: {{ $shop->name }}</li>
        <li>Address: {{ $shop->address }}</li>
        <li>Approval Date: {{ $shop->shop_approve }}</li>
        <li>Approval Valid till: {{ $shop->shop_approve->copy()->addMonths(12) }}</li>
    </ul>
    <p>Thank you for joining with us!</p>
    <p>Contact us : +94771234567 | builderlk@gmail.com | www.builderlk.lk</p>
</body>
</html>
