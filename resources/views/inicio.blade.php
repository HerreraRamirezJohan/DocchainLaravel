<!DOCTYPE html>
<html lang="en">
@include('components.head')
<body>
    @include('layouts.header')

    Bienbenido {{Auth::user()->name}}

</body>
</html>
