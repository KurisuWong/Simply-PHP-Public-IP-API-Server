# simply-php-public-ip-address-api
Returns the visitor IP address (IPv4 or IPv6) in plain text, useful for shell scripts or to find the external Internet routable address.

## Usage Example
Assume this php script is hosted at https://api.exmaple.com/ip/index.php with secret key `secret`.

### ipv4
```
$ curl 'https://api.example.com/ip/?secret=password'
{"ipv4":"<your_ipv4_address_here>"}
```

### ipv6
```
$ curl 'https://api.example.com/ip/?secret=password'
{"ipv4":"<your_ipv6_address_here>"}
```
