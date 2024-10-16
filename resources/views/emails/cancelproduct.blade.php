<!-- resources/views/emails/cancelApproved.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Product Approval Canceled</title>
</head>
<body>
    <h1>Product Approval Canceled</h1>
    <p>Dear Sir/Madam,</p>
    <p>We regret to inform you that the approval for your products, <strong>{{ $shop->name }}</strong>, has been canceled.</p>
    <p><strong>This decision was made due to the non-payment of the renewal fee for products.</strong></p>
    <p>If you have any questions or believe this was done in error, please contact us.</p>
    <p>Thank you for your understanding.</p>
    <p>Contact us: +94771234567 | builderlk@gmail.com | www.builderlk.lk</p>
</body>
</html>

