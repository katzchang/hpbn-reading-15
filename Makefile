all:

run-client:
	php -S localhost:8888 -t ./client
run-server:
	php -S localhost:9999 -t ./server
