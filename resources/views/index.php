<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>初めてのLaravel</title>
    </head>
    <body>
        <h1>タスク一覧</h1>
        <form action="/task" method="POST">
            <?= csrf_field() ?>
            <input type="text" name="task_name" value="">
            <input type="submit" value="タスクの追加">
        </form>
        <table>
          <thead>
            <tr>No.</tr>
            <tr>内容</tr>
          </thead>
          <tbody>
          <?php foreach($tasks as $index => $task): ?>
            <tr>
                <td><?= $index+1 ?></td>
                <td><?= $task->name ?></td>
            </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
    </body>
</html>
