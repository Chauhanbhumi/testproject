<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('assets/js/user.js')); ?>"></script>
    <style>
        #userTable {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #userTable td,
        #userTable th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #userTable tr:nth-child(even) {
            background-color: #aa6904;
        }

        #userTable tr:hover {
            background-color: #ddd;
        }

        #userTable th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>
    <table id="userTable">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Gender</th>
            <th>Profile Image</th>
            <th>Hobbies</th>
            <th>State</th>
            <th>City</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->name); ?></td>
                <td><?php echo e($user->email); ?></td>
                <td><?php echo e($user->contact_no); ?></td>
                <td><?php echo e($user->gender); ?></td>
                <td><?php echo e($user->profile_pic); ?></td>
                <td><?php echo e($user->hobbies_name); ?></td>
                <td><?php echo e($user->state); ?></td>
                <td><?php echo e($user->city); ?></td>
                <td>
                    <a href="#" id="editForm" value="<?php echo e($user->id); ?>">Edit</a></br>
                    <a href="#" id="deleteForm" value="<?php echo e($user->id); ?>"> Delete</a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html><?php /**PATH /var/www/html/iih-practical/testPreoject/resources/views/view.blade.php ENDPATH**/ ?>