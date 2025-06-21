<?php

namespace App\Http\Controllers; // IMPORTANT: This namespace must match your file path (app/Http/Controllers)

use Illuminate\Http\Request;      // For handling incoming HTTP requests
use App\Models\ContactMessage;    // Import the ContactMessage Model to interact with the 'inbox' table
use Illuminate\Support\Facades\Log; // For writing messages to Laravel's log files
use Illuminate\Support\Facades\Session; // To manage temporary session data (like success/error messages)
use Illuminate\Validation\ValidationException; // Specific exception for validation failures

class ContactController extends Controller
{
    /**
     * Handle the submission of the contact form.
     *
     * @param  \Illuminate\Http\Request  $request The incoming HTTP request containing form data.
     * @return \Illuminate\Http\RedirectResponse Redirects back to the form with a status message.
     */
    public function submitForm(Request $request)
    {
        try {
            // --- 1. Data Validation ---
            // Validate the incoming request data based on predefined rules.
            // If validation fails, Laravel automatically redirects back to the previous page,
            // flashing errors and old input, which the Blade template (contact.blade.php) handles.
            $validatedData = $request->validate([
                'name'    => 'required|string|max:255', // 'name' field is required, must be a string, max 255 characters.
                'email'   => 'required|email|max:255',   // 'email' field is required, must be a valid email format, max 255 characters.
                'message' => 'required|string|min:10',   // 'message' field is required, must be a string, minimum 10 characters.
            ]);

            // --- 2. Save Data to Database ---
            // Create a new record in the 'inbox' table.
            // The `ContactMessage::create()` method works because the 'name', 'email', and 'message'
            // fields are listed in the `$fillable` property of the `ContactMessage` Model.
            ContactMessage::create($validatedData);

            // --- 3. Logging Success (Optional but Recommended) ---
            // Record a success message in Laravel's log file (storage/logs/laravel.log).
            // This is useful for monitoring form submissions and debugging.
            Log::info('Contact form submitted successfully.', [
                'name' => $validatedData['name'],
                'email' => $validatedData['email']
            ]);

            // --- 4. Redirect with Success Message ---
            // Redirect the user back to the contact form page.
            // `with('success', ...)` flashes a temporary success message to the session,
            // which can be displayed in the Blade template.
            return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');

        } catch (ValidationException $e) {
            // --- Handle Specific Validation Errors ---
            // This block catches exceptions specifically thrown by the validation process.
            // While Laravel's default behavior often suffices, explicitly catching allows
            // for custom logging of validation failures if needed.
            Log::warning('Contact form validation failed.', [
                'errors' => $e->errors(), // Get the validation errors.
                'input' => $request->all() // Log the input that caused the failure.
            ]);
            // Re-throw the exception. This is crucial so Laravel's default error handling
            // (redirecting with validation errors back to the form) can still occur.
            throw $e;

        } catch (\Exception $e) {
            // --- 5. Handle General Unexpected Errors ---
            // This block catches any other unexpected exceptions (e.g., database connection issues,
            // problems with the Model, etc.) that might occur during the process.
            Log::error('An unexpected error occurred during contact form submission: ' . $e->getMessage(), [
                'file' => $e->getFile(),         // The file where the error occurred.
                'line' => $e->getLine(),         // The line number of the error.
                'trace' => $e->getTraceAsString(), // Full stack trace for in-depth debugging.
                'input' => $request->all()       // The original form input.
            ]);

            // Redirect back to the form with a generic error message.
            return redirect()->back()->with('error', 'We could not send your message due to an internal error. Please try again later.');
        }
    }
}
