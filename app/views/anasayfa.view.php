<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/a.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">






    <div class="row">

session ismi <?=(new session)->get("ad")?>
        <div class="col-sm-4">
<?=$ses?>
              <pre>

                    <?=print_r($data)?>
                </pre>
            <?=$deneme?>

            <h1><?=$ad?></h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi doloremque ducimus eum fugiat praesentium. Accusamus autem deleniti dignissimos est explicabo necessitatibus nihil similique tempore voluptas voluptates? Dolores inventore quisquam reprehenderit!</div>
        <div class="col-sm-4"><h1><?=$deger?></h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam deleniti officiis quis voluptatibus! Amet aut illum in iste libero porro, repudiandae unde? Commodi eius eum natus officiis reprehenderit similique sit.</div>
        <div class="col-sm-4"><img class="img-responsive" class="responsive-img" src="public/img/mona_lisa.jpg" alt="">
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi commodi consequuntur ducimus eius eos excepturi
                fugiat illo iusto necessitatibus non, obcaecati placeat quae quaerat, quasi quos ullam vitae voluptas.

            </div>
    </div>
</div>


</body>
</html>
