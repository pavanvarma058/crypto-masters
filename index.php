<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crypto Masters</title>
</head>
<body>
    <h1>Crypto Masters</h1>

    <form action="convert.php" method="post">
        <label for="amount">Amount</label>
        <input id="amount" name="amount">
        <label for="crypto">CryptoCurrency</label>
        <select id="crypto" name="crypto">
            <option>BTC</option>
            <option>ETH</option>
        </select>
        <button type="submit">Convert</button>
    </form>
</body>
</html>