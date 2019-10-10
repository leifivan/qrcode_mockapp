

<?php if (!empty($result)): ?>

<?= $wow; ?>

<?php else: ?>

<h3>Generate New QR Codes (PHP)</h3>
See <a href="http://phpqrcode.sourceforge.net/index.php">PHP QR Code</a>

<?php echo $this->Form->create('Misc');?>
    <fieldset>
        <legend><?php echo __('New %s', __('QR Code')); ?></legend>
    <?php
        echo $this->Form->input('size', array('options' => array('Auto')));
    ?>

    <div id="textBox">
    <?php
        echo $this->Form->input('content', array('rows' => 10));
    ?>
    </div>
    </fieldset>

<?php echo $this->Form->end(__('Submit'));?>

<?php endif; ?>





