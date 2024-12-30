package main

import (
	"github.com/danfestudio/youthcongress.org.np/database"
	"github.com/danfestudio/youthcongress.org.np/server"
)

func main(){
	database.Connection()
	server.StartServer()
}