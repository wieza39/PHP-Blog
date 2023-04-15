<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>

<body>
    <main>
        <form action="" method="post">
            <table>
                <tr>
                    <td colspan="2">Pierwsza liczba: </td>
                    <td colspan="2"><input name="liczba1"></td>
                </tr>
                <tr>
                    <td colspan="2">Druga liczba: </td>
                    <td colspan="2"><input name="liczba2"></td>
                </tr>
                <tr>
                    <td><input type="submit" style="width:100%" name="dzialanie" value="+"></td>
                    <td><input type="submit" style="width:100%" name="dzialanie" value="-"></td>
                    <td><input type="submit" style="width:100%" name="dzialanie" value="*"></td>
                    <td><input type="submit" style="width:100%" name="dzialanie" value="/"></td>
                </tr>
                <tr>
                    <td colspan="4">Wynik: <?php
                        $liczba1 = $_POST['liczba1'];
                        $liczba2 = $_POST['liczba2'];
                        if (is_numeric($_POST['liczba1']) && is_numeric($_POST['liczba2'])) {
                            switch ($_POST['dzialanie']) {
                                case "+":
                                    echo $liczba1 + $liczba2;
                                    break;
                                case "-":
                                    echo $liczba1 - $liczba2;
                                    break;
                                case "*":
                                    echo $liczba1 * $liczba2;
                                    break;
                                case "/":
                                    echo $liczba1 / $liczba2;
                                    break;
                                default:
                                    echo "";
                            }
                        } else {
                            echo "Nie wprowadzono liczb!";
                        } ?></td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>