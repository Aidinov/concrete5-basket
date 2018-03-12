<?php defined('C5_EXECUTE') or die('Access Denied.');
$ps = Loader::helper('form/page_selector');
?>

<fieldset>
    <legend><?= t('Basket'); ?></legend>
    <div class="form-group">
        <?= $form->label('title', t('The title')); ?>
        <?= $form->text('title', $title); ?>
    </div>
</fieldset>

<fieldset>
    <legend><?= t('Order'); ?></legend>
    <div class="form-group">
        <div class="radio">
            <label>
                <input type="radio" name="orderType" value="self" <?php echo $orderType == 'self' ? 'checked' : ''; ?>><?php echo t('Order on current page'); ?>
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="orderType" value="other" <?php echo $orderType == 'other' ? 'checked' : ''; ?>><?php echo t('Order on other page'); ?>
            </label>
        </div>
    </div>
    <div id="order-link" class="form-group" style="display: none;">
        <?= $form->label('orderLink', t('Other page')); ?>
        <div class="input-group">
            <?= $ps->selectPage('orderLink', $orderType == 'other' ? $orderLink : false); ?>
        </div>
    </div>
    <div class="form-group">
        <?= $form->label('orderFormID', t('The id HTML element')); ?>
        <?= $form->text('orderFormID', $orderFormID); ?>
    </div>
</fieldset>

<script type="text/javascript"> 
$(document).ready(function() {
    if ($('input[name=orderType]:checked').val() === 'other') {
        $('#order-link').show();
    }

    $('input[name=orderType]').on('change', function() {
        if ($(this).val() === 'other') {
            $('#order-link').show();
        } else {
            $('#order-link').hide();
            $('input[name=orderLink]').next('.ccm-item-selector-clear').click();
        }
    });
});
</script>
