<!-- resources/views/emails/shopApproved.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Product Approved</title>
</head>
<body>
    <h1>Product Approved</h1>
    <p>Product has been approved of your {{ $shop->name }}.</p>
    <p>Details:</p>
    <ul>
        <li>Shop ID: {{ $shop->id }}</li>
        <li>Approval Date: {{ $shop->product_approve }}</li>
        <li>Approval Valid till: {{ $shop->product_approve->copy()->addMonths(12) }}</li>
    </ul>
    <p>Thank you for joining with us!</p>
    <p>Contact us : +94771234567 | builderlk@gmail.com | www.builderlk.lk</p>
</body>
</html>
