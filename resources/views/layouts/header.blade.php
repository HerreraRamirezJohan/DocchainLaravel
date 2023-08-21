<header class="header">
    <div class="container content-header">
        <h1>DocChain</h1>

        <nav class="principal-nav">
            @guest
                <a href="#whatis">¿Qué es?</a>
                <a href="#mission">Misión</a>
                <a href="#">¿Cómo se usa?</a>
            @else
                @include('components.logout')
            @endguest
        </nav>
    </div>
</header>
