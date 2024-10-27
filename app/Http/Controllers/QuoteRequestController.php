<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use App\Http\Requests\StoreQuoteRequestRequest;
use App\Http\Requests\UpdateQuoteRequestRequest;
use App\Mail\SendUserQuotationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use inertia\inertia;

class QuoteRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia::render('Auth/QuoteRequests',[
            'quotes' => QuoteRequest::orderBy('id', 'desc')->get(),
            'companyName' => env('APP_NAME')
        ]);
    }

    public function sentRequest(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|numeric',
            'service' => 'required|string',
            'message' => 'required|string|max:5000',
        ]);

        $validatedData['read'] = false;

        QuoteRequest::create($validatedData); // Uses mass assignment
    }
    public function returnAlert()
    {
        return inertia::render('Alert',[
            'message' => "We've received your message. One of our engineers will contact you shortly to discuss your solar solution",
        ]);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function updateReadStatus(Request $request, $id)
    {

        $quoteRequest = QuoteRequest::findOrFail($id);
        $quoteRequest->read = $request->read;
        $quoteRequest->save();

        return response()->json([
            'message' => 'Quote has been replied'
        ], 200);

    }



    public function sendQuotation(Request $request)
    {
        $details = [
            'name' => $request->name,
            'cost' => $request->cost,
            'deliveryDate' => $request->deliveryDate,
            'email' => $request->email,
            'service' => $request->service,
            'telephone' => $request->telephone,
            'message' => $request->message,
            'companyName' => env('APP_NAME'),
            'clossingMessage'=>$request->clossingMessage,
            'headMessage'=>$request->headMessage,
            'subject' => $request->subject,

        ];
//return $details;
        Mail::to($request->email)->send(new SendUserQuotationMail($details));

        return back()->with('success', 'Quotation email sent successfully!');
    }





    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuoteRequestRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(QuoteRequest $quoteRequest)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(QuoteRequest $quoteRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuoteRequestRequest $request, QuoteRequest $quoteRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(QuoteRequest $quoteRequest)
    {
        //
    }
}
