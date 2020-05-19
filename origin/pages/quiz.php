<?php 
    $json_data = get_db_table('quiz');
    // debug($json_data);
?>

<h1>Викторина!!!</h1>


<div style="border: 1px solid red;">

    <form method="POST" action="/post/quiz.php">

    <?php foreach($json_data as $item): ?>

        <h2><?php echo $item->question; ?>  <?php echo $item->type; ?> </h2>

        <?php if(array_key_exists('answers', $item)): ?>
            <ul>
            <?php foreach($item->answers as $a): ?>
                <li>   
    
                    <?php if($item->type == 'radio' ): ?>
                        <input type="radio" value="<?php echo $a->is_valid ?>" name="<?php echo $item->name ?>" />
                    <?php endif ?>

                    <?php if($item->type == 'checkbox' ): ?>
                        <input value="<?php echo $a->value ?>" name="<?php echo $item->name ?>[]" type="checkbox" />
                    <?php endif ?>

                    <?php echo $a->text  ?>

                </li>
            <?php endforeach ?>
            </ul>
        <?php else: ?>
            <input name="<?php echo $item->name ?>"  type="text" />
        <?php endif ?>

    <?php endforeach ?>

    <input type="submit" name="Отправить" value="Отправить" />

</form>




</div>
