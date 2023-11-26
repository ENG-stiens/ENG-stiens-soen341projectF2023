<?php
// Function to validate user input
function validateInput($data) {
    // Remove leading and trailing whitespaces
    $data = trim($data);

    // Ensure the data is not empty
    if (empty($data)) {
        return false;
    }

    // Additional validation checks can be added based on your requirements

    return $data;
}

// Function to generate a unique appointment ID
function generateAppointmentID() {
    return uniqid();
}

// Function to save appointment data to a text file
function saveAppointment($data) {
    $appointmentFile = 'appointment.txt';

    // Create or open the file for appending
    $file = fopen($appointmentFile, 'a');

    // Generate a unique ID for the appointment
    $data['id'] = generateAppointmentID();

    // Prepare data string
    $dataString = implode(',', $data) . PHP_EOL;

    // Write data to the file
    fwrite($file, $dataString);

    // Close the file
    fclose($file);

    return $data['id'];
}

// Validate and process the form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate form data
    $name = validateInput($_POST['name']);
    $email = validateInput($_POST['email']);
    $phone = validateInput($_POST['phone']);
    $house = validateInput($_POST['house']);
    $date = validateInput($_POST['date']);
    $time = validateInput($_POST['time']);
    $message = validateInput($_POST['message']);

    // Ensure all required fields are filled
    if ($name && $email && $phone && $house && $date && $time && $message) {
        // Initial status is "In Progress"
        $status = "In Progress";

        // Prepare appointment data
        $appointmentData = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'house' => $house,
            'date' => $date,
            'time' => $time,
            'message' => $message,
            'status' => $status,
        ];

        // Save appointment and get the unique ID
        $appointmentID = saveAppointment($appointmentData);

        // You can redirect to a confirmation page or display a success message
        // For now, let's just echo the appointment ID
        echo "Appointment booked successfully. Your Appointment ID is: $appointmentID";
    } else {
        // Handle validation failure, e.g., redirect back to the form with an error message
        echo "Error: Please fill in all required fields.";
    }
} else {
    // Redirect back to the appointment form if accessed directly
    header('Location: appointment.php');
    exit();
}
?>
