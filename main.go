package main

import (
	cockroachdb "github.com/chetanbudathoki/dbms/database"
	"github.com/chetanbudathoki/dbms/server"
)

func main() {
   cockroachdb.Connection()
   server.HttpServer()
}