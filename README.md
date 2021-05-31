# Ananke
Just another lightweight dockerized PHP Development Framework

Getting started
---

Edit your hosts file:

```bash
127.0.0.1   ananke.local
```
Init Autoload:
```bash
composer dump-autoload
```

```
Run the app:

```bash
docker-compose up
```

Enter URL in your browser and look at the ServerRequest `init` in your dev console:
```
http://ananke.local
```

Roadmap
---
I try to implement some nice stuff for your dev environment. Further ideas are welcome and appreciated. Open an issue or contact me at info@ajaybachmann.ch. Things to come:

- Headless 
- SSL Certificate Support
- Unit Tests
- RESTful Architecture
- Based on Standards