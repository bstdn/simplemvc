<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>simple mvc</title>
</head>
<body>

<h1>simple mvc</h1>

<div>
    <?php if($list): ?>
        <?php foreach($list as $v): ?>
            <p>id: <?php echo $v['id'];?>, name: <?php echo $v['name']?>, email: <?php echo $v['email']?></p>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

</body>
</html>