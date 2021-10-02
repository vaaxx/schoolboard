<div class="container">
    <h2>Student list for <B><?php echo $schoolName?></B></h2>
    <div class="box">
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Grades</td>
                <td>Average</td>
                <td>Final Result</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($schoolStudents as $student) { ?>
                <tr>
                    <td><a href="<?php echo URL . 'home/students/' . htmlspecialchars($student->id, ENT_QUOTES, 'UTF-8'); ?>"><?php if (isset($student->id)) echo htmlspecialchars($student->id, ENT_QUOTES, 'UTF-8'); ?></a></td>
                    <td><?php if (isset($student->name)) echo htmlspecialchars($student->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($student->grade_list)) echo htmlspecialchars($student->grade_list, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($student->avg_grade)) echo number_format($student->avg_grade,2,".",","); ?></td>
                    <td><?php if (isset($student->final_result)) echo htmlspecialchars($student->final_result, ENT_QUOTES, 'UTF-8'); ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>