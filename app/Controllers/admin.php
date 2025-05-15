<?php

namespace App\Controllers;

use App\Models\MejaModel; // pastikan ada di bagian atas file controller
use App\Models\MenusModel;
use App\Models\CategoryModel; // Tambahkan di atas class jika belum ada
use App\Models\PengeluaranModel;
use App\Models\UserModel;

class Admin extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'dasboard | cafe Shop'

        ];


        return view('admin/dasboard', $data);
    }

    // Admin


    public function category()
    {
        $model = new CategoryModel(); // Panggil model
        $data = [
            'title' => 'dashboard | cafe Shop',
            'categories' => $model->findAll() // Ambil semua data kategori dari tabel
        ];

        return view('admin/category', $data); // Kirim data ke view
    }

    public function TambahCategory()
    {
        $model = new CategoryModel();

        $data = [
            'name' => $this->request->getPost('name')
        ];

        $model->insert($data);

        return redirect()->to('/category')->with('success', 'Kategori berhasil ditambahkan.');
    }


    public function deleteCategory($id)
    {
        $model = new CategoryModel();

        // Pastikan data ada
        $category = $model->find($id);
        if (!$category) {
            return redirect()->to('/category')->with('error', 'Kategori tidak ditemukan.');
        }

        $model->delete($id);

        return redirect()->to('/category')->with('success', 'Kategori berhasil dihapus.');
    }



    //controler meja

    public function meja()
    {
        $mejaModel = new MejaModel(); // panggil model
        $data = [
            'title' => 'Meja | Cafe Shop',
            'meja'  => $mejaModel->findAll() // ambil semua data meja
        ];

        return view('admin/meja', $data);
    }
    public function simpan()
    {
        $mejaModel = new \App\Models\MejaModel();

        $tableNumber = $this->request->getPost('table_number');

        $mejaModel->insert([
            'table_number' => $tableNumber,
            'status' => 'available', // default
        ]);

        return redirect()->to('/meja')->with('success', 'Meja berhasil ditambahkan');
    }

    public function hapusMeja($id)
    {
        // Load model
        $mejaModel = new \App\Models\MejaModel();

        // Cek apakah meja dengan ID tersebut ada
        $meja = $mejaModel->find($id);

        if (!$meja) {
            return redirect()->to('/admin/meja')->with('error', 'Data meja tidak ditemukan.');
        }

        // Hapus meja
        $mejaModel->delete($id);

        // Redirect kembali dengan pesan sukses
        return redirect()->to('/meja')->with('success', 'Data meja berhasil dihapus.');
    }

    //controler meja end




    //controler menu 
    public function menu()
    {
        $menuModel = new MenusModel();
        $categoryModel = new CategoryModel(); // Pastikan model ini ada

        $selectedCategory = $this->request->getGet('category_id');

        // Ambil data menu berdasarkan kategori (jika difilter)
        if (!empty($selectedCategory)) {
            $menus = $menuModel->where('category_id', $selectedCategory)->findAll();
        } else {
            $menus = $menuModel->findAll();
        }

        $data = [
            'title' => 'Menu | Cafe Shop',
            'menus' => $menus,
            'categories' => $categoryModel->findAll(),
            'selectedCategory' => $selectedCategory,
        ];

        return view('admin/menu', $data);
    }

    public function saveMenu()
    {
        $menuModel = new MenusModel();

        $gambar = $this->request->getFile('photo');

        if ($gambar && $gambar->isValid() && !$gambar->hasMoved()) {
            $namaGambar = $gambar->getRandomName();
            $gambar->move('uploads/menu', $namaGambar);
        } else {
            $namaGambar = null; // atau bisa beri default image
        }

        $menuModel->save([
            'name'         => $this->request->getPost('name'),
            'category_id'  => $this->request->getPost('category_id'),
            'description'  => $this->request->getPost('description'),
            'price'        => $this->request->getPost('price'),
            'photo'        => $namaGambar
        ]);

        return redirect()->to('/menu')->with('success', 'Menu berhasil ditambahkan');
    }

    public function delete($id)
    {
        $model = new MenusModel();

        // Cek apakah data ada
        $menu = $model->find($id);
        if ($menu) {
            $model->delete($id);
            return redirect()->to('/menu')->with('success', 'Data berhasil dihapus.');
        } else {
            return redirect()->to('/menu')->with('error', 'Data tidak ditemukan.');
        }
    }

    public function edit($id)
    {
        $model = new MenusModel();
        $data['menu'] = $model->find($id);

        if (!$data['menu']) {
            return redirect()->to('/admin/menu')->with('error', 'Data tidak ditemukan.');
        }

        return view('admin/edit_menu', $data);
    }


    //controler menu end




    public function pesanan()
    {
        $db = \Config\Database::connect();

        // Using Query Builder to avoid raw SQL
        $builder = $db->table('orders o');
        $builder->select('o.id, o.meja_id, o.customer_name, GROUP_CONCAT(m.name SEPARATOR ", ") AS menu, SUM(m.price * oi.quantity) AS total');
        $builder->join('order_items oi', 'o.id = oi.order_id');
        $builder->join('menus m', 'm.id = oi.menu_id');
        $builder->groupBy('o.id, o.meja_id, o.customer_name');

        // Execute the query
        $query = $builder->get();

        $data = [
            'title' => 'Pesanan | Cafe Shop',
            'orders' => $query->getResultArray()
        ];

        return view('admin/pesanan', $data);
    }



    public function pemasukan()
    {
        $data = [
            'title' => 'pemasukan | cafe Shop'

        ];


        return view('admin/pemasukan', $data);
    }
    // pengeluaran 
    public function pengeluaran()
    {
        $model = new PengeluaranModel();
        $data = [
            'title' => 'Pengeluaran',
            'pengeluaran' => $model->orderBy('tanggal', 'DESC')->findAll()
        ];

        return view('admin/pengeluaran', $data);
    }

    public function simpanPengeluaran()
    {
        $model = new PengeluaranModel();

        $model->save([
            'nama_barang' => $this->request->getPost('nama_barang'),
            'jumlah'      => $this->request->getPost('jumlah'),
            'harga'       => $this->request->getPost('harga'),
            'tanggal'     => $this->request->getPost('tanggal')
        ]);

        return redirect()->to('/pengeluaran');
    }

    //pengeluaran end

    public function kariawan()
    {
        $userModel = new UserModel();

        $data = [
            'title' => 'Karyawan | Cafe Shop',
            'users' => $userModel->findAll()
        ];

        return view('admin/kariawan', $data);
    }
}
