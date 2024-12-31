package database

import (
	"database/sql"
	"log"

	_ "github.com/lib/pq" // PostgreSQL driver
)

// DB is the global database connection instance
var DB *sql.DB

// Connect initializes the database connection and assigns it to the global DB variable
func Connection() {
	// Define your connection string
	connStr := "postgresql://chetanbudathoki:Online248@161.97.141.69:26257/youthcongressnepal?sslmode=require"

	// Open the connection
	var err error
	DB, err = sql.Open("postgres", connStr)
	if err != nil {
		log.Fatalf("Failed to open the database: %v", err)
	}

	// Verify the connection
	err = DB.Ping()
	if err != nil {
		log.Fatalf("Failed to connect to the database: %v", err)
	}

	log.Println("Successfully connected to the CockroachDB database.")
}

// Close closes the database connection
func Close() {
	if DB != nil {
		err := DB.Close()
		if err != nil {
			log.Printf("Error closing database connection: %v", err)
		} else {
			log.Println("Database connection closed.")
		}
	}
}
