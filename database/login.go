// File: /database/login.go
package database

import (
	"errors"
)

// Static credentials for login
var staticCredentials = struct {
	Email    string
	Password string
}{
	Email:    "youthcongressnepal@outlook.com",
	Password: "members@YCoN",
}

// ValidateLogin checks if the provided email and password match the static credentials
func ValidateLogin(email, password string) error {
	if email == staticCredentials.Email && password == staticCredentials.Password {
		return nil
	}
	return errors.New("invalid email or password")
}
