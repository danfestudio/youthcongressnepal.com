package server

import (
	"html/template"
	"log"
	"net/http"
	"path/filepath"
)

// renderPage loads templates and renders a specific page
func renderPage(w http.ResponseWriter, pagePath string) {
	// Set the Content-Type to text/html to ensure the browser interprets it as HTML
	w.Header().Set("Content-Type", "text/html; charset=utf-8")

	// Load templates from /public/templates directory
	templateFiles, err := filepath.Glob("public/templates/*.html")
	if err != nil {
		http.Error(w, "Unable to load templates", http.StatusInternalServerError)
		log.Println("Error loading templates:", err)
		return
	}

	// Include the specific page template
	templateFiles = append(templateFiles, pagePath)

	// Parse all templates
	tmpl, err := template.ParseFiles(templateFiles...)
	if err != nil {
		http.Error(w, "Error parsing templates", http.StatusInternalServerError)
		log.Println("Error parsing templates:", err)
		return
	}

	// Execute the template
	err = tmpl.ExecuteTemplate(w, filepath.Base(pagePath), nil)
	if err != nil {
		http.Error(w, "Error executing template", http.StatusInternalServerError)
		log.Println("Error executing template:", err)
	}
}

// pageHandler returns a handler function for rendering a specified page
func pageHandler(page string) http.HandlerFunc {
	return func(w http.ResponseWriter, r *http.Request) {
		if r.URL.Path != "/" && r.URL.Path != page {
			http.NotFound(w, r)
			return
		}
		renderPage(w, "public"+page+".html")
	}
}

// SetupRoutes configures URL routes
func SetupRoutes() {
	// Serve static files (CSS, JS, images) from /public/static directory
	http.Handle("/static/", http.StripPrefix("/static/", http.FileServer(http.Dir("./public/static"))))

	// Register route handlers
	http.HandleFunc("/", pageHandler("/index"))
	http.HandleFunc("/about", pageHandler("/about"))
	http.HandleFunc("/central-committee", pageHandler("/central-committee"))
	http.HandleFunc("/standing-rules", pageHandler("/standing-rules"))
	http.HandleFunc("/contact", pageHandler("/contact"))
	http.HandleFunc("/blog", pageHandler("/blog"))
	http.HandleFunc("/faqs", pageHandler("/faqs"))
	http.HandleFunc("/activities", pageHandler("/activities"))
	http.HandleFunc("/philanthropy-activities", pageHandler("/philanthropy-activities"))
	http.HandleFunc("/basics-of-politics", pageHandler("/basics-of-politics"))
	http.HandleFunc("/know-your-country", pageHandler("/know-your-country"))
}

// StartServer launches the HTTP server on the specified port
func StartServer(port string) {
	SetupRoutes()
	log.Println("Server starting on port", port)
	// Listen on all available network interfaces (IPv4 and IPv6) on the specified port
	if err := http.ListenAndServe("0.0.0.0:"+port, nil); err != nil {
		log.Fatal("Server failed:", err)
	}
}
