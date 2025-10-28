# copilot-formation

A simple PHP 8.4 project with Docker Compose that displays a welcome page.

## Features

- PHP 8.4 with FPM
- Nginx web server
- Docker Compose setup
- WelcomeController with MVC-style architecture

## Requirements

- Docker
- Docker Compose

## Getting Started

1. Clone the repository
2. Run the application:

```bash
docker compose up -d --build
```

3. Open your browser and navigate to `http://localhost:80`

You should see a welcome page with "Welcome" heading.

## Stopping the Application

```bash
docker compose down
```

## Project Structure

```
.
├── docker-compose.yml    # Docker Compose configuration
├── Dockerfile            # PHP 8.4 FPM container
├── nginx.conf           # Nginx configuration
├── public/
│   └── index.php        # Entry point
└── src/
    ├── Response.php     # Response class
    └── WelcomeController.php  # Welcome controller
```

## Architecture

The project follows a simple MVC-style architecture:

- **WelcomeController**: Contains the `index()` method that returns a Response object with the HTML content
- **Response**: Handles HTTP responses with status codes
- **index.php**: Entry point that instantiates the controller and sends the response
