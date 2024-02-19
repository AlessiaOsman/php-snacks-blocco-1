<?php
  $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam tempore explicabo veniam, pariatur culpa esse saepe nesciunt veritatis labore incidunt ullam perferendis sequi maxime omnis aliquid eaque similique animi dignissimos.
  Quaerat voluptate est facilis corporis eum ullam, eos distinctio dignissimos sunt ducimus itaque quas, voluptatum exercitationem ex repellat doloribus tenetur, facere ratione alias at quis consectetur! Eveniet tempora at commodi.
  Eos eveniet voluptatem facere facilis dolores delectus libero laboriosam voluptatibus quas rem placeat quibusdam pariatur ullam distinctio praesentium, magnam corporis quis beatae ut ratione asperiores obcaecati totam! Cumque, dolore ea.
  Praesentium nobis voluptatem corporis id repudiandae dolore nostrum, sunt excepturi non accusantium quisquam assumenda qui magni amet, porro enim reiciendis officia fuga totam incidunt? Asperiores, similique enim! Qui, error. Beatae!
  Expedita aspernatur impedit placeat nisi, sunt assumenda quas perferendis molestias, totam repudiandae saepe cumque ullam sequi laborum minus cupiditate officiis voluptates earum iusto! Maiores nostrum vel dolorem saepe hic. Modi.
  Mollitia quos minus ratione excepturi, eveniet at id autem nam voluptatem eum ipsa magnam aspernatur ducimus reiciendis, temporibus expedita dolore cupiditate quasi corrupti veritatis omnis assumenda facere possimus! Nostrum, unde?
  Cupiditate, doloremque eum. Omnis mollitia neque ea perferendis sequi pariatur maiores, nisi dolor culpa esse quibusdam natus magni vitae nostrum eveniet doloremque, eligendi dolores. Suscipit aperiam labore rem ad voluptates.
  Dolore repudiandae, quia nisi, mollitia inventore molestias vitae minima fugit ratione aspernatur accusamus laudantium repellendus asperiores incidunt, sapiente voluptatibus facere eius. Harum maxime, dolorem at perferendis a molestiae qui soluta?
  Nulla libero voluptas temporibus nobis reprehenderit a ratione animi explicabo ad sapiente molestiae, rem excepturi quis iste. Non necessitatibus quasi modi neque. Dolore harum sapiente officia maiores ex ad perspiciatis!
  Odio pariatur ipsa dolore minus repellendus dignissimos, eaque magnam, hic rem, eos illo beatae ut nostrum nulla! Deserunt nam exercitationem nisi? Ex, alias nostrum inventore commodi repudiandae optio dolorem tempora? ';

  $arrayParagraph = explode('.', $text);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php foreach ($arrayParagraph as $paragraph) : ?>
      <p><?=$paragraph?></p>      
<?php endforeach ?>
</body>
</html>