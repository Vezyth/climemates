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
<h1>Contact Message</h1>
<p>Full Name                    : {{$cdetails['cname']}}</p>
<p>Email                        : {{$cdetails['cemail']}}</p>
<p>Phone                        : {{$cdetails['cphone']}}</p>
<p>Communication Preference     : {{$cdetails['cpref']}}</p>
<p>Subject                      : {{$cdetails['csubject']}}</p>
<p>Message                      : {{$cdetails['cmessage']}}</p>
</body>
</html>
