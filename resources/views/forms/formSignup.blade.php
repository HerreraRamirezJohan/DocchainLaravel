<!-- Formualario de Registro -->
<div class="form-container" id="signup" style="z-index: 1;">
    <h2>Registrate</h2>
    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div class="input">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="name" name="name">
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Email -->
        <div class="input">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <x-input-error :messages="$errors->get('email')" />
        </div>
        <!-- Password -->
        <div class="input">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- Confirm password -->
        <div class="input">
            <label for="password">Confirmar contraseña:</label>
            <input type="password" id="password" name="password_confirmation">
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>
        <!-- Button -->
        <div class="input center-element">
            <input class="btn" type="submit" value="Enviar">
        </div>
        <div class="center-element">
            <a href="{{route('home')}}" class="changeForm">iniciar sesión</a>
        </div>
    </form>
</div>
