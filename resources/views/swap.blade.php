<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight Search Results</title>
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
    <h1 class="text-center mb-4">Flight Search Results</h1>
    <div class="mb-3">
        @if (count($results) > 1)
            <h3>Flight Details:</h3>
            <ul>
                @foreach ($results as $flight)
                    <li>
                        <p><strong>Flight Number:</strong> <span id="flight-number">{{ $flight->flight_number }}</span></p>
                        <p><strong>Date:</strong> <span id="flight-date">{{ $flight->date }}</span></p>
                        <p><strong>Time:</strong> <span id="flight-time"> {{ $flight->time }}</span></p>
                    </li>
                @endforeach
            </ul>
        @else
        @endif
    </div>

    <form id="seat-selection-form">
      <div class="mb-3">
        <label for="seat-number">Select Your Seat Number:</label>
        <select class="form-select" id="seat-number" required>
          <option value="" disabled selected>Select a Seat Number</option>
          <option value="A1">A1</option>
          <option value="A2">A2</option>
          <option value="B1">B1</option>
          <option value="B2">B2</option>
          <!-- Add more seat options as needed -->
        </select>
      </div>
      <div class="mb-3">
        <label for="swap-seat">Swap to Seat Number:</label>
        <select class="form-select" id="swap-seat" required>
          <option value="" disabled selected>Select a Seat Number</option>
          <option value="ANY">ANY</option>
		  <option value="A1">A1</option>
          <option value="A2">A2</option>
          <option value="B1">B1</option>
          <option value="B2">B2</option>
          <!-- Add more seat options as needed -->
        </select>
      </div>
      <div class="mb-3">
        <label for="contact-email">Contact Email:</label>
        <input type="email" class="form-control" id="contact-email" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
