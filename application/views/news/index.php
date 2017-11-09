<html>
        <head>
                <title>document</title>
        </head>
        <body>
		<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>


                <h3>header</h3>

        
                <h5><?php echo $title ?></h5>
                <p>ini adalah cinta</p>
        

        </body>
</html>


