<?php

namespace App\Controllers;

use App\Models\MenusModel;
use App\Models\CategoryModel;
use App\Models\OrderModel;
use App\Models\OrderItemModel;


class pages extends BaseController
{
    public function index()
    {
        $menusModel = new MenusModel();
        $categoryModel = new CategoryModel();

        // Ambil semua kategori dari tabel 'categories'
        $categories = $categoryModel->findAll();

        // Ambil kategori yang dipilih dari parameter GET
        $categoryId = $this->request->getGet('category_id');

        // Jika ada kategori dipilih, filter menu berdasarkan category_id
        $menus = ($categoryId)
            ? $menusModel->where('category_id', $categoryId)->findAll()
            : $menusModel->findAll();

        // Kirim data ke view
        return view('pages/home', [
            'title'            => 'Menu | Cafe Shop',
            'menus'            => $menus,
            'categories'       => $categories,
            'selectedCategory' => $categoryId
        ]);
    }
    public function tambah()
    {
        $session = session();
        $cart = $session->get('cart') ?? [];

        $id = $this->request->getPost('id');
        $product = $this->request->getPost('nama');
        $price = $this->request->getPost('harga');

        // Cari apakah produk sudah ada di cart
        $found = false;
        foreach ($cart as &$item) {
            if ($item['product'] === $product) {
                $item['quantity'] += 1;
                $found = true;
                break;
            }
        }
        unset($item); // break reference

        if (!$found) {
            $cart[] = [
                'product' => $product,
                'price' => (int)$price,
                'quantity' => 1
            ];
        }

        $session->set('cart', $cart);
        return redirect()->to('/keranjang')->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    public function hapus($index)
    {
        $session = session();
        $cart = $session->get('cart');

        if (isset($cart[$index])) {
            unset($cart[$index]);
            $session->set('cart', array_values($cart)); // Reset index array
        }

        return redirect()->to('/keranjang');
    }
    public function keranjang()
    {
        $session = session();

        $data = [
            'title' => 'Pesanan | Cafe Shop',
            'cartItems' => $session->get('cart') ?? [] // Ambil isi keranjang
        ];

        return view('pages/keranjang', $data);
    }
}
