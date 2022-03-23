<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testdata</title>
<h1>testdata</h1>
</head>
<body>
    @foreach($AbTestDatas as $AbTestData)
    <div>
        {{ $AbTestData->id}} - {{ $AbTestData->ab_testname }}
    </div>
    @endforeach
</body>
</html>