<?php must_have_access(); ?>

<div class="mb-3 float-right">
    <img src="<?php print $config['url_to_module'] ?>omnipay_mollie.png"/>
</div>

<div class="clearfix"></div>

<div class="form-group">
    <label class="control-label">Api Key: </label>
    <input type="text" class="mw_option_field form-control" name="mollie_api_key" placeholder="" data-option-group="payments" value="<?php print get_option('mollie_api_key', 'payments'); ?>">
</div>