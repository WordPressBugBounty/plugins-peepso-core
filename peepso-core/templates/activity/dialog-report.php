<form class="ps-form ps-form--vertical ps-form--report">
	<div class="ps-form__row">
		<?php PeepSoActivity::get_instance()->report_reasons(); ?>
		<div class="ps-alert ps-js-error" style="display:none"></div>
	</div>
</form>

<?php

// Additional popup options (optional).
$opts = array(
	'title' => __('Report', 'peepso-core'),
	'actions' => array(
		array(
			'label' => __('Cancel', 'peepso-core'),
			'class' => 'ps-js-cancel'
		),
		array(
			'label' => __('Submit Report', 'peepso-core'),
			'class' => 'ps-js-submit',
			'loading' => true,
			'primary' => true
		)
	),
	'text_select_reason' => __('ERROR: Please select a report reason.', 'peepso-core'),
	'text_fill_description' => __('ERROR: Please provide the necessary report details.', 'peepso-core'),
);

?>
<script type="text/template" data-name="opts"><?php echo json_encode($opts); ?></script>
