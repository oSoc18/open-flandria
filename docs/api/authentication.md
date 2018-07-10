# Authentication
The authentication for the API uses [Laravel Passport](https://laravel.com/docs/5.6/passport).

## POST Register
`/api/register`

### Body
```
format: formdata
name, email, password, c_password
```

## POST Login
`/api/login`

### Body
```
format: formdata
email, password
```

## POST Details
`/api/details`

### Body
```
format: headers
Authorization: Bearer $token
Content-Type: application/x-www-form-urlencoded
Accept: application/json
```
