<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('assets/js/user.js')); ?>"></script>
</head>

<body>
    <?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
    <?php endif; ?>
    <form action="<?php echo e(route('store')); ?>" id="userStoreForm" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <label>Name</label>:
        <input type="text" name="name" ></br>
        <label>Email</label>:
        <input type="email" name="email" required></br>
        <label>Contact Number</label>:
        <input type="tel" name="contact_no" minlength="10" maxlength="10" required></br>
        <label>Profile Pic</label>:
        <input type="file" name="profile_pic" accept="png,jpg,jpeg" required></br>
        <label>Gender</label>:
        <input type="radio" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label></br>
        <label>Hobbies</label>:
        <input type="checkbox" name="hobbies[]" value="reading">
        <label for="hobbies[]"> Reading </label><br>
        <input type="checkbox" name="hobbies[]" value="travel">
        <label for="hobbies[]"> Travel </label><br>
        <input type="checkbox" name="hobbies[]" value="music">
        <label for="hobbies[]"> Music </label><br>
        <label>State</label>:
        <select name="state" id="state">
            <option value="">Select State</option>
            <?php $__currentLoopData = App\Models\State::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($data->id); ?>"><?php echo e($data->state); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select></br>
        <label>City</label>:
        <select name="city" id="city" disabled>
        </select></br>
        <input type="submit" name="btnAdd" value="Submit">
    </form>
</body>

</html><?php /**PATH /var/www/html/iih-practical/testPreoject/resources/views/create.blade.php ENDPATH**/ ?>