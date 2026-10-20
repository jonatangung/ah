
<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTER</title>
</head>
<body>
    <h1>Sign Up</h1>

    <form action="/input" method="POST">
        <?php echo csrf_field(); ?>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="u" required></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="e" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="p" required></td>
            </tr>
            
            <tr>
                
                <td><button type="submit">Daftar</button></td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php /**PATH C:\Users\Nathan\Downloads\garage-motorcycle-main\resources\views\girasya.blade.php ENDPATH**/ ?>