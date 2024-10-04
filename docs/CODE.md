# Laravel Code CheatSheet

## Statements
### Authentication

    @auth
        // The user is authenticated...
    @endauth
     
    @guest
        // The user is not authenticated...
    @endguest
    
    
    @auth('admin')
        // The user is authenticated...
    @endauth
     
    @guest('admin')
        // The user is not authenticated...
    @endguest

__________________________________________________

### If-else / Foreach

    @foreach ($users as $user) 
        <h1>{{ $user["name"] }}</h1> 
        <h2>{{ $user["age"] }}</h2>
    
        
        @if ($user["age"] > 18)
            <h3>User already have 18yr!</h3>
        @else
            <h3>User is under 18!</h3>
        @endif
    @endforeach

__________________________________________________

## Author
This website was created by `Maxo`.
