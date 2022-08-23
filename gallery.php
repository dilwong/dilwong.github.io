<!DOCTYPE html>
<html lang="en">

<?php $page = "gallery"; ?>
<?php require_once "header.php"; ?>

<body>

    <?php require_once "nav.php"; ?>

    <main class='container-fluid mt-5 pb-5 pl-md-5 pr-md-5'>

        <div class="mt-5 mb-3 clearfix">
            <h2>Gallery</h2>
        </div>
        
        <div class="mt-3 clearfix">
            <h3 class="mt-2 mb-3 clearfix">STM Images</h3>

            <div class="d-flex flex-row flex-wrap">

                <div class="card text-center" style="width: 18rem;">
                    <img src="images/antibonding.png" class="card-img-top gallery-image">
                    <div class="card-body">
                        <p class="card-text">Antibonding molecular orbital of atomic collapse artificial nuclei.</p>
                    </div>
                </div>

                <div class="card text-center" style="width: 18rem;">
                    <img src="images/graphene_defect.jpg" class="card-img-top gallery-image">
                    <div class="card-body">
                        <p class="card-text">Defect in the atomic lattice of graphene.</p>
                    </div>
                </div>

                <div class="card text-center" style="width: 18rem;">
                    <img src="images/tcne.jpg" class="card-img-top gallery-image">
                    <div class="card-body">
                        <p class="card-text">Cute, little TCNE molecule on graphene.</p>
                    </div>
                </div>

            </div>

        </div>
        
    </main>

    <?php require_once "footer.php"; ?>

</body>
</html>