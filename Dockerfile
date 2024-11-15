# Use the base image as defined in your devcontainer
FROM mcr.microsoft.com/devcontainers/go:1-1.23-bookworm

# Set the working directory
WORKDIR /app

# Copy go.mod and go.sum first (if you have them)
# This helps to cache dependencies if they haven't changed
COPY go.mod go.sum ./

# Download dependencies
RUN go mod tidy

# Copy the rest of the application files
COPY . .

# Build the Go application
RUN go build -o main main.go

# Expose the port your application listens on (adjust if necessary)
EXPOSE 8081

# Command to run the application
CMD ["./main"]
