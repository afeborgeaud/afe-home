<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/projects.css">
<body>

<div class="wrapper">
    <?php include "./side.php";?>
    <?php $section="projects"; include "./header.php";?>

    <content class="portfolio">
        <a href="https://github.com/afeborgeaud/dsmpy" target="_blank">
        <div class="item">
            <div class="portfolio-header">Python, Fortran</div>
            <h1>dsmpy</h1>
            <div class="portfolio-text">
                High-performance seismic waveform computation in python.
            </div>
        </div></a>

        <a href="https://github.com/afeborgeaud/dsmnet" target="_blank">
        <div class="item">
            <div class="portfolio-header">
                Python (PyTorch)
            </div>
            <h1>dsmnet</h1>
            <div class="portfolio-text">
                Seismic waveform inversion using a convolutional neural network.
            </div>
        </div></a>

        <a href="https://github.com/afeborgeaud/pytomo" target="_blank">
        <div class="item">
            <div class="portfolio-header">Python</div>
            <h1>pytomo</h1>
            <div class="portfolio-text">
                Python package for probabilistic seismic waveform inversion.
            </div>
        </div></a>

        <a href="https://github.com/afeborgeaud/TomoTool" target="_blank">
        <div class="item">
            <div class="portfolio-header">Java</div>
            <h1>TomoTool</h1>
            <div class="portfolio-text">
                Java package for seismic travel time computation in 3D models.
            </div>
        </div></a>
    </content>
    
    <?php include "./footer.php";?>
</div>

</body>
</html>