<?php
// Konfigurasi WhatsApp (Ganti dengan nomor admin ex 628.)
$WHATSAPP_NUMBER = "xxx";

// ==========================================================
// DATA MENU & PRODUK
// ==========================================================
// Panduan Menambah Produk (Untuk Pemula):
// 1. Copy salah satu array ( [ 'id' => ..., 'name' => ... ] ).
// 2. Paste di bawah produk terakhir dalam kategori yang sama.
// 3. Ubah nilainya sesuai produk baru.
// 4. Jangan lupa koma ( , ) di akhir setiap item, KECUALI yang terakhir!

$MENU_SECTIONS = [
  0 => 
  [
    'id' => 'signature',
    'title' => 'Signature Coffee',
    'subtitle' => 'Best seller — racikan khas Tomoro',
    'icon' => 'sparkles',
    'items' => 
    [
      0 => 
      [
        'id' => 1,
        'name' => 'TOMORO Aren Latte',
        'price' => 24000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/266b818c_767865905696.webp',
        'desc' => 'Untuk minuman yang tidak ada gula, di sarankan pesan Caffe Latte. "Latte" berarti susu di Italia. Kami menggunakan 100% gula aren dari Indonesia, dicampurkan dengan espresso dan susu yang di steam dengan busa susu tipis di atasnya.',
      ],
      1 => 
      [
        'id' => 2,
        'name' => 'Sea Salt Cloud Caramel Macchiato',
        'price' => 34000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/32f1954a_765769407081.webp',
        'desc' => 'Perpaduan espresso, susu dan sirup caramel dengan tambahan vanilla cloud foam diatasnya',
      ],
      2 => 
      [
        'id' => 3,
        'name' => 'Pistachio Matcha Latte',
        'price' => 34000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/93291a94_765768947190.webp',
        'desc' => 'Perpaduan harmonis antara matcha premium dan pistachio asli, menghadirkan cita rasa nutty yang unik.',
      ],
      3 => 
      [
        'id' => 4,
        'name' => 'TOMORO Oat Latte',
        'price' => 28000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/IDITE20260210100644020340/detail/fc1479cf_767865938521.webp',
        'desc' => 'Untuk minuman yang tidak ada gula, di sarankan pesan Caffe Latte. "Latte" berarti susu di Italia. Kami menggunakan 100% gula aren dari Indonesia, dicampurkan dengan espresso dan susu yang di steam dengan busa susu tipis di atasnya',
      ],
      4 => 
      [
        'id' => 5,
        'name' => 'Cheese Cloud Chocolate',
        'price' => 30000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/e1decd08_770365811685.webp',
        'desc' => 'Perpaduan antara TOMORO premium coklat, susu yang creamy, dan cheese cloud foam yang manis gurih dan lembut',
      ],
    ],
    'hidden' => false,
  ],
  1 => 
  [
    'id' => 'classic',
    'title' => 'Classic Coffee',
    'subtitle' => 'Untuk yang suka pure coffee experience',
    'icon' => 'coffee',
    'items' => 
    [
      0 => 
      [
        'id' => 6,
        'name' => 'Caffe Americano',
        'price' => 22000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/94c7410c_767866006456.webp',
        'desc' => 'Rasa Espresso yang kaya di tuangkan ke dalam air panas, mempertahankan crema yang sempurna dalam cangkir dengan cita rasa cokelat hazelnut dan gula merah.',
      ],
      1 => 
      [
        'id' => 7,
        'name' => 'Caffe Latte',
        'price' => 28000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/48589478_767865998286.webp',
        'desc' => '"Latte" di Italia berarti susu. Campuran antara kopi dan susu yang seimbang dengan busa susu yang tipis dan lembut di atasnya dan disajikan dengan tanpa gula.',
      ],
      2 => 
      [
        'id' => 8,
        'name' => 'Kopi Susu Aren',
        'price' => 22000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/bff665e7_767865872902.webp',
        'desc' => 'Untuk minuman yang tidak ada gula, di sarankan pesan Caffe Latte. Kombinasi dari kopi, gula aren asli dan susu yang creamy.',
      ],
      3 => 
      [
        'id' => 9,
        'name' => 'Caffe Mocha',
        'price' => 29000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/8e229111_767865980152.webp',
        'desc' => 'Kaya akan espresso dan saus cokelat ganache yang di kombinasi dengan susu steam yang lembut.',
      ],
      4 => 
      [
        'id' => 1774759743599,
        'name' => 'Cappuccino',
        'price' => 28000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/4b607c9a_767865989969.webp',
        'desc' => 'Cappuccino membutuhkan keterampilan dari barista terbaik, perpaduan espresso yang sempurna dengan susu dan busa susu yang lebih tebal.',
      ],
    ],
    'hidden' => false,
  ],
  2 => 
  [
    'id' => 'flavored-latte',
    'title' => 'Flavored Latte',
    'subtitle' => 'Tanpa kopi, tetap nikmat',
    'icon' => 'cup-soda',
    'items' => 
    [
      0 => 
      [
        'id' => 10,
        'name' => 'Pistachio Latte',
        'price' => 30000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/773e2eb8_765768904644.webp',
        'desc' => 'Perpaduan kopi TOMORO Blend, susu yang creamy, dan pistachio asli yang memberikan rasa lembut, creamy dan nutty.',
      ],
      1 => 
      [
        'id' => 11,
        'name' => 'Caramel Macchiato',
        'price' => 30000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/46fe9610_767865957507.webp',
        'desc' => 'Espresso yang intens dicampurkan dengan sirup karamel sebelum ditambahkan ke susu steam yang halus.',
      ],
      2 => 
      [
        'id' => 12,
        'name' => 'Caramel Cheese Latte',
        'price' => 35000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/e9fd6a1a_770878876019.webp',
        'desc' => 'Perpaduan antara TOMORO Blend Espresso, sirup caramel dan cheese milk yang creamy dan gurih',
      ],
      3 => 
      [
        'id' => 13,
        'name' => 'Spanish Latte',
        'price' => 27000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/0a0c4785_767865894144.webp',
        'desc' => 'Perpaduan antara TOMORO Blend espresso dan susu yang creamy dengan rasa manis pada setiap tegukan',
      ],
      4 => 
      [
        'id' => 1774760328791,
        'name' => 'Spanish Aren Latte',
        'price' => 28000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/1311a900_767865883773.webp',
        'desc' => 'Untuk minuman yang tidak ada gula, di sarankan pesan Caffe Latte. Perpaduan antara TOMORO Blend espresso, susu yang creamy dengan rasa manis dan sirup gula aren pada setiap tegukan.',
      ],
      5 => 
      [
        'id' => 1774760365332,
        'name' => 'Coconut Aren Latte',
        'price' => 27000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/IDITE20260210100643021863/detail/84a50efa_767865919048.webp',
        'desc' => 'Untuk minuman yang tidak ada gula, di sarankan pesan Caffe Latte. Coconut Latte paling asli pertama di Indonesia yang bisa buat ngopi lebih enak terbuat dari buah dan air kelapa asli.',
      ],
      6 => 
      [
        'id' => 1774760425819,
        'name' => 'Breve Latte',
        'price' => 32000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/IDITE20260210100643056916/detail/401a27b6_767865968029.webp',
        'desc' => 'Kami menggunakan half & half susu segar dan krim untuk membuat minuman kopi susu yang lembut dan lebih creamy',
      ],
      7 => 
      [
        'id' => 1774760458219,
        'name' => 'TOMORO Coconut Latte',
        'price' => 25000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/ec3f8240_767865929340.webp',
        'desc' => 'Welcome Coconut Latte paling asli pertama di Indonesia yang bisa buat ngopi lebih enak terbuat dari buah dan air kelapa asli.',
      ],
      8 => 
      [
        'id' => 1774760481554,
        'name' => 'Manuka Oat Latte',
        'price' => 32000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/aa96864f_767865948556.webp',
        'desc' => 'Perpaduan madu manuka dengan susu oat yang sehat, menjadikan minuman ini cocok buat kalian yang sedang menjalankan hidup sehat',
      ],
    ],
    'hidden' => false,
  ],
  3 => 
  [
    'id' => 'cloud-series',
    'title' => 'Cloud Series',
    'subtitle' => 'Dengan tambahan foam diatasnya',
    'icon' => 'coffee',
    'items' => 
    [
      0 => 
      [
        'id' => 1774760658712,
        'name' => 'Cheese Cloud Latte',
        'price' => 28000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/ddb73616_770878891652.webp',
        'desc' => 'Perpaduan antara TOMORO Blend Espresso, susu yang creamy, dan cheese cloud foam yang manis gurih dan lembut',
      ],
      1 => 
      [
        'id' => 1774760696758,
        'name' => 'Sea Salt Cloud Chocolate',
        'price' => 30000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/0e8746ae_765769466029.webp',
        'desc' => 'Perpaduan coklat premium dan susu dengan sea salt cloud foam diatasnya',
      ],
      2 => 
      [
        'id' => 1774760725123,
        'name' => 'Sea Salt Cloud Matcha Latte',
        'price' => 32000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/527ac9ef_765769309526.webp',
        'desc' => 'Perpaduan Matcha dan Susu dengan tambahan sea salt cloud foam diatasnya',
      ],
    ],
    'hidden' => false,
  ],
  4 => 
  [
    'id' => 'refreshing-series',
    'title' => 'Refreshing Series',
    'subtitle' => 'Pelepas dahaga',
    'icon' => 'spray-can',
    'items' => 
    [
      0 => 
      [
        'id' => 1774761072384,
        'name' => 'Pink Pop Lemonade',
        'price' => 16000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/8767517b_765779761394.webp',
        'desc' => 'Perpaduan rasa lemon yang segar ditambahkan rasa manis dan It\'s Pink!',
      ],
      1 => 
      [
        'id' => 1774761101492,
        'name' => 'Pink Pop Lemon Tea',
        'price' => 19000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/a3ae3a74_765779806117.webp',
        'desc' => 'Perpaduan antara rasa asam manis dari lemon dan juga teh melati',
      ],
      2 => 
      [
        'id' => 1774761175432,
        'name' => 'Strawberry Americano',
        'price' => 21000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/2612b836_770365546725.webp',
        'desc' => 'Perpaduan antara espresso dari TOMORO Blend dan Strawberry Puree asli.',
      ],
    ],
    'hidden' => false,
  ],
  5 => 
  [
    'id' => 'non-coffee',
    'title' => 'Non-Coffee',
    'subtitle' => 'Selain minuman kopi',
    'icon' => 'ban',
    'items' => 
    [
      0 => 
      [
        'id' => 1774761318028,
        'name' => 'Pistachio Chocolate',
        'price' => 28000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/0560c535_765768931669.webp',
        'desc' => 'Perpaduan mewah antara cokelat premium dan pistachio asli, menghasilkan rasa yang kaya, nutty, dan creamy.',
      ],
      1 => 
      [
        'id' => 1774761345886,
        'name' => 'Hojicha Oat Latte',
        'price' => 32000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/27360e61_765780161438.webp',
        'desc' => 'Perpaduan rasa manis dengan teknik pemanggangan dari hojicha menghasilkan warna yang khas, berbalut dengan tekstur creamy dari susu oat yang sehat. Cocok buat kalian yang menyukai rasa manis',
      ],
      2 => 
      [
        'id' => 1774761380597,
        'name' => 'Matcha Latte',
        'price' => 29000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/ef75325c_765779940693.webp',
        'desc' => 'Kombinasi premium matcha dan susu segar.',
      ],
      3 => 
      [
        'id' => 1774761405822,
        'name' => 'Matcha Oat Latte',
        'price' => 30000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/1db6ac96_765780074294.webp',
        'desc' => 'Kombinasi premium matcha dan susu segar',
      ],
      4 => 
      [
        'id' => 1774761427027,
        'name' => 'Chocolate',
        'price' => 23000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/9786fcd8_765779846517.webp',
        'desc' => 'Kombinasi cokelat premium dan susu segar, menghasilkan rasa yang kaya dan lembut',
      ],
      5 => 
      [
        'id' => 1774761472609,
        'name' => 'Choco Oat Latte',
        'price' => 30000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/b09b58fc_765780098235.webp',
        'desc' => 'Kombinasi cokelat premium dan susu segar, menghasilkan rasa yang kaya dan lembut',
      ],
      6 => 
      [
        'id' => 1774761510301,
        'name' => 'Peach Oolong Milk Tea',
        'price' => 21000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/b85960b3_765768798132.webp',
        'desc' => 'Perpaduan elegan antara teh oolong harum dan aroma peach yang manis serta menyegarkan, dipadukan dengan susu creamy untuk menghadirkan pengalaman milk tea yang lembut dan fruity.',
      ],
    ],
    'hidden' => false,
  ],
  6 => 
  [
    'id' => 'frappe',
    'title' => 'Frappe',
    'subtitle' => 'Dengan tambahan Whipped Cream',
    'icon' => 'cup-soda',
    'items' => 
    [
      0 => 
      [
        'id' => 1774761645931,
        'name' => 'Chocolate Frappe',
        'price' => 30000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/315833be_765780236372.webp',
        'desc' => 'Cokelat premium yang di blend dengan susu & es.',
      ],
      1 => 
      [
        'id' => 1774761737613,
        'name' => 'Matcha Frappe',
        'price' => 34000,
        'bogo' => false,
        'img' => 'https://food-cms.grab.com/compressed_webp/items/new-item/detail/af3c6a91_765780274481.webp',
        'desc' => 'Matcha premium yang dicampur dengan susu segar & es.',
      ],
    ],
    'hidden' => false,
  ],
];
?>