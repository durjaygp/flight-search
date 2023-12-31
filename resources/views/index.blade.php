<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Search</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center mb-4">Flight Search</h1>
    <form action="{{ route('flight.search') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="flight-number" class="form-label">Flight Number</label>
            <input type="text" name="flight_number" class="form-control" id="flightNumber" oninput="convertToUpperCase(this)" required>
        </div>
        <div class="mb-3">
            <label for="flight-date" class="form-label">Date</label>
            <input type="date" name="date" class="form-control" id="flight-date" required>
        </div>
        <div class="mb-3">
            <label for="flight-time" class="form-label">Time</label>
            <input type="time" name="time" class="form-control" id="flight-time" required>
        </div>
        <button type="submit" class="btn btn-primary">Search Flights</button>
    </form>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript to convert input to uppercase -->
<script>
    function convertToUpperCase(inputElement) {
        inputElement.value = inputElement.value.toUpperCase();
    }
</script>

</body>
</html>

