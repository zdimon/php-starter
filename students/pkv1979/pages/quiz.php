<?php
$json_data = get_db_table('quiz');
// debug($json_data);
?>

<h1>Викторина!!!</h1>

<div style="border: 1px solid red;">
  <form method="post" action="post/quiz.php">
    <?php foreach ($json_data as $item) : ?>
    <h2>
      <?= $item->question; ?>
    </h2>
    <?php switch ($item->type):
        case 'radio':
        case 'checkbox': ?>
    <ul>
      <?php foreach ($item->answers as $answer) : ?>
      <li>
        <?php if ($item->type === 'radio') : ?>
        <input type="radio" name="<?= $item->name; ?>" value="<?= $answer->is_valid; ?>">
        <?php elseif ($item->type === 'checkbox') : ?>
        <input type="checkbox" name="<?= $item->name; ?>[]" value="<?= $answer->value; ?>">
        <?php endif; ?>
        <?= $answer->text; ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php break; ?>
    <?php
        case 'select': ?>
    <select name="<?= $item->name; ?>">
      <?php foreach ($item->answers as $answer) : ?>
      <option value="<?= $answer->text; ?>"><?= $answer->text; ?></option>
      <?php endforeach; ?>
    </select>
    <?php break; ?>
    <?php
        case 'text': ?>
    <input type="text" name="<?= $item->name; ?>">
    <?php break; ?>
    <?php endswitch; ?>
    <?php endforeach; ?>
    <div style="padding: 10px">
      <input class="mdc-button mdc-button--raised" type="submit" value="Отправить">
    </div>
  </form>
</div>