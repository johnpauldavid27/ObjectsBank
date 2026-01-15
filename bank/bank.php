<!-- 
David, John Paul S.
WD-201
January 15, 2026
 -->
<?php
//required class definitions
include 'classes/Account.php';
include 'classes/Customer.php';

/* indexed array of Account objects */
$accounts = [
    new Account("20182627", "Checking", -30),
    new Account("20198765", "Savings", 11750),
    new Account("20203003", "Payroll", 5500),
    new Account("20215161", "Investment", -3000)
];

//customer object
$customer = new Customer("John Paul", "David", $accounts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Merc Bank</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>
    <img src="img/logo1.png" alt="Bank Logo">
</header>
<section>
    <!-- customer's full name -->
    <h2>
        NAME: 
        <span class="important">
            <?php echo $customer->getFullName(); ?>
        </span>
    </h2>

    <table>
        <tr>
            <th>Account Number</th>
            <th>Account Type</th>
            <th>Balance</th>
        </tr>

        <?php
        /* foreach loop goes through the array stored in the $accounts property of the Customer object */
        foreach ($customer->accounts as $account) {
            echo "<tr>";

            //displays account number and type
            echo "<td>{$account->accountNumber}</td>";
            echo "<td>{$account->accountType}</td>";

            /*
            check if balance is zero or greater
            use class 'credit' if balance is positive
            use class 'overdrawn' if balance is negative
            displays the balance
            */
            if ($account->balance >= 0) {
                echo "<td class='credit'>₱ " . number_format($account->balance, 2) . "</td>";
            } else {
                echo "<td class='overdrawn'>₱ " . number_format($account->balance, 2) . "</td>";
            }

            echo "</tr>";
        }
        ?>
    </table>
</section>

</body>
</html>
