<?php
$services = [
    ['title' => 'Automated Posting', 'desc' => 'Post across multiple platforms on autopilot.'],
    ['title' => 'Smart Scheduling', 'desc' => 'Plan and publish content at the perfect time.'],
    ['title' => 'Audience Growth', 'desc' => 'Grow real followers and build connections.'],
    ['title' => 'Detailed Analytics', 'desc' => 'Track performance and make data-driven decisions.']
];
?>

<section id="services" class="grid-container">
    <?php foreach ($services as $service): ?>
        <div class="service-card">
            <h3><?php echo $service['title']; ?></h3>
            <p><?php echo $service['desc']; ?></p>
        </div>
    <?php endforeach; ?>
</section>