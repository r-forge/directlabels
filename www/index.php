
<!-- This is the project specific website template -->
<!-- It can be changed as liked or replaced by other content -->

<?php

$domain=ereg_replace('[^\.]*\.(.*)$','\1',$_SERVER['HTTP_HOST']);
$group_name=ereg_replace('([^\.]*)\..*$','\1',$_SERVER['HTTP_HOST']);
$themeroot='http://r-forge.r-project.org/themes/rforge/';

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en   ">

  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $group_name; ?></title>
	<link href="estilo1.css" rel="stylesheet" type="text/css" />
  </head>

<body class="normal">

<!-- R-Forge Logo
<table border="0" width="100%" cellspacing="0" cellpadding="0">
<tr><td>
<a href="/"><img src="<?php echo $themeroot; ?>/images/logo.png" border="0" alt="R-Forge Logo" /> </a> </td> </tr>
</table>
 -->

<!-- get project title  -->
<!-- own website starts here, the following may be changed as you like

<?php if ($handle=fopen('http://'.$domain.'/export/projtitl.php?group_name='.$group_name,'r')){
$contents = '';
while (!feof($handle)) {
	$contents .= fread($handle, 8192);
}
fclose($handle);
echo $contents; } ?>
 -->
<!-- end of project description -->

<h1>Easily add direct labels to plots using the directlabels package</h1>

<table>
<tr>
  <td><img src="iris-scatter.png" alt="direct labeled iris data" /></td>
  <td><pre>
install.packages(c("ggplot2","ElemStatLearn","mlmRev")) ## dependencies
install.packages("directlabels",repos="http://r-forge.r-project.org")
library(directlabels)
direct.label(xyplot(jitter(Sepal.Length)~jitter(Petal.Length),iris,groups=Species))
    </pre></td>
  </tr>
</table>

<p>This package is an attempt to make direct labeling a reality in
everyday statistical practice by making available a body of useful
functions that make direct labeling of common plots easy to do with
high-level plotting systems such as lattice and ggplot2. The main
function that the package provides is <tt>direct.label(p)</tt>, which
takes a lattice or ggplot2 plot <tt>p</tt> and adds direct labels.</p>

<p>
directlabels website navigation:
<ul>
<li><a href="docs/index.html">Positioning Function examples database</a></li>
<li><a href="motivation.html">When are direct labels better than
legends? Why not just add direct labels by hand?</a></li>
<li><a href="examples.php">Several advanced examples</a></li>
<li>Smart label Positioning Functions that avoid label collisions</li>
</ul>
</p>

<h2>An extensible framework for thinking about direct labeling
problems</h2>

<p>Direct labeling a plot can be decomposed into 2 steps: calculating
label positions, then drawing the labels. Drawing the labels will
always be taken care of for you, using the color of the corresponding
group. Calculating label positions is also done for you for common
plot types. For example, with the density plot above, the default
behavior is to position each label above the mode of the corresponding
density estimate.</p>

<p>If default label positions are not satisfactory, you can always
specify your own label placement method, using the method= argument to
direct.label. For example, we can label longitudinal data either on
the left or right of the lines:</p>

<pre>
data(BodyWeight,package="nlme")
p <- qplot(Time,weight,data=BodyWeight,colour=Rat,geom="line",facets=.~Diet)
direct.label(p,<a href="docs/lineplot/posfuns/first.points.html">first.points</a>)
direct.label(p,<a href="docs/lineplot/posfuns/last.points.html">last.points</a>)
</pre>

<p>Here first.points and last.points are <a
href="docs/index.html">Positioning Functions</a> of the form
function(d,...){return(data.frame(x=,y=,groups=))}, where d is all the
data to plot, as a data frame with columns <tt>x y
groups</tt>. first.points simply returns the rows of the data frame
which correspond to the first points for each group. We plot a direct
label for each row returned by the Positioning Function.</p>

<img src="rat-ggplot2-firstlast.png" alt="rat data plotted in ggplot2" />

<p>The power of the directlabels system is the fact that you can write
your own Positioning Functions, and they can be reused for different
plots. So once you write a Positioning Function that works, adding
direct labels is as simple as calling direct.label, no matter if you
are using lattice or ggplot2.</p>

<h2>Talks</h2>

<p><a href="http://www.mnhn.fr/semin-r/">semin-r</a>, 15 oct 2009. "<a
href="HOCKING-latticedl-semin-r.pdf">Visualizing multivariate data
using lattice and direct labels</a>" with <a
href="HOCKING-latticedl-semin-r.R">R code examples</a>.</p>


<p> The <strong>project summary page</strong> you can find <a href="http://<?php echo $domain; ?>/projects/<?php echo $group_name; ?>/"><strong>here</strong></a>. </p>

<center>
<table>
<tr>

<td>Please send email to <a
href="http://r-forge.r-project.org/sendmessage.php?touser=1571">Toby
Dylan Hocking</a> if you are using directlabels or have ideas to
contribute, thanks!</td>

</tr>
<tr>
<td align="center">
    <a href="http://validator.w3.org/check?uri=referer">validate</a>
</td>
</tr>
</table>

</center>

</body>
</html>
