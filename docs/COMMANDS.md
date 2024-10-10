# Laravel Commands CheatSheet

## Model 
    Laravel => (M)odel (V)iew (C)ontroller
    Database => (C)reate (R)ead (U)pdate (D)elete 

## Basic Commands
`composer create-project laravel/laravel {app-name}` - Create laravel project <br />
`php artisan key:generate` - Generate keys <br />
`php artisan serve` - Serve website <br />

## Make Commands
**{name} - must in singular** <br />

`php artisan make:controller {name}Controller` - Create controller <br />
`php artisan make:view {name}` - Create view <br />
`php artisan make:model {name}` - Create model <br />

## Database Commands
`php artisan migrate` - Migrate database <br />
`php artisan make:migration create_{name}_table` - Create table <br />
`php artisan make:model User -m` - create model and table in database <br /> 

### **Creating Database** <br />
    Schema::create('posts', function (Blueprint $table) {
        $table->id();
        $table->string("content");
        $table->integer("likes");
        $table->timestamps(); //created at and updated at
    });

### **Creating Model** <br />
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

### **Importing Model** <br />
import with [*use App\Models\\{Model};*] <br />

> {Model}::all <br />
> {Model}::orderby("column", "ASC"/"DESC")->get() <br />
> {Model}::select('column', 'column')->get()

## Tables

| Left columns  | Right columns |
| ------------- |:-------------:|
| ...           | ...           |
| ...           | ...           |
| ...           | ...           |


## Author
This doc was created by `Maxo`.