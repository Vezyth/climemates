<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Business Message</h1>
<p>First Name                   : {{$details['fname']}}</p>
<p>Last Name                    : {{$details['lname']}}</p>
<p>Phone Number                 : {{$details['phone']}}</p>
<p>Business Type                : {{$details['btype']}}</p>
<p>Email                        : {{$details['email']}}</p>
<p>Address                      : {{$details['address']}}</p>
<p>City                         : {{$details['city']}}</p>
<p>State                        : {{$details['state']}}</p>
<p>Zip Code                     : {{$details['zcode']}}</p>
<p>How did you hear about us    : {{$details['message']}}</p>
</body>
</html>
