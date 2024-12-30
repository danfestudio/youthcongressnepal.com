// File: database/connection.go
package database

import (
	"database/sql"
	"log"

	_ "github.com/lib/pq"
)

// Connection establishes a connection to the CockroachDB database.
func Connection() {
	// Define your connection string
	connStr := "postgresql://chetanbudathoki:Online248@161.97.141.69:26257/youthcongressnepal?sslmode=require"

	// Open the connection
	db, err := sql.Open("postgres", connStr)
	if err != nil {
		log.Fatalf("Failed to open the database: %v", err)
	}
	defer db.Close()

	// Verify the connection
	err = db.Ping()
	if err != nil {
		log.Fatalf("Failed to connect to the database: %v", err)
	}

	
}
