# Use the base image as defined
FROM mcr.microsoft.com/devcontainers/go:1-1.23-bookworm

# Set the working directory
WORKDIR /app

# Copy the Go project files
COPY . .

# Install dependencies and build the application (assumes you have a Go application)
RUN go mod tidy && go build -o main .

# Expose a port for your application (e.g., 8080)
EXPOSE 8080

# Command to run your Go application
CMD ["./main"]
