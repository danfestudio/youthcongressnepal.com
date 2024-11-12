package server

import (
	"fmt"
	"net/http"
)

func StartServer(port string) {
	fileServer := http.FileServer(http.Dir("./public"))
	http.Handle("/", fileServer)

	fmt.Printf("Serving files from ./public on port %s\n", port)
	err := http.ListenAndServe(":"+port, nil)
	if err != nil {
		fmt.Printf("Error starting server: %s\n", err)
	}
}
