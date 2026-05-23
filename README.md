# contacts-mini

A minimal Laravel 12 JSON REST API for managing contacts, backed by SQLite.

## Setup

```bash
composer run setup
```

This installs dependencies, copies `.env.example` → `.env`, generates an app key, and runs migrations.

## Running

```bash
composer run dev
```

Starts the API server at `http://localhost:8000`.

## API Endpoints

| Method | Path | Description |
|--------|------|-------------|
| GET | `/api/ping` | Health check |
| GET | `/api/probe` | Returns contact count |
| GET | `/api/contacts` | List all contacts |
| POST | `/api/contacts` | Create a contact |
| GET | `/api/contacts/{id}` | Get a contact |
| PUT | `/api/contacts/{id}` | Update a contact |
| DELETE | `/api/contacts/{id}` | Delete a contact |

### POST `/api/contacts` — required fields

```json
{
  "name": "Jane Doe",
  "email": "jane@example.com",
  "phone": "555-0100"
}
```

## Testing

```bash
composer run test

# Single file
php artisan test tests/Feature/ExampleTest.php

# Single method
php artisan test --filter test_the_application_returns_a_successful_response
```

Tests use an in-memory SQLite database and do not touch `database/database.sqlite`.

## Seeding

```bash
php artisan db:seed --class=ContactSeeder
```

Creates 5 fake contacts.

## Todo

- [ ] Add `name`, `email`, `phone` columns to the `contacts` migration (currently only `id` + timestamps)
- [ ] Implement `ContactController::index` — list all contacts
- [ ] Implement `ContactController::show` — fetch a single contact
- [ ] Implement `ContactController::update` — update a contact
- [ ] Implement `ContactController::destroy` — delete a contact
- [ ] Add `RefreshDatabase` to feature tests so they run against the in-memory DB
- [ ] Add feature tests for each CRUD endpoint
