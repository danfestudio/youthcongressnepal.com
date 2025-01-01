// File: /database/members.go
package database

import (
	"log"
)

// Member represents a row in the members table
type Member struct {
	FirstName    string `json:"first_name"`
	LastName     string `json:"last_name"`
	MiddleName   string `json:"middle_name"`
	EmailID      string `json:"email_id"`
	MobileNumber string `json:"mobile_number"`
	PermanentDistrict string `json:"permanent_district"`
	PermanentPalika   string `json:"permanent_palika"`
	PermanentWada     int    `json:"permanent_wada"`
	PermanentTole     string `json:"permanent_tole"`
}

func FetchMembers() ([]Member, error) {
	query := `SELECT first_name, last_name, middle_name, email_id, mobile_number, 
	                 permanent_district, permanent_palika, permanent_wada, permanent_tole 
	          FROM members`

	// Execute the query
	rows, err := DB.Query(query)
	if err != nil {
		log.Printf("Error executing query: %v", err)
		return nil, err
	}
	defer rows.Close()

	// Parse the rows into a slice of Member structs
	var members []Member
	for rows.Next() {
		var member Member
		err := rows.Scan(&member.FirstName, &member.LastName, &member.MiddleName, 
			&member.EmailID, &member.MobileNumber, 
			&member.PermanentDistrict, &member.PermanentPalika, &member.PermanentWada, &member.PermanentTole)
		if err != nil {
			log.Printf("Error scanning row: %v", err)
			continue
		}
		members = append(members, member)
	}

	if err := rows.Err(); err != nil {
		log.Printf("Error iterating over rows: %v", err)
		return nil, err
	}

	return members, nil
}

