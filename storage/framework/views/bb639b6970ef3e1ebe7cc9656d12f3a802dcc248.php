

<table>
  <tr>
    <th>ID</th>
    <th>背番号</th>
    <th>ポジション</th>
    <th>所属</th>
    <th>名前</th>
    <th>誕生日</th>
    <th>身長</th>
    <th>体重</th>
  </tr>
<?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
  <td><?php echo e($player->id); ?></td>
  <td><?php echo e($player->uniform_num); ?></td>
  <td><?php echo e($player->position); ?></td>
  <td><?php echo e($player->name); ?></td>
  <td><?php echo e($player->club); ?></td>
  <td><?php echo e($player->birth); ?></td>
  <td><?php echo e($player->height); ?></td>
  <td><?php echo e($player->weight); ?></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table><?php /**PATH /var/www/html/sample_app/resources/views/players/index.blade.php ENDPATH**/ ?>