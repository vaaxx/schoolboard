<div class="container">
    <div class="box">
        
        <table>
            <tbody> 
            <?php foreach ($student as $item) { ?>
                <tr>
                    <td><h2><?php if (isset($item->name)) echo htmlspecialchars($item->name, ENT_QUOTES, 'UTF-8'); ?> Grades</h2></td>
                </tr>
                <?php 
                    $grades = explode(',',($item->grade_list));
                    foreach ($grades as $grade) { ?>

                    <tr>
                        <td><?php echo htmlspecialchars($grade, ENT_QUOTES, 'UTF-8'); ?></td>
                    </tr>

                <?php } ?>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>