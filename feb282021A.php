<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/post_base.css">
<link rel="stylesheet" href="css/post_content.css">
<body>

<div class="wrapper">
    <?php include "side.php";?>

    <content class="items">
        <h1>Probabilistic seismic imaging using a Neighbourhood algorithm</h1>
        <div class="post-meta">Feb 28, 2021</div>

        <div class="post-text">
            <p><i>pydsm</i> can compute several seismic models in parallel, which is used in <i>pytomo</i> to run probabilistic waveform inversion
        with a neighbourhood algorithm (Sambridge, 1999). A few examples of using <i>pytomo</i>
        to probe the Earth's seismic structure are shown below.
            </p>

            <div>
                <h3>D" discontinuity</h3>
                <p>The video below shows an example of synthetic inversion with a neighbourhood algorithm for the
                    shear-velocity increase in the D'' layer and the depth of the D'' discontinuity at the bottom of the Earth's mantle
                    (left: voronoi cells colored by waveform misfit; middle: target, and best inverted model for the current iteration;
                    right: waveforms for the target, and current best inverted model).
                </p>
                <div>
                    <video style="width:100%" controls>
                        <source src="img/result.mp4" type="video/mp4">
                    Your browser does not support the video tag
                    </video>
                </div>
            </div>
            
            <div>
                <h3>D" anisotropy</h3>
                <p>The same neighbourhood algorithm can be used to infer shear-wave anisotropy (VSH and VSV)
                    in the D" layer. A synthetic inversion is shown in the video below (left: voronoi cells colored by waveform misfit; middle: target, and best inverted model for the current iteration;
                    right: radial and transverse component waveforms for the target, and current best inverted model).
                </p>
                <div>
                    <video style="width:100%" controls>
                        <source src="img/result_aniso.mp4" type="video/mp4">
                    Your browser does not support the video tag
                    </video>
                </div>
            </div>

        </div>
    </content>
    
    <?php include "footer.php";?>
</div>

</body>
</html>