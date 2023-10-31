<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Customers;
use App\Models\ProductsOrders;
use App\Models\Orders;
use App\Models\WebsiteSlider;
use Jackiedo\Cart\Facades\Cart;
use Illuminate\Http\RedirectResponse;


class WebsiteController extends Controller
{
    public function home () {
        $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();
        $sliders = WebsiteSlider::all();
        $homeproducts = Products::inRandomOrder()->limit(8)->get();;
        return view ('index')->with([
            'items' => $items,
            'items_count' => $count,
            'total' => $total,
            'sliders'=> $sliders,
            'homeproducts'=> $homeproducts,
        ]);
    }

    public function shop () {
        $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();

        $products = Products::all();
        //dd($products);
        return view ('shop')->with([

            'items' => $items,
            'products' => $products,
            'items_count' => $count,
            'total' => $total,

        ]);
    }

    public function details (Request $request) {
        $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();
        $product_id = $request->id;
        $product = Products::find($product_id);

        return view ('detail')->with([
            'items' => $items,
            'items_count' => $count,
            'total' => $total,
            'product' => $product,
        ]);
    }

    public function addToCart (Request $request){
      //  dd($request->id);

        $product_id = $request->id;
        $product = Products::find($product_id);

        $shoppingCart   = Cart::name('shopping');
        $recentlyViewed = Cart::newInstance('recently_viewed')->useForCommercial(false);

        $shoppingCart->addItem([

            'id'=> $product->id,
            'title'=> $product->name,
            'quantity'=> $request->quantity,
            'price'=> $product->price,

        ]);
        return redirect ('shop');
    }

    public function cart () {
        $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();

        return view ('cart')->with([
            'items' => $items,
            'items_count' => $count,
            'total' => $total,


        ]);

    }


    public function contact () {
        $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();
        return view ('contact')->with([
            'items' => $items,
            'items_count' => $count,
            'total' => $total,

        ]);
    }

    public function about () {
        $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();

        return view ('about')->with([
            'items' => $items,
            'items_count' => $count,
            'total' => $total,

        ]);
    }


public function emptyCard(){

    $cart = Cart::name('shopping');
    $cart->clearItems();
    return redirect()->back();

}

public function checkout(){
    $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();

        return view ('checkout')->with([
            'items' => $items,
            'items_count' => $count,
            'total' => $total,
        ]);

}

public function placeOrder(Request $request){
    //dd($request->toArray());
    $items = Cart::name('shopping')->getItems();
    $count = Cart::name('shopping')->countItems();
    $total = Cart::name('shopping')->getItemsSubtotal();

    $customers = new Customers;

        $customers->first_name = $request->first_name;
        $customers->last_name = $request->last_name;
        $customers->address = $request->address;
        $customers->city = $request->city;
        $customers->country = $request->country;
        $customers->postcode = $request->postcode;
        $customers->email = $request->email;
        $customers->phone = $request->phone;
        $customers->notes = $request->notes;

        $customers->save();
        $customer_id = $customers->id;


        $orders = new Orders;
        $orders->customer_id = $customer_id;
        $orders->total = $total;
        $orders->status = 'pending';
        $orders->save();
        $order_id = $orders->id;

        foreach ($items as $hash => $item) {
            $products_orders = new ProductsOrders;
            $products_orders->order_id = $order_id;
            $products_orders->product_id = $item->getId();
            $products_orders->quantity = $item->getQuantity();
            $products_orders->price = $item->getPrice();
            $products_orders->subtotal = $item->getQuantity() * $item->getPrice();

            $products_orders->save();
        }

        $cart = Cart::name('shopping');
        $cart->clearItems();
        return redirect('shop');

        //return redirect()->back();

      //  return redirect ('/admin/products');
    }

    public function updateCart(Request $request){
        $cart = Cart::name('shopping');
        $items = Cart::name('shopping')->getItems();
        $count = Cart::name('shopping')->countItems();
        $total = Cart::name('shopping')->getItemsSubtotal();
        $itemHash = Cart::name('shopping')->getDetails();


        $cart->updateItem($itemHash, [
            'quantity'=> $request->quantity,
        ]);

        return redirect()->back();
    }

}
