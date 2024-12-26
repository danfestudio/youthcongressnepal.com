package server

import (
	"html/template"
	"log"
	"net/http"

	"github.com/chetanbudathoki/dbms/database"
)

type RegistrationData struct {
    Firstname string
    Lastname  string
    Email     string
    Mobile    string
    Location  string
}

func HttpServer() {
    fs := http.FileServer(http.Dir("./public"))
    http.Handle("/", fs)

    http.HandleFunc("/register", registerHandler)

    log.Println("Listening on :8080...")
    err := http.ListenAndServe(":8080", nil)
    if err != nil {
        log.Fatal(err)
    }
}

func registerHandler(w http.ResponseWriter, r *http.Request) {
    if r.Method != http.MethodPost {
        http.Error(w, "Invalid request method", http.StatusMethodNotAllowed)
        return
    }

    data := RegistrationData{
        Firstname: r.FormValue("firstname"),
        Lastname:  r.FormValue("lastname"),
        Email:     r.FormValue("email"),
        Mobile:    r.FormValue("mobile"),
        Location:  r.FormValue("location"),
    }

    _, err := database.DB.Exec(
        "INSERT INTO location (firstname, lastname, email, mobile, location) VALUES ($1, $2, $3, $4, $5)",
        data.Firstname, data.Lastname, data.Email, data.Mobile, data.Location,
    )
    if err != nil {
        log.Println("Error inserting data into database:", err)
        http.Error(w, "Error inserting data into database", http.StatusInternalServerError)
        return
    }

    tmpl := template.Must(template.ParseFiles("./public/index.html"))
    tmpl.Execute(w, struct{ Success bool }{Success: true})
}