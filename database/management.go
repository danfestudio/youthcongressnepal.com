package database

import (
	"log"
)

func CreateTables() {
    createLocationTable := `
    CREATE TABLE IF NOT EXISTS location (
        id SERIAL PRIMARY KEY,
        firstname TEXT,
        lastname TEXT,
        email TEXT,
        mobile TEXT,
        location TEXT
    );`

    _, err := DB.Exec(createLocationTable)
    if err != nil {
        log.Fatalf("Error creating location table: %v", err)
    }

    log.Println("Tables created successfully.")
}