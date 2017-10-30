<html>
<head>
    <title>Feature Contract</title>
</head>

<body>
<form action="{{URL::to('/api/feature-contract')}}" method="POST">
    <input placeholder="contract_address" name="contract_address"  type="text"/>
    <textarea placeholder="ABI Contract" rows="20" class="form-control" name="abi"></textarea>
    <input type="submit" value="Check Balance Token"/>
</form>
</body>
</html>
