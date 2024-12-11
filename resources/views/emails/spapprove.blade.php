<!-- resources/views/emails/shopApproved.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Service Provider Approved</title>
</head>
<body>
    <h1>Congratulations!</h1>
    <p>You, <strong>{{ $serviceProvider->name }}</strong>, have been approved as a Service Provider.</p>
    <p>Details:</p>
    <ul>
        <li>Number: {{ $serviceProvider->number }}</li>
        <li>Name: {{ $serviceProvider->s_name }}</li>
        <li>Address: {{ $serviceProvider->address }}</li>
    </ul>
    
    <p>Thank you for joining with us!</p>
    <p>Contact us : +94771234567 | builderlk@gmail.com | www.builderlk.lk</p>
</body>
</html>
