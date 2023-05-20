# API GATEWAY
---
### This Project Using:
- Node 18.8.0 (npm & npx)
- mysql
---

### How To Run This Service
1. **Install Dependencies**
```
npm i
```
2. **Copy file .env.example to .env & configure it**

Here the example of configured .env file
```
APP_NAME = api gateway

TIMEOUT = 5000

HOSTNAME = http://127.0.0.1:3000

URL_SERVICE_MEDIA = http://127.0.0.1:8080
URL_SERVICE_USER = http://127.0.0.1:5000
URL_SERVICE_COURSE = http://127.0.0.1:8000
URL_SERVICE_ORDER_PAYMENT = http://127.0.0.1:8001

JWT_SECRET = jwttesting123
JWT_SECRET_REFRESH_TOKEN = refreshtoken!23
JWT_ACCESS_TOKEN_EXPIRED = 5m
JWT_REFRESH_TOKEN_EXPIRED = 1d
```
3. **Run Service**
```
nodemon bin/www
```
---
