<section class="py-5">
    <div class="container py-5 text-center">
        <span class="section-tag text-primary fw-bold mb-3 d-block">OUR PRODUCTS</span>
        <h2 class="display-4 fw-bold mb-4 text-dark">What We Offer</h2>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">
            Explore our comprehensive range of digital marketing products and services designed to accelerate your business growth.
        </p>

        <!-- Product Categories Grid -->
        <div class="row g-4 mt-4">
            <?php foreach ($product_categories as $cat_name => $items) : ?>
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm rounded-4 p-4 text-start">
                        <h5 class="fw-bold mb-3"><?php echo $cat_name; ?></h5>
                        <ul class="list-unstyled mb-0">
                            <?php foreach ($items as $label => $url) : ?>
                                <li class="mb-2">
                                    <a href="<?php echo BASE_URL . $url; ?>" class="text-decoration-none text-muted">→ <?php echo $label; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>