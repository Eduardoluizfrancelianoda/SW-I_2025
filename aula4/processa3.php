<?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (!empty($success)): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php else: ?>
        <?php if (!isset($hideForm)): ?>
            <form action="" method="post">
                <label for="cxemail">Email:</label>
                <input type="email" name="cxemail" id="cxemail" required>
                <br>
                <label for="cxpassword">Senha:</label>
                <input type="password" name="cxpassword" id="cxpassword" required>
                <br>
                <button type="submit">Login</button>
            </form>
        <?php endif; ?>
    <?php endif; ?>