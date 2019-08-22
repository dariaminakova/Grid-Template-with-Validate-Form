<?php
    $cities = [
        [
            'id_city' => '1',
            'name_city' => 'New York'
        ],
        [
            'id_city' => '2',
            'name_city' => 'London'
        ],
        [
            'id_city' => '3',
            'name_city' => 'Kyiv'
        ],
        [
            'id_city' => '4',
            'name_city' => 'Paris'
        ],
        [
            'id_city' => '5',
            'name_city' => 'Rome'
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Grid Template</title>
</head>
<body>
    <header id="pageHeader">Header</header>
    <article id="mainArticle">
        <form class="myForm" method="post"> 
            <label for="name">Name </label>
            <input type="text" name="name" id="name" required>
            <label for="phone">Phone </label>
            <input type="phone" name="phone" id="phone">
            <label for="email">Email </label>
            <input type="email" name="email" id="email">
            <label for="city">City </label>
            <select type="text" name="city" id="city" required>
                <? foreach($cities as $city) : ?>
                    <option value="<?=$city['id_city']?>">
                        <?=$city['name_city']?>
                    </option>
                <? endforeach; ?>
            </select>
            <label for="comments">Comments</label>
            <textarea name="comments" id="comments" maxlength="500"></textarea>
            <button class="btn-send" type="submit">Send</button>
        </form>
    </article>
    <nav id="mainNav">Nav</nav>
    <div id="siteAds">Ads</div>
    <footer id="pageFooter">Footer</footer>

    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>