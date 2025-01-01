# Stage 1: Build
FROM golang:1.20-alpine AS builder

# Install necessary packages
RUN apk add --no-cache git

# Set the working directory
WORKDIR /app

# Copy go.mod and go.sum to the working directory
COPY go.mod go.sum ./

# Download dependencies
RUN go mod download

# Copy the source code
COPY . .

# Build the application
RUN go build -o main .

# Stage 2: Run
FROM alpine:latest

# Install necessary libraries
RUN apk add --no-cache ca-certificates

# Set the working directory
WORKDIR /app

# Copy the built binary from the builder stage
COPY --from=builder /app/main .

# Expose port 8001
EXPOSE 8001

# Command to run the application
CMD ["./main"]
