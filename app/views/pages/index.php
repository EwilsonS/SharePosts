<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-3"><?php echo  $data['title']; ?></h1>
            <p class="lead"><?php echo  $data['description']; ?></p>
            <p class="text-center">Created by Evan Wilson</p>
            <p>
                <small>
                    login with guest account 
                    <br>email: guest@gmail.com 
                    <br>password: 123456
                </small>
            </p>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
