<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Foroums Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .jubotron {
            padding: 20px;
            background-color: lightgray;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    <?php 
    $id=$_GET['threadid'];
    $sql="SELECT * FROM `threads` WHERE `threadid`=$id";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        $threadtitle=$row['threadtitle'];
        $threaddesc=$row['threaddescription'];   
    }
    ?>
    <div class="container my-3">
        <div class="container jubotron">
            <h1 class="display-4"><?php echo $threadtitle;?> forums.</h1>
            <p class="lead"><?php echo $threaddesc; ?></p>
            <p><b>Posted by: Aditya</b></p>
            <hr class="my-4">
            <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not
                post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post
                questions. Remain respectful of other members at all times.</p>
                
        </div>
    </div>
    <div class="container">
        <h1 class="text-center">Discussions</h1>
    <!-- <?php 
    $id=$_GET['threadid'];
    $sql="SELECT * FROM `threads` WHERE `threadid`=$id";
    $result=mysqli_query($conn,$sql);
    $noResult=true;
    if(!$result){
        echo "Error";
    }
    while($row=mysqli_fetch_assoc($result)){
        $threadtitle=$row['threadtitle'];
        $noResult=false;
        $threaddesc=$row['threaddescription'];    
        
        echo '
        <div class="d-flex align-items-center my-3">
            <img src="partials/images/userdefault.png" width="10%" alt="...">
            <div class="flex-grow-1">
                <h5 class="mt-0"><a class="text-danger" href="thread.php?threadid='.$threadid.'">'.$threadtitle.'</a></h5>
                '.$threaddesc.'
            </div>
        </div>'; 
    }
    if ($noResult) {
        echo '<div class="container my-3">
    <div class="container jubotron">
        <p class="display-4">No Questions yet for this category..</p>
        <p class="lead">Be the first person to ask a question.!!</p>
        <hr class="my-4">
    </div>
</div>';
    }
        ?> -->
    </div>
    <?php include 'partials/_footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
</body>

</html>