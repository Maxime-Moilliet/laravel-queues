<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Queues</title>
    </head>
    <body>
        <h1>Create new User and send email</h1>
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" />
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" />
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" />
            </div>
            <div>
                <label for="password_confirmation">Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" />
            </div>
            <button type="submit">Add</button>
        </form>
    </body>
</html>
