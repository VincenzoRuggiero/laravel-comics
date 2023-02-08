<header>
    <div class="container">
        <div class="nav-wrapper">
          <img src="{{ Vite::asset('resources/assets/images/dc-logo.png')}}" alt="DC Logo" />
          <ul>
            @foreach ($headerMenu as $item)
            <li>
                <a href="{{ route('comic') }}">
                  {{ $item }}
                </a>
            </li>
            @endforeach
            
          </ul>
        </div>
      </div>
    
</header>