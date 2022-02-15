<header>
    <h1>Gamestop</h1>

    @auth
        <h1>Bentornato {{Auth::user() -> name}}</h1>

        <a class="btn btn-danger" href="{{route('logout')}}">Logout</a>
    @else

        <h1>Benvenuto</h1><br>
        <form action="{{route('register')}}" method="POST">
        
            @method('POST')
            @csrf

            <label for="name">Nome</label><br>
            <input type="text" name="name"><br>
            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br>
            <label for="password_confirmation">Ripeti password</label><br>
            <input type="password" name="password_confirmation"><br><br>

            <button type="submit" class="btn btn-success">Registrati</button><br><br>
        </form>

        <form action="{{route('login')}}" method="POST">
        
            @method('POST')
            @csrf
    
            <label for="email">Email</label><br>
            <input type="email" name="email"><br>
            <label for="password">Password</label><br>
            <input type="password" name="password"><br><br>
    
            <button type="submit" class="btn btn-success">Login</button><br>

        </form>
    @endauth
</header>