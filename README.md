# Using docker as command

```bash
docker run -it --rm --name my-running-script -v "$PWD":/usr/src/myapp -w /usr/src/myapp php:8.0-cli php index.php
```

# Building single script exec

```bash
docker build -t wsh .
docker run -it --rm wsh
```
