<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collapsible Sidebar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            display: flex;
        }

        /* Sidebar styling */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            background-color: #343a40;
            color: #fff;
            transition: transform 0.3s ease;
            z-index: 1000;
        }

        .sidebar.hidden {
            transform: translateX(-250px);
        }

        .sidebar a {
            text-decoration: none;
            color: #adb5bd;
            display: block;
            padding: 15px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }

        .sidebar .active {
            background-color: #0d6efd;
            color: #fff;
        }

        .sidebar .user-profile {
            position: absolute;
            bottom: 0;
            width: 100%;
            padding: 15px;
            background-color: #212529;
            display: flex;
            align-items: center;
        }

        .sidebar .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
            transition: margin-left 0.3s ease;
        }

        .content.expanded {
            margin-left: 0;
        }

        .toggle-btn {
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1100;
            background-color: #343a40;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* dasboard css */
        .card {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            margin: 10px;
            width: 30%;
            display: inline-block;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stats {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .recent-activities ul {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            list-style-type: none;
        }

        .recent-activities ul li {
            padding: 10px;
            border-bottom: 1px solid #dee2e6;
        }

        .recent-activities ul li:last-child {
            border-bottom: none;
        }
    </style>
</head>

<body>


    <!-- Toggle Button -->
    <button class="toggle-btn justify-content-end" onclick="toggleSidebar()">
        <i class="bi bi-list"></i>
    </button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="d-flex align-items-center p-3">
            <h5 class="m-0">Sidebar</h5>
        </div>
        <a href="/admin">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
        <a href="/category">
            <i class="bi bi-archive-fill"></i> category
        </a>
        <a href="/meja">
            <i class="bi bi-table"></i> meja
        </a>
        <a href="/menu">
            <i class="bi bi-table"></i> menu
        </a>
        <a href="/pesanan">
            <i class="bi bi-basket"></i> pesanan
        </a>
        <a href="/pemasukan">
            <i class="bi bi-sort-down"></i> pemasukan
        </a>
        <a href="/pengeluaran">
            <i class="bi bi-sort-up"></i> pengeluaran
        </a>
        <a href="/kariawan">
            <i class="bi bi-people"></i> kariawan
        </a>
        <div class="user-profile">
            <div class="dropdown ms-auto text-black-50">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://via.placeholder.com/40" alt="User Profile" class="rounded-circle me-2" width="30" height="30">
                    <span>Admin</span>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="/profile">My Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content" id="content">
        <?= $this->renderSection('content'); ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('hidden');
            content.classList.toggle('expanded');
        }
    </script>
    <script>
        function showEditModal(id, name) {
            // Set form action dynamically
            const form = document.getElementById('editForm');
            form.action = `/admin/updateCategory/${id}`;

            // Fill the input with current category name
            document.getElementById('editName').value = name;

            // Show the modal
            const editModal = new bootstrap.Modal(document.getElementById('editModal'));
            editModal.show();
        }
    </script>
</body>

</html>