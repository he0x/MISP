<div class="organisations form">
<?php echo $this->Form->create('Organisation'); ?>
    <fieldset>
        <legend><?php echo __('Add Organisation'); ?></legend>
    <?php echo $this->Form->input('name', array('class' => 'input-xxlarge'));
    echo $this->Form->input('uuid', array('class' => 'input-xxlarge', 'div' => 'clear'));
    echo $this->Form->input('SharingGroup', array('multiple' => 'checkbox', 'div' => 'input clear'));
     ?>
    </fieldset>
<?php echo $this->Form->button(__('Submit'), array('class' => 'btn btn-primary')); ?>
<?php echo $this->Form->end(); ?>
</div>
<?php
    echo $this->element('side_menu', array('menuList' => 'admin', 'menuItem' => 'addOrganisation'));
?>