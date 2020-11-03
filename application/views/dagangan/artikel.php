<link href="<?= base_url('assets/'); ?>tree.css" rel="stylesheet">

<div class="container">
	<div class="row">
		<? foreach ($paket['judul'] as $key => $value) : ?>
			<div class="col-md-3 text-center">
				<svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140">
					<title><?= $value ?></title>
					<rect width="100%" height="100%" fill="#777"></rect><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
				</svg>
				<h2><?= $value ?></h2>
				<p><?= $paket['head'][$key] . $paket['isi'][$key] ?></p>
				<p><a class="btn btn-secondary" href="<?= base_url('dagang/artikel?id=') . $paket['ids'][$key] ?>" role="button">more»</a></p>
			</div>
		<? endforeach; ?>
	</div>
</div>
