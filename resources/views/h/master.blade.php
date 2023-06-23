<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Default Title')</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/app.css') }}">
        <link rel="shortcut icon" type="x-icon" href="{{ asset('assets/images/icon.png') }}">

        <style>
          #results{
            padding-left: 0;
            list-style: none;
            margin: 0;
            box-shadow: 5px 5px 15px grey;
            max-width: 300px;
          }
          #results>li{
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 15px;
          }
          #results>li:hover{
            background-color: #e2e8f0;

          }
        </style>
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
            <!-- <div>
              <input type="search" placeholder="Search" id="searchbar"/>
              <span class="fa fa-search"></span>
              <ul id="results" style="z-index: 100;"></ul>
              <script>
                const resultsList = document.getElementByID('results');

                function createLi(searchResult){
                  const li = document.createElement('li');
                  const link = document.creatElement('a');
                  link.href = searchResult.view_link;
                  link.textContent = searchResult.model;
                  const h4 = document.createElement('h4');
                  h4.appendChild(link);
                  const span = document.createElement('span');
                  span.textContent = searchResult.match;

                  li.appendChild(h4);
                  li.appendChild(span);
                  return li;
                }

                document.getElementById('searchbar').addEventListener('input', function(event){
                  event.preventDefault();
                  const searched = event.target.value;

                  fetch('/api/search?search=' + searched, {
                    method: 'GET'
                  }).then((response) => {
                    return response.json();
                  }).then((response) => {
                    const results = response.data;
                    resultsList.innerHTML = "";

                    results.forEach((result) => {
                      resultsList.appendChild(createLi(result));
                    })
                  })
                })
                </script>
            </div> -->
            <form class="searchcontainer" action="{{ route('posts.search') }}" method="GET">
                <input class="searchbar" type="text" name="query" placeholder="Search by title, location, or name" value="{{ request('query') }}">
                <select name="rating">
                    <option value="">All Ratings</option>
                    <option value="1" {{ request('rating') == '1' ? 'selected' : '' }}>1 Star</option>
                    <option value="2" {{ request('rating') == '2' ? 'selected' : '' }}>2 Stars</option>
                    <option value="3" {{ request('rating') == '3' ? 'selected' : '' }}>3 Stars</option>
                    <option value="4" {{ request('rating') == '4' ? 'selected' : '' }}>4 Stars</option>
                    <option value="5" {{ request('rating') == '5' ? 'selected' : '' }}>5 Stars</option>
                </select>
                <button type="submit">Search</button>
            </form>


            <ol>
              <li>

              @php
              $id = Auth::user()->id;
              $profileData=App\Models\User::find($id);
              @endphp
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
        
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break; 
            }
            @endif 
            </script>
            <script src="{{ asset('assets/my_chart.js') }}"></script>
            <script type="module" src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js') }}"></script>
            <script nomodule src="{{ asset('https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js') }}"></script>
            
    </body>
</html>