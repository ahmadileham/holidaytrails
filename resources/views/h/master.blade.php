<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Default Title')</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app.css') }}">
        <link rel="shortcut icon" type="x-icon" href="{{ asset('assets/images/icon.png') }}">
    </head>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">
        <nav>
            <div>
              <ol>
                <li>
                  <a href="{{ route('home') }}"><ion-icon name="home-outline"></ion-icon></a>
                </li>
                <li>
                  <a href="{{ route('newpost') }}"><ion-icon name="add-outline"></ion-icon></a>
                </li>
              </ol>
            </div>
            <div>
              <input type="search" placeholder="Search" />
              <span class="fa fa-search"></span>
            </div>
            <ol>
              <li>
                    @if (!empty($profileData->photo))
                        <a href="{{ route('ownprof')}}"><img class="circle" src="{{ (!empty($profileData->photo)) ? url('upload/'.$profileData->photo) : url('upload/nophoto.png') }}" alt="Profile Picture" alt="Profile Picture"></a>
                    @else
                        <a href="{{ route('ownprof')}}"><ion-icon name="person-outline"></ion-icon></a>
                    @endif
              </li>
              <li>
                <a href="{{ route('analysis') }}"><ion-icon name="analytics-outline"></ion-icon></a>
              </li>
              <li>
                <a href="{{ route('user.logout') }}"
                  ><ion-icon name="log-out-outline"></ion-icon>
                </a>
              </li>
            </ol>
          </nav>
        <br><br><br>
    <body>
        @yield('content')
            <script src="{{ asset('assets/my_chart.js') }}"></script>
            <script type="module" src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js') }}"></script>
            <script nomodule src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js') }}"></script>
    </body>
</html>