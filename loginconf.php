<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Alfredo Rivadulla Fuenmayor">
    <title>Project - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f2f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            background: white;
        }
    </style>
</head>
<body>

    <?php session_start(); ?>

    <div class="login-card text-center">
        <div class="mb-4">
            <h2 class="fw-bold text-primary">EX6-Project-SQL+PHP</h2>
            <p class="text-muted">Enter the credentials</p>
        </div>

        <form action="logincp.php" method="post">
            
            <div class="mb-3 text-start">
                <label for="user" class="form-label">User</label>
                <input type="text" class="form-control" name="user" id="user" placeholder="Ej: admin" required/>
            </div>

            <div class="mb-4 text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="******" required/>
            </div>

            <div class="d-grid gap-2">
                <input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg"/>
                <input type="reset" value="Borrar" class="btn btn-outline-secondary"/>
            </div>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>