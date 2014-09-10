all:
	$(MAKE) run-origin &
	$(MAKE) run-thirdparty &

run-origin:
	php -S localhost:8888 -t ./origin
run-thirdparty:
	php -S localhost:9999 -t ./thirdparty
