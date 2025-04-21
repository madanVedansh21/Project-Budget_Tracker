<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_budget";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget Tracker Dashboard</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body class="dashboard-body">
    <!-- Dashboard Header -->
    <header class="dashboard-header">
        <div class="container">
            <div class="logo">
                <h2>Budget<span>Tracker</span></h2>
            </div>
            <div class="user-info">
                <span>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                <a href="logout.php" class="btn btn-logout">Logout</a>
            </div>
        </div>
    </header>

    <!-- Main Dashboard Content -->
    <main class="dashboard-main">
        <div class="container">
            <!-- Summary Cards -->
            <div class="summary-cards">
                <div class="card">
                    <h3>Total Balance</h3>
                    <p class="amount">₹0.00</p>
                </div>
                <div class="card">
                    <h3>Income</h3>
                    <p class="amount income">₹0.00</p>
                </div>
                <div class="card">
                    <h3>Expenses</h3>
                    <p class="amount expense">₹0.00</p>
                </div>
            </div>

            <!-- Transaction Form -->
            <div class="transaction-section">
                <h2>Add New Transaction</h2>
                <form id="transaction-form" class="transaction-form">
                    <div class="form-group">
                        <input type="text" id="description" name="description" placeholder="Description" required>
                    </div>
                    <div class="form-group">
                        <input type="number" id="amount" name="amount" placeholder="Amount" required>
                    </div>
                    <div class="form-group">
                        <select id="type" name="type" required>
                            <option value="">Select Type</option>
                            <option value="income">Income</option>
                            <option value="expense">Expense</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select id="category" name="category" required>
                            <option value="">Select Category</option>
                            <option value="salary">Salary</option>
                            <option value="food">Food</option>
                            <option value="transportation">Transportation</option>
                            <option value="utilities">Utilities</option>
                            <option value="entertainment">Entertainment</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Transaction</button>
                </form>
            </div>

            <!-- Transaction History -->
            <div class="transaction-history">
                <h2>Recent Transactions</h2>
                <div class="transaction-list">
                    <!-- Transactions will be loaded here dynamically -->
                    <p class="no-transactions">No transactions found.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Add this CSS to your styles.css file -->
    <style>
        .dashboard-body {
            background-color: #f5f5f5;
        }

        .dashboard-header {
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1rem 0;
        }

        .dashboard-header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .summary-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .card {
            background: #fff;
            padding: 1.5rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .transaction-section {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            margin-bottom: 2rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .transaction-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        .transaction-history {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .btn-logout {
            background-color: #ff4444;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-logout:hover {
            background-color: #cc0000;
        }

        .amount {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .income {
            color: #28a745;
        }

        .expense {
            color: #dc3545;
        }
    </style>

    <script>
        // Add your JavaScript code here for handling transactions
        document.getElementById('transaction-form').addEventListener('submit', function (e) {
            e.preventDefault();
            // Add your transaction handling logic here
        });
    </script>
</body>

</html>