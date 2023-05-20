# Service Users API
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
Here the example of configured .env file:
```
#ACCESS PORT/SERVICE PORT
PORT = 8080

DB_NAME = media-database
DB_USERNAME = root
DB_PASSWORD =
DB_HOSTNAME = localhost
```
3. **Migration DB**
```
npx sequelize db:migrate
```
4. **Seed DB**
```
npx sequelize db:seed:all
```
5. **Run Service**
```
nodemon bin/www
```
---