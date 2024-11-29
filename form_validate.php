<?php
// define variables and set to empty
$fnameErr = $lnameErr = $emailErr = $passwordErr = $addressErr = $address2Err = $cityErr = $stateErr = $zipErr = $form_checkErr = "";
$fname = $lname = $email = $password = $address = $address2 = $city = $state = $zip = $form_check = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['fname'])) {
        // if data of form that used post method is empty
        $fnameErr = "First Name is required";
    } else {
        $fname = htmlspecialchars($_POST['fname']);
        // assign $fname to form data (inputted value) of form that used post method
    }

    if (empty($_POST['lname'])) {
        $lnameErr = "Last Name is required";
    } else {
        $lname = htmlspecialchars($_POST['lname']);
    }

    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST['email']);
    }

    if (empty($_POST['password'])) {
        $passwordErr = "Password is required";
    } else {
        $password = htmlspecialchars($_POST['password']);
    }

    if (empty($_POST['address'])) {
        $addressErr = "Address is required";
    } else {
        $address = htmlspecialchars($_POST['address']);
    }

    if (empty($_POST['address2'])) {
        $address2Err = "";
    } else {
        $address2 = htmlspecialchars($_POST['address2']);
    }

    if (empty($_POST['city'])) {
        $cityErr = "City is required";
    } else {
        $city = htmlspecialchars($_POST['city']);
    }

    if (empty($_POST['state'])) {
        $stateErr = "State is required";
    } else {
        $state = htmlspecialchars($_POST['state']);
    }

    if (empty($_POST['zip'])) {
        $zipErr = "Zip code is required";
    } else {
        $zip = htmlspecialchars($_POST['zip']);
    }

    if (empty($_POST['form_check'])) {
        $form_checkErr = "Check Form please";
    } else {
        $form_check = htmlspecialchars($_POST['form_check']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .required {
            color: red;
        }
    </style>
    <title>Document</title>

</head>

<body>
    <div class="container">
        <form class="row g-3 my-5" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
            <div class="col-md-6">
                <label for="fname" class="form-label">First Name</label><span class="required">*</span>
                <input type="text" class="form-control" id="fname" name="fname">
                <span class="required"><?php echo $fnameErr ?></span>
            </div>
            <div class="col-md-6">
                <label for="lname" class="form-label">Last Name</label><span class="required">*</span>
                <input type="text" class="form-control" id="lname" name="lname">
                <span class="required"><?php echo $lnameErr ?></span>
            </div>

            <div class="col-md-6">
                <label for="email" class="form-label">Email</label><span class="required">*</span>
                <input type="email" class="form-control" id="email" name="email">
                <span class="required"><?php echo $emailErr ?></span>
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Password</label><span class="required">*</span>
                <input type="password" class="form-control" id="password" name="password">
                <span class="required"><?php echo $passwordErr ?></span>
            </div>
            <div class="col-12">
                <label for="address" class="form-label">Address</label><span class="required">*</span>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address">
                <span class="required"><?php echo $addressErr ?></span>
            </div>
            <div class="col-12">
                <label for="address2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="address2" placeholder="Apartment, studio, or floor" name="address2">
                <span class="required"><?php echo $address2Err ?></span>
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label">City</label><span class="required">*</span>
                <input type="text" class="form-control" id="city" name="city">
                <span class="required"><?php echo $cityErr ?></span>
            </div>
            <div class="col-md-4">
                <label for="state" class="form-label">State</label><span class="required">*</span>
                <span class="required"><?php echo $stateErr ?></span>
                <select id="state" class="form-select" name="state">
                    <option selected>Choose...</option>
                    <option value="delta">Delta</option>
                    <option value="other state">Others</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="zip" class="form-label">Zip</label><span class="required">*</span>
                <input type="text" class="form-control" id="zip" name="zip">
                <span class="required"><?php echo $zipErr ?></span>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck" name="form_check">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                        <span class="required">*</span>
                    </label>
                    <span class="required"><?php echo $form_checkErr ?></span>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

<!-- the below is executed when submit button is clicked -->
        <p class="lead"><?php echo $fname ?></p>
        <p class="lead"><?php echo $lname ?></p>
        <p class="lead"><?php echo $email ?></p>
        <p class="lead"><?php echo $password ?></p>
        <p class="lead"><?php echo $address ?></p>
        <p class="lead"><?php echo $address2 ?></p>
        <p class="lead"><?php echo $city ?></p>
        <p class="lead"><?php echo $state ?></p>
        <p class="lead"><?php echo $zip ?></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>