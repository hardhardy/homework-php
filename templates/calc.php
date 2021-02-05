<h1>Калькулятор</h1>

<form action="" method="post" >
    <input type="text" name="arg1" value="<?= $arg1 ?>">
    <select name="operation">
        <option value="sum" <?php if ($op == "sum") echo 'selected'?>>+</option>
        <option value="minus" <?php if ($op == "minus") echo 'selected'?>>-</option>
        <option value="multiply" <?php if ($op == "multiply") echo 'selected'?>>*</option>
        <option value="divide" <?php if ($op == "divide") echo 'selected'?>>/</option>
    </select>
    <input type="text" name="arg2" value="<?= $arg2 ?>">
    <input type="submit" value="=">
    <input type="text" name="result" readonly value="<?= $result ?>">
</form>
<?= var_dump($arg1) ?> <?= var_dump($arg2) ?> <?= var_dump($result) ?>