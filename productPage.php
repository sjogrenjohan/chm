<?php
    include "./includes/html-start.php";
    include "./includes/header.php";
?>

<div class="jumbotron">
    <img src="./Images/57.png" class="img-fluid" alt="Responsive image">

    <div class="container">
        <div id="productContainer" class="row">
            <template>
                <div class="col-sm-6 col-md-4 col-lg-3 no-padding">
                    <div class="card text-center">
                        <img src="" class="card-img-top" alt="">
                        <h5 class="card-title"></h5>
                        <div class="card-body">
                            <p class="card-text"></p>
                            <p class="two card-text"></p>
                            <a href="#" class="btn btn-dark">Lägg till i Kundvagn</a>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>

<?php
    include "./includes/footer.php";
    include "./includes/html-end.php";
?>