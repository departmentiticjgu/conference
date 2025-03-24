<?php
// Initialize variables
$firstName = $lastName = $email = $password = $confirmPassword = '';
$errors = [];
$success = false;

// Form submission handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $firstName = $_POST['firstName'] ?? '';
    $lastName = $_POST['lastName'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';
    $terms = isset($_POST['terms']);
    
    // Validate form data
    if (empty($firstName)) {
        $errors['firstName'] = 'First name is required';
    }
    
    if (empty($lastName)) {
        $errors['lastName'] = 'Last name is required';
    }
    
    if (empty($email)) {
        $errors['email'] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format';
    }
    
    if (empty($password)) {
        $errors['password'] = 'Password is required';
    } elseif (strlen($password) < 8) {
        $errors['password'] = 'Password must be at least 8 characters long';
    }
    
    if ($password !== $confirmPassword) {
        $errors['confirmPassword'] = 'Passwords do not match';
    }
    
    if (!$terms) {
        $errors['terms'] = 'You must agree to the terms and conditions';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Here you would typically:
        // 1. Hash the password
        // 2. Save the user to the database
        // 3. Send verification email
        // 4. Redirect to login or dashboard
        
        // For this example, we'll just set success to true
        $success = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register-styles.css">
    <!-- Include your main stylesheet and any other required assets -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&family=Open+Sans:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <h2>Create an Account</h2>
            </div>
            <div class="register-body">
                <?php if ($success): ?>
                    <div class="alert alert-success">
                        Registration successful! Please check your email to verify your account.
                    </div>
                <?php else: ?>
                    <form class="register-form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-row">
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="firstName">First Name</label>
                                    <input 
                                        id="firstName" 
                                        name="firstName" 
                                        type="text" 
                                        class="form-control <?php echo isset($errors['firstName']) ? 'is-invalid' : ''; ?>" 
                                        placeholder="Enter your first name" 
                                        value="<?php echo htmlspecialchars($firstName); ?>" 
                                        required 
                                    />
                                    <?php if (isset($errors['firstName'])): ?>
                                        <div class="error-message"><?php echo $errors['firstName']; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-col">
                                <div class="form-group">
                                    <label for="lastName">Last Name</label>
                                    <input 
                                        id="lastName" 
                                        name="lastName" 
                                        type="text" 
                                        class="form-control <?php echo isset($errors['lastName']) ? 'is-invalid' : ''; ?>" 
                                        placeholder="Enter your last name" 
                                        value="<?php echo htmlspecialchars($lastName); ?>" 
                                        required 
                                    />
                                    <?php if (isset($errors['lastName'])): ?>
                                        <div class="error-message"><?php echo $errors['lastName']; ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input 
                                id="email" 
                                name="email" 
                                type="email" 
                                class="form-control <?php echo isset($errors['email']) ? 'is-invalid' : ''; ?>" 
                                placeholder="Enter your email address" 
                                value="<?php echo htmlspecialchars($email); ?>" 
                                required 
                            />
                            <span class="form-text">We'll never share your email with anyone else.</span>
                            <?php if (isset($errors['email'])): ?>
                                <div class="error-message"><?php echo $errors['email']; ?></div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input 
                                id="password" 
                                name="password" 
                                type="password" 
                                class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : ''; ?>" 
                                placeholder="Create a password" 
                                required 
                            />
                            <span class="form-text">Password must be at least 8 characters long.</span>
                            <?php if (isset($errors['password'])): ?>
                                <div class="error-message"><?php echo $errors['password']; ?></div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input 
                                id="confirmPassword" 
                                name="confirmPassword" 
                                type="password" 
                                class="form-control <?php echo isset($errors['confirmPassword']) ? 'is-invalid' : ''; ?>" 
                                placeholder="Confirm your password" 
                                required 
                            />
                            <?php if (isset($errors['confirmPassword'])): ?>
                                <div class="error-message"><?php echo $errors['confirmPassword']; ?></div>
                            <?php endif; ?>
                        </div>
                        
                        <div class="form-group">
                            <div class="form-check">
                                <input 
                                    type="checkbox" 
                                    id="terms" 
                                    name="terms" 
                                    class="form-check-input" 
                                    <?php echo isset($_POST['terms']) ? 'checked' : ''; ?> 
                                />
                                <label for="terms" class="form-check-label">
                                    I agree to the <a href="/terms" class="text-accent-color">Terms and Conditions</a>
                                </label>
                                <?php if (isset($errors['terms'])): ?>
                                    <div class="error-message"><?php echo $errors['terms']; ?></div>
                                <?php endif; ?>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn-register">Register Now</button>
                        </div>
                    </form>
                    
                    <div class="register-divider">
                        <span>Or register with</span>
                    </div>
                    
                    <div class="social-login">
                        <button class="social-login-btn">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button class="social-login-btn">
                            <i class="fab fa-github"></i>
                        </button>
                        <button class="social-login-btn">
                            <i class="fab fa-google"></i>
                        </button>
                    </div>
                    
                    <div class="login-link">
                        Already have an account? <a href="/login.php">Login here</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        // Any client-side validation or interactions can go here
        document.addEventListener('DOMContentLoaded', function() {
            // Example: Form submission loading state
            const form = document.querySelector('.register-form');
            const submitBtn = form.querySelector('.btn-register');
            
            form.addEventListener('submit', function() {
                submitBtn.innerHTML = '<span class="loading"></span> Creating Account...';
                submitBtn.disabled = true;
            });
        });
    </script>
</body>
</html>

