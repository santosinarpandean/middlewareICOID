<html>
<head>
    <title>Create Contract</title>
</head>

<body>
    <form action="{{URL::to('/api/create-contract')}}" method="POST">
        <input type="text" name="ownerBalance" placeholder="balance owner"/><br/><br/>
        <input type="text" name="tokenTotalSupply" placeholder="total supply token"/><br/><br/>
        <input type="text" name="tokenName" placeholder="token name"/><br/><br/>
        <input type="text" name="tokenDecimals" placeholder="token decimals"/><br/><br/>
        <input type="text" name="tokenSymbol" placeholder="token symbol"/><br/><br/>
        <input type="submit" value="create token"/>
    </form>
</body>
</html>
