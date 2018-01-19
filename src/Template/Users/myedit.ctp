<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('username', ['readonly' => 'readonly', 'placeholder' => $user->username]);
            echo $this->Form->control('password' );
            echo $this->Form->control('email', ['readonly' => 'readonly', 'placeholder' => $user->email]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Edit')) ?>
    <?= $this->Form->end() ?>
</div>