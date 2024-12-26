package database

import (
	"database/sql"
	"log"

	_ "github.com/lib/pq"
)

var DB *sql.DB

func Connection() {
    // Connection string for CockroachDB
    connStr := "postgresql://chetanbudathoki:Online248@161.97.141.69:26257/cb?sslmode=require"

    // Open the CockroachDB connection
    var err error
    DB, err = sql.Open("postgres", connStr)
    if err != nil {
        log.Fatal("Error connecting to the database:", err)
    }

    // Verify the connection
    err = DB.Ping()
    if err != nil {
        log.Fatal("Error verifying connection:", err)
    }

    log.Println("Successfully connected to the CockroachDB database.")

    // Create tables if they do not exist
    CreateTables()
}