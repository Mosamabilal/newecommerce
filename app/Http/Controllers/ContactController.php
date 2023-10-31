<?php

namespace App\Http\Controllers;

use Jackiedo\Cart\Facades\Cart;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    public function index()
    {
        $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();

        return view('contact')->with([
            'items' => $items,
            'items_count' => $count,
            'total' => $total,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10|numeric',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()
                         ->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
