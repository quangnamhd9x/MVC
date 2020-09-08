

<!--<table>-->
<!--    <tbody>-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>Name</th>-->
<!--        <th>Birthday</th>-->
<!--        <th>Action</th>-->
<!--    </tr>-->
<!--    --><?php //foreach ($students as $key => $student) : ?>
<!--    <tr>-->
<!--        <td>--><?php //echo $student->getStudentId(); ?><!--</td>-->
<!--        <td>--><?php //echo $student->getStudentName(); ?><!--</td>-->
<!--        <td>--><?php //echo $student->getBirthday(); ?><!--</td>-->
<!--        <td colspan="2">-->
<!--            <button><a href="index.php?page=edit&id=--><?php //echo $student->getStudentId(); ?><!--">Edit</a></button>-->
<!--            <button><a href="index.php?page=delete&id=--><?php //echo $student->getStudentId(); ?><!--">Delete</a></button>-->
<!--        </td>-->
<!--    </tr>-->
<!--    --><?php //endforeach; ?>
<!--    </tbody>-->
<!--</table>-->

<div class="container">
    <a class="btn btn-success" href="index.php?page=addStudent">Add</a>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Birthday</th>
        <th colspan="2 ">Action</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($students as $key => $student) : ?>
        <tr>
            <td><?php echo $student->getStudentId(); ?></td>
            <td><?php echo $student->getStudentName(); ?></td>
            <td><?php echo $student->getBirthday(); ?></td>

                <td><a class="btn btn-success" href="index.php?page=edit&id=<?php echo $student->getStudentId(); ?>">Edit</a></td>
                <td><a onclick="return confirm('Are you sure!')" class="btn btn-danger" href="index.php?page=delete&id=<?php echo $student->getStudentId(); ?>">Delete</a></td>

        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</div>

