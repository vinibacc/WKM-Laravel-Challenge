# WKM Laravel Challenge
## run

### Composer update:
```
composer update
```

### Key Generate:
```
php artisan key:generate
```

### DataBase config:

Create  Database end edit <b>.env</b> file:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DATABASE
DB_USERNAME=YOUR_USERNAME
DB_PASSWORD=YOUR_PASSWORD
```

### Migration and Seeding:
```
php artisan migrate
```
```
php artisan db:seed
```

### Start the project:
```
php artisan serve
```

## CRUD

### Show all States/cities:

- Method: GET
- URL: localhost:8000/api/state

change <b>state</b> for <b>city</b> to get all cities.

### Show one State/city:

- Method: GET
- URL: localhost:8000/api/state/{id}

change <b>state</b> for <b>city</b> to get the city.

### create State:

- Method: POST
- URL: localhost:8000/api/state

Request:
```json
{
    "name": "Rio de Janeiro",
    "abbreviation":"RJ"
}
```
Response:
```json
{
    "success": true,
    "data": {
        "name": "Rio de Janeiro",
        "abbreviation": "RJ",
        "id": (id)
    }
}
```
### Update State:

- Method: PUT
- URL: localhost:8000/api/state/{id}

Request:
```json
{
    "name": "Rio de Janeiro",
    "abbreviation":"RJ"
}
```
Response:
```json
{
    "success": true,
    "data": {
        "name": "Rio de Janeiro",
        "abbreviation": "RJ",
        "id": (id)
    }
}
```
### Delete State:

- Method: DELETE
- URL: localhost:8000/api/state/{id}

Response:
```json
{
    "success": true,
    "data": "deleted"
}
```
### create City:

- Method: POST
- URL: localhost:8000/api/city

Request:
```json
{
    "name": "Pelotas",
    "state_id": "21"
}
```
Response:
```json
{
    "success": true,
    "data": {
        "name": "Pelotas",
        "id": 5569
    }
}
```
### Update City:

- Method: PUT
- URL: localhost:8000/api/city/{id}

Request:
```json
{
    "name": "Pelotas",
    "state_id": "21"
}
```
Response:
```json
{
    "success": true,
    "data": {
        "name": "Pelotas",
        "id": 5569
    }
}
```
### Delete City:

- Method: DELETE
- URL: localhost:8000/api/city/{id}

Response:
```json
{
    "success": true,
    "data": "deleted"
}
```

