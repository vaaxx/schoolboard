<div class="container">
    <h2>Student list</h2>
    <div class="box">
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>School</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($students as $student) { ?>
                <tr>
                    <td><a href="<?php echo URL . 'home/students/' . htmlspecialchars($student->id, ENT_QUOTES, 'UTF-8'); ?>"><?php if (isset($student->id)) echo htmlspecialchars($student->id, ENT_QUOTES, 'UTF-8'); ?></a></td>
                    <td><?php if (isset($student->name)) echo htmlspecialchars($student->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($student->school)) echo htmlspecialchars($student->school, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>