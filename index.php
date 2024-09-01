<?php
    require('./php/app.php');
?>
<?php require('./php/html/html.head.php'); ?>
<body>
    <?php include('./php/components/navbar.php'); ?>
    <div class="container col-12 col-xxl-8">
        <!-- Hero banner -->
        <div class="px-4 py-5 my-md-5">
            <div class="row flex align-items-center justify-content-start pt-5">
                <div class="col-12 col-md-8">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Make learning <div class="text-success">enjoyable.</div></h1>
                    <p class="lead text-muted">
                        Create, distribute, modify, and rate quizzes quickly with Kwizmo, a learning platform aimed to gamify quizzes and exams, adding a twist to the regular online forms students have come to know.
                    </p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg fs-5 px-4 me-md-2 neumorphed">Create a Kwiz</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Random Kwiz Cards -->
        <div class="px-4 py-5">
            <div class="text-md-center">
                <h1 class="display-6 fw-bold lh-1 mb-3">Take a random Open Kwiz</h1>
                <p class="lead text-muted">
                    Test your knowledge with Open Kwizzes. Instantly rated once completed.
                </p>
            </div>
            <?php include('./php/components/index_quiz_cards.php'); ?>
        </div>
        <!-- Categories -->
        <div class="px-4 py-5">
            <div class="row row-cols-1 row-cols-md-2 align-items-start g-5">
                <div class="d-flex flex-column align-items-start gap-2">
                    <h3 class="fw-bold">Explore Topics</h3>
                    <p class="lead text-muted">Pick a topic to quiz your way on.</p>
                    <button type="button" class="btn btn-primary px-4 me-md-2 neumorphed">View All Topics</button>
                </div>
                <div>
                    <?php include('./php/components/index_topics.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include('./php/components/footer.php'); ?>
    <script src="./assets/js/bootstrap/bootstrap.min.js" type="text/javascript" async></script>
</body>
</html>