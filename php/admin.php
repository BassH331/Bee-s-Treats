<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            background-color: #f9f9f9;
        }
        nav {
            width: 20%;
            background-color: #333;
            color: white;
            height: 100vh;
            padding: 20px;
            box-sizing: border-box;
        }
        nav h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }
        nav a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 10px 0;
            margin: 10px 0;
            border-bottom: 1px solid #555;
        }
        nav a:hover {
            color: #ff9800;
        }
        main {
            flex: 1;
            padding: 20px;
        }
        .card {
            background: white;
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .card h2 {
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #f3f3f3;
        }
        .btn {
            padding: 8px 12px;
            color: white;
            background-color: #333;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #555;
        }
        .btn-success {
            background-color: #4CAF50;
        }
        .btn-danger {
            background-color: #f44336;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Admin Panel</h1>
        <a href="#dashboard">Dashboard</a>
        <a href="#manage-cakes">Manage Cakes</a>
        <a href="#orders">Orders</a>
        <a href="#users">Users</a>
        <a href="#settings">Settings</a>
    </nav>
    <main>
        <!-- Dashboard -->
        <div id="dashboard" class="card">
            <h2>Dashboard Overview</h2>
            <?php
            // Replace with database queries to fetch live data
            $totalOrders = 120;
            $pendingOrders = 30;
            $completedOrders = 90;
            $revenue = 5000;
            ?>
            <p>Total Orders: <strong><?php echo $totalOrders; ?></strong></p>
            <p>Pending Orders: <strong><?php echo $pendingOrders; ?></strong></p>
            <p>Completed Orders: <strong><?php echo $completedOrders; ?></strong></p>
            <p>Revenue: <strong>$<?php echo $revenue; ?></strong></p>
        </div>

        <!-- Manage Cakes -->
        <div id="manage-cakes" class="card">
            <h2>Manage Cakes</h2>
            <button class="btn">Add New Cake</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Replace with database query to fetch cake data
                    $cakes = [
                        ['id' => 1, 'name' => 'Chocolate Cake', 'price' => 25, 'category' => 'Chocolate'],
                        ['id' => 2, 'name' => 'Vanilla Cake', 'price' => 20, 'category' => 'Vanilla'],
                    ];
                    foreach ($cakes as $cake) {
                        echo "<tr>
                                <td>{$cake['id']}</td>
                                <td>{$cake['name']}</td>
                                <td>\${$cake['price']}</td>
                                <td>{$cake['category']}</td>
                                <td>
                                    <button class='btn btn-success'>Edit</button>
                                    <button class='btn btn-danger'>Delete</button>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <?php
//coode
?>echo "hell";


        <!-- Orders -->
        <div id="orders" class="card">
            <h2>Order Management</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order Number</th>
                        <th>Customer</th>
                        <th>Cake</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Replace with database query to fetch order data
                    $orders = [
                        ['order_number' => 101, 'customer' => 'Jane Doe', 'cake' => 'Vanilla Cake', 'status' => 'Pending'],
                    ];
                    foreach ($orders as $order) {
                        echo "<tr>
                                <td>{$order['order_number']}</td>
                                <td>{$order['customer']}</td>
                                <td>{$order['cake']}</td>
                                <td>{$order['status']}</td>
                                <td>
                                    <button class='btn btn-success'>Update Status</button>
                                    <button class='btn btn-danger'>Cancel</button>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
//coode
?>
    </main>
</body>
</html>

<?php
//coode
?>

