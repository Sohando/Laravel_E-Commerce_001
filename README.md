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
    </tbody>
 </table>
 
#####Minimum Configuration
```textmate
Project -> config -> app.php
    'name' = (Change to our project name)
    'timezone' = 'Asia/Dhaka'
    'key' = project -> config -> app.php -> key

    

```

<hr>
   
###Section 2:
#####Project Structure

