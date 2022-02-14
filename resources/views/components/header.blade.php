<header>
    <h1>Gamestop</h1>

    @auth
        <h1>Bentornato nome</h1>

        <a href="{{route('logout')}}">Logout</a>
        {{-- <h1>Bentornato <a href="{{route('Login')}}">Login</a></h1> --}}
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

        <button type="submit" class="btn btn-success">Registrati</button>


        
        
        
        
        
        </form>
    @endauth
</header>