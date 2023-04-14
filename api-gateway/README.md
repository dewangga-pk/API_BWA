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
2. **Create .env file & configure it**
```
APP_NAME = api gateway

TIMEOUT = 5000

URL_SERVICE_MEDIA = http://localhost:8080
URL_SERVICE_USER = http://localhost:5000

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
