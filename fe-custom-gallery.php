<?

	require '/var/www/shared/galleryincludes/galleryv2.php';
	$gallery = new Gallery(true, 779, 5193, '', 20, true);
	$gallery->getHeader();

	$galleryImages = $gallery->getGalleryImageArray();

?>

<p>Gallery</p>

<div class="gallery-container">

	<? for($i = 0; $i < count($galleryImages); $i++) : ?>

		<a href="<?= $galleryImages[$i]['large'];?>" class="gallery-thumb">
			<img src="<?= $galleryImages[$i]['thumb'];?>" alt="Sitename">
		</a>

	<? endfor; ?>

</div>