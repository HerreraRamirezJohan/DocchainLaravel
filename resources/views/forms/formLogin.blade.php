<!-- Formulario de inicio de sesion -->
<div class="form-container" id="login">
    <h2>¡Iniciar Sesión!</h2>
    <form class="form" action="{{ route('login')}}" method="POST">
        @csrf
        <!-- Correo -->
        <div class="input">
            <label for="email-login">Usuario:</label>
            <input id="email-login" type="email" name="email" placeholder="e-mail">
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <!-- Contrase -->
        <div class="input">
            <label for="email">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="password">
            <x-input-error :messages="$errors->get('password')" />
        </div>
        <!-- Submit -->
        <div class="input center-element">
            <input class="btn" type="submit" value="Enviar">
        </div>
        <div class="center-element">
            <a href="{{route('register')}}" class="changeForm">Crear una cuenta</a>
        </div>
    </form>
</div>
