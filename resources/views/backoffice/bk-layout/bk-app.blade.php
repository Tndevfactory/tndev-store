<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <script src="{{ asset('js/app.js')  }}" defer ></script>

    </head>
        <body class="antialiased {{ themeDark() ? 'bg-dark  bg-gradient ' : 'bg-gradient' }} ">

            <div class="container-fluid">

                <div class="row min-vh-100 row-cols-1 row-cols-md-2">

                    <div class="d-none d-md-block col-0 col-md-2 bg-dark">

                         @yield('left-side-content')

                    </div>


                    <div class="col-12 col-md-10 {{ themeDark() ? 'bg-dark text-white bg-gradient ' : 'bg-gradient' }}">

                        @yield('right-side-content')

                    </div>

                </div>
            </div>

            {{-- @include('my-components.users-online', ['online'=> 'online'])
            @include('backoffice.components.footer') --}}
        </body>
</html>
