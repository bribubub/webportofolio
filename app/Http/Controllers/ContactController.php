<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;      
use App\Models\ContactMessage;    
use Illuminate\Support\Facades\Log; 
use Illuminate\Support\Facades\Session; 
use Illuminate\Validation\ValidationException; 

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
            
            $validatedData = $request->validate([
                'name'    => 'required|string|max:255', 
                'email'   => 'required|email|max:255',   
                'message' => 'required|string|min:10',   
            ]);

            
            ContactMessage::create($validatedData);

            
            Log::info('Contact form submitted successfully.', [
                'name' => $validatedData['name'],
                'email' => $validatedData['email']
            ]);

            
            return redirect()->back()->with('success', 'Thank you! Your message has been sent successfully.');

        } catch (ValidationException $e) {
            
            Log::warning('Contact form validation failed.', [
                'errors' => $e->errors(), 
                'input' => $request->all() 
            ]);
            
            throw $e;

        } catch (\Exception $e) {
           
            Log::error('An unexpected error occurred during contact form submission: ' . $e->getMessage(), [
                'file' => $e->getFile(),         
                'line' => $e->getLine(),        
                'trace' => $e->getTraceAsString(), 
                'input' => $request->all()      
            ]);

            return redirect()->back()->with('error', 'We could not send your message due to an internal error. Please try again later.');
        }
    }
}
