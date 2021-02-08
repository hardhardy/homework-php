<h1>Калькулятор 1</h1>
<form action="" method="post">
    <input type="text" name="arg1" value="<?= $arg1 ?>">
    <select name="operation">
        <option <?php if ($op == "sum") echo 'selected' ?> value="sum">+</option>
        <option <?php if ($op == "minus") echo 'selected' ?> value="minus">-</option>
        <option <?php if ($op == "multiply") echo 'selected' ?> value="multiply">*</option>
        <option <?php if ($op == "divide") echo 'selected' ?> value="divide">/</option>
    </select>
    <input type="text" name="arg2" value="<?= $arg2 ?>">
    <input type="submit" value="=">
    <input type="text" name="result" readonly value="<?= $result ?>">
</form>
<br>
<h1>Калькулятор 2</h1>
<form action="" method="post">
    <input type="text" name="arg3" value="<?= $arg3 ?>">
    <input type="text" name="arg4" value="<?= $arg4 ?>">
    <input type="submit" name="operation2" value="sum">
    <input type="submit" name="operation2" value="minus">
    <input type="submit" name="operation2" value="multiply">
    <input type="submit" name="operation2" value="divide">
    <input type="text" name="result" readonly value="<?= $result2 ?>">
</form>
