<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Praktikum</title>
</head>
<body>
    <form>
    <tr>
        <td>Angka 1</td>
        <td>:</td>
        <td><input type ="number" name="a"></td>
        <td colspan="2">&nbsp;</td>
        <td>
        <select name="operator">
        <option <?php echo @$_GET['operator'] === '+' ? 'selected' : '' ?> value="+">+</option>
        <option <?php echo @$_GET['operator'] === '-' ? 'selected' : '' ?> value="-">-</option>
        <option <?php echo @$_GET['operator'] === '*' ? 'selected' : '' ?> value="*">x</option>
        <option <?php echo @$_GET['operator'] === '/' ? 'selected' : '' ?> value="/">:</option>
        <option <?php echo @$_GET['operator'] === '%' ? 'selected' : '' ?> value="%">%</option>
        </select>
        </td>
        <td>Angka 2</td>
        <td>:</td>
        <td><input type ="number" name="b"></td>
        <td colspan="2">&nbsp;</td>
        <td><input type="submit" name="oke" value="Hitung">
    </tr>
    </form>
    <?php
if ($_GET):
    $a = (double) @$_GET['a'];
    $b = (double) @$_GET['b'];
    $operator = @$_GET['operator'];
    
    switch ($operator) {
        case '+':
            $hasil = $a + $b;
            break;
        case '-':
            $hasil = $a - $b;
            break;
        case '*':
            $hasil = $a * $b;
            break;
        case '/':
            $hasil = $a / $b;
            break;
        case '%':
            $hasil = $a % $b;
            break;
    }
    ?>
    <div style="margin-top: 1rem">
    <b>Hasil perhitungan:</b><strong><?php echo $hasil ?></strong>
    </div>
    <?php
endif; ?>
</body>
</html>