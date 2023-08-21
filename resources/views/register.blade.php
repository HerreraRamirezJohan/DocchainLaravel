<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
    @include('layouts.header')

    <section class="hero">
        <picture>
            <source srcset="/img/block-banner.avif" type="image/avif">
            <source srcset="/img/block-banner.webp" type="image/webp">
            <img class="mirror-img" loading="lazy" width="200" height="300" src="/img/block-banner.jpg" alt="">
        <picture>

        <!-- Formulario de inicio de sesion -->
        @include('forms.formSignup')
    </section>

    @include('layouts.info')

</body>
</html>
