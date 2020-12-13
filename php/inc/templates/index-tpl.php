<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Convertisseur de devises</title>
</head>
<body>
    <header>
        <h1>Convertisseur de devises</h1>
    </header>

    <main>
        <form method="post" action="./index.php">
        
            <input class="form_value-to-convert form_input" name="value1" type="number" value="<?=$valueToConvert?>"></input>
            <select class="form_currency-to-convert form_select" name="currency1">
                <option value='<?=$currentCurrency?>'><?=$currencies[$currentCurrency]['name']?></option>
                <?php foreach ($currencies as $currency => $datas) {
                    if ($currency != $currentCurrency) { ?>
                <option value=<?=$currency?>><?=$datas['name']?></option>
                <?php }
                } ?>
            </select>
            
            <div class="form_equal"> = </div>
            
            <input class="form_converted-value form_input" name="value2" type="number" value="<?=$valueConverted?>" disabled></input>
            <select class="form_converted-currency form_select" name="currency2">
                <option value='<?=$currencyToConvert?>'><?=$currencies[$currencyToConvert]['name']?></option>
                <?php foreach ($currencies as $currency => $datas) { 
                    if ($currency != $currencyToConvert) { ?>
                <option value=<?=$currency?>><?=$datas['name']?></option>
                <?php }
                } ?>
            </select>
            
            <button>Convertir</button>
        
        </form>
    </main>
</body>
</html>