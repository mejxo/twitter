## Model 
    (M)odel (V)iew (C)ontroller

## Commands
composer create-project laravel/laravel {app-name} - Create laravel project  
php artisan key:generate - Generate keys
php artisan serve - Server website

php artisan make:controller {name}Controller - Create controller


## Codes
    <?php 
        foreach($users as $i) {
            echo "Name: " . $i["name"] . "<br>" ;
            echo "Age: " . $i["age"] ."<br>";
            echo "<br>";
        }
    ?>

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

    public function index() {

        $users = [
            [
                "name" => "Fero",
                "age" => "15"
            ], 
            [
                "name" => "Dano",
                "age" => "55"
            ], 
            [
                "name" => "Timo",
                "age" => "41"
            ], 
        ];
        
        return view( 'dashboard', ["users" => $users,] );
    }