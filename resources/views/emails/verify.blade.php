<!DOCTYPE html>
<html>
<head>
    <title>Account verificatie - Open Flandria</title>
</head>
<body>

<h1>Welkom {{$user->name}} op Open Flandria</h1>
<p>Om uw registratie volledig af te ronden gelieve volgende link te gebruiken om uw account te verifieren.</p>
<a href="{{url('user/verify', $user->verify_token)}}">{{url('user/verify', $user->verify_token)}}</a>

</body>
</html>