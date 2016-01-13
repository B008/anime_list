<?php
echo $this->Form->create('Post', array('type'=>'file', 'enctype' => 'multipart/form-data'));
echo $this->Form->input('Post.image', array('label' => false, 'type' => 'file', 'multiple'));
echo $this->Form->submit('“o˜^‚·‚é', array('name' => 'submit'));