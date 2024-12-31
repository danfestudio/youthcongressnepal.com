package database

import (
	"database/sql"
	"log"
)

// createMemberTable creates the `members` table in the database.
func CreateMemberTable(db *sql.DB) {
	query := `
		CREATE TABLE IF NOT EXISTS members (
			id SERIAL PRIMARY KEY,
			first_name VARCHAR(100) NOT NULL,
			last_name VARCHAR(100) NOT NULL,
			middle_name VARCHAR(100),
			email_id VARCHAR(150) UNIQUE NOT NULL,
			mobile_number VARCHAR(15) UNIQUE NOT NULL,
			gender VARCHAR(10) NOT NULL,
			dob DATE NOT NULL,
			blood_group VARCHAR(5),
			permanent_district VARCHAR(100) NOT NULL,
			permanent_palika VARCHAR(100) NOT NULL,
			permanent_wada INTEGER NOT NULL,
			permanent_tole VARCHAR(100) NOT NULL,
			temporary_district VARCHAR(100) NOT NULL,
			temporary_palika VARCHAR(100) NOT NULL,
			temporary_wada INTEGER NOT NULL,
			temporary_tole VARCHAR(100) NOT NULL,
			created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		);
    `
	_, err := db.Exec(query)
	if err != nil {
		log.Fatalf("Failed to create members table: %v", err)
	}
	log.Println("Successfully ensured `members` table exists.")
}
