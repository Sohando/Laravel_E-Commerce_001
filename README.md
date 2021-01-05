# Laravel E-Commerce Site
###### Tutorial Link: [LLC 05](https://www.youtube.com/watch?v=ZKLXeRlcvaA&list=PL1AXcfXimFRF3qKaLqp_N6jSHKqHjgKDI&index=15&ab_channel=Klassroom)

###Section 1:

#####Basic Commands 
 <table>
    <thead>
        <tr>
            <th> Purpose</th>
            <th> Command </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td> Create Project </td>
            <td> composer -create-project --prefer-dist laravel\laravel Laravel_Ecommerce_001 </td>            
        </tr>  
        <tr>
            <td> Use Debugbar </td>
            <td> composer require barryvdh/laravel-debugbar --dev</td>
            <td> php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider" </td>            
        </tr>  
        <tr>
            <td> Laravel IDE Helper </td>            
            <td> composer require --dev barryvdh/laravel-ide-helper</td>
            <td>php artisan vendor:publish --provider="Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider" --tag=config</td>     
            <td>php artisan ide-helper:generate</td>
        </tr>     
        <tr>
            <td> Laravel Media Library (images)</td>
            <td>composer require "spatie/laravel-medialibrary"</td>
            <td>php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"</td>
            <td>php artisan migrate</td>
        </tr>  
    </tbody>
 </table>
 
#####Minimum Configuration
```textmate
Project -> config -> app.php
    'name' = (Change to our project name)
    'timezone' = 'Asia/Dhaka'
    'key' = project -> config -> app.php -> key

Project -> config -> ide_helper.php    
    'include_fluent' => true,
    'include_helpers' => true,
```

<hr>
   
###Section 2:
#####Workflow
    1. App Configuration
    2. Database Design 
    3. Models
    4. Seeder
    5. Frontend laravel mix --> holderjs for bootstrap

```text
Write our seeder function():
    1. Factory
        => UserFactory [ php artisan make:factory UserFactory ]
        => edit user factory according your need
    2. Seeder
        => UserTableSeeder [ php artisan make:seeder UserTableSeeder ] 
        => factory(App\Models\User::class, 10)->create()
    3. Run php artisan db:seed 
```

