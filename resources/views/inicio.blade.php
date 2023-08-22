<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
    @include('layouts.header')

    Bienvenido {{Auth::user()->name}}

</body>
</html>
