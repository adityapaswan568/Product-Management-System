<?php
session_start();
include("Connect.php");

// Validate command selector
$cs = isset($_REQUEST["cs"]) ? intval($_REQUEST["cs"]) : 0;

switch($cs){
    case 1: // Insert Data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pid = isset($_POST["pid"]) ? intval($_POST["pid"]) : 0;
            $pnm = isset($_POST["pnm"]) ? $_POST["pnm"] : '';
            $price = isset($_POST["price"]) ? intval($_POST["price"]) : 0;
            $qty = isset($_POST["qty"]) ? intval($_POST["qty"]) : 0;

            if ($pid && $pnm) {
                $stmt = $con->prepare("INSERT INTO product (Product_id, Product_nm, Product_Price, Product_QTY) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("isii", $pid, $pnm, $price, $qty);
                
                if ($stmt->execute()) {
                    header("Location:Show.php");
                    exit();
                } else {
                    echo "Error inserting record: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Invalid input data.";
            }
        }
        break;

    case 2: // Delete Data
        $pid = isset($_REQUEST["id"]) ? intval($_REQUEST["id"]) : 0;
        if ($pid) {
            $stmt = $con->prepare("DELETE FROM Product WHERE Product_id = ?");
            $stmt->bind_param("i", $pid);
            
            if ($stmt->execute()) {
                header("Location:Show.php");
                exit();
            } else {
                echo "Error deleting record: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Invalid Product ID.";
        }
        break;

    case 3: // Update Data
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pid = isset($_POST["pid"]) ? intval($_POST["pid"]) : 0;
            $pnm = isset($_POST["pnm"]) ? $_POST["pnm"] : '';
            $price = isset($_POST["price"]) ? intval($_POST["price"]) : 0;
            $qty = isset($_POST["qty"]) ? intval($_POST["qty"]) : 0;

            if ($pid) {
                $stmt = $con->prepare("UPDATE Product SET Product_nm=?, Product_Price=?, Product_QTY=? WHERE Product_id=?");
                $stmt->bind_param("siii", $pnm, $price, $qty, $pid); // Note param order
                
                if ($stmt->execute()) {
                    header("Location:Show.php");
                    exit();
                } else {
                    echo "Error updating record: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "Invalid Product ID.";
            }
        }
        break;

    case 4: // Login
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $unm = isset($_POST["unm"]) ? $_POST["unm"] : '';
            $pass = isset($_POST["pass"]) ? $_POST["pass"] : '';

            $stmt = $con->prepare("SELECT Username FROM Logins WHERE Username=? AND Password=?");
            $stmt->bind_param("ss", $unm, $pass);
            $stmt->execute();
            $stmt->store_result();

            if($stmt->num_rows == 1){
                $_SESSION["usr"] = $unm;
                header("Location:Dashboard.php");
                exit();
            } else {
                echo "<h2>Username or Password incorrect</h2>";
                echo "<a href='Login.php'>Try Again</a>";
            }
            $stmt->close();
        }
        break;

    case 5: // Logout 
        $_SESSION["usr"] = "";
        session_destroy();
        header("Location:Login.php");
        exit();
        break;
        
    default:
        echo "Invalid Action";
}
?>