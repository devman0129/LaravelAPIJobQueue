# Laravel API with Job Queue, Database, and Event Handling  

## Overview  
This project demonstrates a basic implementation of a REST API using Laravel, showcasing proficiency in job queues, database operations, and event handling. It includes a single API endpoint that validates input data, processes it using a job queue, saves it to a database, and triggers an event upon successful saving.  

## Requirements  
- PHP >= 8.1  
- Composer  
- MySQL    

## Installation Instructions  

### Step 1: Clone the Repository  
Clone this repository to your local machine:  
```shell  
git clone https://github.com/devman0129/LaravelAPIJobQueue.git
cd LaravelAPIJobQueue
```
### Step 2: Install Composer Dependencies
Run the following command to install the PHP dependencies:
```shell
composer install
```

### Step 3: Environment Configuration
Copy the example environment file and configure your environment variables:
```shell
cp .env.example .env  
php artisan key:generate
```

Update the .env file to include your database and queue configurations:
```shell
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=your_mysql_db_name 
DB_USERNAME=your_mysql_username  
DB_PASSWORD=your_mysql_password  

QUEUE_CONNECTION=database
```

### Step 4: Database Migrations
Run the migrations to set up your database:
```shell
php artisan migrate
```

### Step 5: Queue Worker
Start the queue worker to process queued jobs:
```shell
php artisan queue:work
```

## API Usage

### Start the Application
Run the Laravel development server:
```shell
php artisan serve
```

### API Endpoint
Send a POST request to /api/submit with the following JSON payload:
```json
{  
    "name": "John Doe",  
    "email": "john.doe@example.com",  
    "message": "This is a test message."  
}
```

## Testing the Project

### Unit and Feature Tests
This project includes both unit and feature tests to ensure its functionality. To run the tests, use the following command:
```shell
php artisan test
```