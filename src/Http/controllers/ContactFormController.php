<?php
// jiten\Contactform\src\Http\Controllers\ContactFormController.php
namespace jiten\Contactform\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use jiten\Contactform\Models\ContactForm;

class ContactFormController extends Controller {

	public function index()
	{
	   return view('contactform::contact');
	}

	public function sendMail(Request $request)
    {
        ContactForm::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }

}
?>