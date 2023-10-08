<?php

use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/category');
});

Route::get('/category', function () {
    $products = Product::all();
    return view('ecommerce/category', ['products' => $products]);
});

Route::get('/product/{product}', function (Product $product) {
    return view('ecommerce/product', ['product' => $product]);
})->name('ecommerce.product');

Route::post('/basket', function (Request $request) {
    $formData = $request->validate([
        'productId' => 'required|exists:products,id',
    ]);

    if (! session()->exists('basket')) {
        session()->put('basket', []);
    }

    $basket = session()->get('basket');

    if (isset($basket[$formData['productId']])) {
        $basket[$formData['productId']] += 1;
    } else {
        $basket[$formData['productId']] = 1;
    }

    session()->put('basket', $basket);

    return redirect(route('ecommerce.basket'));
});

Route::get('/basket', function () {
    $basket = session()->get('basket');
    $items = [];
    collect($basket)
        ->flip()
        ->each(function (int $productId, int $quantity) use (&$items) {
            $items[] = ['product' => Product::find($productId), 'quantity' => $quantity];
        });

    $total = collect($items)->sum(function ($item) {
        return $item['product']->price * $item['quantity'];
    });
    return view('ecommerce.basket', ['items' => $items, 'total' => $total]);
})->name('ecommerce.basket');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
