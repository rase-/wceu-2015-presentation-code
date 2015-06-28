# Running locally

## Running the node app
`node nodeapp/app.js`

## Redis
`brew install redis` and follow instructions to run -- or equivalent package/manual install for your favorite distro

To make sure redis is running you can do something like this:
```
redis-cli
SET hello "world"
GET hello
```
