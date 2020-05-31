## Kyto Coding Task

### Installation

Clone repository and install dependencies via composer

``composer install --no-dev``

### Usage

From command line: ``php index.php``

In browser: run build-in web server ``php -S localhost:8000`` and open localhost:8000

### Assumptions

Unlike Tree, Star generation algorithm is unclear. That's why I decided to hardcode it. 

### Run tests

Install dev-dependencies via composer

``compose install --dev``

and run

``vendor\bin\phpunit tests``