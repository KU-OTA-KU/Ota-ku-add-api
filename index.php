<?php
$blockId = $get['blockId'];

?>
<!-- import params -->
<script>
  let blockId = <?php $blockId ?>
  let renderTo = <?php $renderTo ?>
</script>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Yandex.RTB -->
  <script>window.yaContextCb = window.yaContextCb || []</script>
  <script src="https://yandex.ru/ads/system/context.js" async></script>
  <title>Ota-ku adversting api</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id=`${renderTo}`></div>
  <script>
  window.yaContextCb.push(()=>{
    Ya.Context.AdvManager.render({
      "blockId": `${blockId}`,
      "renderTo": `${renderTo}`,  
    })
  })
  </script>
  <script src="script.js"></script>
</body>

</html>