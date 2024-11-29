<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="js/validation.js" defer></script>
</head>

<body>
    <h1>Signup</h1>
    <form id="signup" action="process-signup.php" method="post" novalidate>
        <div>
            <input type="text" id="name" name="name" placeholder="Fullname">
        </div>
        <div>
            <input type="email" id="email" name="email" placeholder="Email Address">
        </div>
        <div style="position: relative;">
            <input type="password" id="password" name="password" placeholder="Password">
            <span onclick="togglePassword('password', this)"
                style="position: absolute; right: 620px; top: 55%; transform: translateY(-50%); cursor: pointer;">
                <img src="asset/hide.png" alt="hide" style="">
            </span>
        </div>
        <div style="position: relative;">
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password">
            <span onclick="togglePassword('confirm-password', this)"
                style="position: absolute; right: 620px; top: 55%; transform: translateY(-50%); cursor: pointer;">
                <img src="asset/hide.png" alt="hide" style="">
            </span>
        </div>
        <div>
            <select name="role" id="role" required>
                <option value="" disabled selected>Select Role</option>
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button>Signup</button>
    </form>

    <script>
        function togglePassword(fieldId, iconElement) {
            const field = document.getElementById(fieldId);
            const img = iconElement.querySelector("img");

            if (field.type === "password") {
                field.type = "text";
                img.src = "asset/view.png";
                img.alt = "view";
            } else {
                field.type = "password";
                img.src = "asset/hide.png";
                img.alt = "hide";
            }
        }
    </script>
</body>

</html>