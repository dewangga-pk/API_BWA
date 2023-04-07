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
2. **Create .env file & configure it**
```
#ACCESS PORT/SERVICE PORT
PORT = 8080

#DATABASE DETAIL
DB_HOST = 127.0.0.1
DB_USERNAME = root
DB_PASSWORD = 
DB_NAME = db_name
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