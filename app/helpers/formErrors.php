<?php if(count($errors) > 0): ?>
    <div class="msg error" style="color: red; margin-bottom : 10px;">
    <?php foreach ($errors as $error): ?>
        <li><?php echo $error; ?></li>
    <?php endforeach; ?>
    </div>
<?php endif; ?>