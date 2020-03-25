<h2 id="SERVICES">Bat-Services</h2>
<section class="section_services">
    <div class="top_services">
        <?php require_once("src/tabservices.php"); ?>
        <?php foreach ($batServices as $batItems): ?>

        <article>
            <img class = "img_services" src = "<?php echo $batItems['image']; ?>" alt="<?php echo $batItems[alt]; ?>">
            <h3><?php echo $batItems['type']; ?></h3>
            <p><?php echo $batItems['text']; ?></p>
        </article>
        <?php  endforeach; ?>
    </div>
</section>