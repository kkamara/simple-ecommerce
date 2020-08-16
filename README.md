# Laravel React Ecommerce

Extensive ecommerce site built with ability to add to cart without being logged in. Ongoing release developement.

## Installation

Install [Docker](https://docs.docker.com/get-docker/) and [Docker Compose](https://docs.docker.com/compose/install/).


## Setup
Our Makefile is based at the root of project directory and provides us with a number of useful commands.

What you want to do is go to the root directory where you've stored this project and run the following command:
```
make dev
```

This will build our app and all it's required services and libraries, as well as provide seed data for the database service.

When `make dev` completes your app should be accessible from any web browser on your system at the following address:
```
http://localhost:8000
```


## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](https://choosealicense.com/licenses/mit/)