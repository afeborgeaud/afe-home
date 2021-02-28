<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/posts.css">
<body>

<div class="wrapper">
    <?php include "./side.php";?>
    <?php $section="posts"; include "./header.php";?>
 
    <content class="post-container">
        <div class="post">
            <a href="./feb282021A.php" target="_self">
                <h2>Probabilistic seismic imaging using a Neighbourhood algorithm</h2>
            </a>
            <div class="post-meta">Feb 28, 2021</div>
            <div class="post-text">
            pydsm can compute several seismic models in parallel, which is used 
            in pytomo to run probabilistic waveform inversion with a neighbourhood 
            algorithm (Sambridge, 1999).
            </div>
        </div>
    </content>
    
    <?php include "./footer.php";?>
</div>

</body>
</html>