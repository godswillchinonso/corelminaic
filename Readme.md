# CORELMINAIC (PHP MINI MVC FRAMEWORK)

Corelminaic is a minimalistic PHP MVC framework designed to make web development simple, intuitive, and scalable. Whether you are building small projects or laying the foundation for larger applications, Corelminaic provides a clean structure, PSR-4 autoloading, and easy-to-use routing, controllers, and models.

---
**Key Features:**
- Lightweight and fast, with minimal overhead for maximum performance
- PSR-4 autoloading that keeps your code clean and modern
- Modular architecture that is easily extendable with custom modules or libraries
- Ready for Composer installation so you can integrate it into your projects effortlessly
- Beginner friendly, ideal for developers learning MVC or building prototypes quickly


Corelminaic also promises to add more dependencies, such as OAuth, payment gateways, and other tools you can use across your web app development, helping you build applications faster and more efficiently.

With Corelminaic, you can focus on writing your application logic instead of dealing with boilerplate code.


---

## Folder Structuring:
   This folder contains the main application logic and is divided into subfolders:

   #### app

   - **Controllers:** Handles all HTTP requests.

   		- Page-loading requests go inside `app/Controllers/Public/Page/`
   		- POST requests go inside `app/Controllers/Public/Action/`

   		Example: You can create `app/Controllers/Public/Page/Auth/` to handle authentication routes, including:
   			`RegisterController.php`
   			- `LoginController.php`
   			- `ForgotPasswordController.php`
   			- `ResetPasswordController.php`
   			- `VerifyLoginController.php`

   		You are free to create additional subfolders to organize your routes based on your project needs.




   - **Models:** Contains all your data-related logic. Each model represents a database table or an entity in your application. For example:

   		- `User.php`
   		- `Product.php`


   - **Core:**Contains the framework’s core classes that make your MVC work. Examples include:

   		- `Application.php`,
   		- `Router.php`,
   		- `Middleware.php`,
   		- `ErrorHandling.php`
   		- `Database.php`

   		The ***Core*** folder also contain the response body which could be used during web development  or api development. Lets illustrate this on the controller.
	   		```php
	   		<?php
	   		declare(strict_types=1);

	   		namespace App\Controllers\Public\Action;

	   		use App\Core\Response\WebResponse;

	   		final class UserRegistrationController extends WebResponse
	   		{
	   		    // Your methods here
	   		}
	   		```

   - **Service:** Holds reusable services or utilities that can be used throughout the application. Examples include:

   		- Form Validation Services:
   			-  `TeextFormField.php`
   			- `EmailFormField.php`
   			- `TelFormField.php`
   			- `FileFormField.php`  etc.


   ---

   #### public: 
   		The entry point of the application. This folder contains index.php which bootstraps Corelminaic and routes all incoming requests and all of your assets (css, js and image).


   	---

   #### vendor
       Contains all Composer dependencies installed in your project.

   ---

   ### View
   		All frontend code for your application resides in the views folder. This includes HTML templates, or any files responsible for presenting data to the user.





