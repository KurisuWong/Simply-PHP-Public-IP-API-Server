# A Simple Public IP Address API Server PHP Script
Returns the visitor IP address (IPv4 or IPv6) in json format, useful for shell scripts or to find the external Internet routable address.

## Quick Start Guide
1. Change `<YOUR_OWN_SECRET_KEY>` to your own secret
2. Upload modified script to a php server
3. Visit your uploaded script with a browser or curl end with `?key=<YOUR_OWN_SECRET_KEY>`
4. Enjoy.

## Usage Example
Assume this php script is hosted at https://api.exmaple.com/ip/index.php with secret key `secret`.

### ipv4
```
$ curl 'https://api.example.com/ip/?key=password'
{"ipv4":"<your_ipv4_address_here>"}
```

### ipv6
```
$ curl 'https://api.example.com/ip/?key=password'
{"ipv4":"<your_ipv6_address_here>"}
```
