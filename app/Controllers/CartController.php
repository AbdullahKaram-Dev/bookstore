<?php

namespace App\Controllers;

use App\Models\Book;
use App\Models\Order;
use App\Models\OrderItems;
use Core\Request;
use Core\Session;
use Core\View;

class CartController
{

    public function index()
    {
        $cart = $_SESSION['cart'];

        if (!empty($cart)) {

            $book_Ids = array_keys($cart);
            $data['books'] = Book::connectTable()
                ->select('id,name,price,img')
                ->whereIn('id', $book_Ids)
                ->get();
        } else {
            $data['books'] = [];
        }

        View::load('web/cart/index', $data);

    }

    public function add($id)
    {
        $session = new Session;
        $_SESSION['cart'][$id] = 1;
        $request = new Request;
        $request->back();
    }

    public function store()
    {
        $session = new Session;
        $request = new Request;
        extract($_POST);
        $cart = $_SESSION['cart'];
        $user_id = $session->get('logged_user')['id'];


        if (!empty($cart)) {

            $order_id = Order::connectTable()
                ->insert([
                    'user_id' => $user_id
                ])->saveAndGetId();

            foreach ($ids as $key => $book_id) {

                OrderItems::connectTable()
                    ->insert([
                        'order_id' => $order_id,
                        'book_id' => $book_id,
                        'quantity' => $quantities[$key],
                    ])->save();
            }

        }

        $_SESSION['cart'] = [];
        $request->redirect('');
    }

    public function emptyCart()
    {
        $request = new Request;
        $_SESSION['cart'] = [];
        $request->back();
    }

    public function removeBook($id)
    {
        $session = new Session;
        $request = new Request;
        $session->removeKeySession('cart', $id);
        $request->back();
    }
}

